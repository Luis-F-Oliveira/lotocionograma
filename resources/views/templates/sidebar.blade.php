<h1 id="sidebar" class="sidebar bg-primary">
    <div class="header border-bottom border-light border-2">
        <a href="/lotacionograma/index">
            <img class="rounded" src="{{ asset('img/sidebar/icon.png') }}" alt="logo">
        </a>
        <div class="text">
            <h1 class="fw-bold text-white span-none hidden">
                Lotacionograma
            </h1>
            <p class="text-white span-none hidden">
                {{ session('user')->name }}
            </p>
        </div>
        <button id="open-close" class="close">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
    <div class="body">
        <ul>
            <li class="fs-5">
                <a class="text-white text-uppercase" href="/lotacionograma/perfil">
                    <i class="rounded text-primary fa-solid fa-user"></i>
                    <span class="span-none hidden">Perfil</span>
                </a>
            </li>
            <li class="fs-5">
                <a class="text-white text-uppercase" href="/lotacionograma/table">
                    <i class="rounded text-primary fa-solid fa-table"></i> 
                    <span class="span-none hidden">Visualizar</span>
                </a>
            </li>
            <li class="fs-5">
                <a class="text-white text-uppercase" href="/lotacionograma/export">
                    <i class="rounded text-primary fa-solid fa-file-excel"></i> 
                    <span class="span-none hidden">Exportar</span>
                </a>
            </li>
            <li class="fs-5">
                <a class="text-white text-uppercase" href="/lotacionograma/admin">
                    <i class="rounded text-primary fa-solid fa-lock"></i> 
                    <span class="span-none hidden">Admin</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="footer d-flex justify-content-center border-top border-light border-2">
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <button id="logout" class="btn btn-light" type="submit">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </form>
    </div>
</h1>