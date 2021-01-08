<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
</head>
<body>
	<div class="float-right text-center">
<button type="button" class="btn btn-info rounded-circle"  data-toggle="modal" data-target="#staticBackdrop">
  <i class="fa fa-plus"></i>
</button>
<p>Add File</p>
</div>
</div>
	<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">File Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	 <div class="modal-body">
        <form action="{{route('saveForm')}}" method="post"  id="userForm"  enctype="multipart/form-data">
           @csrf
        	<div class="from-group">
        		<label>File</label>
        		<input type="file" name="file" class="form-control">
        	</div>
   </div>
   <div class="modal-footer">
   	<div class="col-md-10">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   <button type="submit"  id ="submit" class="btn btn-primary">Submit</button>
   </div>
</div>
</form>
</div>
</div>
</div>
<table class="table" id="tableRecord">
  <thead>
    <tr>
      <th>Id</th>
      <th>File</th>
      <th>Date</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    @foreach($deepak as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td><img src="{{asset('storage/images/'.$data->file_name)}}" height="100px" width="100px">File</td>
      <td>{{$data->created_at}}</td>
      <td><a href="deleteFile/{{$data->id}}" class="btn btn-primary">Delete</a></td>
      <td><a href="download/{{$data->file_name}}" class="btn btn-primary">Download</a></td>
    </tr>
    @endforeach 
  </tbody>
</table>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
</html>
