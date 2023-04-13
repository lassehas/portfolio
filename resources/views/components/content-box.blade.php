<div class="flex justify-center my-10 md:my-24">
    <div class="w-4/5 md:w-2/3 bg-white grid md:grid-cols-2 p-3 md:p-7 rounded-xl shadow-md">
        <div class="text-center p-2 flex justify-center w-full h-auto">
            <img lazyload src="{{ $picture }}" alt="" loading="lazy">
        </div>
        <div class="text-center grid items-center justify-center m-4 md:m-8">
            <p class="font-bold text-xl">
                {{ $title }}
            </p>
            <p class="mb-3">
                {{ $description }}
            </p>
            <div class="flex justify-center gap-3">
                <a class="border border-gray-300 rounded px-3 py-1 md:px-10 md:py-2 hover:bg-blue-300"
                   href="{{ $linkbutton }}">{{ $buttontext }}</a>
                <a class="border border-gray-300 rounded px-3 py-1 md:px-10 md:py-2 hover:bg-blue-300"
                   href="{{ $linkbutton2 }}">{{ $buttontext2 }}</a>
            </div>

            <div class="grid place-items-center w-full mt-4">
                <div class="border-t w-2/3">

                </div>
                <img class="mt-3 h-7 md:h-8" src="{{ $picture2 }}" alt="">
            </div>
        </div>
    </div>
</div>

