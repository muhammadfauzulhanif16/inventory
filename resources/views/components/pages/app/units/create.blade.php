<x-app-layout
    title="Add Unit"
    action="units.index"
    method="post"
    button-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />'
    button-name="Submit"
    sub-title="Manage all your existing units or add a new one"
>
    <div class="grow h-0 shadow-md sm:rounded-lg bg-slate-50 dark:bg-slate-900 mx-4 mb-4 grid grid-rows-6">
        <div class="relative m-4">
            <input value="{{ old("name") }}" type="text" name="name" id="name" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />
            <label for="name" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Unit Name</label>
            <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">Unit name must be different from the others.</p>
            @error("name")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>
    </div>
</x-app-layout>
