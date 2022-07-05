<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form class="w-25 mx-auto" action="{{ route('register')  }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">{{__('name')}}:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{__('name')}}">
            </div>
            <div class="form-group mb-3">
                <label for="email">{{__('email')}}:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="{{__('email')}}">
            </div>
            <div class="form-group mb-3">
                <label for="password">{{__('password')}}:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="{{__('password')}}">
            </div>
            <div class="form-group mb-3">
                <label for="password_confirmation">{{__('password_confirm')}}:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('password_confirm')}}">
            </div>
            <button type="submit" class="btn btn-primary">{{__('register')}}</button>
        </form>
    </x-auth-card>
</x-guest-layout>
