<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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