@extends('layouts.service.home')
@section('content')
    <form class="grid grid-flow-col-4 gap-4 w-full h-full" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row-span-2 col-start-1 col-end-3 bg-gray-50">
                <div class="w-full p-2">
                    <x-label for="name" value="{{ __('Nome') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                </div>

                <div class="w-full p-2">
                    <x-label for="price" value="{{ __('Preço') }}" />
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 light:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                            </svg>
                        </div>
                        <input type="number" id="currency-input" class="block p-2.5 w-full z-20 ps-10 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 light:bg-gray-700 light:border-e-gray-700  light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:border-blue-500 shadow-sm" placeholder="R$" required>
                    </div>
                </div>

                <div class="w-full p-2">
                    <label for="describe" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Detalhes</label>
                    <textarea id="describe" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Descrição do Pacote..."></textarea>
                </div>
            </div>
        <div class="row-span-2 col-start-3 col-end-4">
            <div class="flex flex-col items-center w-full md:max-w-screen-md h-full bg-gray-50 rounded">
                <div class="flex w-full shadow-lg z-10">
                    <div class="start-1 w-12 h-12 p-2 cursor-pointer drop-shadow">
                        <svg class="fill-pink-300 hover:fill-pink-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 500">
                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap gap-1 bg-gray-50 p-2">
                    <div class="flex flex-col gap-1 p-1 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <div class="flex">
                            <a href="#">
                                <h5 class="font-bold tracking-tight text-gray-900 light:text-white">Nome do Produto/Serviço</h5>
                            </a>
                        </div>
                        <div class="flex">
                            <p class="font-normal text-gray-700 light:text-gray-400">R$ 1.000,00</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">
                                    Remover
                                    <svg class=" w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="relative">
                                <span class="absolute bottom-0 right-0 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tipo</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 p-1 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <div class="flex">
                            <a href="#">
                                <h5 class="font-bold tracking-tight text-gray-900 light:text-white">Nome do Produto/Serviço</h5>
                            </a>
                        </div>
                        <div class="flex">
                            <p class="font-normal text-gray-700 light:text-gray-400">R$ 1.000,00</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">
                                    Remover
                                    <svg class=" w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="relative">
                                <span class="absolute bottom-0 right-0 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tipo</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 p-1 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <div class="flex">
                            <a href="#">
                                <h5 class="font-bold tracking-tight text-gray-900 light:text-white">Nome do Produto/Serviço</h5>
                            </a>
                        </div>
                        <div class="flex">
                            <p class="font-normal text-gray-700 light:text-gray-400">R$ 1.000,00</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">
                                    Remover
                                    <svg class=" w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="relative">
                                <span class="absolute bottom-0 right-0 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tipo</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 p-1 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <div class="flex">
                            <a href="#">
                                <h5 class="font-bold tracking-tight text-gray-900 light:text-white">Nome do Produto/Serviço</h5>
                            </a>
                        </div>
                        <div class="flex">
                            <p class="font-normal text-gray-700 light:text-gray-400">R$ 1.000,00</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">
                                    Remover
                                    <svg class=" w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="relative">
                                <span class="absolute bottom-0 right-0 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tipo</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 p-1 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <div class="flex">
                            <a href="#">
                                <h5 class="font-bold tracking-tight text-gray-900 light:text-white">Nome do Produto/Serviço</h5>
                            </a>
                        </div>
                        <div class="flex">
                            <p class="font-normal text-gray-700 light:text-gray-400">R$ 1.000,00</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">
                                    Remover
                                    <svg class=" w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="relative">
                                <span class="absolute bottom-0 right-0 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tipo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-start-3 col-start-1 col-end-4 justify-self-center">
            <x-button>
                {{ __('Cadastrar') }}
            </x-button>
        </div>
    </form>
@endsection
