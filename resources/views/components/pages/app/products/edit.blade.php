<x-app-layout
    title="Edit Product"
    action="/products/{{ $product->id }}"
    method="put"
    button-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />'
    button-name="Submit"
    sub-title="Manage all your existing products or add a new one"
>
    <div class="grow h-0 shadow-md sm:rounded-lg bg-slate-50 dark:bg-slate-900 mx-4 mb-4 p-4">
        <div class="grid grid-cols-2 gap-4">
            <div class="relative col-span-2">
                <input value="{{ old("name", $product->name) }}" type="text" name="name" id="name" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required />
                <label for="name" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Product Name</label>
                @error("name")
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
          <div class="relative">
            <select name="category" id="category" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" required autofocus>
              <option disabled selected>Select a category</option>
              @foreach($categories as $category)
                @if(old("category", $product->category_id) == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
              @endforeach
            </select>
            <label for="category" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Category</label>
            @error("category")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
          </div>
          <div class="relative">
            <input value="{{ old("quantity", $product->quantity) }}" type="number" name="quantity" id="quantity" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required min="1" />
            <label for="quantity" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Quantity</label>
            @error("quantity")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
          </div>
          <div class="relative">
            <select name="unit" id="unit" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" required autofocus autocomplete>
              <option disabled selected>Select a unit</option>
              @foreach($units as $unit)
                @if(old("unit", $product->unit_id) == $unit->id)
                  <option value="{{ $unit->id }}" selected>{{ $unit->name }}</option>
                @else
                  <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endif
              @endforeach
            </select>
            <label for="unit" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Unit</label>
            @error("unit")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
          </div>
          <div class="relative">
            <input value="{{ old("selling_price", $product->selling_price) }}" type="number" name="selling_price" id="selling_price" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-slate-900 bg-slate-50 dark:bg-slate-700 border border-slate-300 appearance-none dark:text-white dark:border-slate-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " autofocus autocomplete required min="1" />
            <label for="selling_price" class="absolute text-sm text-slate-500 dark:text-slate-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Selling Price (Rp)</label>
            @error("selling_price")
            <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">{{ $message }}</p>
            @enderror
          </div>
        </div>
    </div>
</x-app-layout>
