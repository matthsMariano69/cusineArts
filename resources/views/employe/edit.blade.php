@extends('layouts.app')

@section('content')

<div class="box">
	@include('employe.alert')
	<div>
		<form class="form-group" action="{{ route('employe-update', ['id' => $employe->id]) }}" method="POST">
		@method('PUT')	
		@csrf	
		<h3 style="text-align:center;">Dados do Funcionário</h3><br>	

			<div class="row">
				<div class="col-md-4">
					<label>Nome Completo</label>
					<input type="text" name="name" class="form-control" placeholder="Nome do Fúncionário" maxlength="60" required value="{{ $employe->name }}">
				</div>

				<div class="col-md-2">
					<label>Estado civil</label>
					<select class="form-control" name="marital">
						<option value="1" {{ $employe->marital == 1 ? 'selected' : '' }}>Casado</option>
						<option value="2" {{ $employe->marital == 2 ? 'selected' : '' }}>Solteiro</option>

					</select>
				</div>

				<div class="col-md-2">
					<label>Nascimento</label>
					<input type="date" name="birth" class="form-control" required value="{{ $employe->birth }}">
				</div>

				<div class="col-md-2">
					<label>CPF / CNPJ</label>
					<input type="text" name="document" class="form-control" id="document" placeholder="000.000.000-00" maxlength="18" required value="{{ $employe->document }}">
				</div>

				<div class="col-md-2">
					<label>RG</label>
					<input type="text" name="rg" class="form-control mask_rg" placeholder="00.000.000-0" maxlength="12" required value="{{ $employe->rg }}">
				</div>	
			</div><br>

			<div class="row">
				<div class="col-md-4">
					<label>Endereço</label>
					<input type="text" name="address" class="form-control" placeholder="Endereço" maxlength="80" required value="{{ $employe->address }}">
				</div>

				<div class="col-md-3">
					<label>Bairro</label>
					<input type="text" name="neighborhood" class="form-control" placeholder="Bairro" maxlength="80" required value="{{ $employe->neighborhood }}">
				</div>

				<div class="col-md-3">
					<label>Cidade</label>
					<input type="text" name="city" class="form-control" placeholder="Cidade" maxlength="60" required value="{{ $employe->city }}">
				</div>
			</div><br>

			<h3 style="text-align: center;">Dados do contrato</h3><br>

			<div class="row">
				<div class="col-md-2">
					<label>Remuneração</label>
					<input type="text" name="remuneration" class="form-control mask_money" placeholder="R$" maxlength="14" required value="{{ number_format($employe->remuneration, 2, ',', '.') }}">
				</div>

				<div class="col-md-2">
					<label>Cargo</label>
					<input type="text" name="office" class="form-control" placeholder="Cargo" maxlength="30" required value="{{ $employe->office }}">
				</div>

				<div class="col-md-2">
					<label>Registro</label>
					<select class="form-control" name="rule">
						<option value="1" {{ $employe->rule == 1 ? 'selected' : '' }}>CLT</option>
						<option value="2" {{ $employe->rule == 2 ? 'selected' : '' }}>PJ</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>Data de ínicio</label>
					<input type="date" name="start" class="form-control" required value="{{ $employe->start }}">
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-10">
					<a href="{{ route('dashboard') }}" class="btn btn-secondary fa fa-arrow-left" aria-hidden="true"> Voltar</a>
				</div>

				<div class="col-md-2 col align-self-end">
					<button type="submit" class="btn btn-primary">Atualizar Dados</button>
				</div>

			</div>
			

		</form>	
	</div>
</div>

@endsection 