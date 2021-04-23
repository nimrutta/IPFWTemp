<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuItem extends Component
{
    public $url;
    public $active;

    public function __construct($url)
    {
        $this->url = $url;
        $this->active = url()->current() == url($url);
    }

    public function render()
    {
        return view('components.menu-item');
    }
}
