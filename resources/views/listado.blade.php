<h1>Listado de Alumnos</h1>

<table width="100%" border="1">
	<tr>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Dni</th>
		<th>Estado</th>
	</tr>
	@foreach($alumnos as $alumno)
	<tr>
		<td>{{$alumno->nombre}}</td>
		<td>{{$alumno->edad}}</td>
		<td>{{$alumno->dni}}</td>
		<td>{{$alumno->estado}}</td>
    </tr>
	@endforeach
</table>
