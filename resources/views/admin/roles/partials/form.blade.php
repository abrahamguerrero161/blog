<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name'])  !!}

    @error('name')
    <span class="text-danger">
        {{$message}}    
    </span>    
    @enderror

 </div> 
 <h1>Permissions List</h1>

 @foreach ($permissions as $permission)
 <div>
    <label>
        {!! form::checkbox('permissions[]', $permission->id, null, ['class'=> 'mr-1']) !!}
        {{ $permission->description }}
    </label>
</div>
 @endforeach