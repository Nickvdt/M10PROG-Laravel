<div>
@extends('layouts.master')

<body>
    <div class="container">
        <header>
            @include('_navigation')
        </header>
        <div class="content">
            <h2>{{$project->titel}}</h2>
            <p>{{$project->description}}</p>
        </div>

        <footer>
            <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
</div>
