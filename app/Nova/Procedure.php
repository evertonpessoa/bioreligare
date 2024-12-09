<?php

namespace App\Nova;

use App\Domain\User\Models\Specialization;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Validation\Rule;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class Procedure extends Resource
{
    const IMAGE_PROPORTION_MIN = 100;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\Procedure::class;
    public static $model2 = \App\Domain\User\Models\Specialization::class;
    public static $displayInNavigation = false;

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
        'id',
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

            Text::make('Título', 'title')
                ->creationRules(
                    'required',
                    'unique:procedures',
                ),

            Textarea::make('Descrição', 'description')
                ->creationRules('required'),

            Image::make('Imagem', 'banner_path')
                ->creationRules('required')
                ->rules(
                    'max:1024',
                    Rule::dimensions()->minWidth(self::IMAGE_PROPORTION_MIN)->minHeight(self::IMAGE_PROPORTION_MIN)->ratio(1 / 1),
                )
                ->help('Por favor, use uma imagem de pelo menos 176x176')
                ->disk('procedures'),

            BelongsTo::make('Specializations')
        ];
    }

    public static function singularLabel()
    {
        return 'Procedimento';
    }

    public static function label()
    {
        return 'Procedimentos';
    }

    public static function createButtonLabel()
    {
        return 'Criar Procedimento';
    }

    public static function updateButtonLabel()
    {
        return 'Salvar mudanças';
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
}
