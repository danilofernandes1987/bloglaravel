@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="success_message"></div>
    <div class="row">
        <div class="card-body">
            <section class="border p-4 mb-4 d-flex align-items-left">
                <form action="{{route('admin.artigos.index')}}" class="form-search" method="GET">
                    <div class="col-sm-12">
                        <div class="input-group rounded">
                            <input type="text" name="pesquisa" class="form-control rounded float-left" placeholder="Busca" aria-label="Search" aria-describedby="search-addon">
                            <a href="{{route('admin.artigos.create')}}" type="button" class="AddArtigoModal_btn input-group-text border-0" style="background: transparent; border:none"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </form>
            </section>
            <table class="table table-bordered table-sprited table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ARTIGO</th>
                        <th>AUTOR</th>
                        <th>CRIADO EM</th>
                        <th>MODIFICADO EM</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody id="lista_artigos">
                    @forelse($artigos as $artigo)
                    <tr id="art{{$artigo->id}}">
                        <td>{{$artigo->id}}</td>
                        <td>{{$artigo->titulo}}</td>
                        <td>{{$artigo->user->name}}</td>
                        <td>{{$artigo->created_at}}</td>
                        <td>{{$artigo->updated_at}}</td>
                        <td>
                            <div class="btn-group">
                                <form action="{{route('admin.artigos.delete',['id'=>$artigo->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('admin.artigos.edit',['id'=>$artigo->id])}}" type="button" class="edit_artigo_btn fas fa-edit" style="background: transparent;border: none;"></a>
                                    <button type="submit" class="delete_artigo_btn fas fa-trash" style="background: transparent;border:none"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Nada Encontrado!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="col-12">
                {{$artigos->links("pagination::bootstrap-5")}}
            </div>
        </div>
    </div>
</div>
@endsection