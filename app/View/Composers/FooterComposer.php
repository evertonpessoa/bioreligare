<?php

namespace App\View\Composers;

use App\Domain\User\Models\Map;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * Bind data to the view.
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('mapInfo', Map::all());
    }
}
