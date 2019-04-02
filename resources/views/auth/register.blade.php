@extends('app')

@section('content')
    <section class="conteudo cadastro">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger offset-top-50">
                            <strong>oops!</strong> Faltaram alguns campos para ser preenchido.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form role="form" method="POST" action="{{ url('/auth/register') }}">
                        {!! csrf_field() !!}

                        <div class="row offset-bottom-50">
                            <div class="col-md-12 text-center font-black">
                                <h1 class="font-bold">Cadastrar</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur at
                                    autem beatae, commodi consequatur debitis deleniti distinctio explicabo illo ipsum
                                    laudantium provident quae quas quia quidem repellat sequi ut?</p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       placeholder="Nome">
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                       placeholder="Email">
                            </div>

                            <div class="col-md-6">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Telefone">
                            </div>
                            <div class="col-md-4">
                                <label for="city">Cidade</label>
                                <input type="text" class="form-control" name="city" placeholder="Cidade">
                            </div>
                            <div class="col-md-2">
                                <label for="state">Estado</label>
                                <select name="state" class="form-control">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP" selected>São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" name="password" placeholder="Senha">
                            </div>

                            <div class="col-md-6">
                                <label for="password_confirmation">Confirmar Senha</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="Confirmar Senha">
                            </div>

                        </div>
                    {{--<div class="row font-black">--}}
                    {{--<div class="col-md-12 text-center ">--}}
                    {{--<h1 class="font-bold">Escolha um plano</h1>--}}
                    {{--<p>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto--}}
                    {{--culpa, eaque eligendi fugiat iusto, necessitatibus nisi possimus ratione recusandae--}}
                    {{--reiciendis sapiente sed sequi sint totam, unde veritatis voluptatibus?--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 box-plano text-center">--}}
                    {{--<h5>Plano I</h5>--}}
                    {{--<h2>R$ 50,00</h2>--}}
                    {{--<h6>--}}
                    {{--Descrioção do plano--}}
                    {{--<br/>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid corporis--}}
                    {{--dolorum ea eius esse et fugiat iste molestiae qui quo rem sed, voluptatem--}}
                    {{--voluptatibus. Commodi culpa id tempore!--}}
                    {{--</h6>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 box-plano text-center">--}}
                    {{--<h5>Plano II</h5>--}}
                    {{--<h2>R$ 150,00</h2>--}}
                    {{--<h6>--}}
                    {{--Descrioção do plano--}}
                    {{--<br/>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid corporis--}}
                    {{--dolorum ea eius esse et fugiat iste molestiae qui quo rem sed, voluptatem--}}
                    {{--voluptatibus. Commodi culpa id tempore!--}}
                    {{--</h6>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 box-plano text-center">--}}
                    {{--<h5>Plano III</h5>--}}
                    {{--<h2>R$ 250,00</h2>--}}
                    {{--<h6>--}}
                    {{--Descrioção do plano--}}
                    {{--<br/>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid corporis--}}
                    {{--dolorum ea eius esse et fugiat iste molestiae qui quo rem sed, voluptatem--}}
                    {{--voluptatibus. Commodi culpa id tempore!--}}
                    {{--</h6>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Termos de Condições</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias amet
                                            dignissimos distinctio dolorem doloribus, ea, earum enim ex libero minima
                                            nam nihil nulla omnis perspiciatis quisquam sed suscipit vel.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias amet
                                            dignissimos distinctio dolorem doloribus, ea, earum enim ex libero minima
                                            nam nihil nulla omnis perspiciatis quisquam sed suscipit vel.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias amet
                                            dignissimos distinctio dolorem doloribus, ea, earum enim ex libero minima
                                            nam nihil nulla omnis perspiciatis quisquam sed suscipit vel.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="TermOfUse">Termos de Condições</label>
                            </div>
                            <div class="col-md-12">
                                <label class="checkbox-inline font-black">
                                    <input type="checkbox" value="1" name="TermOfUse"> Li e aceito os
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
                                        Termos de Condições
                                    </a>
                                </label>
                            </div>
                            <div class="col-md-12 offset-top-50">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
