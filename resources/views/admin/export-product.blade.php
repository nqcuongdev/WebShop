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
				<th>ID</th>
				<th>Name</th>
				<th>Type</th>
				<th>Price</th>
				<th>Promotion Price</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->name_type }}</td>
					<td>{{ $item->unit_price }}</td>
					<td>{{ $item->promotion_price }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>