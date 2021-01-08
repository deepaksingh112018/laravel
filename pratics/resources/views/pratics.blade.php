<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
  <style>
    .error{
      color: red;
    }
  </style>
</head>
<body>	
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
  FORM
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="backend" id="formUser">
		<div class="form-group">
    <label for="name">Name :</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="age">Age :</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your Age">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email :</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label for="password">Password :</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="mobile">Contact No :</label>
    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script>
  </script>
  <script>
    $('#formUser').validate({
      rules:{
        name:{
          required:true,
        },
        age:{
          required:true,
        },
        email:{
          required:true,
        },
        password:{
          required:true,
        },
        mobile:{
          required:true,
        }
      },
      submitHandler:function(){
        $('#formUser').submit();
      }
    });
  </script>
  </html>