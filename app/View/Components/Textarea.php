<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $title, $name, $placeholder, $value;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $name, $placeholder, $value)
    {
        $this->title = $title;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
