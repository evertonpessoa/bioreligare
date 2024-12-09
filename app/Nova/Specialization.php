<?php

namespace App\Nova;

use App\Domain\User\Models\ProfessionalType;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Select;
use App\Domain\User\Models\SpecialtyType;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class Specialization extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\Specialization::class;
    public static $priority = 4;

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
        'id', 'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {

        $specialtyType = SpecialtyType::select('id', 'title')->pluck('title', 'id')->toArray();
        $professionalType = ProfessionalType::select('id', 'title')->pluck('title', 'id')->toArray();

        return [

            ID::make(__('ID'), 'id')
                ->sortable()
                ->hideFromIndex(),

            Text::make('Nome da Especialidade', 'name')
                ->creationRules('required', 'unique:specializations'),

            Select::make('Tipo de Especialidade', 'specialty_type_id')->options($specialtyType)
                ->creationRules('required')
                ->displayUsingLabels()
                ->withMeta(['placeholder' => 'Escolha uma especialidade']),

            Select::make('Equipe Profissional', 'professional_type_id')->options($professionalType)
                ->creationRules('required')
                ->displayUsingLabels()
                ->withMeta(['placeholder' => 'Escolha uma equipe profissional']),

            Image::make('Banner Principal', 'main_banner_path')
                ->creationRules('required')
                ->rules('max:1024')
                ->help('Por favor, use uma imagem de pelo menos 500x500')
                ->disk('specializations'),

            Image::make('Banner Secundário', 'secondary_banner_path')
                ->creationRules('required')
                ->rules('max:1024')
                ->help('Por favor, use uma imagem de pelo menos 384x384')
                ->disk('specializations'),

            Image::make('Ícone', 'icon_path')
                ->creationRules('required')
                ->rules('max:1024')
                ->help('Por favor, use uma imagem de pelo menos 90x90')
                ->disk('specializations'),

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

            HasMany::make('Procedures')
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

        return [
            new Filters\SpecializationType('specialty_type_id'),
        ];
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
        return 'Especialidades';
    }

    public static function singularLabel()
    {
        return 'Especialidade';
    }

    public static function createButtonLabel()
    {
        return 'Criar Especialidade';
    }

    public static function updateButtonLabel()
    {
        return 'Salvar mudanças';
    }
}
