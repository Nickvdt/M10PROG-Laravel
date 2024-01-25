@extends('layouts.master')

<body>
    <div class="container">
        <header>
            @include('_navigation')
        </header>

        <div class="content">
        <h1>About pagina</h1>
            <p></p>
        </div>

        <footer>
            <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>