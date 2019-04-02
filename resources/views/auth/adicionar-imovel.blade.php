@extends('app')

@section('content')
    <section class="conteudo-interno destaques">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Adicionar imóvel</h2>
                    <form id="formAdicionaImovel" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row padding-top-50">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="file-loading">
                                                <input name="arquivo_imovel[]" id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="titulo" class="form-control" placeholder="Título do anúncio">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="tipo_oferta" class="form-control">
                                                        <option value="">Tipo da oferta</option>
                                                        <option value="oferta_vendo">Oferta - Vendo</option>
                                                        <option value="oferta">Oferta</option>
                                                        <option value="vendo">Vendo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="tipo_imovel" class="form-control">
                                                        <option value="">Tipo do imóvel</option>
                                                        <option value="apartamento">Apartamento</option>
                                                        <option value="casa">Casa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="slidecontainer">
                                                        <input type="range" min="1" max="15" value="1" class="slider" name="quartos" id="quartos">
                                                        <p class="padding-top-10">Quartos: <span id="quartosnum"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="slidecontainer">
                                                            <input type="range" min="1" max="15" value="1" class="slider" name="vagas_garagem" id="vagas">
                                                            <p class="padding-top-10">Vagas de Garagem: <span id="vagasnum"></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">R$</div>
                                                                <input type="text" class="form-control preco" name="preco" placeholder="Preço">
                                                                <div class="input-group-addon">.00</div>
                                                            </div>
                                                            <label for="preco" class="error" hidden></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="metro_quadrado" class="form-control metro_quadrado" placeholder="M²">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">R$</div>
                                                                <input type="text" class="form-control iptu" name="iptu" placeholder="IPTU">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">R$</div>
                                                                <input type="text" class="form-control condominio" name="condominio" placeholder="Condominio">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="uf" class="form-control uf">
                                                        <option value="">Estado</option>
                                                        <option value="1">Acre</option>
                                                        <option value="2">Alagoas</option>
                                                        <option value="3">Amapá</option>
                                                        <option value="4">Amazonas</option>
                                                        <option value="5">Bahia</option>
                                                        <option value="6">Ceará</option>
                                                        <option value="7">Distrito Federal</option>
                                                        <option value="8">Espírito Santo</option>
                                                        <option value="9">Goiás</option>
                                                        <option value="10">Maranhão</option>
                                                        <option value="11">Mato Grosso</option>
                                                        <option value="12">Mato Grosso do Sul</option>
                                                        <option value="13">Minas Gerais</option>
                                                        <option value="14">Pará</option>
                                                        <option value="15">Paraíba</option>
                                                        <option value="16">Paraná</option>
                                                        <option value="17">Pernambuco</option>
                                                        <option value="18">Piauí</option>
                                                        <option value="19">Rio de Janeiro</option>
                                                        <option value="20">Rio Grande do Norte</option>
                                                        <option value="21">Rio Grande do Sul</option>
                                                        <option value="22">Rondônia</option>
                                                        <option value="23">Roraima</option>
                                                        <option value="24">Santa Catarina</option>
                                                        <option value="25">Sergipe</option>
                                                        <option value="26">São Paulo</option>
                                                        <option value="27">Tocantins</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="cidade" class="form-control cidade hidden"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('jquery')
    <script>
        $('#file-1').fileinput({
            language: 'pt-BR',
            uploadUrl: '#',
            allowedFileExtensions: ['jpg', 'png'],
            showUpload: false,
            showUploadedThumbs: false
        });

        var slider = document.getElementById("vagas");
        var slider2 = document.getElementById("quartos");
        var output = document.getElementById("vagasnum");
        var output2 = document.getElementById("quartosnum");
        output.innerHTML = slider.value;
        output2.innerHTML = slider2.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        }
        $('.preco').mask('00000000000000000000');
        $('.metro_quadrado').mask('00000000000000000000');
        $('.iptu').mask('000.000.000.000.000,00', {reverse: true});
        $('.condominio').mask('000.000.000.000.000,00', {reverse: true});
        $("#formAdicionaImovel").validate({
            rules: {
                titulo: {required: true},
                preco: {required: true},
                cidade: {required: true},
                metro_quadrado: {required: true},
                iptu: {required: true},
                condominio: {required: true},
                arquivo_imovel: {required: true}
            }
        });
        $('.uf').on('change', function () {
            $('.cidade').addClass('hidden');
           var estado_id = $(this).find('option:selected').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $.ajax({
                url: "{{route('cidadeAjax')}}",
                method: "POST",
                dataType: "json",
                data: {estado_id: estado_id}
            }).done(function(data) {
                var options;
                $.each(data, function (key, value) {
                    options += '<option value="'+value.id+'">'+value.nome+'</option>';
                });
                $('.cidade').html(options).removeClass('hidden');
            });
        });
    </script>
@endsection