@extends("templates.main")

@section("titulo", "Cadastro de Carros")

@section("formulario")
<<<<<<< HEAD
<form method="POST" action="/carro" class="row">
    <div class="form-group">
        <label>Marca:</label>
        <input class="form-control" required type="text" name="marca" value="{{ $carro->marca }}" />
    </div>
    <div class="form-group">
        <label>Modelo:</label>
        <input class="form-control" required type="text" name="modelo" value="{{ $carro->modelo }}" />
    </div>
    <div class="form-group">
        <label>Placa:</label>
        <input class="form-control" required type="text" name="placa" value="{{ $carro->placa }}" />
    </div>
    <div class="form-group">
        <label>Cor:</label>
        <input class="form-control" required type="text" name="cor" value="{{ $carro->cor }}" />
    </div>
    <div class="form-group">
        <label>Ano:</label>
        <input class="form-control" required type="number" name="ano" value="{{ $carro->ano }}" />
    </div>
    <div class="form-group">
        @csrf
        <input type="hidden" name="id" value="{{ $carro->id }}" />
        <button type="submit" class="btn btn-success"><i class="bi-save"></i> Salvar</button>

        <a href="/carro" class="btn btn-primary">
            <i class="bi bi-plus-square"></i>
            Novo</a>
    </div>
</form>
@endsection

@section("tabela")
<table class="table table-striped">
    <colgroup>
        <col width="200">
        <col width="200">
        <col width="160">
        <col width="160">
        <col width="60">
        <col width="50">
        <col width="50">
    </colgroup>
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Ano</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carros as $carro)
        <tr>
            <td>{{ $carro->marca }}</td>
            <td>{{ $carro->modelo }}</td>
            <td>{{ $carro->placa }}</td>
            <td>{{ $carro->cor }}</td>
            <td>{{ $carro->ano }}</td>
            <td>

                <a href="/carro/{{ $carro->id }}/edit" class="btn btn-warning">
                    <i class="bi bi-pencil-square">Editar</i></a>
            </td>
            <td>
                <form method="POST" action="/carro/{{ $carro->id }}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE" />

                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Deseja realmente excluir?');"><i
                            class="bi bi-trash">Excluir</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
=======
	<form method="POST" action="/carro" class="row">
		<div class="form-group">
			<label>Marca:</label>
			<input type="text" name="marca" value="{{ $carro->marca }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Modelo:</label>
			<input type="text" name="modelo" value="{{ $carro->modelo }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Placa:</label>
			<input type="text" name="placa" value="{{ $carro->placa }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Cor:</label>
			<input type="text" name="cor" value="{{ $carro->cor }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Ano:</label>
			<input type="number" name="ano" value="{{ $carro->ano }}" class="form-control" />
		</div>
		<div class="form-group">
			@csrf
			<input type="hidden" name="id" value="{{ $carro->id }}" />
			
			<button type="submit" class="btn btn-success">
				<i class="bi-save"></i> Salvar
			</button>
			
			<a href="/carro" class="btn btn-primary">
				<i class="bi-plus-square"></i> Novo
			</a>
		</div>
	</form>
@endsection

@section("tabela")
	<table class="table table-striped">
		<colgroup>
			<col width="200">
			<col width="200">
			<col width="160">
			<col width="160">
			<col width="60">
			<col width="50">
			<col width="50">
		</colgroup>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Placa</th>
				<th>Cor</th>
				<th>Ano</th>
				<th>Edit</th>
				<th>Del</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($carros as $carro)
				<tr>
					<td>{{ $carro->marca }}</td>
					<td>{{ $carro->modelo }}</td>
					<td>{{ $carro->placa }}</td>
					<td>{{ $carro->cor }}</td>
					<td>{{ $carro->ano }}</td>
					<td>
						<a href="/carro/{{ $carro->id }}/edit" class="btn btn-warning">
							<i class="bi-pencil-square"></i> Editar
						</a>
					</td>
					<td>
						<form method="POST" action="/carro/{{ $carro->id }}">
							@csrf
							<input type="hidden" name="_method" value="DELETE" />
							<button type="submit" onclick="return confirm('Deseja realmente excluir?');" class="btn btn-danger">
								<i class="bi-trash"></i> Excluir
							</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
>>>>>>> a681ea269a90f340b9924f374374587bb4c9f616
@endsection