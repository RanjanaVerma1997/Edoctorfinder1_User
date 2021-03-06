<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('patientsaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">pat_name</label>
						<input type="text" name="pat_name" class="form-control" value="{{$post->pat_name}}"/>	
					</div>
					<div class="form-group">
						<label for="">pat_age</label>
						<input type="text" name="pat_age" class="form-control" value="{{$post->pat_age}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_gender</label>
						<input type="text" name="pat_gender" class="form-control" value="{{$post->pat_gender}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_email_id</label>
						<input type="text" name="pat_email_id" class="form-control" value="{{$post->pat_email_id}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_password</label>
						<input type="text" name="pat_password" class="form-control" value="{{$post->pat_password}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_contact_no</label>
						<input type="text" name="pat_contact_no" class="form-control" value="{{$post->pat_contact_no}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_address</label>
						<input type="text" name="pat_address" class="form-control" value="{{$post->pat_address}}"/>
					</div>
				</div>
			    </div>
			
			</div>	
		<div class="row">
		<div class="col-12">
			<button type="submit" class=" btn btn-primary">Save</button>
		</div>
	    </div>
		</form>
	</div>	
	</div>
	</div>
</body>
</html>