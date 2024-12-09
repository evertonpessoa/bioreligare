<?php

namespace App\Nova;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class ProfessionalType extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\ProfessionalType::class;
    public static $priority = 5;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title',
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

            Image::make('Foto Banner', 'banner_path')
                ->creationRules('required')
                ->rules('max:1024')
                ->help('Por favor, use uma imagem de pelo menos 1024x430')
                ->disk('professional_types'),

            Text::make('Título da Equipe', 'title')
                ->creationRules('required'),

            NovaTinyMCE::make('Descrição', 'description')
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
            ]),

            // [1]
            HasMany::make('professionalProfiles'),

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

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    public function authorizedToUpdate(Request $request)
    {
        return true;
    }

    public static function label()
    {
        return 'Equipes Profissionais';
    }

    public static function singularLabel()
    {
        return 'Equipe Profissional';
    }

    public static function createButtonLabel()
    {
        return 'Criar Equipe Profissional';
    }

    public static function updateButtonLabel()
    {
        return 'Salvar mudanças';
    }
}
