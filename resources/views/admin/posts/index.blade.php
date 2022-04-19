@extends('adminlte::page')

@section('title', 'CMS Nextech Dashboard')

@section('content_header')

<a class="btn btn-secondary float-right" href="{{ route('admin.posts.create') }}">Add New File</a>
    <h1>Files Library</h1>
@stop

@section('content')
   @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop