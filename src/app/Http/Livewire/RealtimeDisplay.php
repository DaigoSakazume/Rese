<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RealtimeDisplay extends Component
{
    public $date;
    public $time;
    public $number;

    public function render()
    {
        return view('detail');
    }
}
