<x-app-layout >
    <x-slot name="header">
        <div class="flex flex-row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Serviços') }}
            </h2>
            <!-- Navigation Links -->
            <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link class="text-xs" href="{{ route('root.service.index') }}" :active="request()->routeIs('root.service.index')">
                    {{ __('Lista') }}
                </x-nav-link>
                <x-nav-link class="text-xs" href="{{ route('root.register.product') }}" :active="request()->routeIs('root.register.product')">
                    {{ __('Cadastrar - Produtos') }}
                </x-nav-link>
                <x-nav-link class="text-xs" href="{{ route('root.register.service') }}" :active="request()->routeIs('root.register.service')">
                    {{ __('Cadastrar - Serviços') }}
                </x-nav-link>
                <x-nav-link class="text-xs" href="{{ route('root.register.package') }}" :active="request()->routeIs('root.register.package')">
                    {{ __('Cadastrar - Pacotes') }}
                </x-nav-link>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="flex max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
            @yield('content')
        </div>
    </div>
</x-app-layout>
