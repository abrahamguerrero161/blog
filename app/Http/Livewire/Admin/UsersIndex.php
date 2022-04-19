<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UsersIndex extends Component
{

    use WithPagination;

    public $search;

    //This method resert the (search) property
    public function updatingSearch(){

        $this->resetPage();
    }

    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                        ->paginate(10);

        return view('livewire.admin.users-index', compact('users'));
    }
}
