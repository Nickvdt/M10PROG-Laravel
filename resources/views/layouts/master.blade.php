<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net%22%3E/" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/dist/app.css" rel="stylesheet">
    <title>Projecten</title>

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
    <header>
        
    </header>
    @yield('content')

</body>

</html>