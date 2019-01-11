@extends('adminlte::page')

@section('title', 'Novo Item')

@section('content_header')
    <h1>Novo Item<small>cadastrar item</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Itens</a></li>
        <li><a href="">Cadastrar Item</a></li>
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
                                    <label for="categoriaItem">Categoria do Item</label>
                                    <select id="categoriaItem" name="categoriaItem" class="form-control" autofocus>
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="descricao">Descrição do Item</label>
                                    <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Descrição Item" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="detalhes">Detalhes do Item (Opcional)</label>
                                    <textarea placeholder="Detalhes" class="form-control" name="detalhes" id="detalhes"></textarea>
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