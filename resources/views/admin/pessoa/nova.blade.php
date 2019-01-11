@extends('adminlte::page')

@section('title', 'Cadastrar Nova Pessoa')

@section('content_header')
    <h1>Cadastrar Nova Pessoa<small>física ou jurídica</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Pessoas</a></li>
        <li><a href="">Cadastrar Pessoa</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <div class="container">
                <div class="col-lg-11">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="tipoPessoa">Tipo Pessoa</label>
                                    <select id="tipoPessoa" name="tipoPessoa" class="form-control" autofocus>
                                        <option value="">Selecione</option>
                                        <option value="1">Pessoa Fisica</option>
                                        <option value="2">Pessoa Juridica</option>
                                    </select>
                                </div>
                            </div>
                            <div hidden id="divNome" class="form-group">
                                <div class="form-label-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required="required">
                                </div>
                            </div>
                            <div hidden id="divCPF" class="form-group">
                                <div class="form-label-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF sem pontuação" required="required">
                                </div>
                            </div>
                            <div hidden id="divDataNascimento" class="form-group">
                                <div class="form-label-group">
                                    <label for="dataNascimento">Data de Nascimento</label>
                                    <input type="text" id="dataNascimento" name="dataNascimento" class="form-control" placeholder="Data de Nascimento" required="required">
                                </div>
                            </div>
                            <div hidden id="divRazaoSocial" class="form-group">
                                <div class="form-label-group">
                                    <label for="razaoSocial">Razão Social</label>
                                    <input type="text" id="razaoSocial" name="razaoSocial" class="form-control" placeholder="Razão social" required="required">
                                </div>
                            </div>
                            <div hidden id="divCNPJ" class="form-group">
                                <div class="form-label-group">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ sem pontuação" required="required">
                                </div>
                            </div>
                            <input name="cadastrar" type="submit" class="btn btn-primary btn-block" value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload=function(){
            document.getElementById('tipoPessoa').addEventListener('change', function () {
                if(this.value == '1'){
                    document.getElementById('divNome').hidden = false;
                    document.getElementById('divCPF').hidden = false;
                    document.getElementById('divDataNascimento').hidden = false;

                    document.getElementById('divRazaoSocial').hidden = true;
                    document.getElementById('divCNPJ').hidden = true;
                }else if(this.value == '2'){
                    document.getElementById('divNome').hidden = true;
                    document.getElementById('divCPF').hidden = true;
                    document.getElementById('divDataNascimento').hidden = true;

                    document.getElementById('divRazaoSocial').hidden = false;
                    document.getElementById('divCNPJ').hidden = false;
                }else{
                    document.getElementById('divNome').hidden = true;
                    document.getElementById('divCPF').hidden = true;
                    document.getElementById('divDataNascimento').hidden = true;

                    document.getElementById('divRazaoSocial').hidden = true;
                    document.getElementById('divCNPJ').hidden = true;
                }
            });
        }
    </script>
@stop