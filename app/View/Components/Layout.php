<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $bg_color;

    public function __construct($title = 'Crowdfund', $bg_color="#fff")
    {
        $this->title = $title;
        $this->bg_color = $bg_color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
