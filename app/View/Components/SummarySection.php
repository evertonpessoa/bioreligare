<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SummarySection extends Component
{
    // public $classLink;
    // public $styleLink;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->classLink = $classLink;
        // $this->styleLink = $styleLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.summary-section');
    }
}
