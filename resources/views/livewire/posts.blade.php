@foreach($projects as $project)
    <x-content-box>
        <x-slot name="title">{{ $project->title }}</x-slot>
        <x-slot name="description">
            {{ $project->description }}
        </x-slot>
        <x-slot name="picture">
            {{ $project->picture_path }}
        </x-slot>
        <x-slot name="linkbutton">
            {{ $project->link_path }}
        </x-slot>
        <x-slot name="buttontext">
            {{ $project->link_text }}
        </x-slot>
        <x-slot name="linkbutton2">
            {{ $project->link_path_2 }}
        </x-slot>
        <x-slot name="buttontext2">
            {{ $project->link_text_2 }}
        </x-slot>
        <x-slot name="picture2">
            {{ $project->language_logo_path }}
        </x-slot>
    </x-content-box>
@endforeach
