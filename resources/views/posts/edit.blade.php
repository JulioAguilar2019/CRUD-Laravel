<x-layouts.app
    title="Edit"
>
    <h1 class="text-center mb-4 text-3xl font-extrabold md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Form edit</span></h1>
    <form action="{{route('posts.update',$post)}}" method="POST">
        @csrf
        @method('PUT')
        @include('posts.form-fields')
        <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-3 mb-5">Update</button>

    </form>

    <a  class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-3"  href="{{route('posts.index')}}">Back</a>

</x-layouts.app>
