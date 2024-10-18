<?php

namespace App\Livewire\Admin\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class UsersList extends Component
{
    #[Layout('admin.master')]

    public function render()
    {
        return view('livewire.admin.user.users-list');
    }
}
