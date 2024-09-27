
@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form method='POST'action=" {{URL('/categoria')}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="nom"class="form-control" placeholder="Digite seu nome:">
                      </div>
                    <label for="fname">nome:</label><br>
                    <input type="text" id="fname" name="nome" value="John"><br>

                    <input type="submit" value="Enviar">

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


