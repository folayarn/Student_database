@include('includes.header')
<body>
    <div id="app">
@include('includes.navheader')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
