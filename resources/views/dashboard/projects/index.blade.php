<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net%22%3E/" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/dist/app.css" rel="stylesheet">
    <title>Laravel app</title>

    <style>
        body {
            background-color: #f3f4f6;
        }

        .container {
            max-width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 2rem;
            padding-left: 2rem;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .logo img {
            height: 3rem;
        }

        nav ul {
            display: flex;
        }

        nav li {
            margin-right: 1rem;
        }

        nav a {
            color: #3b82f6;
            text-decoration: none;
        }

        .content {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            color: #6b7280;
        }
    </style>
</head>

<div class="container">
    <header>
        @include('_navigation')
    </header>
    <div class="content">
        @foreach($projects as $project)
        <a class="text-black" href="{{ route('project.show', $project) }}">{{ $project->titel }}</a>

        <a href="{{route('projects.edit', $project)}}"
            class="bg-yellow me-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
            Wijzig
        </a>

        <form action="{{route('projects.destroy', $project)}}" method="post">
            @csrf
            {{ method_field('delete') }}
            <button type="verwijder" class="rounded-md bg-orange">
                Verwijder
            </button>
        </form>
        <br>
        @endforeach
        @if (session('alert'))
        <div class="p-2 bg-yellow border-2 rounded">
            {{ session('alert') }}
        </div>
        @endif
        <br>
        @auth
        <a href="{{ route('projects.create') }}" class="">Nieuw Project</a>
        @endauth
        <div>
            <a href="{{ route('project.download_all') }}">
                Download Alle Projecten
            </a>
        </div>

    </div>
    {{$projects->links()}}

    <footer>
        <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
    </footer>
</div>
</body>

</html>