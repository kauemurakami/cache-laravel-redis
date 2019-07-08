<!DOCTYPE html>
<html>
<head>
	<title>produtos</title>
	<style type="text/css">
		table{
			border-collapse: colloapse;
		}
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>nome</td>
			<td>categorias</td>
		</tr>
		@foreach( $produtos as $p )
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nome }}</td>
			<td>
				<ul>
					@foreach( $p->categorias as $c )
						<li>{{ $c->nome }}</li>
					@endforeach
				</ul>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>