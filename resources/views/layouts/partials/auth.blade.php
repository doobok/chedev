@auth
    <div class="flex flex-row space-x-3 items-center">
        <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->email }}" class="h-5 rounded-full">
        <span>
            {{ auth()->user()->name }}
        </span>
        <form class="" action="/logout" method="post">
            @csrf
            <button type="submit" name="logout"
                    title="Вийти">
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
        <span>логин:</span>
        <a href="{{ route('login', 'google') }}" target="_blank" title="Google" class="border border-dashed border-gray-300 p-0.5">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4">
                <path d="M11.99 13.9v-3.72h9.36c.14.63.25 1.22.25 2.05 0 5.71-3.83 9.77-9.6 9.77-5.52 0-10-4.48-10-10S6.48 2 12 2c2.7 0 4.96.99 6.69 2.61l-2.84 2.76c-.72-.68-1.98-1.48-3.85-1.48-3.31 0-6.01 2.75-6.01 6.12s2.7 6.12 6.01 6.12c3.83 0 5.24-2.65 5.5-4.22h-5.51v-.01Z"/>
            </svg>
        </a>
        <a href="{{ route('login', 'facebook') }}" target="_blank" title="Facebook" class="border border-dashed border-gray-300 p-0.5">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4">
                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
            </svg>
        </a>
        <a href="{{ route('login', 'github') }}" target="_blank" title="Github" class="border border-dashed border-gray-300 p-0.5">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
        </a>
    </div>
@endguest
