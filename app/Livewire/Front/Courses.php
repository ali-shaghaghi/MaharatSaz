<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Courses extends Component
{
    #[Layout('frant.master')]
    public function render()
    {
        return view('livewire.front.courses');
    }
}
