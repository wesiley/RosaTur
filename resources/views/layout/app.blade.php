<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    @yield('links_src')

    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="stylesheet" href="./css/geral.css">

</head>

<body onload="blocked_spinner()">

    <div class="div_spinner">
        <div class="spinner"></div>
    </div>

    {{-- <header> --}}
        @include('layout.navbar')
    {{-- </header> --}}

    <main>
        @yield('content')
    </main>

    @include('layout.footer')

</body>

<script>
    const blocked_spinner = () => {
        const div_spinner = document.querySelector(".div_spinner");
        div_spinner.animate(
            [{
                    opacity: "1"
                },
                {
                    opacity: "0"
                }
            ], {
                duration: 750,
                iterations: 1
            }
        );
        setTimeout(() => {
            div_spinner.style.display = "none";
            document.body.removeChild(div_spinner);
        }, 1000);
    }
</script>

</html>
