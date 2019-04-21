@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Bem vindo a central de arquivos CentArq!</h1>
                    </div>
                </div>

                <a href="{{route('login')}}"><button type="button" class="btn btn-secondary mt-5"><i class="fa fa-sign-in-alt"></i>&nbsp;Entrar</button></a>
                <button type="button" class="btn btn-secondary mt-5 ml-4"><i class="fa fa-question"></i>&nbsp;Ajuda</button>
            </div>



        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
