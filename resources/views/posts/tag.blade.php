<x-app-layout>

    <div class="container py-8">
        <h1 class="uppercase text-center text-3xl font-bold mb-4">{{ $tag->name }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    

        @foreach ($posts as $post)
                
            <x-card-post :post="$post"/>
                
        @endforeach
               
</div>

<div class="mt-4">
    {{$posts->links()}}
</div>
</div>



</x-app-layout>