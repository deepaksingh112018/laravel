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
<div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Edit Form Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   <div class="modal-body">
        <form action="update" id="editForm">
   <div class="form-group">
    <label for="editName">Name:</label>
    <input type="text" name="editName" id ="editName" class="form-control" placeholder="Enter name">
   </div>
   <div class="form-group">
    <label for="editAge">Age:</label>
    <input type="number" name="editAge" id ="editAge" class="form-control" placeholder="Enter Age">
   </div>
   <div class="form-group">
    <label for="editEmail">Email:</label>
    <input type="email" name="editEmail" id ="editEmail" class="form-control" placeholder="Enter email">
   </div>
   <div class="form-group">
    <label for="editPassword">Password:</label>
    <input type="password"  name="editPassword" id="editPassword" class="form-control" placeholder="Password">
   </div>
    <div class="form-group">
    <label for="editMobile">contact no:</label>
    <input type="number" name="editMobile" id="editMobile" class="form-control" placeholder="Enter mobile no">
   </div>
   </div>
   <input type="hidden" name="editId" id="editId">
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

<table class="table" id="trecord">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Age</th>
      <th>Email</th>
      <th>Password</th>
      <th>Mobile</th>
      <th>Date</th>
      <!-- <th>File</th> -->
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
   @foreach($data as $key=> $detail)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$detail->name}}</td>
      <td>{{$detail->age}}</td>
      <td>{{$detail->email}}</td>
      <td>{{$detail->password}}</td>
      <td>{{$detail->mobile}}</td>
      <td>{{$detail->date}}</td>
      <td><a onclick="userEdit('{{$detail->id}}')" class="btn btn-primary">Edit</a></td>
      <td><a onclick="userDelete('{{$detail->id}}',this)" class="btn btn-primary">Delete</a></td>
    </tr>
   @endforeach
  </tbody>
</table>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
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
        maxlength:10,
      },
      mobile:{
        required:true,
         digits:true,
        maxlength:10,
      }
    },
    submitHandler:function(){
      $('#formUser').submit();
    }
  });
  function userDelete(userId,arg){
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   $.ajax({
    url:'delete',
    type:'get',
    data:{id:userId},
    success:function(response){
      swal("SUCCESS","Deleted Record Successfully","success");
      $(arg).closest('tr').remove();
      $.each($('#trecord tbody tr'), function(key, value){
        $(this).find('td:first-child').html(key+1);
      });
    }
   });
  }
  }) 
}

function userEdit(userId){
  $.ajax({
    url:'edit',
    type:'get',
    data:{id:userId},
    success:function(response){
      $('#editId').val(response[0].id);
      $('#editName').val(response[0].name);
      $('#editAge').val(response[0].age);
      $('#editEmail').val(response[0].email);
      $('#editPassword').val(response[0].password);
      $('#editMobile').val(response[0].mobile);
      $('#editModal').modal('show');
    }
  });
}
</script>
</html>