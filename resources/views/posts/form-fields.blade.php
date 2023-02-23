<div class="mx-3 my-2">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
    <input class="g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="title" id="title" value="{{old('title',  $post->title)}}">
    @error('title')
    <span style="color: red">{{$message}}</span>
    @enderror
</div>
<div class="mx-3 my-2">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="body">Body</label>
    <textarea class="g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  name="body" id="body" cols="30" rows="10">{{old('body', $post->body)}}</textarea>
    @error('body')
    <span style="color: red">{{$message}}</span>
    @enderror
</div>
