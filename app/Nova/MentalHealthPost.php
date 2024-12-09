<?php

namespace App\Nova;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class MentalHealthPost extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\MentalHealthPost::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
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

            Text::make('Título', 'title')
                ->sortable()
                ->rules(['required', 'max:255']),

            NovaTinyMCE::make('Descrição', 'description')
                ->creationRules('required')
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

            Image::make('Imagem', 'image_post_path')
                ->creationRules('required')
                ->disableDownload()
                ->disk('image_post_path'),

            DateTime::make('Postado em', 'posted_at')
                ->rules('after_or_equal:today', 'required')
                ->sortable()
                ->hideFromIndex()
                ->hideWhenUpdating(),
        ];
    }


//posted_at

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
    public static function label() {
        return 'Seção Saúde Mental';
    }
}
