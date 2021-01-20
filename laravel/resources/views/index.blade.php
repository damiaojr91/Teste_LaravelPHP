@extends('layout.app')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-6 p-lg-3 mx-auto my-5">
        <h1 class="display-5 fw-normal">Bem vindo a Xastre Market</h1>
        <p class="lead fw-normal">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Admodum accumsan disputationi eu sit. </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <main class="container mt-5">
        <div class="row">
            <div class="offset-3 col-6 starter-template py-5 px-3">
                <h3 class="text-center"> Lista de Produtos </h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Localização</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <th scope="row">{{$produto->nome}}</th>
                                <td>{{$produto->localizacao}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main><!-- /.container -->
@endsection