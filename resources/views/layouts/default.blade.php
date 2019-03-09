
<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

    <main role="main">

        @yield('content')


    <footer class="container-fluid bg-dark text-white text-justify">
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>
    </main>

@include('includes.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/popper.min.js"
        integrity="sha384-rcuVSwZ3yUEqHm2EP8t4JJ/C0sJiCBmBj8AvbDgymQZIkzaOyZ92TQeqTF+49Bi1"
        crossorigin="anonymous"></script>
</body>
</html>