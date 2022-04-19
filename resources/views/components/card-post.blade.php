@props(['post'])

<article class="mb-8 bg-white shadow-lg overflow-hidden rounded-b-3xl  flex flex-col justify-between">
    <img class="w-full h-72 object-cover object-center" src="@if($post->image) {{Storage::url($post->image->url)}} @else {{ 'https://www.cmsnextech.com/wp-content/uploads/2022/04/thumbnail.jpg'}} @endif" alt="">

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>

        <div class="text-gray text-base">
            {{$post->extract}}
        </div>

        <div class="text-gray text-base mt-4">
            <i class="far fa-calendar-alt"></i> {{$post->updated_at->format('m/d/Y')}}
        </div>
    </div>
    <div class="px-6 pt-4 pb-2 mb-3  flex items-end content-around " >
        @foreach($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
        @endforeach

        <div>
            <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <img class="h-8 w-8 rounded-full" src="{{ Storage::url(\App\Models\User::findOrFail($post->user_id)->profile_photo_path)}}" alt="">
            </button>
        </div>
        {{-- @foreach ($users as $user) --}}
        
        {{-- @endforeach --}}
          <a class="justify-self-end ml-auto text-gray-500 text-lg" href="{{$post->url}}" target="_blank">
            <i class="fas fa-download mb-3 "></i>
          </a>
    </div>
</article>