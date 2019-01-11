@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil<small>ver meus dados</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Configurações da Conta</a></li>
        <li><a href="">Perfil</a></li>
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
                                    <label for="nome">Nome</label>
                                    <input value="{{ $dadosPessoaFisica->nome  }}" type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome completo" required="required" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="nome">Email</label>
                                    <input value="{{ $email  }}" type="text" id="email" name="email" class="form-control" placeholder="Seu endereço de email" required="required" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="cpf">CPF</label>
                                    <input value="{{ $dadosPessoaFisica->cpf  }}" type="text" id="cpf" name="cpf" class="form-control" placeholder="Seu número de CPF" required="required" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <b>Vinculos: </b>
                            </div>
                            <input name="alterar" type="submit" class="btn btn-primary btn-block" value="Alterar" disabled>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop