@php
    $tableHeaders = [
        "No",
        "Unit Name",
        "Created At",
        "Updated At",
        "Actions",
    ];

    $actions = [
        [
            "name" => "Edit",
            "icon" => '<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />',
            "color" => "yellow",
            "uri" => "units.index"
        ],
        [
            "name" => "Delete",
            "icon" => '<path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />',
            "color" => "red",
            "uri" => "units.index"
        ],
    ];
@endphp



<x-app-layout
    title="All Units"
    link="/units/create"
    button-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />'
    button-name="Add new unit"
    sub-title="Manage all your existing units or add a new one"
>
    @if(session('success-unit'))
        <div id="alert-3" class="fixed right-0 m-4 space-x-4 flex p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-slate-800 dark:text-green-400 dark:border-green-800" role="alert">
            <div class="flex">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    <p>{{ session('success-unit') }}</p>
                </div>
            </div>

            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-slate-800 dark:text-green-400 dark:hover:bg-slate-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif

    <div class="grow h-0 shadow-sm sm:rounded-lg bg-slate-50 dark:bg-slate-900 mx-4 mb-4 grid grid-rows-6">
        <div class="flex flex-col flex-none px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
            <div class="flex items-center flex-1 space-x-4">
                <h5>
                    <span class="text-slate-500">All Units:</span>
                    <span class="dark:text-white">{{ $units->count() }}</span>
                </h5>
            </div>
            <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-slate-900 bg-white border border-slate-200 rounded-lg focus:outline-none hover:bg-slate-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:border-slate-600 dark:hover:text-white dark:hover:bg-slate-700">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                    </svg>
                    Export
                </button>
            </div>
        </div>

        <div class="overflow-auto grow row-span-5">
            <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
                <thead class="text-xs text-slate-700 uppercase bg-slate-200 dark:bg-slate-700 dark:text-slate-400 sticky top-0">
                <tr>
                    @foreach($tableHeaders as $th)
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">{{ $th }}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($units as $unit)
                    <tr class="border-b border-b-slate-300 dark:border-b-slate-600 hover:bg-orange-100 dark:hover:bg-orange-800">
                      <td class="px-4 py-3 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <th scope="row" class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white whitespace-nowrap">{{ $unit->name }}</th>
                        <td class="px-4 py-3 whitespace-nowrap">{{ $unit->created_at }}</td>
                        <td class="px-4 py-3 whitespace-nowrap">{{ $unit->updated_at }}</td>
                      <td class="px-4 py-3 flex space-x-4">
                        @foreach($actions as $action)
                          @if($action["name"] === "Delete")
                            <form action="{{ route($action["uri"])."/".$unit->id }}" method="post">
                              @method("delete")
                              @csrf

                              <button class="text-{{ $action["color"] }}-400 dark:text-{{ $action["color"] }}-500 hover:text-{{ $action["color"] }}-600 dark:hover:text-{{ $action["color"] }}-300 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" aria-hidden="true">
                                  {!! $action["icon"] !!}
                                </svg>
                              </button>
                            </form>
                          @else
                            <button onclick="window.location='{{ route($action["uri"])."/".$unit->id."/edit" }}'" class="text-{{ $action["color"] }}-400 dark:text-{{ $action["color"] }}-500 hover:text-{{ $action["color"] }}-600 dark:hover:text-{{ $action["color"] }}-300 rounded-md">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" aria-hidden="true">
                                {!! $action["icon"] !!}
                              </svg>
                            </button>
                          @endif
                        @endforeach
                      </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
