<x-layouts.app
    title="{{$post->title}}"
>
    <h1 class="text-3xl font-extrabold dark:text-white mx-3"> {{$post->title}}</h1>
    <p class="font-semibold text-gray-500 dark:text-gray-400 mb-5 mx-3"> {{$post->body}}</p>
    <a  class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-3"  href="{{route('posts.index')}}">Back</a>

</x-layouts.app>
