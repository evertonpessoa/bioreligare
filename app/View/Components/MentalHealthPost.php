<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MentalHealthPost extends Component
{
    /**
     * Create the component instance.
     *
     * @return void
     */
    public $mentalHealthPost;
    public $key;

    public function __construct(array $mentalHealthPost, int $key=0)
    {
        $this->mentalHealthPost = $mentalHealthPost;
        $this->key = $key;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mental-health-post');
    }


}
