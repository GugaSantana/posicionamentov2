@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>CRIAÇÃO DE EMPRESA</center>
        </h3>
    </div>
    <div class="card-body">
        
    <form name="formulario" role="form" method="post" action="/company/create">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Nome da Empresa</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" placeholder="Nome">
        </div>

        <div class="form-group">
            <label for="welcome_mail">Email de cadastro</label>
            <textarea id="welcome_mail" name="welcome_mail"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>    
    
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <!-- <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <!-- /.card-body --

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form> -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<!-- include summernote css/js-->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-pt-BR.min.js"></script>

<!-- Print summernote -->
<script src="../posicionamento/public/js/summernote-ext-print.js"></script>

<!-- Table summernote -->
<link href="../posicionamento/public/summernote/plugin/table/summernote-ext-table.css" rel="stylesheet" type="text/css">
<!-- javascript -->
<script src="../posicionamento/public/summernote/plugin/table/summernote-ext-table.js"></script>

<!-- Paper Summernote -->
<script src="../posicionamento/public/summernote/paper-size/summernote-print-size.js"></script>
<script src="../posicionamento/public/summernote/paper-size/lang/en-US.js"></script>

<!-- Sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  $(document).ready(function() {
    $('#welcome_mail').summernote({
      @if(!empty($autogestao) && empty($autogestao->quando)) height: 200, @endif
      lang: 'pt-BR',
      height: 400,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        ['fontname', ['fontname', 'fontsize', 'color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
        ['misc', ['print']]
      ],
    });
  });
</script>


@stop