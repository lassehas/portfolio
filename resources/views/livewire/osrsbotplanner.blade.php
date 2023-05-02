<style>

</style>
<div class="grid grid-rows-4 justify-center text-center mx-6 break-words">
    @for($i = 0; $i < count($random); $i++)
        <p class="my-2">
            {{ $list[$random[$i]]['script'] }} for {{ $runTime[$i] }} hours
        </p>
    @endfor
    <button type="button" wire:click="$emit('refreshComponent')" class="mt-5">Generate</button>
</div>
