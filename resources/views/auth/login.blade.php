<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form class="w-25 mx-auto" action="{{ route('login')  }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email">{{__('email')}}:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="{{__('email')}}">
            </div>
            <div class="form-group mb-3">
                <label for="password">{{__('password')}}:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="{{__('password')}}">
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('remember_me') }}</span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">{{__('login')}}</button>
        </form>
    </x-auth-card>
</x-guest-layout>
