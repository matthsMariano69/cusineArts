@extends('layouts.app')

@section('content')
<div class="box">
	<div class="box-content">
		<div class="head">
			<h3>Funcionários registrados</h3>
			<h4>{{$count}}</h4>
	   </div>
	   <div class="actions">
	   		<div class="row justify-content-end">
	   			<div class="col-md-3">
	   				<a type="button" class="btn btn-primary" href="{{route('employe-create')}}">Cadastrar funcionário</a>
	   			</div>
	   		</div>
	   </div>
	   @include('employe.alert')
	   <br>
   		<table class="table table-striped">
   			<tr>
   				<th width="5%" style="text-align:center;">#</th>
   				<th width="30%">Nome</th>
   				<th width="20%">Documento</th>
   				<th width="10%">Regime</th>
   				<th width="10%">Iníco em</th>
   				<th width="15%">Salário</th>
   				<th width="10%"></th>
   			</tr>

   			@foreach($employes as $key => $employe)
	   			<tr>
	   				<td style="text-align:center;">{{ $employe->id }}</td>
	   				<td>{{ $employe->name }}</td>
	   				<td>{{ $employe->document }}</td>
	   				<td>{{ $employe->rule == 1 ? 'CLT' : 'PJ' }}</td>
	   				<td>{{ date('d/m/Y', strtotime($employe->start)) }}</td>
	   				<td>R$ {{ number_format($employe->remuneration, 2, ',', '.') }}</td>
	   				<td style="display:flex;">
	   					<a href="{{ route('employe-edit', ['id' => $employe->id]) }}" class="btn btn-primary fa fa-edit" type="button"></a> 
	   					<form action="{{ route('employe-destroy', ['id' => $employe->id]) }}" method="POST">
	   						@csrf
	   						@method('delete')
	   						<button type="submit" class="btn btn-danger fa fa-trash" onclick="return confirm('Quer mesmo apagar?')" style="margin-left: 15%;"></button>
	   					</form>
	   				</td>
	   			</tr>
   			@endforeach

   		</table>				
	</div>
</div>


@endsection