<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PropertySafe Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('submissions::create') }}">
                        Create Submission
                    </a>
                </li>
                <li>
                    <a href="{{ route('submissions::index') }}">
                        View Submissions
                    </a>
                </li>
            </ul>
        </nav>
        <div class="body-content">
            @yield('content')
        </div>
    </body>
</html>
