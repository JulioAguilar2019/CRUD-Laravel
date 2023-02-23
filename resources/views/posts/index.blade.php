<x-layouts.app title="Blog">
    <header class="text-center">
        <h1 class="text-center mb-4 text-3xl font-extrabold md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Blog</span></h1>
        @auth
        <button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a href="{{route('posts.create')}}">Create a new Post</a></button>
        @endauth
    </header>
    @foreach($posts as $post)

     <div class="grid grid-cols-3 border-b border-gray-200" >
         <h2>
             <a class="block w-full px-4 py-2  cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700" href="{{ route('posts.show', $post->id) }}"> {{ $post->title }}</a>
         </h2> &nbsp;
         @auth
            <div class="flex">
                <a class="ext-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-yellow-400" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{route('posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ext-red-400 hover:text-white border border-red-400 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-red-400">Delete</button>
                </form>
            </div>
                  @endauth
     </div>
    @endforeach
</x-layouts.app>

