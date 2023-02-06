@extends('layouts.app')

@section('content')

<div class="box">
	@include('employe.alert')
	<div>
		<form class="form-group" action="{{ route('employe-store') }}" method="POST">
		@csrf	
		<h3 style="text-align:center;">Dados do Funcionário</h3>	

			<div class="row">
				<div class="col-md-4">
					<label>Nome Completo</label>
					<input type="text" name="name" class="form-control" placeholder="Nome do Fúncionário" maxlength="60" required>
				</div>

				<div class="col-md-2">
					<label>Estado civil</label>
					<select class="form-control" name="marital">
						<option value="1">Casado</option>
						<option value="2">Solteiro</option>

					</select>
				</div>

				<div class="col-md-2">
					<label>Nascimento</label>
					<input type="date" name="birth" class="form-control" required>
				</div>

				<div class="col-md-2">
					<label>CPF / CNPJ</label>
					<input type="text" name="document" class="form-control" id="document" placeholder="000.000.000-00" maxlength="18" required>
				</div>

				<div class="col-md-2">
					<label>RG</label>
					<input type="text" name="rg" class="form-control mask_rg" placeholder="00.000.000-0" maxlength="12" required>
				</div>	
			</div><br>

			<div class="row">
				<div class="col-md-4">
					<label>Endereço</label>
					<input type="text" name="address" class="form-control" placeholder="Endereço" maxlength="80" required>
				</div>

				<div class="col-md-3">
					<label>Bairro</label>
					<input type="text" name="neighborhood" class="form-control" placeholder="Bairro" maxlength="80" required>
				</div>

				<div class="col-md-3">
					<label>Cidade</label>
					<input type="text" name="city" class="form-control" placeholder="Cidade" maxlength="60" required>
				</div>
			</div><br>

			<h3 style="text-align: center;">Dados do contrato</h3>

			<div class="row">
				<div class="col-md-2">
					<label>Remuneração</label>
					<input type="text" name="remuneration" class="form-control mask_money" placeholder="R$" maxlength="14" required>
				</div>

				<div class="col-md-2">
					<label>Cargo</label>
					<input type="text" name="office" class="form-control" placeholder="Cargo" maxlength="30" required>
				</div>

				<div class="col-md-2">
					<label>Registro</label>
					<select class="form-control" name="rule">
						<option value="1">CLT</option>
						<option value="2">PJ</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>Data de ínicio</label>
					<input type="date" name="start" class="form-control" required>
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-10">
					<a href="{{ route('dashboard') }}" class="btn btn-secondary fa fa-arrow-left" aria-hidden="true"> Voltar</a>
				</div>

				<div class="col-md-2 col align-self-end">
					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</div>

			</div>
			

		</form>	
	</div>
</div>

@endsection 