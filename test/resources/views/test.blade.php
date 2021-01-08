<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
 <style type="text/css">
   .error{
    color: red;
   }
 </style>
</head>
<body>
	 <div class="container-fluid">
    <div class="float-right text-center">
<button type="button" class="btn btn-info rounded-circle"  data-toggle="modal" data-target="#staticBackdrop">
  <i class="fa fa-plus"></i>
</button>
<p>Data User</p>
</div>
</div>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	 <div class="modal-body">
        <form  action="backend" id="userForm">
   <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id ="name" class="form-control" placeholder="Enter name">
   </div>
    <div class="form-group">
    <label for="mobile">contact no:</label>
    <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile no">
   </div>
   </div>
   <div class="modal-footer">
   	<div class="col-md-10">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   <button type="submit" id ="submit" class="btn btn-primary">Submit</button>
   </div>
</div>
</form>
</div>
</div>
</div>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
  <script>
    $('#userForm').validate({
      rules:{
        name:{
          required:true,
        },
        mobile:{
          required:true,
        }
      },
      submitHandler:function(){
        $('#userForm').submit();
      }
    });
  </script>
</html>