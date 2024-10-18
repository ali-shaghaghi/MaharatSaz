<?php

namespace App\Livewire\Front\Layouts;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Footer extends Component
{
    #[Layout('frant.master')]
    public function render()
    {
        return view('livewire.front.layouts.footer');
    }
}
