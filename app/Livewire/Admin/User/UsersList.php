<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    
    #[Rule('required')]
    public $name;
    #[Rule('required|unique:users,email')]
    public $email;
    #[Rule('required|unique:users,mobile')]
    public $mobile;
    #[Rule('required|min:6')]
    public $password;
    #[Rule('nullable|sometimes|max:2048')]
    public $image;
    public $search;

    public function saveUser(){
        
        $this->validate();
        
        User::query()->create([

            'name'=>$this->name,
            'email'=>$this->email,
            'mobile'=>$this->mobile,
            'password'=>Hash::make($this->password) ,
            'image'=>'',
        ]);

        $this->reset('name','email','mobile','password','image');
        session()->flash('massage','کاربر جدید ایجاد شد');
    }

    
    #[Layout('admin.master')]
    public function render()
    {
        $users = User::query()
            ->where('name','like','%'.$this->search.'%')
            ->orwhere('email','like','%'.$this->search.'%')
            ->orwhere('mobile','like','%'.$this->search.'%')
            ->paginate(10);
        return view('livewire.admin.user.users-list',compact('users'));
    }
}
