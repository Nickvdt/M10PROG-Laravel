@extends('layouts.master')

<body>
    <div class="container">
        <header>
            @include('_navigation')
        </header>

        <div class="content">
        <h1>About pagina</h1>
            <p>Hier vertel ik wat of mezelf maar niet heus.</p>
        </div>

        <footer>
            <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>