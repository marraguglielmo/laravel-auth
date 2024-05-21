<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-between ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ route('home') }}">Vedi il
                            sito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span href="" class="nav-link">{{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
