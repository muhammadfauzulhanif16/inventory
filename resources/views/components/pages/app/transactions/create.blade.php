<x-app-layout
    title="Add Transaction"
    action="transactions.index"
    method="post"
    button-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />'
    button-name="Submit"
    sub-title="Manage all your existing transactions or add a new one"
>
    <div class="grow h-0 shadow-md sm:rounded-lg bg-slate-50 dark:bg-slate-900 mx-4 mb-4 p-4">
        <div class="grid grid-cols-2 gap-4">
          <div class="relative col-span-2" hidden>
            <input value="{{ $product->id }}" type="text" name="product_id" id="product_id" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />
            <label for="product_id" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Product Id</label>
            @error("product_id")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
          </div>
            <div class="relative col-span-2">
                <input value="{{ old("product_name", $product->name) }}" type="text" name="product_name" id="product_name" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />
                <label for="product_name" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Product Name</label>
                @error("product_name")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
          <div class="relative col-span-2">
            <input value="{{ old("quantity") }}" type="number" name="quantity" id="quantity" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required min="1" max="{{ $product->quantity }}" />
            <label for="quantity" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Quantity ({{ $product->quantity }})</label>
            @error("quantity")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
          </div>
{{--            <div class="relative">--}}
{{--                <input value="{{ old("full_address") }}" type="text" name="full_address" id="full_address" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />--}}
{{--                <label for="full_address" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Full Address</label>--}}
{{--                @error("full_address")--}}
{{--                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="relative">--}}
{{--                <input value="{{ old("phone_number") }}" type="number" name="phone_number" id="naphone_numberme" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />--}}
{{--                <label for="phone_number" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Phone Number</label>--}}
{{--                @error("phone_number")--}}
{{--                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}
        </div>
    </div>
</x-app-layout>
