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
          <label>Pat_Name : {{ $post->pat_name }}</label>
          <label>Pat_Age : {{ $post->pat_age }}</label>
          <label>Pat_Gender : {{ $post->pat_gender }}</label>
          <label>Pat_Email_Id : {{ $post->pat_email_id }}</label>
          <label>Pat_Password : {{ $post->pat_password }}</label>
          <label>Pat_Contact_No : {{ $post->pat_contact_no }}</label>
          <label>Pat_Address : {{ $post->pat_address }}</label>
          
        </div>
    </div>
</div>
</body>
</html>
