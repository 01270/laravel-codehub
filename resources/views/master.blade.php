<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            t3: "#5c5470",
                            back: "#352f44",
                            nav: "#2a2438"
                        },
                    },
                },
            };
        </script>
        <title>CodesHub</title>
    </head>
    <body class="mb-48 bg-back">

        <nav class="flex items-center justify-between flex-wrap bg-nav p-6">
            <a href="/">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img class="fill-current h-8 w-8 mr-2" src="{{asset('images/logo.png')}}">
                <span class="font-semibold text-xl tracking-tight">CodesHub</span>
                </div>
            </a>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white navbar-burger">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden" id="main-nav">
              <div class="text-sm lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                  Home
                </a>
                <a href="/new" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                  New Post
                </a>
                <a href="/manage" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                  Edit Your Posts
                </a>
              </div>
              @auth
              <div class="mt-10 sm:mt-0">
                <form class="hover:text-laravel" action="/user/logout" method="POST">
                    @csrf
                    <button class="fa-solid fa-arrow-right-to-bracket text-white" type="submit"> Logout</button>
                </form>
              </div>
              @else
              <div>
                <a href="/login" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
              </div>
              <div>
                <a href="/register" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"><i class="fa-solid fa-user-plus"></i> Register</a>
              </div>
              @endauth
            </div>
          </nav>

        <div class="container mx-auto mt-16">
        <main>
             @yield('body')
        </main>

        <x-flash-message />

        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
