@extends('adminlte::page')

@section('title', 'CMS Nextech Dashboard')

@section('content_header')
    <h1>Edit File</h1>
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
        {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'put' ]) !!}
              {{--   {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

                 @include('admin.posts.partials.form')

                {!! Form::submit('Update File', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop


@section('js')
        <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

        <script>
            //Slug
            $(document).ready( function() {
                $("#name").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
                });


                ClassicEditor
                .create( document.querySelector( '#extract_' ) )
                .catch( error => {
                    console.error( error );
                } );

                //Change image 

                document.getElementById("file").addEventListener('change', cambiarImagen);
           function cambiarImagen(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
           }


        </script>


@endsection