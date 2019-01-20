<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>export</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Name Customer</th>
				<th>Date Time Order</th>
				<th>Total</th>
				<th>Note</th>
			</tr>
		</thead>
		<tbody>
			@foreach($order as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->date_order }}</td>
					<td>{{ $item->total }}</td>
					<td>{{ $item->note }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>