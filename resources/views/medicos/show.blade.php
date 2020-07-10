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
    <h1>
		{{$medico->nome}}
		&nbsp;&nbsp;
        <a href="{{ route('medicos.edit', ['medico' => $medico->id]) }}"
             class="btn btn-sm btn-success">
	  	Editar Médico
	</a>  
	</h1>
    </header>
    <hr/>
    <section>
        
    <div class="card">
    <div class="card-body">

        <div class="form-group row">
            <div class="col-sm-4">
                <label>Nome:</label>
            </div>
            <div class="col-sm-8">
                <label style="color:blue;">{{$medico->nome}}</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <label>CRM:</label>
            </div>
            <div class="col-sm-8">
                <label style="color:blue;">{{$medico->crm}}</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <label>Telefone:</label>
            </div>
            <div class="col-sm-8">
                <label style="color:blue;">{{$medico->telefone}}</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <label>Especialidade 1:</label>
            </div>
            <div class="col-sm-8">
                <label style="color:blue;">{{$medico->especialidade1}}</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <label>Especialidade 2:</label>
            </div>
            <div class="col-sm-8">
                <label style="color:blue;">{{$medico->especialidade2}}</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <label>Especialidade 3:</label>
            </div>
            <div class="col-sm-8">
                <label style="color:blue;">{{$medico->especialidade3}}</label>
            </div>
        </div>

    <hr/>
    <footer>
        CRUD Médicos
    </footer>
</body>
</html>