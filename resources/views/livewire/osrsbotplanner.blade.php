<style>

</style>
<div class="grid grid-rows-4 justify-center text-center mx-6 break-words">
    @foreach($list as $script)
        <p class="my-2">
            {{ $script['script'] }} for {{ $script['runtime'] }} hours
        </p>
    @endforeach

    <button wire:click="$refresh" class="mt-5">Generate</button>
</div>
