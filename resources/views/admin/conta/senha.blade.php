@extends('adminlte::page')

@section('title', 'Alterar Senha')

@section('content_header')
    <h1>Alterar Senha<small>alterar minha senha</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Configurações da Conta</a></li>
        <li><a href="">Alterar Senha</a></li>
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
                                    <label for="senha">Senha Atual</label>
                                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha Atual" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="novaSenha">Nova Senha</label>
                                    <input type="password" id="novaSenha" name="novaSenha" class="form-control" placeholder="Nova Senha" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="confirmarNovaSenha">Confirmar nova Senha</label>
                                    <input type="password" id="confirmarNovaSenha" name="confirmarNovaSenha" class="form-control" placeholder="Confirmar nova Senha" required="required">
                                </div>
                            </div>
                            <input name="alterar" type="submit" class="btn btn-primary btn-block" value="Alterar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop