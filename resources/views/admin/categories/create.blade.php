@extends('adminlte::page')

@section('title', 'CMS Nextech Dashboard')

@section('content_header')
    <h1>Create Category</h1>
@stop

@section('content')
   
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.categories.store', 'autocomplete' => 'off']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Category Name'])  !!}

                            @error('name')
                            <span class="text-danger">
                                {{$message}}    
                            </span>    
                            @enderror

                         </div> 

                        <div class="form-group">
                            {!! Form::label('slug', 'Slug') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug Name', 'readonly'])  !!}


                            @error('slug')
                            <span class="text-danger">
                                {{$message}}    
                            </span>    
                            @enderror
                        </div> 

                        {!! Form::submit('Save Category', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>


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