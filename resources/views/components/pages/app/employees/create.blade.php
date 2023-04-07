
<x-app-layout
    title="Add Employee"
    action="employees.index"
    method="post"
    button-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />'
    button-name="Submit"
    sub-title="Manage all your existing employees or add a new one"
>
    <div class="grow h-0 shadow-md sm:rounded-lg bg-slate-50 dark:bg-slate-900 mx-4 mb-4 p-4">
        <div class="grid grid-cols-2 gap-4">
            <div class="relative">
                <input value="{{ old("national_identity_number") }}" type="number" name="national_identity_number" id="national_identity_number" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required minlength="16" maxlength="16" />
                <label for="national_identity_number" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">National Identity Number</label>
                <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">The National Identity Number must match the National Identity Card.</p>
                @error("national_identity_number")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input value="{{ old("full_name") }}" type="text" name="full_name" id="full_name" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />
                <label for="full_name" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Employee Name</label>
                <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">Employee's full name.</p>
                @error("full_name")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input value="{{ old("full_address") }}" type="text" name="full_address" id="full_address" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />
                <label for="full_address" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Full Address</label>
                <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">The full address of the employee's residence.</p>
                @error("full_address")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input value="{{ old("phone_number") }}" type="number" name="phone_number" id="phone_number" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required minlength="11" maxlength="13"/>
                <label for="phone_number" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Phone Number</label>
                <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">The phone number must be between 11 and 13 digits long.</p>
                @error("phone_number")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input value="{{ old("username") }}" type="text" name="username" id="username" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required minlength="8" />
                <label for="username" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Username</label>
                <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">Username must be at least 8 letters long.</p>
                @error("username")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input value="{{ old("password") }}" type="password" name="password" id="password" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required minlength="8" />
                <label for="password" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Password</label>
                <p id="helper-text-explanation" class="mt-2 text-sm text-slate-500 dark:text-slate-400">Password must be at least 8 letters long.</p>
                @error("password")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
</x-app-layout>
