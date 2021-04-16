@extends('dashboard')
@section('title','Projectos')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#membros">{{base64_decode($nome)}}</a></li>
                        
                    </ul>
                   
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="membros">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form action="{{route('projecto.equipa.upload')}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                                        
                                                            <div class="form-group">
                                                                <input type="hidden" value="{{$id_equipa}}" name="id_equipa">
                                                                <input type="hidden" value="{{$nome}}" name="nome">
                                                                <input type="hidden" value="{{$id_projecto}}" name="id_projecto">
                                                                <div class="container mt-5" style="width: 80%">
                                                                    
                                                                    <input type="file" class=" form-control" name="codigo">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Upload</button>
                                                            </div>
                                                       
                                                        <div class="product-status-wrap">
                                                            <h4>Lista de Ficheiros</h4>

                                                            <div class="asset-inner">
                                                                <table>
                                                                    <tr>
                                                                        <th>Ficheiros</th>
                                                                        <!--<th><a href="{{route('download',['id_projecto' => $id_projecto])}}" download>Download</a></th>-->

                                                                    </tr>
                                                                    @foreach ($files as $file)
                                                                        <tr colspan="2">
                                                                            @if(base64_decode($file)!="." && base64_decode($file)!='..')
                                                                                <td>{{base64_decode($file)}}</td>
                                                                            @endif
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


@endsection