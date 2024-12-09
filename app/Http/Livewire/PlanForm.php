<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlanForm extends Component
{
    public $state = [
        'subscriptionPlan' => '',
    ];

    public function setSubscriptionPlan($subscriptionId)
    {
        $this->state['subscriptionPlan'] = $subscriptionId;
        $this->emit('planSet', $this->state['subscriptionPlan']);
        $this->emit('next', $this->state);
    }

    public function render()
    {
        return view('livewire.plan-form', [
            'subscriptionPlans' => [
                'basic' => [
                    'annualy' => [
                        'id' => '0',
                        'price' => '35,54',
                        'percentage' => '13',
                    ],
                    'sixmo' => [
                        'id' => '1',
                        'price' => '44,45',
                        'percentage' => '13',
                    ],
                    'threemo' => [
                        'id' => '2',
                        'price' => '53,63',
                        'percentage' => '13',
                    ],
                ],
                'intermediate' => [
                    'annualy' => [
                        'id' => '3',
                        'price' => '45,54',
                        'percentage' => '13',
                    ],
                    'sixmo' => [
                        'id' => '4',
                        'price' => '55,45',
                        'percentage' => '13',
                    ],
                    'threemo' => [
                        'id' => '5',
                        'price' => '65,63',
                        'percentage' => '13',
                    ],
                ],
                'advanced' => [
                    'annualy' => [
                        'id' => '6',
                        'price' => '54,54',
                        'percentage' => '13',
                    ],
                    'sixmo' => [
                        'id' => '7',
                        'price' => '77,45',
                        'percentage' => '13',
                    ],
                    'threemo' => [
                        'id' => '8',
                        'price' => '88,63',
                        'percentage' => '13',
                    ],
                ],
            ],
        ]);
    }
}
