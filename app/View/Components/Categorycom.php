<?php
namespace App\View\Components;           

use Closure;
use App\Models\Section;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Categorycom extends Component
{
    /**
     * The sections to be displayed.
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    public $sections;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Mencoba mengambil data dari cache
        $this->sections = Cache::rememberForever('sections', function () {
            // Mengecualikan kategori dengan section_id 8, 13, 9, dan 12 dan eager load subsections dan articles
            return Section::whereNotIn('section_id', [8, 13, 9, 12])
                ->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.categorycom', [
            'sections' => $this->sections,
        ]);
    }
}

