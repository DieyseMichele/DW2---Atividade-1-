<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Atividade 1 </title>
	
	</head>
	<body>
		<div class="container" align="center">
			<h2>Cadastro de Carro</h2>
			<hr id="linha" >		
			<div id= "corpo" class="row" >
				<form action="/carro" method="POST" target="">
					@csrf
					<div class="col-12 form-group">
						<label for="marca" class="control-label">Marca: </label>
						<input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca do veículo" value="{{ $carro->marca }}"/>
					</div></br>
					<div class="col-12 form-group">
						<label for="modelo" class="control-label">Modelo: </label>
						<input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite o modelo do veículo" value="{{ $carro->modelo }}"/>
					</div></br>
					<div class="col-6 form-group">
						<label for="placa" class="control-label">Placa: </label>
						<input type="text" class="form-control" id="placa" name="placa" value="{{ $carro->placa }}"/>
					</div></br>
					<div class="col-6 form-group">
						<label for="cor" class="control-label">Cor: </label>
						<input type="text" class="form-control" id="cor" name="cor" value="{{ $carro->cor }}" />
					</div></br>
					<div class="col-4 form-group">
						<label for="ano" class="control-label">Ano de Fabricação: </label>
						<input type="number" class="form-control" id="ano" name="ano" value="{{ $carro->ano }}"/>
					</div></br>
			
					<div class="col-6 form-group">
						<button href="/carro">Novo</button>														
						<input id="botao-limpar" type="reset" class="btn btn-info" value="Limpar"></input>
						<input type="hidden" id="id" name="id" value="{{ $carro->id}}">
						<button type="submit">Salvar</button>
					</div>

				</form>
				<hr id="linha" >
				</br></br>
				<h2> Veículos Cadastrados</h2></br>
				<table border="1">
					<thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Placa</th>
							<th>Cor</th>
							<th>Ano de Fabricação</th>
							<th>Editar</th>
							<th>Deletar</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($carros as $carro)
							<tr>
								<td>{{ $carro->marca}}</td>
								<td>{{ $carro->modelo}}</td>
								<td>{{ $carro->placa}}</td>
								<td>{{ $carro->cor}}</td>
								<td>{{ $carro->ano}}</td>
								<td>
									<a href = "/carro/{{ $carro->id }}/edit"> Editar </a>
								</td>
								<td>
									<form action = "/carro/{{ $carro->id }}" method="POST">
										@csrf
										<input type="hidden" name="_method" value="DELETE"/>
										<button type = "submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
	</body>
	</html>