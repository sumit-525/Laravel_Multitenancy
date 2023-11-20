<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-right" href="{{route('tenants.create')}}">Add Tenants</x-btn-link>
        </h2>
        
    </x-slot>

    <div class="py-12">
       
    </div>
</x-app-layout>
