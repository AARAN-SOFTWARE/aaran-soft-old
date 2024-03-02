<nav class="px-2 sm:px-4 py-2.5  sticky inset-0 z-10 border-b-2 bg-purple-100 border-gray-200 xl:flex ">
    <div class="container w-full flex flex-wrap  rounded justify-between items-center mx-auto ">
        <a href="{{route('home')}}" class="flex items-center">
            <div class=" p-1 rounded py-2">
                <x-assets.logo.cxlogo :icon="'light'"  class="h-7 w-auto block"/>
            </div>

{{--            <x-assets.logo.cxlogo--}}
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap px-2 tracking-wider">CODEXSUN</span>
        </a>

{{--       <-- navbar-->>--}}
        <div class="navbar-collapse offcanvas-collapse lx:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
            <ul class=" mr-90 mt-3 mb-2 ml-auto gap-12 flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                <li>
                    <a class="nav-link hover:underline font-bold  p-3" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link hover:underline page-scroll font-bold p-3" href="{{ route('service') }}">services</a>
                </li>
                <li>
                    <a class="nav-link hover:underline page-scroll font-bold p-3" href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a class="nav-link hover:underline page-scroll font-bold p-3" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center">
            <div class="top-0 right-0 mr-8">
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{route('dashboard')}}" role="button"
                               class="font-semibold text-xl hover:text-white hover:bg-green-600  px-3 py-1 rounded-xl focus:outline-none focus:underline  transition ease-in-out duration-150">
                                Dashboard
                            </a>

                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-semibold text-xl hover:text-white hover:bg-red-600 px-3 py-1 rounded-xl
                                 focus:outline-none focus:underline transition ease-in-out duration-150"
                            >
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>

                        @else
                            <a href="{{ route('login') }}"
                               class="font-semibold text-xl hover:text-white hover:bg-blue-600 px-3 py-1 rounded-xl
                                   focus:outline-none focus:underline transition ease-in-out duration-150">
                                Log in
                            </a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
