<div id="sidebar" class="bg-light pt-3 z-3">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center pb-2 border-bottom border-primary head">
            <img src="{{ asset('img/sidebar/icon.png') }}" alt="excel-logo">
            <button id="open-close" class="btn btn-primary">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="row d-flex justify-content-center pt-4 body">
            <ul class="ms-2">
                <li>
                    <img class="mb-3" src="{{ asset('img/sidebar/view.png') }}" alt="view">
                    <a class="span-none hidden ms-2" href="/lotacionograma/view">
                        Visualizar
                    </a>
                </li>
                <li>
                    <img class="mb-3" src="{{ asset('img/sidebar/export.png') }}" alt="export">
                    <a class="span-none hidden ms-2" href="/lotacionograma/export">
                        Exportar
                    </a>
                </li>
                <li>
                    <img class="mb-3" src="{{ asset('img/sidebar/admin.png') }}" alt="admin">
                    <a class="span-none hidden ms-2" href="/lotacionograma/admin">
                        Administrar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>