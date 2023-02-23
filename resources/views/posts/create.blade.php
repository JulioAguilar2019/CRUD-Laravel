<x-layouts.app
    title="Create"
>

    <h1 class="text-center mb-4 text-3xl font-extrabold md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Create a new post</span></h1>
{{--    @dump($errors->all())--}}
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            @include('posts.form-fields')
            <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-2 mb-5">Create</button>
        </form>
        <a  class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-2"  href="{{route('posts.index')}}">Back</a>



</x-layouts.app>
