<nav class="navbar navbar-expand-lg bg-white border-bottom border-light-subtle">
    <div class="container">
        <a class="navbar-brand me-5" href="#">
            <x-application-logo style="height:36px" class="block h-9 fill-current text-gray-800" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse n-m-12" id="navbarSupportedContent">
            @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none d-sm-flex">
                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
            </ul>
            <!-- Settings Dropdown -->
            <div class="d-none d-sm-flex">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            <!-- Responsive Navigation Menu -->
            <div class="d-block d-sm-none">
                <div class="pt-2 pb-3 my-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard cc') }}
                    </x-responsive-nav-link>
                </div>
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-2 border-start border-white border-3">
                        <div class="fw-medium fs-5 text-body">{{ Auth::user()->name }}</div>
                        <div class="fw-medium fs-6 text-secondary">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3">
                        <x-responsive-nav-link class="my-1" :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link class="my-1" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>