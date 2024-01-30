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
                <div>
                    <a href="{{ route('project.download', $project) }}">
                        Download dit project
                    </a>
                </div>
                <article>
                    @if($project->image)
                    <img src="{{Storage::url($project->image)}}">
                    @endif
                </article>
            </div>

            <footer>
                <p>&copy; {{ date('Y') }} Nick vdT. All rights reserved.</p>
            </footer>
        </div>
    </body>

    </html>
</div>