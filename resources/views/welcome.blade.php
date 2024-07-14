<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Head --}}
        @include('template.head')
        {{-- Head --}}
    </head>
    <body class="sb-nav-fixed">
        {{-- Navbar --}}
        @include('template.navbar')
        {{-- Navbar --}}

        <div id="layoutSidenav">
            {{-- Sidebar --}}
            @include('template.left-sidebar')
            {{-- Sidebar --}}

            {{-- Main Content --}}
            <div id="layoutSidenav_content">
                <main>
                    <div class="container py-5 text-center">
                        <h1>Start form here.</h1>
                        @yield('content')
                    </div>
                </main>
                {{-- Footer --}}
                @include('template.footer')
                {{-- Footer --}}
            </div>
            {{-- Main Content --}}
        </div>

        {{-- Script --}}
        @include('template.script')
        {{-- Script --}}
    </body>
</html>
