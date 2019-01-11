@extends('adminlte::page')

@section('title', 'Nova Categoria de Item')

@section('content_header')
    <h1>Nova Categoria de Item<small>cadastrar categoria</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Itens</a></li>
        <li><a href="">Cadastrar Categoria</a></li>
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
                                    <label for="nome">Nome da Categoria</label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Categoria" required="required">
                                </div>
                            </div>
                            <input name="cadastrar" type="submit" class="btn btn-primary btn-block" value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop