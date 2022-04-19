@extends('adminlte::page')

@section('title', 'CMS Nextech Dashboard')

@section('content_header')
    @can('admin.tags.create')
    <a href="{{ route('admin.tags.create') }}" class="btn btn-secondary float-right">Add Tag</a>
    @endcan
    <h1>Tags</h1>
@stop

@section('content')


@if (session('info'))
    <div class="alert alert-warning">
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
                    @foreach ($tags as $tag)
                       <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td width="10px">
                            @can('admin.tags.edit')
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Edit</a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.tags.destroy')
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
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

 