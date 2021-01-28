@extends('layout.main')
@section('title','Adicionar Linguagem')

@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Lista de Linguagens Dísponiveis</h4>
                    <div class="add-product">
                        <a href="/linguagem/adicionar/">Add Linguagem</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Codigo</th>
                                <th>Nome</th>
                                <th>Compilador/Interpretador</th>
                                <th>Descrição</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            @foreach ($linguagens as $linguagem)
                                <tr>
                                    <td>{{$linguagem->id}}</td>
                                    <td>{{$linguagem->nome}}</td>
                                    <td>{{$linguagem->compilador_interpretador}}</td>
                                    <td>{{$linguagem->descricao}}</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </td>
                                    <td>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>                                
                                </tr>
                            @endforeach    
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection