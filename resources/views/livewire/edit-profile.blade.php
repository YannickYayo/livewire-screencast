@use(App\Enums\Country)

<div>
    <h1 class="mb-4 text-2xl text-slate-700 font-semibold">Update your profile</h1>

    <form wire:submit="save" class="min-w-[30rem] flex flex-col gap-6 bg-white rounded-lg shadow p-6">
        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Username <span class="text-red-500 opacity-75" aria-hidden="true">*</span></h3>

            <input
                aria-label="Username"
                wire:model.blur="form.username"
                @class([
                    'px-3 py-2 rounded-lg',
                    'border border-slate-300' => $errors->missing('form.username'),
                    'border-2 border-red-500' => $errors->has('form.username'),
                ])
                type="text"
                placeholder="Username"

                @error('form.username')
                    aria-invalid="true"
                    aria-description="{{ $message }}"
                @enderror
            >

            @error('form.username')
                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>
            @enderror
        </label>

        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Bio</h3>

            <textarea wire:model="form.bio" rows="4" class="px-3 py-2 border border-slate-300 rounded-lg" name="" id=""></textarea>
        </label>

        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Country <span class="text-red-500 opacity-75" aria-hidden="true">*</span></h3>

            <select
                aria-label="Country"
                wire:model.blur="form.country"
                @class([
                    'px-3 py-2 rounded-lg',
                    'border border-slate-300' => $errors->missing('form.country'),
                    'border-2 border-red-500' => $errors->has('form.country'),
                ])

                @error('form.country')
                    aria-invalid="true"
                    aria-description="{{ $message }}"
                @enderror
            >
                <option value="" selected disabled>Choose your country</option>
                @foreach (Country::cases() as $country)
                    <option value="{{ $country->value }}">{{ $country->label() }}</option>
                @endforeach
            </select>

            @error('form.country')
                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>
            @enderror
        </label>

        <fieldset class="flex flex-col gap-2">
            <div>
                <legend class="font-medium text-slate-700 text-base">Receive emails ?</legend>
            </div>

            <div class="flex gap-6">
                <label class="flex items-center gap-2">
                    <input wire:model.boolean="form.receive_emails" type="radio" name="receive_emails" value="1"> Yes
                </label>
                <label class="flex items-center gap-2">
                    <input wire:model.boolean="form.receive_emails" type="radio" name="receive_emails" value="0"> No
                </label>
            </div>
        </fieldset>

        <fieldset x-show="$wire.form.receive_emails" class="flex flex-col gap-2">
            <div>
                <legend class="font-medium text-slate-700 text-base">Email type</legend>
            </div>

            <div class="flex flex-col gap-2">
                <label class="flex items-center gap-2">
                    <input wire:model="form.receive_updates" type="checkbox" name="receive_emails" class="rounded"> General updates
                </label>
                <label class="flex items-center gap-2">
                    <input wire:model="form.receive_offers" type="checkbox" name="receive_emails" class="rounded"> Marketing offers
                </label>
            </div>
        </fieldset>

        <div class="flex">
            <button
                type="submit"
                class="relative w-full bg-blue-500 py-3 px-8 rounded-lg text-white font-medium disabled:cursor-not-allowed disabled:opacity-75"
            >
                Save

                <div wire:loading.flex wire:target="save" class="flex absolute top-0 right-0 bottom-0 flex items-center pr-4">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </button>
        </div>
    </form>

    <!-- Success Indicator... -->
    <div
        x-show="$wire.show_success_indicator"
        x-transition.out.opacity.duration.2000ms
        x-effect="if ($wire.show_success_indicator) setTimeout(() => $wire.show_success_indicator = false, 3000)"
        aria-live="polite"
        class="flex justify-end pt-4"
    >
        <div class="flex gap-2 items-center text-green-500 text-sm font-medium">
            Profile updated successfully

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </div>
</div>
