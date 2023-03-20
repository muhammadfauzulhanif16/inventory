<x-layout :$title class="flex flex-col">
    <x-header />

    <div class="grow flex">
        <x-sidebar :$active />

        @if($action && $method)
        <form class="flex flex-col grow w-0" action="{{ route($action) }}" method="{{ $method }}">
            @csrf

            <x-section-header :$title :$subTitle :$action :$method :$link :$buttonName :$buttonIcon />

            {{ $slot }}
        </form>
        @else
        <div class="flex flex-col grow w-0">
            <x-section-header :$title :$subTitle :$action :$method :$link :$buttonName :$buttonIcon />

            {{ $slot }}
        </div>
        @endif
    </div>
</x-layout>
