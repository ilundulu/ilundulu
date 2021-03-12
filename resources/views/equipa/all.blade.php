@extends('dashboard')
@section('title','Adicionar Linguagem')

@section('content')
<div class="courses-area">
    <div class="container-fluid">
        <div class="row">

            @foreach ($equipas as $equipa)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner res-mg-b-30">
                        <div class="courses-title">
                            
                            <h2><a href="{{$equipa->id}}">{{$equipa->nome}}</a></h2>
                        </div>

                    </div>
                </div>
            @endforeach

            
        </div>
    </div>
</div>
@endsection