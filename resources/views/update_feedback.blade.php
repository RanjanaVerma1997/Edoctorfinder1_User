<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
        	<form class="" action="{{route('save_feedback')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="fed_id" value="{{ $feedbacks->id }}">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>pat_id</label>
                            <select name="pat_id" class="form-control">
                                <option value="1" @if($feedbacks->pat_id == 1) selected="selected" @endif>1</option>
                                <option value="2" @if($feedbacks->pat_id == 2) selected="selected" @endif>2</option>
                                <option value="3" @if($feedbacks->pat_id == 3) selected="selected" @endif>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>admin_id</label>
                            <select name="admin_id" class="form-control">
                                <option value="1" @if($feedbacks->admin_id == 1) selected="selected" @endif>101</option>
                                <option value="2" @if($feedbacks->admin_id == 2) selected="selected" @endif>102</option>
                                <option value="3" @if($feedbacks->admin_id == 3) selected="selected" @endif>103</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>comment</label>
                            <input type="text" name="comment" class="form-control" value="{{ $feedbacks->comment }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>status</label>
                            <input type="text" name="status" class="form-control" value="{{ $feedbacks->status }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save Feedback</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>