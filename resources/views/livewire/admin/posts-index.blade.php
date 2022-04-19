 
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control form-control-lg rounded-pill" type="text" placeholder="Insert file name">
        </div>

        {{-- El metodo (count) filtra a la propiedad (posts) para ver si existe al menos un registro --}}
        @if ($posts->count())

        @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif
        
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Edit</a>
                                </td>
                                <td width="10px">

                                    @can('admin.posts.destroy')
                                        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                            @csrf
                                            @method('delete') 

                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    @endcan
                                </td> 
                            </tr> 
                            @endforeach
                        </tbody>   
                    </table>
                </div>

                {{-- Metodo de paginacion --}}
                <div class="card-footer">
                    {{$posts->links()}} 
                </div>

        @else
          <div class="card-body">
               <h5> The file doesn't exist</h5>
        </div>  
        @endif
    </div>
 
