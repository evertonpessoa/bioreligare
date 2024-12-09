<?php

namespace App\Nova;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;

/**
 * @SuppressWarnings(PHPMD)
 * unused request - nova default
 */
class MedicalPlan extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\MedicalPlan::class;
    public static $priority = 2;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Image::make('Foto Principal (Logo)', 'logo_path')
                ->help('Por favor, use uma imagem de pelo menos 108x45')
                ->disk('health_plans'),

            Text::make('Nome da Empresa', 'name'),
            Text::make('Texto Grande', 'text_title'),

            NovaTinyMCE::make('Texto Pequeno', 'text_small')
                ->creationRules('required')
                ->hideFromIndex()
                ->options([
                    'menubar' => false,
                    'statusbar' => false,
                    'content_css' => 'https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.4.2/skins/ui/oxide/content.min.css',
                    'skin_url' => 'https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.4.2/skins/ui/oxide/',
                    'plugins' => [
                        'lists preview hr anchor pagebreak image wordcount fullscreen directionality paste textpattern'
                    ],
                    'toolbar' => 'undo redo | styleselect | bold italic forecolor backcolor | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link'
                ])
            ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function label()
    {
        return 'Planos de Saúde';
    }

    public static function singularLabel()
    {
        return 'Plano de Saúde';
    }

    public static function createButtonLabel()
    {
        return 'Criar Plano de Saúde';
    }

    public static function updateButtonLabel()
    {
        return 'Salvar mudanças';
    }
}
