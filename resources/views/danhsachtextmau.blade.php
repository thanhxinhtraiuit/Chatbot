<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	@if (Session::has('Thanhcong'))
		<script>
			alert("{{ Session::get('Thanhcong') }}")
		</script>
	@endif
	

	<div class="container">
	<form action="{{ route('themtext') }}" method=post>
				@csrf 
				<div class='form-group'>
					<label for=""> key </label>
					<input class='form-control' type="text" name ='intext' >
				</div>
				
				<div class='form-group' >
					<label for=""> value </label>
					<input class='form-control' type="text" name = 'outtext'>
				</div>
				
				
				<button class='btn btn-primary'type='submit'>Thêm</button> 

			</form>
			</div>
	<div style="border: 1px solid blue">
		<label for=""> danh sach text mau </label>
		
		<div class="container-fluid">
		<div class="row">
		<div class="card-body">
		<table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Key</th>
                          <th scope="col">Value</th>                        
                          <th scope="col">Thao Tac</th>                        
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($textmau as $element)
                          <tr>
                          <th scope="row">{{ $element->id  }}</th>
                          
                          <td><input value="{{ $element->intext}}"  class='form-control' type="text" name ='intext'></td>
                          <td> <input value="{{ $element->outtext }}"  class='form-control' type="text" name ='intext'></td>
                          
                          <td>
                            <a class='btn btn-primary' href="$">Sua</a>
                             <a class='btn btn-danger' href="/xoa-text-mau/{{ $element->id }}">Xoa</a>
                          </td>
                        </tr>
                        @endforeach

	</div>
	</div>
	</div>
	</div>




	<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
</body>
</html>