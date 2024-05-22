<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font awesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css'
        integrity='sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA=='
        crossorigin='anonymous' />

    <title>Admin Boolfolio</title>
    @vite(['resources/js/app.js'])

</head>

<body>

    @include('admin.partials.header')


    <section class="admin-dashboard d-flex">
        <aside>
            <ul>
                <li>
                    <a href="{{ route('admin.projects.index') }}"><i
                            class="fa-solid fa-diagram-project"></i>Projects</a>
                </li>
                <li>
                    <a href="{{ route('admin.technologies.index') }}"><i
                            class="fa-solid fa-microchip"></i>Technologies</a>
                </li>
                <li>
                    <a href="{{ route('admin.types.index') }}"><i class="fa-solid fa-hurricane"></i>Types</a>
                </li>
            </ul>
        </aside>

        <div class="main-dash overflow-y-scroll border border-1">
            @yield('content')
        </div>
    </section>



</body>

</html>
