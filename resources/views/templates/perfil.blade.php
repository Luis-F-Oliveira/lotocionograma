<button id="btn-perfil" class="btn btn-primary rounded-circle perfil">
    <i class="fa-solid fa-user"></i>
</button>

<div id="perfil" class="p-2 perfil-modal">
    <div id="category" class="row rounded-top"></div>
    <div class="row rounded-bottom d-flex justify-content-center align-items-center bg-primary perfil-body">
        <div class="container">
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-table-cells"></i>
                    </span>
                    <input id="level" disabled type="text" class="form-control" value="@if(session('user')->level === 1) BRONZE @elseif(session('user')->level === 2) SILVER @elseif(session('user')->level === 3) GOLD @elseif(session('user')->level === 4) OBSIDIAN @else NO LEVEL @endif" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-signature"></i>
                    </span>
                    <input type="text" disabled class="form-control" value="{{ session('user')->name }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="text" disabled class="form-control" value="{{ session('user')->email }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <input type="text" disabled class="form-control" value="(+55) {{ session('user')->phone }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <input type="text" disabled class="form-control" value="{{ session('user')->lotacao }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/lotocionograma/level.js') }}"></script>
<script src="{{ asset('js/lotocionograma/perfil.js') }}"></script>