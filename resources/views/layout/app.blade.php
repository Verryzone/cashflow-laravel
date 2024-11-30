<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    @vite(['resources/css/app.css'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside>
            @include('partials.sidebar')
        </aside>

        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!-- Header -->
            <header>
                @include('partials.header')
            </header>

            <!-- Main Content -->
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Footer -->
        {{-- <footer>
            @include('partials.footer')
        </footer> --}}
    </div>
    <script src="js/main.js"></script>
</body>
</html>
