<nav class="navbar bg-light mb-1">
    <div class="container-fluid d-flex justify-content-end">
        <div class="d-flex align-items-center">
            <img class="perfil-img rounded-circle" src="{{ asset('img/user/admperfil.jpg') }}" alt="user-perfil-img">
            <i id="config-button" class="fa-solid fa-gear fs-5 ms-3 config"></i>
        </div>
    </div>
</nav>

<div id="config-div" class="config-modal bg-light z-3">
    <div id="config-content" class="container-fluid pt-2">
        <p class="ms-2 mb-2">
            <a id="perfil-button" class="text-decoration-none" style="cursor: pointer;">
                <i class="fa-solid fa-user"></i> perfil
            </a>
        </p>
        <p class="ms-2 mb-2">
            <a id="sac-button" class="text-decoration-none" style="cursor: pointer;">
            <i class="fa-solid fa-comments"></i> sac
            </a>
        </p>
        <p class="ms-2 mb-2">
            <a class="text-decoration-none" href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i> logout
            </a>
        </p>
    </div>
</div>

<div id="perfil-div" class="perfil-modal bg-light z-3 me-1">
    <div id="perfil-content" class="container-fluid p-2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <i class="fa-solid fa-user fs-3 mt-1"></i>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p><i class="fa-solid fa-signature"></i> {{ session('user')->name }}</p>
                <p><i class="fa-solid fa-at"></i> {{ session('user')->email }}</p>
                <p><i class="fa-solid fa-table-cells"></i> 
                    @if(session('user')->level === 1)
                        Bronze
                    @elseif(session('user')->level === 2)
                        Silver
                    @elseif(session('user')->level === 3)
                        Gold
                    @elseif(session('user')->level === 4)
                        Obsidian
                    @else
                        No Level
                    @endif
                </p>
                <p><i class="fa-solid fa-phone"></i> (+55) {{ session('user')->phone }}</p>
                <p><i class="fa-solid fa-location-dot"></i> {{ session('user')->lotacao }}</p>
            </div>
        </div>
    </div>
</div>

<div id="sac-div" class="sac-modal bg-light z-3 me-1">
    <div id="sac-content" class="container-fluid p-2">
        <div class="row mb-1">
            <div class="col">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Titulo</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-floating text-input-area">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Pergunta</label>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary">
                    Enviar
                </button>
            </div>
        </div>
    </div>
</div>