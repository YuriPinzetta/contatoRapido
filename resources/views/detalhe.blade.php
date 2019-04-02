@extends('app')

@section('content')
    <section class="detalhe conteudo-interno padding-top-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('imagens/quarto1.jpg')}}" alt="Los Angeles"
                                     class="img img-responsive" style="height: 400px">
                            </div>

                            <div class="item">
                                <img src="{{asset('imagens/quarto2.jpg')}}" alt="Chicago" class="img img-responsive"
                                     style="height: 400px">
                            </div>

                            <div class="item">
                                <img src="{{asset('imagens/quarto3.jpg')}}" alt="New York" class="img img-responsive"
                                     style="height: 400px">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 tituloDetalhe">
                            <h3>Studio completo no Baixo Augusta</h3>
                        </div>
                        <div class="col-md-12">
                            <h4>Preço: R$ 9000.000,00</h4>
                            <h5>
                                <strong>
                                    Detalhes do Anúncio
                                </strong>
                            </h5>
                            <p>
                                Lorem ipsum<br/>
                                dolor sit amet<br/>
                                consectetur adipisicing<br/>
                            </p>
                            <h4>Descrição</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsa libero nemo
                                numquam odit quae quia quibusdam. Ab at aut consectetur est eveniet expedita id ipsam
                                ipsum ratione saepe, tenetur!
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary offset-top-35 center-block">Adquir contato do proprietário</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Mais informações sobre o produto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad deserunt distinctio
                        dolor facilis harum natus non officiis optio, possimus quasi recusandae, saepe sequi tempore
                        tenetur. Ad explicabo quasi velit!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium ad deserunt distinctio dolor facilis harum natus non officiis optio, possimus quasi
                        recusandae, saepe sequi tempore tenetur. Ad explicabo quasi velit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad deserunt distinctio
                        dolor facilis harum natus non officiis optio, possimus quasi recusandae, saepe sequi tempore
                        tenetur. Ad explicabo quasi velit!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium ad deserunt distinctio dolor facilis harum natus non officiis optio, possimus quasi
                        recusandae, saepe sequi tempore tenetur. Ad explicabo quasi velit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad deserunt distinctio
                        dolor facilis harum natus non officiis optio, possimus quasi recusandae, saepe sequi tempore
                        tenetur. Ad explicabo quasi velit!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium ad deserunt distinctio dolor facilis harum natus non officiis optio, possimus quasi
                        recusandae, saepe sequi tempore tenetur. Ad explicabo quasi velit!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relacionados conteudo-interno">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Imóveis relacionados</h2>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('imagens/quarto1.jpg')}}" alt="" class="img img-responsive">
                    <h3>Studio completo no Baixo Augusta</h3>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('imagens/quarto2.jpg')}}" alt="" class="img img-responsive">
                    <h3>Studio completo no Baixo Augusta</h3>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('imagens/quarto3.jpg')}}" alt="" class="img img-responsive">
                    <h3>Studio completo no Baixo Augusta</h3>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('imagens/quarto4.jpg')}}" alt="" class="img img-responsive">
                    <h3>Studio completo no Baixo Augusta</h3>
                    <h4>R$ 9000.000,00</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
