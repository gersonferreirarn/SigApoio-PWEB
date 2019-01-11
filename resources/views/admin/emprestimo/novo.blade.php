@extends('adminlte::page')

@section('title', 'Novo Empréstimo')

@section('content_header')
    <h1>Realizar Empréstimo<small>emprestar novo item</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Empréstimo</a></li>
        <li><a href="">Realizar Empréstimo</a></li>
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
                                    <select id="categoriaItem" name="categoriaItem" class="select2 form-control" autofocus>
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="item">Item</label>
                                    <select id="item" name="item" class="select2 form-control" autofocus>
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="pessoa">Pessoa</label>
                                    <select id="pessoa" name="pessoa" class="select2 form-control" autofocus>
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                            </div>
                            <input name="emprestar" type="submit" class="btn btn-primary btn-block" value="Emprestar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop