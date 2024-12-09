<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\Markdown;

/**
 * @SuppressWarnings(PHPMD)
 * $request unused
 */
class ProfessionalProfile extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Domain\User\Models\ProfessionalProfile::class;
    public static $displayInNavigation = false;
    public static $perPageViaRelationship = 50;

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

        return [

            new Panel('Informações Pessoais', $this->informacoesPessoais()),
            new Panel('Informações Profissionais', $this->informacoesProfissionais()),
            new Panel('Redes Sociais', $this->redesSociais()),

        ];
    }

    protected function informacoesPessoais()
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            Text::make('Nome do médico', 'name')
                ->creationRules(
                    'required',
                    'unique:professional_profiles',
                ),


            Text::make('Telefone', 'phone')
                ->creationRules('required'),


            Image::make('Foto de Perfil', 'photo_path')
                ->creationRules('required')
                ->rules('max:1024')
                ->disk('professional_profiles'),


            Text::make('Descrição', 'description')
                ->creationRules('required'),
        ];
    }

    protected function redesSociais()
    {
        return [
            Text::make('Facebook', 'facebook')->nullable(),
            Text::make('Instagram', 'instagram')->nullable(),
            Text::make('LinkedIn', 'linkedin')->nullable(),
        ];
    }

    protected function informacoesProfissionais()
    {
        return [
            // [2] Garante que o profissional está sendo cadastrado na equipe correta (médica ou terapeutica)
            BelongsTo::make('Equipe Profissional','professionalType', ProfessionalType::class),

            // // Precisa mostrar uma lista das especialidades pro doutor escolher
            BelongsToMany::make('Especialidades', 'specializations', Specialization::class),

            Textarea::make('Currículo', 'resumee_body')
                ->creationRules('required'),

            Date::make('Data que entrou na equipe', 'started_working_at')
                ->creationRules('required'),
        ];
    }

    public static function label()
    {
        return 'Profissionais';
    }

    public static function singularLabel()
    {
        return 'Profissional';
    }

    public static function createButtonLabel()
    {
        return 'Criar Profissional';
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
