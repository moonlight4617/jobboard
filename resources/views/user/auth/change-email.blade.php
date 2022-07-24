<x-guest-layout>
    <x-auth-card>
        <x-flash-message status="session('status')" />
        会員情報
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.update') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}"
                    required autofocus />
            </div><span><small>*企業に表示される名前になります</small></span>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Eメール')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                    value="{{ $user->email }}" required />
            </div>

            <!-- Password -->
            {{-- <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div> --}}

            <!-- Confirm Password -->
            {{-- <div class="mt-4">
                <x-label for="password_confirmation" :value="__('パスワード確認')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('user.password.reset', ['token' => $token]) }}">
                    {{ __('パスワードの変更はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('更新') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
