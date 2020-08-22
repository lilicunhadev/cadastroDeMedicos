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
    </header>
    <hr/>
  
        
    <div class="card">
  	<div class="box">
    	<div class="box-header">
     		<div class="card-body">

        <center>
                        <form action="{{ route('medicos.index') }}" method="get" class="form form-inline" role="search">
					<label class="procurar">Procurar por: </label>
                            <input type="text" name="search" class="form-control upper" placeholder="">
					<label>Filtro:</label>
                            <select name="filter" class="form-control">
						<option value="nome">NOME</option>
						<option value="crm">CRM</option>
						<option value="especialidade1">ESPECIALIDADE</option>
					</select>
						<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i><strong>Pesquisar</strong></button>
				</form>
</center>
			</div>
  		</div>
	</div>

	<div class="card-body">
	@if(count($medicos)<1) <div class="alert alert-dismissable alert-warning">
            <center>
            </br>
            <i class="ti ti-alert"></i>
            <strong>Aten&ccedil;&atilde;o:</strong> Nenhum médico encontrado!
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </p>
            </center>
	@else

    <br/><br/>

    <center>
		<table border=1>
			<thead>
                <tr>
                      <th>NOME</th>
                      <th>CRM</th>
                      <th>
                        <nobr>AÇÕES</nobr>
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
                          <button class="btn btn-sm btn-primary">
                            <a href="{{ route('medicos.show',$medico->id) }}" 
                              class="btn btn-sm btn-primary" style="text-decoration:none">Selecionar</a>
                          </button>

                          <button class="btn btn-sm btn-info">
                            <a href="{{ route('medicos.edit', ['medico'=>$medico->id]) }}" 
                            class="btn btn-sm btn-info" style="text-decoration:none">Editar</a>
                          </button>

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
</center>

                        {{ $medicos->appends(['filter' => request()->query('filter'), 'search' => request()->query('search')])->links() }}
  @endif
  
    <h3>
      <center><button>
            <a href="{{ route('medicos.create') }}" class="btn btn-sm btn-success" style="text-decoration:none">
            Novo Médico
            </a>
      </center></button>
    </h3>
       
    </div>


    <hr/>
    <footer>
        CRUD Médicos
    </footer>
</body>
</html>