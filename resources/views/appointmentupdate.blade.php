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
		<form class="" action="{{route('appointmentsaveUpdatedPost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_id</label>
						<input type="text" name="doc_id" class="form-control" value="{{$post->doc_id}}" />
					</div>
					<div class="form-group">
						<label for="">pat_id</label>
						<input type="text" name="pat_id" class="form-control" value="{{$post->pat_id}}"/>
					</div>
					<div class="form-group">
						<label for="">status</label>
						<input type="text" name="status" class="form-control" value="{{$post->status}}"/>
					</div>					
					<div class="form-group">
						<label for="">date_time</label>
						<input type="text" name="date_time" class="form-control" value="{{$post->date_time}}"/>
					</div>
					<div class="form-group">
						<label for="">description</label>
						<input type="text" name="description" class="form-control" value="{{$post->description}}"/>
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