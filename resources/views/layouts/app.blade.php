<x-layouts.base>

    @if(in_array(request()->route()->getName(), ['dashboard', 'profile', 'profile-example', 'users', 'bootstrap-tables', 'transactions',
    'buttons','product.index',
    'forms', 'modals', 'notifications', 'typography', 'upgrade-to-pro']))

    {{-- Main --}}

    {{-- SideNav --}}
    @include('layouts.sidenav')
        <main class="content">
            {{-- TopBar --}}
            @include('layouts.topbar')
            {{ $slot }}
            {{-- Footer --}}
            @include('layouts.footer')
        </main>

    @elseif(in_array(request()->route()->getName(), ['register', 'register-example', 'login', 'login-example',
    'forgot-password', 'forgot-password-example', 'reset-password','reset-password-example']))


    {{-- Footer --}}
    @include('layouts.footer2')
        {{ $slot }}

    @elseif(in_array(request()->route()->getName(), ['404', '500', 'lock']))

    {{ $slot }}

    @endif
</x-layouts.base>
