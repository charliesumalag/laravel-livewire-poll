<div>
    <form wire:submit.prevent>
        <label>Poll Title</label>
        <input type="text" wire:model.live="title" />
        <p>Current title: {{ $title }}</p>
        <div class='mb-4 mt-4'>
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>
    </form>
    <div class="mt-4">
        @foreach ($options as $index => $option)
            <div class="mb-4">
                {{$index}} - {{$option}}
            </div>
        @endforeach
    </div>
</div>
