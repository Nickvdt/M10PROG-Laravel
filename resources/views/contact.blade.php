@extends('layouts.master')

<body>
    <div class="container">
        <header>
            @include('_navigation')
        </header>

        <div class="content">
            <h1>Contact pagina</h1>
            <p>Je kunt op deze pagina met mij contact zoeken</p>
        </div>

        <footer>
            <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>