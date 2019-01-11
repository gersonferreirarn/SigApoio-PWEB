@extends('adminlte::page')

@section('title', 'Baixa de Empréstimo')

@section('content_header')
    <h1>Realizar Baixa<small>receber produto emprestado</small></h1>

    <ol class="breadcrumb">
        <li><a href="">Empréstimo</a></li>
        <li><a href="">Realizar Baixa</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empréstimos que não foram dado baixa</font></font></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

                <thead>
                    <tr role="row">
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Data do Empréstimo</th>
                        <th>Pessoa Requisitante</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Noteboks</td>
                        <td>Notebook 01</td>
                        <td>07/12/2018 as 09:30h</td>
                        <td>Gerson Brener(01676568484)</td>
                        <td>
                            <button class="btn-xs btn-success center-block">Receber</button>
                        </td>
                    </tr>

                    <tr role="row" class="odd">
                        <td class="sorting_1">Bolsas de Sala</td>
                        <td>Bolsa B01</td>
                        <td>07/12/2018 as 09:30h</td>
                        <td>Gerson Brener(01676568484)</td>
                        <td>
                            <button class="btn-xs btn-success center-block">Receber</button>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                <tr role="row">
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Data do Empréstimo</th>
                    <th>Pessoa Requisitante</th>
                    <th>Ação</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop