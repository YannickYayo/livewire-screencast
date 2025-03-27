<div>
    <h2>New Post :</h2>

    <form action="" wire:submit="save">
        <label for="">
            <span>Title</span>
            <input type="text" wire:model="title" name="title" id="title">
            @error('title') <em>{{ $message }}</em> @enderror
        </label>

        <label for="">
            <span>Content</span>
            <textarea wire:model="content" name="content" id="content"></textarea>
            @error('content') <em>{{ $message }}</em> @enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
