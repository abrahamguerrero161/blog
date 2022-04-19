@extends('adminlte::page')

@section('title', 'CMS Nextech Dashboard')

@section('content_header')
@can('admin.tags.create')
<a href="{{ route('admin.roles.create') }}" class="btn btn-secondary float-right">Add Role</a>
@endcan
    <h1>Roles</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif
   
<div class="card">
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
                @foreach ($roles as $role)
                   <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td width="10px">
                        @can('admin.roles.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit', $role)}}">Edit</a>
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.roles.destroy')
                            <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                @csrf
                                @method('delete') 

                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endcan
                    </td> 
                  </tr> 
                @endforeach
            </tbody>   
        </table>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop