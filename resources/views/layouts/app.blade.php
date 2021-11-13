<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracast Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-sm text-gray-900 bg-gray-background">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>
        <main class="container flex mx-auto max-w-custom">
            <div class="mr-5 w-70">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aliquid quis neque quod pariatur. Itaque magnam nihil, ullam distinctio error necessitatibus enim qui doloribus voluptatem ea dolore ad minima voluptas possimus at! Beatae porro culpa autem numquam consectetur, sunt repellat. Laborum, assumenda! Omnis, inventore pariatur? Cupiditate corporis, error eius harum unde deserunt laborum consectetur excepturi. Fugiat tempora consequatur debitis nesciunt reiciendis, vel laborum culpa earum ab temporibus architecto? Facere nostrum aliquam vitae repudiandae iure deserunt exercitationem quia magni dicta aperiam reprehenderit, accusamus illo, ex at dignissimos deleniti consequuntur aliquid. Tempora nemo corrupti iste id ratione ullam earum cum qui sint eaque, non vitae natus facilis architecto ad totam voluptate mollitia excepturi voluptates similique consequuntur. Ullam reiciendis cum necessitatibus sapiente commodi impedit dolorem, facilis dolores id dolorum nemo fugiat molestiae porro enim reprehenderit ad laboriosam et aliquam minima ut, animi fuga! Cum labore natus quibusdam? Reprehenderit, blanditiis eos dolores molestiae odio cumque accusantium deleniti dolor saepe libero tempora iste ducimus, aliquam voluptate eaque, maxime officiis ut? Commodi alias quis illo, est, ad ipsum modi minus eligendi nihil quisquam ab amet quam maiores accusantium ex ipsa dolore libero veniam labore vel? Saepe quia provident sed debitis numquam vero, libero ad harum magni?
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                        <li><a href="" class="pb-3 border-b-4 border-blue">All ideas [87]</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">Considering(5)</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">In Progress (6)</a></li>
                    </ul>
                    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                        <li><a href="" class="pb-3 border-b-4 border-blue">Implemented(10)</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">Closed(51)</a></li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
