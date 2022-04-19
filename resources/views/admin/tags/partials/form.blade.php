 

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Tag Name'])  !!}

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


<div class="form-group">
    <label for="">Color</label>

    {{--
        <select name="color" id="" class="form-control">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="purple">Purple</option>
            <option value="yellow">Yellow</option>
            <option value="gray">Gray</option>
        </select>
    --}}

    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

    
    @error('slug')
    <span class="text-danger">
        {{$message}}    
    </span>    
    @enderror
</div>