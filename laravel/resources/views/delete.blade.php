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
                <form action="{{route('admin.destroy',$produto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3>Deleção de produto</h3>
                                <h4>Tem certeza que deseja deletar esse produto?</h4>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="produto" class="form-label">Produto:</label>
                                    <input readonly type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="localizacao" class="form-label">Localização:</label>
                                    <input readonly type="text" class="form-control" id="localizacao" name="localizacao" value="{{$produto->localizacao}}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex  justify-content-between">
                                    <a href="{{route('admin.index')}}" class="btn btn-primary">Voltar</a>
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </main><!-- /.container -->
@endsection|