<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href='{{asset('css/loader.css')}}'>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Links to work with jQuery and AJAX --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
        </script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<title>Lara Pizzeria</title>
</head>


<body class="mb-48">
    
    {{-- <div class="overlay-container ">
        <div class="overlay">
            <span class="loader"></span>
        </div>
    </div> --}}
    
    <x-flash-msg />
    
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('images/logo.jpg') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold uppercase">
                    Welcome {{ auth()->user()->name }}
                </span>
            </li>
            <li>
                <a href="/cart" class="hover:text-laravel text-xl"><i class="fa-solid fa-basket-shopping"></i>
                    @if (Cart::content()->count() !== 0)
                    <span class="text-sm text-bold p-1 ">{{ Cart::count() }}</span>
                    @endif
                </a>
            </li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                        <button type="submit">
                            <i class="hover:text-laravel text-xl fa-solid fa-arrow-right-from-bracket"></i>
                        </button>
                    </form>
                    
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                    </li>
                    @endauth
                </ul>
            </nav>
            
            <main>
                @yield('content')
            </main>
            <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

        @yield('footer-scripts')
    </footer>
</body>

</html>
