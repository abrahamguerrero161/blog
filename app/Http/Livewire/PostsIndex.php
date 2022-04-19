<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
 
use Livewire\WithPagination;
 

class PostsIndex extends Component
{

    use WithPagination;

    public $search;

    /* protected $queryString = ['filters'];
    
    public array $filterOptions = [
        'name' => ['map', 'Deleniti', 'Culpa']
    ];

    public array $filters = array();

    public array $filterToMerge = [

        'name' => [],
    ];
 */

    //This method resert the (search) property
    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    {
            //$users = User::pluck('name', 'id');

            //$posts = Post::where('status', 2)->latest('id')->paginate(9);
            $posts = Post::where('name', 'LIKE', '%'.$this->search.'%')
            ->where('status', 2)
            ->latest('id')
            ->paginate(12);

            return view('livewire.posts-index', compact('posts'));
    }


      
 
}
