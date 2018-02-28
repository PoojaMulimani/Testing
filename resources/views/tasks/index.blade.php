@extends('layouts.app')

@section('content')
<head>
	<meta charset="utf-8">

	 <link href="/css/breakfast.css" rel="stylesheet">

	{{-- bootstrap css CDN --}}
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  {{-- bootstrap js CDN --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<title> Add Food to List</title>
</head>
<body>

	<div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<h1> Add Breakfast</h1>
			</div>

			@if (Session::has('success'))
			<div class="alert alert-success">
			<strong>Success:</strong> {{Session::get('success')}}
			</div>

			@endif

			@if (count($errors) > 0)

			<div class="alert alert-danger">
				<strong>Error:</strong>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
				<form action="{{ route('tasks.store')}}" method='POST'>
					{{ csrf_field()}}
					<div class="col-md-9">
						<input type="text" name="newTaskName" class="form-control">
					</div>
					
					<div class="col-md-3">
						<input type="submit" class='btn btn-primary btn-block' value="Add Food">
					</div>
				</form>
			</div>

			@if (count($storedTasks) > 0)
			<table>
				<thead>
					<th>Food</th>
					<th>Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>

				<tbody>
	          @foreach ($storedTasks as $storedTask)
	            <tr>
	              <th>{{ $storedTask->id }}</th>
	              <td>{{ $storedTask->name }}</td>
	              <th><a href="{{ route('tasks.edit', ['task=>$storedTask->id'])}}" class="btn btn-default">Edit</a></th>
	              <td>
	              	<form action="{{ route('tasks.destroy', ['tasks'=>$storedTask->id])}}" method="POST">
	              		{{csrf_field()}}
	              		<input type="hidden" name="_method" value="DELETE">
	              		<input type="submit" name="" class="btn btn-danger" value="Delete">
	              		
	              	</form>
	              </td>
	            </tr>
	          @endforeach
	        </tbody>
		</table>
			@endif
		</div>
	</div>
</body>


@endsection