@extends('layouts.app');
@section('content');
<!DOCTYPE html>
<html>
<head>
	<title>Upload file</title>
</head>
<body>
	<div class="container">
  <form method="POST" action="/store" enctype="multipart/form-data">
    {{csrf_field()}}
     <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Sani rasming:</label>
      <div class="col-sm-5">
    <input type="file" name="image">
 </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" value="Add" class="btn btn-primary">
    </div>
    <div>farrux</div>
</body>
</html>
@endsection