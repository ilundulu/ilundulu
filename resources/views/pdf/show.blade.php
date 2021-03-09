@extends('dashboard')
@section('title','Vizualizar Enunciado')

@section('content')
<div class='embed-responsive' style='padding-bottom:150%'>
        
    <object data="{{asset("pdf/enunciados/$enunciado")}}" type='application/pdf' width='100%' height='100%'></object>
</div>
@endsection
