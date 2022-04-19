

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'File Name'])  !!}

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
                    {!! Form::label('category_id', 'Category') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

                    @error('category_id')
                    <span class="text-danger">
                        {{$message}}    
                    </span>    
                    @enderror
                </div>


                <div class="form-group">
                    <p class="font-weight-bold">Tags</p>

                    @foreach ($tags as $tag)
                        <label class="mr-3 form-check form-check-inline" style="cursor: pointer;">
                            {!! Form::checkbox('tags[]', $tag->id, null, ['class'=> 'form-check-input form-check-input-lg']) !!}
                            {{ $tag->name }}
                        </label>
                    @endforeach
                        <hr>
                    @error('tags')
                    <span class="text-danger">
                        {{$message}}    
                    </span>    
                    @enderror
                </div>


                <div class="form-group">
                    <p class="font-weight-bold">Status</p>
                    <label class="mr-3 form-check form-check-inline" style="cursor: pointer;">
                        {!! Form::radio('status', 1, true, ['class'=> 'form-check-input form-check-input-lg']) !!}
                        Inactive
                    </label>

                    <label class="mr-3 form-check form-check-inline" style="cursor: pointer;">
                        {!! Form::radio('status', 2, false, ['class'=> 'form-check-input form-check-input-lg']) !!}
                        Active
                    </label>

                        <hr>
                    @error('status')
                        <span class="text-danger">
                            {{$message}}    
                        </span>    
                    @enderror
                </div>


                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            @isset($post->image)
                                <img id="picture" src="@if($post->image) {{Storage::url($post->image->url)}} @else {{ 'https://www.cmsnextech.com/wp-content/uploads/2022/04/thumbnail.jpg'}} @endif" alt="">

                            @else
                                <img  id="picture" src="https://www.cmsnextech.com/wp-content/uploads/2022/04/thumbnail.jpg" alt="">
                            @endisset
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Add Thumbnail') !!}

                            {!! Form::file('file', ['class' => 'form-control-file', 'accept'=> 'image/*']) !!}

                            <p>
                                We recommend your custom thumbnails: Have a resolution of 450x350 (with minimum width of 72 dpi). Be uploaded in image formats such as JPG or PNG.   
                            </p>

                                @error('file')
                                    <span class="text-danger">
                                        {{$message}}    
                                    </span>    
                                @enderror
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('extract', 'Description') !!}
                    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}


                    @error('extract')
                    <span class="text-danger">
                        {{$message}}    
                    </span>    
                    @enderror
                </div>



                <div class="form-group">
                    {!! Form::label('url', 'File URL') !!}
                    {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'File URL'])  !!}

                    @error('url')
                    <span class="text-danger">
                        {{$message}}    
                    </span>    
                    @enderror
                 </div> 
