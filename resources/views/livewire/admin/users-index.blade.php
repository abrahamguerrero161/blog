<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control form-control-lg rounded-pill" type="text" placeholder="Insert user name">
        </div>

        {{-- El metodo (count) filtra a la propiedad (posts) para ver si existe al menos un registro --}}

            @if ($users->count())

            @if (session('info'))
            <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
                </div>
            @endif


            <div class="card-body">
                    <table class="table table-stripe">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td width="10px">
                                            <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
            </div>

            <div class="card-footer">
                {{ $users->links()}}
            </div>

            @else
            <div class="card-body">
                <h5> The user doesn't exist</h5>
         </div>  
            @endif
    </div>
</div>
