<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-12">
			<table class="table">
				<thread>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pat_id</th>
      <th scope="col">admin_id</th>
      <th scope="col">comment</th>
      <th scope="col">status</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">View</th>

      
    </tr>
  </thread>
  <!--display this data in table-->
  <!--loop-->

  	<tbody>
  		@foreach($feedbacks as $feedback)
  		<tr>
  			<th scope="row">{{$feedback->id}}</th>
  			<td>{{$feedback->pat_id}}</td>
  			<td>{{$feedback->admin_id}}</td>
        <td>{{$feedback->comment}}</td>
        <td>{{$feedback->status}}</td>
        <td><a href="{{route('update_feedback',['id'=>$feedback->id])}}">Update</a></td>
        <td><a href="{{route('delete_feedback',['id'=>$feedback->id])}}">Delete</a></td>
        <td><a href="{{route('view_feedback',['id'=>$feedback->id])}}">View</a></td> 
  		</tr>
  		@endforeach
  	</tbody>
			</table>
		</div>
	</div>
	
</div>
</body>
</html>