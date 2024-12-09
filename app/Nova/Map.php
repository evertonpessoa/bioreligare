<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Illuminate\Validation\Rule;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class Map extends Resource
{

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\Map::class;
    public static $priority = 3;

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
            ID::make(__('ID'), 'id')->sortable(),
            Image::make('Imagem do Mapa', 'map_image')
                ->creationRules('required')
                ->help('Por favor, use uma imagem de pelo menos 1440x600')
                ->disk('maps'),

            new Panel('Dados para Contato - Matriz', $this->contatoMatriz()),
            new Panel('Endereço da Matriz', $this->enderecoMatriz()),
            new Panel('Dados para Contato - Filial', $this->contatoFilial()),
            new Panel('Endereço da Filial', $this->enderecoFilial()),
            new Panel('Redes Sociais', $this->redesSociais()),

        ];
    }

    protected function contatoMatriz()
    {
        return [
            Text::make('Telefone Principal', 'main_phone')
                ->creationRules('required'),

            Text::make('Whatsapp Principal', 'whatsapp_principal')
                ->creationRules('required'),

            Text::make('Whatsapp Secundário', 'whatsapp_secundario')
                ->nullable(),

            Text::make('Email para contato', 'contact_email')
                ->nullable(),
        ];
    }

    protected function contatoFilial()
    {
        return [
            Text::make('Telefone Principal', 'filial_main_phone')
                ->creationRules('required'),

            Text::make('Whatsapp Principal', 'filial_main_whatsapp')
                ->creationRules('required'),

            Text::make('Whatsapp Secundário', 'filial_secondary_whatsapp')
                ->nullable(),

            Text::make('Email para contato', 'filial_contact_email')
                ->nullable(),
        ];
    }

    protected function enderecoMatriz()
    {
        return [
            Text::make('Rua', 'endereco_rua_matriz')
                ->creationRules('required')
                ->hideFromIndex(),

            Text::make('Número', 'endereco_numero_matriz')
                ->creationRules('required')
                ->hideFromIndex(),

            Text::make('Complemento', 'endereco_complemento_matriz')
                ->creationRules('required')
                ->hideFromIndex(),

            Text::make('Ponto de Referência', 'endereco_ponto_referencia_matriz')
                ->creationRules('required')
                ->hideFromIndex(),
        ];
    }

    protected function enderecoFilial()
    {
        return [
            Text::make('Rua', 'endereco_rua_filial')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Número', 'endereco_numero_filial')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Complemento', 'endereco_complemento_filial')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Ponto de Referência', 'endereco_ponto_referencia_filial')
                ->nullable()
                ->hideFromIndex(),
        ];
    }

    protected function redesSociais()
    {
        return [
            Text::make('facebook')
                ->nullable(),

            Text::make('instagram')
                ->nullable(),

            Text::make('linkedin')
                ->nullable(),
        ];
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
        return 'Mapa';
    }

    public static function label()
    {
        return 'Mapas';
    }

    public static function createButtonLabel()
    {
        return 'Criar Mapa';
    }

    public static function updateButtonLabel()
    {
        return 'Salvar mudanças';
    }
}
