<tr @class(['archived' => $post->archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        @if (!$post->archived)
            <button
                type="button"
                wire:click="archive()"
                wire:confirm="Are you sure to archive this post ?"
            >
                Archive
            </button>
        @endif

        <button
            type="button"
            wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure to delete this post ?"
        >
            Delete
        </button>
    </td>
</tr>
