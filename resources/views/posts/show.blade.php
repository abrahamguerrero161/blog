<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{ $post->name }}
        </h1>

       


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            {{-- MAIN CONTENT --}}
            <div class="lg:col-span-2 gap-8">
                {{-- <div class="grid-cols-2">
                        <img class="w-full object-cover object-center" src="@if($post->image) {{Storage::url($post->image->url)}} @else {{ 'https://www.cmsnextech.com/wp-content/uploads/2022/04/thumbnail.jpg'}} @endif" alt="">
                </div>

                <div class="text-lg text-gray-700 my-2 grid-cols-2">
                    {{ $post->extract }}
                </div>  --}}

                <div class=" flex mt-7  h-96">

                    <div class="flex-auto w-2/4  flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('@if($post->image) {{Storage::url($post->image->url)}} @else {{ 'https://www.cmsnextech.com/wp-content/uploads/2022/04/thumbnail.jpg'}} @endif')" title="Woman holding a mug">
                    </div>
 
                    <div class="flex-auto w-64  border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                       {{--  <p class="text-sm text-gray-600 flex items-center">
                          <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          Members only
                        </p> --}}
                        <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>

                        
                      </div>
                      <hr>
                      <div class="text-gray text-base mt-4">
                        <i class="far fa-calendar-alt"></i> {{$post->updated_at->format('m/d/Y')}}
                        </div>
                      <div  class="flex justify-between items-end">
                        @foreach($post->tags as $tag)
                        <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
                         @endforeach

                          <a class="justify-self-end ml-auto text-gray-500 text-2xl" href="{{$post->url}}" target="_blank">
                            <i class="fas fa-download "></i>
                          </a>
                      </div>
                        <hr>
                      <div class="flex justify-between items-end">
                            <div>
                                <img class="w-10 h-10 rounded-full mr-4" src=" {{ Storage::url(\App\Models\User::findOrFail($post->user_id)->profile_photo_path)}}" alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                <p class="text-gray-600">Author:</p>
                                <p class="text-gray-900 leading-none">{{ \App\Models\User::findOrFail($post->user_id)->name }}</p>
                                
                                </div>
                            </div>
                            <div>
                                <a class="" href="mailto:{{ \App\Models\User::findOrFail($post->user_id)->email }}">
                                Contact
                                </a>
                            </div>
                      </div>
                    </div>
 
                </div>
                
            </div> 
            



            {{-- Related content --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">
                   More in {{ $post->category->name }} 
                </h1>


                <ul>
                    @foreach ($similares as $similar)

                        <li class="mb-4 ">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                    <img class="w-36 h-20 object-cover object-center" src="@if($similar->image) {{Storage::url($similar->image->url)}} @else {{ 'https://www.cmsnextech.com/wp-content/uploads/2022/04/thumbnail.jpg'}} @endif" alt="">
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>

                    @endforeach
                </ul>
            </aside>
    </div>



    </div>


    
</x-app-layout>