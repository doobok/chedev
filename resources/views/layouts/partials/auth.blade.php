@auth
    <div class="flex flex-row space-x-3 items-center">
        <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->email }}" class="h-5 rounded-full" loading="lazy">
        <span>
            {{ auth()->user()->name }}
        </span>
        <form class="" action="/logout" method="post">
            @csrf
            <button type="submit" name="logout"
                    title="{{ __('site.logout') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                     class="inline-block h-4">
                    <path d="M16 9v-4l8 7-8 7v-4h-8v-6h8zm-2 10v-.083c-1.178.685-2.542 1.083-4 1.083-4.411 0-8-3.589-8-8s3.589-8 8-8c1.458 0 2.822.398 4 1.083v-2.245c-1.226-.536-2.577-.838-4-.838-5.522 0-10 4.477-10 10s4.478 10 10 10c1.423 0 2.774-.302 4-.838v-2.162z"/>
                </svg>
            </button>
        </form>
    </div>

@endauth
@guest
    <div class="flex space-x-1 items-center">
        <span>{{ __('site.login') }}:</span>
        <auth-buttons></auth-buttons>
    </div>
@endguest

@auth
    <user-auth :user="{{auth()->user()}}"></user-auth>
@endauth
@guest
    <user-auth user="{{false}}"></user-auth>
@endguest
