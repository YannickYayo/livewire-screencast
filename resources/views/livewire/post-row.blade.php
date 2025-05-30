<tr class="text-left text-slate-900">
    <td class="pl-6 py-4 pr-3 font-medium">{{ $post->title }}</td>
    <td class="pl-4 py-4 text-left text-slate-500">{{ str($post->content)->limit(50) }}</td>
    <td class="pl-4 py-4 text-right pr-6 flex gap-2 justify-end">
        <x-dialog wire:model="show_edit_dialog">
            <x-dialog.button>
                <button type="button" class="font-medium text-blue-500">
                    Edit
                </button>
            </x-dialog.button>

            <x-dialog.panel>
                <form wire:submit="save" class="flex flex-col gap-4">
                    <h2 class="text-3xl font-bold mb-1">Edit your post</h2>

                    <hr class="w-[75%]">

                    <label class="flex flex-col gap-2">
                        Title
                        <input autofocus wire:model="form.title" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.title')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Content
                        <textarea wire:model="form.content" rows="5" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed"></textarea>
                        @error('form.content')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <x-dialog.footer>
                        <x-dialog.close-button>
                            <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                        </x-dialog.close-button>

                        <button type="submit" class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Save</button>
                    </x-dialog.footer>
                </form>
            </x-dialog.panel>
        </x-dialog>

        <x-dialog>
            <x-dialog.button>
                <button type="button" class="font-medium text-red-500">
                    Delete
                </button>
            </x-dialog.button>

            <x-dialog.panel>
                <div class="flex flex-col gap-6" x-data="{ confirmation: '' }">
                    <h2 class="font-semibold text-3xl">Are you sure you?</h2>
                    <h2 class="text-lg text-slate-700">This operation is permanant and can't be reversed. This post will be deleted forever.</h2>

                    <label class="flex flex-col gap-2">
                        Type "CONFIRM"
                        <input x-model="confirmation" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="CONFIRM">
                    </label>

                    <x-dialog.footer>
                        <x-dialog.close-button>
                            <button class="text-lg text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                        </x-dialog.close-button>

                        <x-dialog.close-button>
                            <button :disabled="confirmation !== 'CONFIRM'" wire:click="$dispatch('deleted')" class="text-lg text-center rounded-xl bg-red-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Delete</button>
                        </x-dialog.close-button>
                    </x-dialog.footer>
                </div>
            </x-dialog.panel>
        </x-dialog>
    </td>
</tr>
