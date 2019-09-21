<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action=" " method=post>
		@foreach ($textmau as $element)
			
		@csrf
		<label for=""> danh sach text mau </label>
		<br>
		<hr>
		<hr>
		
		<label for="">id:{{ $element->id }}</label>
		<br>
		<label for="">Intext:</label>
		<label for=""> {{ $element->intext }}</label>
		<br>
		
		
		<label for="">Outtext:</label>
		<label for=""> {{ $element->outtext }} </label>
		<br>
		
		<hr>
		<br>
		<br>


		@endforeach
		
		

	</form>
	
</body>
</html>