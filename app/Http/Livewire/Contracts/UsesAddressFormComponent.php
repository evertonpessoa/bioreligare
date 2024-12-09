<?php

namespace App\Http\Livewire\Contracts;

use Livewire\Component;
use Illuminate\Support\Arr;

abstract class UsesAddressFormComponent extends Component
{
    public $state = [];
    public $step;
    protected $childrenValidated = false;

    abstract public function next();

    abstract public function mounted(string $step);

    public function childrenValidated(array $childrenState)
    {
        if (Arr::has($childrenState, $this->step)) {
            $this->state = array_merge($this->state, $childrenState);
            $this->childrenValidated = true;
            $this->validatesChild();
        }
    }

    public function validatesChild()
    {
        if (! $this->childrenValidated) {
            $this->emit('validateChild', $this->step);
            $this->validate();

            return;
        }

        $this->next();
    }
}
