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




        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .sm\:rounded-lg {
            border-radius: 0.375rem;
        }


        .block {
            display: block;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .border {
            border-width: 2px;
        }


        .project-form {
            width: 100%;
            max-width: 30rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 700;
            color: #4b5563;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.5rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.25rem;
            color: #4b5563;
        }

        .form-button {
            background-color: #4b5563;
            color: #fff;
            transition: background-color 0.3s ease;
            padding: 0.5rem;
            border-radius: 0.25rem;
        }

        .form-button:hover {
            background-color: #374151;
        }
    </style>
</head>

<div class="container">
    <header>
        @include('_navigation')
    </header>
    <div class="content">
        <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->@if ($errors->any())
        <div class="p-2 bg-yellow border-2 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" enctype="multipart/form-data" action="{{ $route }}" class="project-form">
            @csrf
            {{ method_field($method) }}
            <div class="form-group">
                <label class="form-label" for="title">
                    Titel
                </label>
                <input class="form-input" id="title" name="titel" type="text" placeholder="titel" value="{{old('titel', $project->titel)}}" class="block w-full rounded-md border-0">  
            </div>
            <div class="form-group">
                <label class="form-label" for="description">
                    Beschrijving
                </label>
                <input class="form-input" id="description" name="description" type="text" placeholder="beschrijving">
            </div>
            <div>
                <label class="form-label" for="description">
                    <input type="file" name="image">
                </label>
            
            </div>
            <button type="submit" class="form-button">
                Opslaan
            </button>
        </form>
    </div>


    <footer>
        <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
    </footer>
</div>
</body>

</html>