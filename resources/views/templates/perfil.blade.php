<div class="row p-2">
    <div>
        <div class="row">
            <div id="category" class="col-12 rounded-top category"></div>
            <div class="col-12 rounded-bottom content px-4 py-3">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex justify-content-center flex-column align-items-center py-4">
                        <img src="{{ asset('img/user/admperfil.jpg') }}" alt="" class="rounded-circle ft-perfil">
                        <div class="input-group mt-2 category-input">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-table-cells"></i>
                            </span>
                            <input id="level" type="text" class="form-control" disabled value="@if(session('user')->level === 1) BRONZE @elseif(session('user')->level === 2) SILVER @elseif(session('user')->level === 3) GOLD @elseif(session('user')->level === 4) OBSIDIAN @else NO LEVEL @endif" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mt-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control" disabled value="{{ session('user')->email }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="input-group mt-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-signature"></i>
                                        </span>
                                        <input type="text" class="form-control" disabled value="{{ session('user')->name }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="input-group mt-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-phone"></i>
                                        </span>
                                        <input type="text" class="form-control" disabled value="(+55) {{ session('user')->phone }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mt-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <input type="text" class="form-control" disabled value="{{ session('user')->lotacao }}" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/lotocionograma/level.js') }}"></script>