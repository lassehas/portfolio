<div class="grid md:grid-cols-5 items-center py-4 mx-auto bg-gray-900">
    <div class="md:col-span-3 mb-4">
        <p class="flex justify-center text-5xl text-white mb-4">{{ $title }}</p>
        <p class="flex justify-center text-center text-white">{{ $description }}</p>
    </div>
    <div class="md:col-span-2 flex justify-center md:justify-start mb-4 shadow-md">
        <img class="w-auto h-full" src="{{$image}}" alt="Image">
    </div>
</div>
