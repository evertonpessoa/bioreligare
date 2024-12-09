<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;
use App\Services\SearchCepService;
use App\Support\Mask;

class AddressForm extends Component
{
    const CEP_INT_TRIGGER = 9;

    public $step;
    public $state = [
        'streetAddress' => '',
        'cep' => '',
        'streetNumber' => '',
        'streetComplement' => '',
        'neighborhood' => '',
        'city' => '',
        'state' => '',
    ];

    public $allowSameAddress = false;

    protected $rules = [
        'state.cep' => 'required|regex:/[0-9]{5}-?[\d]{3}/u',
        'state.streetNumber' => 'required',
        'state.streetAddress' => 'required',
        'state.city' => 'required',
        'state.state' => 'required',
    ];

    protected $messages = [
        'state.cep.required' => 'O campo "CEP" é obrigatório.',
        'state.cep.regex' => 'O formato inserido é inválido.',

        'state.streetNumber.required' => 'O campo "Número" é obrigatório.',
        'state.streetAddress.required' => 'O campo "Endereço" é obrigatório.',
        'state.city.required' => 'O campo "Cidade" é obrigatório.',
        'state.state.required' => 'O campo "Estado" é obrigatório.',
    ];

    protected $listeners = ['validateChild', 'allowSameAddress'];

    public function mounted(string $step)
    {
        $this->step = $step;
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'state.cep') {
            $this->state['cep'] = Mask::cep($this->state['cep']);
        }

        if (Arr::has($this->rules, $propertyName)) {
            $this->validateOnly($propertyName);
        }
    }

    public function cepAutocomplete(SearchCepService $service)
    {
        if (mb_strlen($this->state['cep']) !== self::CEP_INT_TRIGGER) {
            return;
        }

        $response = $service->fetchAddress(Mask::strip($this->state['cep']));

        if (!Arr::has($response, 'errors')) {
            $this->state['streetAddress'] = $response['street'];
            $this->state['neighborhood'] = $response['neighborhood'];
            $this->state['city'] = $response['city'];
            $this->state['state'] = $response['state'];
            $this->validate();
        }
    }

    public function allowSameAddress(string $step)
    {
        if ($this->step === $step) {
            $this->allowSameAddress = !$this->allowSameAddress;
            $this->resetForm();
        }
    }

    public function validateChild(string $step)
    {
        if ($this->step === $step) {
            if ($this->allowSameAddress) {
                $this->emitUp('childrenValidated', [
                    $this->step => $this->state,
                    'allowProfessinonalAddressAsPersonalAddress' => $this->allowSameAddress,
                ]);

                return;
            }

            $this->validate();

            $this->emitUp('childrenValidated', [
                $this->step => $this->state,
            ]);
        }
    }

    public function resetForm()
    {
        $this->state['cep'] = '';
        $this->state['state'] = '';
        $this->state['streetNumber'] = '';
        $this->state['streetAddress'] = '';
        $this->state['streetComplement'] = '';
        $this->state['neighborhood'] = '';
        $this->state['city'] = '';
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.address-form');
    }
}
