@extends('dashboard')
@section('title','Adicionar Linguagem')

@section('content')
<div class="courses-area">
    <div class="container-fluid">
        <div class="row">

            @foreach ($projectos as $projecto)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner res-mg-b-30">
                        <div class="courses-title">
                            
                            <h2>{{$projecto->nome}}</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> Deadline: {{$projecto->deadline}}</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-user"></i></span> <b>Integrantes:</b> {{$projecto->integrantes}}</p>
                            <p><span><i class="fa fa-pencil"></i></span> <b>Linguagem:</b> {{$projecto->lpname}}</p>
                            <p><span><i class="fa fa-address-card"></i></span> <b>Manager:</b> {{$projecto->usname}}</p>
                        </div>
                        <div class="product-buttons">
                            <a href="/projecto/enunciado/{{base64_encode($projecto->nome)}}/{{base64_encode($projecto->enunciado)}}"><button type="button" class="button-default cart-btn">Enunciado</button></a>
                        </div>
                    </div>
                </div>
            @endforeach

            
        </div>
    </div>
</div>
@endsection