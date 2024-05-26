<?php

namespace App\View\Components;

use Closure;
use App\Models\Section;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Categorycom extends Component
{
    /**
     * Create a new component instance.
     * 
     */
    public $sections;

    public function __construct()
    {
        //
        // public $sections;
         $this->sections = Section::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
   
        return view('components.categorycom' , [
            'sections' => $this->sections,
        ] );
    }
}
