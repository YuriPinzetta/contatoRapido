@extends('app')

@section('content')
    <section class="conteudo-interno destaques">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Seus imóveis anunciados</h2>
                </div>
                <div class="col-md-12">
                    {{--<a href="{{ url('/auth/adicionar-imovel') }}" class="btn btn-primary offset-top-35">Adicionar imóvel</a>--}}
                    <a href="{{ url('/anunciar') }}" class="btn btn-success offset-top-35">Anunciar</a>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto1.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Studio completo no Baixo Augusta</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto2.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Ap na Vila mariana perto do metro e pq da Aclimação</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto3.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Style and Comfort Apto close Av. Paulista</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto4.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Style and Comfort Apto Close Av. Paulista</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto5.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Studio completo no Baixo Augusta</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto6.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Ap na Vila mariana pero do metro e pq da Aclimação</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto7.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Style and Comfort Apto close Av. Paulista</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box-destaque offset-top-35">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('imagens/quarto8.jpg')}}" alt="" class="img img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h3>Style and Comfort Apto Close Av. Paulista</h3>
                            <h4>R$ 9000.000,00</h4>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Editar informações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
