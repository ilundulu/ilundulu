@extends('dashboard')
@section('title','Criar Projecto')

@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Detalhes do Projecto</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form action="{{route('projecto.save')}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="nome" type="text" class="form-control" placeholder="Nome do Projecto">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="integrantes" type="number" min="1" class="form-control" placeholder="Número de Integrantes Por Equipa">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="linguagem">
                                                                @foreach ($linguagens as $linguagem)
                                                                <option value={{$linguagem->id}}>{{$linguagem->nome}}</option>    
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="data" type="date" class="form-control">
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <input name="hora" type="time" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         
                                                       
                                                        <div class="form-group custom-file">
                                                            <input type="file" name="enunciado" class="form-control custom-file-input" id="validatedCustomFile" required>
                                                            <label class="custom-file-label" for="validatedCustomFile">Carregar Enunciado...</label>
                                                            <div class="invalid-feedback">A extenção do enunciado tem que ser .pdf</div>
                                                        </div>
                                                     
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
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

@endsection