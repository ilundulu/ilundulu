@extends('dashboard')
@section('title','Adicionar Membros')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#membros">{{base64_decode($nome)}}</a></li>

                        <li><a href="#proj"> Projectos</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="membros">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form action="{{route('membro.equipa.add')}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                                        @if($membros[0]->id_lider == Auth::id())
                                                            <div class="form-group">
                                                                <input type="hidden" value="{{$id_equipa}}" name="id_equipa">
                                                                <input type="hidden" value="{{$nome}}" name="nome">
                                                                <div class="container mt-5" style="width: 80%">
                                                                    
                                                                <select class="livesearch form-control" name="id_membro"></select>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Convidar</button>
                                                            </div>
                                                        @endif
                                                        <div class="product-status-wrap">
                                                            <h4>Lista de Convites e Membros da Equipa</h4>

                                                            <div class="asset-inner">
                                                                <table>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <th>Estado</th>
                                                                        <th>Opção</th>

                                                                    </tr>
                                                                    @foreach ($membros as $membro)
                                                                        <tr>
                                                                            <td>{{$membro->email}}</td>
                                                                            <td>{{($membro->id_lider==$membro->id_membro)?"Lider":($membro->estado=="0"?"Não Aceite":"Membro")}}</td>

                                                                            <td>
                                                                                @if($membro->id_lider != Auth::id() && $membro->estado=="0" && $membro->id_membro == Auth::id() )
                                                                                    <a href="{{route('membro.equipa.aceitar',['id_membro'=>$membro->id,'id_equipa'=>$id_equipa,'nome'=>$nome])}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                                                                                @elseif($membro->id_lider == Auth::id() && $membro->id_membro != Auth::id())
                                                                                    <a href="{{route('membro.equipa.remover',['id_membro'=>$membro->id,'id_equipa'=>$id_equipa,'nome'=>$nome])}}"><i class="fa fa-times" aria-hidden="true"></i></a>                                                                                   
                                                                                @endif
                                                                            </td>
                              
                                                                        </tr>
                                                                    @endforeach    
                                                                </table>
                                                            </div>
                                                            
                                                        </div>
                                        
                                                    </div>
                                                        
                                                </div>
                                            </form>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="product-tab-list tab-pane fade" id="proj">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                
                                                    <form action="{{route('projecto.equipa.add')}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        @csrf
                                                        <div class="row">
                                                            
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                
        
                                                                @if($membros[0]->id_lider == Auth::id())
                                                                    <div class="form-group">
                                                                        <input type="hidden" value="{{$id_equipa}}" name="id_equipa">
                                                                        <input type="hidden" value="{{$nome}}" name="nome">
                                                                        <div class="container mt-5">
                                                                            
                                                                            <select class="projectos form-control" name="id_projecto"></select>
                                                                        </div>
                                                                        <br>
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Convidar</button>
                                                                    </div>
                                                                @endif
                                                                <div class="product-status-wrap">
                                                                    <h4>Lista de Solicitações de Projecto</h4>
        
                                                                    <div class="asset-inner">
                                                                        <table>
                                                                            <tr>
                                                                                <th>Nome</th>
                                                                                <th>Linguagem</th>
                                                                            </tr>
                                                                            @foreach ($projectos as $projecto)
                                                                                <tr>
                                                                                    <td><a href="{{route('equipa.projecto.dev',['id_equipa'=>$id_equipa,'nome'=>$nome,'id_projecto'=>$projecto->id])}}"> {{$projecto->projname}}<a></td>
                                                                                    <td>{{$projecto->lpname}}</td>
        
                                                                                   <!-- <td>
                                                                                        @if($membro->id_lider != Auth::id() && $membro->estado=="0" && $membro->id_membro == Auth::id() )
                                                                                            <a href="{{route('membro.equipa.aceitar',['id_membro'=>$membro->id,'id_equipa'=>$id_equipa,'nome'=>$nome])}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                                                                                        @elseif($membro->id_lider == Auth::id() && $membro->id_membro != Auth::id())
                                                                                            <a href="{{route('membro.equipa.remover',['id_membro'=>$membro->id,'id_equipa'=>$id_equipa,'nome'=>$nome])}}"><i class="fa fa-times" aria-hidden="true"></i></a>                                                                                   
                                                                                        @endif
                                                                                    </td>-->
                                      
                                                                                </tr>
                                                                            @endforeach    
                                                                        </table>
                                                                    </div>
                                                                    
                                                                </div>
                                                
                                                            </div>
                                                                
                                                        </div> 
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'Convidar...',
        ajax: {
            url: "{{route('membro')}}",
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.email,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>

<script type="text/javascript">
    $('.projectos').select2({
        placeholder: 'Solicitar Projecto...',
        ajax: {
            url: "{{route('buscar.projectos')}}",
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.nome,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
@endsection