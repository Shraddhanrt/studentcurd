
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
		href="https://www.w3schools.com/w3css/4/w3.css">	
</head>
<body>
<div class="w3-container w3-center">
     <h2 class="w3-text-green w3-xxlarge">
		    <a href="{{route('create')}}">Fillup Student Details</a>
		</h2>
	</div>
	

	<div class="w3-container w3-center">
		<table class="w3-table"> 
	  <thead> 
				<tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
        </tr>
			</thead> 
			<tbody> 
				@foreach ($students as $student)
                <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->mobile}}</td>
            <td><a href="{{route('edit', $student->id)}}">Edit</a></td>
			<td ><a class="btn btn-danger" href="{{ route('users.destroy', $student->id)}}">Delete</a></td>  
      
        </tr>
@endforeach
			</tbody> 
		</table>
	</div>
</body>
</html> 
