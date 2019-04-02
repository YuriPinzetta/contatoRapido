@extends('app')

@section('content')
    <section class="conteudo busca">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-100 text-center">
                    <h1>Encontre o seu imóvel ideal aqui!</h1>
                    <form action="{{url('imovel')}}">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="col-md-8 padding-0">
                                        <input type="text" class="form-control filtro radius-0" name="busca"
                                               placeholder="&#xf002; Busque seu imóvel aqui">
                                    </div>
                                    <div class="col-md-2 padding-0">
                                        <select name="regiao" id="" class="form-control regiao radius-0">
                                            <option>SP</option>
                                            <option>RJ</option>
                                            <option>DF</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 padding-0">
                                        <button type="submit" class="btn btn-primary form-control radius-0">Buscar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="conteudo-interno destaques">
        <div class="container">
            <div class="row offset-100">
                <div class="col-md-12 offset-bottom-50">
                    <h2>Imóveis em destaque</h2>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto1.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Studio completo no Baixo Augusta</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto2.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Ap na Vila mariana perto do metro e pq da Aclimação</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto3.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Style and Comfort Apto close Av. Paulista</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto4.jpg')}}" alt="" class="img img-responsive">
                    <h6>APARTAMENTO 2 DORMITÓRIOS</h6>
                    <h3>Style and Comfort Apto Close Av. Paulista</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto5.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Studio completo no Baixo Augusta</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto6.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Ap na Vila mariana pero do metro e pq da Aclimação</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto7.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Style and Comfort Apto close Av. Paulista</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto8.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Style and Comfort Apto Close Av. Paulista</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="conteudo anuncie">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-100 text-center">
                    <h1>Cadastre-se e anuncie o seu imóvel!</h1>
                    <div class="offset-top-100"></div>
                    <a href="javascript:void(0)" class="btn btn-warning font-black">
                        Anuncie agora!
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="conteudo-interno destaques">
        <div class="container">
            <div class="row offset-100">
                <div class="col-md-12 offset-bottom-50">
                    <h2>Imóveis em destaque</h2>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto1.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Studio completo no Baixo Augusta</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto2.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Ap na Vila mariana perto do metro e pq da Aclimação</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto3.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Style and Comfort Apto close Av. Paulista</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto4.jpg')}}" alt="" class="img img-responsive">
                    <h6>APARTAMENTO 2 DORMITÓRIOS</h6>
                    <h3>Style and Comfort Apto Close Av. Paulista</h3>
                    <p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto5.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Studio completo no Baixo Augusta</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto6.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Ap na Vila mariana pero do metro e pq da Aclimação</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto7.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Style and Comfort Apto close Av. Paulista</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
                <div class="col-md-3 box-destaque">
                    <img src="{{asset('imagens/quarto8.jpg')}}" alt="" class="img img-responsive">
                    <h5>APARTAMENTO 2 DORMITÓRIOS</h5>
                    <h3>Style and Comfort Apto Close Av. Paulista</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorem ea eaque earum eum
                        incidunt molestiae nesciunt non officia porro quae ratione recusandae, repellendus sunt ullam
                        unde voluptas voluptatum! Libero.
                    </p>
                    <h4>R$ 9000.000,00</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="conteudo sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-100 text-center">
                    <img src="{{asset('imagens/icones/icone1.png')}}" alt="Hands"
                         class="img img-responsive center-block">
                    <h2>Sobre a <strong>Contato Rápido</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                        iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                        luptatum zzrildelenit augue duis dolore te feugait nulla facilisi.</p>

                    <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                        iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                        luptatum zzril dele</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('jquery')
    <script type="application/javascript">
        $(function () {
            $(window).on("load resize", function (e) {
                function equalHeight(group) {
                    tallest = 0;
                    group.each(function () {
                        thisHeight = $(this).height();
                        if (thisHeight > tallest) {
                            tallest = thisHeight;
                        }
                    });
                    group.outerHeight(tallest);
                }

                if ($(window).width() > 550) {
                    equalHeight($(".box-destaque"));
                }
            });
        });
    </script>
@endsection