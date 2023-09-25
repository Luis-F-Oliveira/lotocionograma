<h1 class="sidebar bg-primary">
    <div class="header">
        <img class="rounded" src="{{ asset('img/icon.png') }}" alt="logo">
        <div class="text">
            <h1 class="fw-bold text-white">
                Lotocionograma
            </h1>
            <p class="text-white">
                Nome do usuario
            </p>
        </div>
    </div>
    <div class="body">
        xds
    </div>
    <div class="footer">
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <input type="submit" value="Deslogar">
        </form>
    </div>
</h1>