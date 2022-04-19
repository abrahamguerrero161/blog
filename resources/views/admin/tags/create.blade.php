@extends('adminlte::page')

@section('title', 'CMS Nextech Dashboard')

@section('content_header')
    <h1>Create Tag</h1>
@stop

@section('content')
<div class="card">

    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif

    <div class="card-body">
        {!! Form::open(['route' => 'admin.tags.store', 'autocomplete' => 'off']) !!}

                @include('admin.tags.partials.form')

                {!! Form::submit('Save Tag', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
        <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

        <script>
            $(document).ready( function() {
                $("#name").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
                });
        </script>


@endsection