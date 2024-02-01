@extends('layouts.employee.home')
@section('content')
    <x-validation-errors class="mb-4" />

        <form class="flex flex-wrap w-11/12 p-2 justify-evenly" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="w-2/5 p-2">
                <x-label for="name" value="{{ __('Nome') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
            </div>

            <div class="w-2/5 p-2">
                <x-label for="last_name" value="{{ __('Sobre Nome') }}" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required/>
            </div>

            <div class="w-2/5 p-2">
                <x-label for="cpf" value="{{ __('CPF') }}" />
                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" autocomplete="cpf" />
            </div>

            <div class="w-2/5 p-2">
                <x-label for="birthday" value="{{ __('Aniversário') }}" />
                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" autocomplete="birthday" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="w-2/5 p-2">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-center w-full p-2">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" data-modal-target="small-modal" data-modal-toggle="small-modal" href="#">
                    {{ __('Termos de Cadastro') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Cadastro') }}
                </x-button>
            </div>
        </form>
@endsection
