@extends('layouts.php')
@section('content')

<div class="" id="AddArtigoModal" tabindex="-1" role="" aria-labelledby="titleModalLabel" aria-hidden="false">
    <div class="" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModalLabel">Adicionar Artigos</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.artigos.store')}}" method="post">
                    <ul id="saveform_errList"></ul>
                    <div class="form-group mb-3">
                        <label for="">Título</label>
                        <input type="text" name="titulo" class="titulo form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>