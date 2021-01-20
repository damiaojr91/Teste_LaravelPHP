@extends('layout.app')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-6 p-lg-3 mx-auto my-5">
        <h1 class="display-5 fw-normal">Bem vindo ADMINISTRADOR</h1>
        <p class="lead fw-normal">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Admodum accumsan disputationi eu sit. </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <main class="container mt-5">
        <div class="row">
            <div class="offset-3 col-6">
                <form action="{{route('admin.create')}}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3>Adicionar produto</h3>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="produto" class="form-label">Produto:</label>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="localizacao" class="form-label">Localização:</label>
                                    <input type="text" class="form-control" id="localizacao" name="localizacao">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12 pt-5">
                <hr />
            </div>
            <div class="offset-3 col-6 starter-template py-5 px-3">
                <h3 class="text-center"> Lista de Produtos </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Localização</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <th scope="row">{{$produto->nome}}</th>
                                <td>{{$produto->localizacao}}</td>
                                <td class="">
                                    <div class="btn-group " role='group'>
                                        <a class="btn btn-info btn-sm" href="{{route('admin.edit',$produto->id)}}">Alterar</a>
                                        <a class="btn btn-danger btn-sm" href="{{route('admin.delete',$produto->id)}}">Deletar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main><!-- /.container -->
@endsection