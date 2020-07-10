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
        <h1>Listagem de Médicos</h1>

        <h3>
            <a href="{{ route('medicos.create') }}" class="btn btn-sm btn-success">
            Novo Médico
            </a>  
	    </h3>
    </header>
    <hr/>
    <section>
        
    <div class="card">
  	<div class="box">
    	<div class="box-header">
     		<div class="card-body">

				<form action="{{ route('search') }}" method="POST" class="form form-inline" role="search">
					@csrf
					<label class="procurar">Procurar por:</label>
					<div class="col-3">
						<input type="text" name="nome" class="form-control upper" placeholder="">
					</div>
					<label>Filtro:&nbsp;&nbsp;</label>
					<div class="form-group col-3">
						<select name="busca" class="form-control">
						<option value="nome">NOME</option>
						<option value="crm">CRM</option>
						<option value="especialidade1">ESPECIALIDADE</option>
					</select>
					</div>
					<div class="col-3">
						<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp;&nbsp; <strong>Pesquisar</strong></button>
					</div>
				</form>

			</div>
  		</div>
	</div>

	<div class="card-body">
	@if(count($medicos)<1) <div class="alert alert-dismissable alert-warning">
            <i class="ti ti-alert"></i>
            <strong>Aten&ccedil;&atilde;o:</strong> Nenhum médico encontrado!
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </p>
	@else

    <br/><br/>
		<table style="border:1px solid black">
			<thead>
                <tr>
                      <th>Nome</th>
                      <th>CRM</th>
                      <th>
                        <nobr>Ações</nobr>
                      </th>
                </tr>
            </thead>

			<tbody>
				@foreach($medicos as $medico)
				<tr>
                      <td>
                        <a href="{{ route('medicos.show', $medico->id) }}"
                          class="link-cliente">
                          {{$medico->nome}}
                        </a>  
                      </td>
                      <td>{{$medico->crm}}</td>
                      <td>
                        <nobr>
                          <a href="{{ route('medicos.show',$medico->id) }}" 
                            class="btn btn-sm btn-primary">Selecionar</a>

                          <a href="{{ route('medicos.edit', ['medico'=>$medico->id]) }}" 
                            class="btn btn-sm btn-info">Editar</a>

                          <form class="d-inline" method="POST" 
                              action="{{ route('medicos.destroy', $medico->id) }}" 
                              onsubmit="return confirm('Tem certeza que deseja excluir o médico?')">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-sm btn-danger">Excluir</button>
                          </form>

                        </nobr>
                      </td>
                    </tr>        
                  @endforeach

            </tbody>

		</table>

		<br/>
        {{ $medicos->links() }}
	@endif
    </div>


    </section>
    <hr/>
    <footer>
        CRUD Médicos
    </footer>
</body>
</html>