<!DOCTYPE html>
<html>
<head>
    <title>MÉDICOS</title>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link rel= "stylesheet" href= "https://maxcdn.Bootstrapcdn.com/Bootstrap/3.3.2/css/Bootstrap.min.css" > 
    <link rel= "stylesheet" href= "https://maxcdn.Bootstrapcdn.com/Bootstrap/3.3.2/css/Bootstrap-theme.min.css" >
</head>
<body>
    <header>
        <h1>Novo Médico</h1>
    </header>
    <hr/>
    <div class="card">
        <div class="card-body">
        
            <form action="{{route('medicos.store')}}" method="POST" class="form-horizontal">
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}" />
            @csrf

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Nome</label>
                        <input type="text" name="nome" value="{{old('nome')}}"/>
                    </div>
                    <div class="col-sm-6">
                        <label>CRM</label>
                        <input type="text" name="crm" value="{{old('crm')}}"/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Telefone</label>
                        <input type="text" name="telefone" value="{{old('telefone')}}"/>
                    </div>
                    <div class="col-sm-6">
                        <label>Especialidade 1</label>
                        <input type="text" name="especialidade1" value="{{old('especialidade1')}}"/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Especialidade 2</label>
                        <input type="text" name="especialidade2" value="{{old('especialidade2')}}"/>
                    </div>
                    <div class="col-sm-6">
                        <label>Especialidade 3</label>
                        <input type="text" name="especialidade3" value="{{old('especialidade3')}}"/>
                    </div>
                </div>

                </br>

                <div class="form-group row center">
                    <input type="submit" value="Cadastrar Médico" class="btn btn-success" />
                </div>

            </form>
            
        </div>
    </div>


    <hr/>
    <footer>
        CRUD Médicos
    </footer>
</body>
</html>