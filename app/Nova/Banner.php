<?php

namespace App\Nova;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class Banner extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\Banner::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';
    public static $priority = 1;

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'placement',
        'image_path',
        'description',
        'link',
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
            ID::make(__('ID'), 'id')
                ->sortable(),

            // @to-do criar uma classe enum que guarda os placements para usar na view e no nova
            Select::make('Posicionamento', 'placement')->options([
                'home_principal' => 'Banner 1',
                'home_sessao2' => 'Banner 2',
                'home_sessao3' => 'Banner 3',
            ])->hideWhenUpdating()->hideFromIndex(),

            Image::make('Imagem', 'image_path')
                ->creationRules('required')
                ->rules('max:1024')
                ->help('Por favor, use os seguintes tamanhos: home_principal(1400x785), home_sessao2(1536x700) e home_sessao3(1440x674)')
                ->disk('banners'),

            Text::make('Título', 'title')
                ->nullable(),

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

            Text::make('Link')
                ->nullable(),
        ];
    }

    // [qa] Tirar o botão Create Banner (nova)
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

    public static function singularLabel()
    {
        return 'Banner';
    }

    public static function label()
    {
        return 'Banners';
    }

    public static function createButtonLabel()
    {
        return 'Criar Banner';
    }

    public static function updateButtonLabel()
    {
        return 'Salvar mudanças';
    }
}
