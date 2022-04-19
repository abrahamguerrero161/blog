{{-- <div>   
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6 mb-5">
                <x-jet-input class="flex-1 p-3 rounded-full  mb-5 border-blue-500 border-2" placeholder="Search document" type="text"  wire:model="search"/>
               
        </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
               
                    @foreach ($posts as $post)
                            <x-card-post :post="$post"/>
                    @endforeach
            </div>

            <div class="mt-4">
                    {{$posts->links()}}
            </div>


</div> --}}

<div>   
        {{-- search bar --}}
        <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!---ITEMS--->
                  {{--  <a wire:click="search({{'name', 'map'}})" href="#">About</a>
                 <a href="#" onclick="addText()">Map</a>
 
              <label for="map" class="text-white"> 
                 <input type="radio" name="" id="map" value="map"  wire:model="search">
                 Map
                 </label>
                  --}}

                 
           <a href="{{route('posts.tag', 'maps')}}">Maps</a> 
           <a href="{{route('posts.tag', 'maps')}}">Brochures</a> 
           <a href="{{route('posts.tag', 'maps')}}">Logos</a>   
        </div>
                

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-5" style="display: flex; justify-content:space-between">

                        <button style="width: 95px" class=" grid-cols-1  bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white px-4 border border-blue-500 hover:border-transparent rounded   mb-5 mr-2" onclick="openNav()">&#9776; Filter</button>


                        <x-jet-input id="buscador" class=" w-5/6 grid-cols-11 p-3 rounded-full  mb-5 border-blue-500 border-2 buscador" placeholder="Search document" type="text"  wire:model="search"/>
                       
                </div>
  
      

        @if ($posts->count())
                <div class="">

                        {{-- sidebar --}}
                
                        
                        {{-- main --}}
                        
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                
                                        @foreach ($posts as $post)
                                                <x-card-post :post="$post"/>
                                        @endforeach
                                </div>

                
                        

                </div>

        {{-- pagination --}}
        <div class="mt-4">
                {{$posts->links()}}
        </div>

        @else
        <article class="p-8 bg-white shadow-lg overflow-hidden rounded-3xl  flex flex-col justify-between">
             <h2 style="font-size: 18px;"> The file doesn't exist</h2>
        </article>
      @endif
</div>
 