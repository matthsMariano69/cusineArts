@extends('layouts.app')

@section('content')
<div class="box">
	<div class="box-content">
		<div class="head">
			<h3>Funcionários</h3>
			<h4>numero de funcionarios</h4>
	   </div>
	   <div class="actions">
	   		<div class="row justify-content-end">
	   			<div class="col-md-3">
	   				<a type="button" class="btn btn-primary" href="{{route('employe-create')}}">Cadastrar funcionário</a>


	   			</div>
	   			
	   		</div>
	   </div><br>

	   		<table class="table table-striped">
	   			<tr>
	   				<th>#</th>
	   				<th>Nome</th>
	   				<th>Documento</th>
	   				<th>Regime</th>
	   				<th>Iníco em</th>
	   				<th>Salário</th>
	   				<th></th>
	   			</tr>
	   			<tr>
	   				<td>1</td>
	   				<td>Mateus</td>
	   				<td>504.047.858-59</td>
	   				<td>clt</td>
	   				<td>06/02/2023</td>
	   				<td>R$ 100.000,00</td>
	   				<td></td>
	   			</tr>
	   			<tr>
	   				<td>1</td>
	   				<td>mateus</td>
	   				<td>504.047.858-59</td>
	   				<td>clt</td>
	   				<td>06/02/2023</td>
	   				<td>R$ 100.000,00</td>
	   				<td></td>
	   			</tr>
	   		</table>				
	   


	</div>
</div>


@endsection