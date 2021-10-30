<?php

namespace App\View\Components\blogy;

use Illuminate\View\Component;

class nav extends Component
{
    public $activeCard;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($activeCard)
    {
        $this->activeCard = $activeCard;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blogy.nav');
    }
}
