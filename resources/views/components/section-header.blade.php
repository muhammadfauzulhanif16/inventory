<div class="flex-row flex-none items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
    <div>
        <h5 class="mr-3 font-semibold dark:text-white">{{ $title }}</h5>
        <p class="text-slate-500 dark:text-slate-400">{{ $subTitle }}</p>
    </div>
    @if($title !== "Dashboard")
        <button
            type="{{ ($action && $method) ? "submit" : "button" }}"
            onclick="window.location = {{ ($action && $method) ? false : "\"". route($link) . "\"" }};"
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-3.5 w-3.5 mr-2 -ml-1">
                {!! $buttonIcon !!}
            </svg>
            {{ $buttonName }}
        </button>
    @endif
</div>
