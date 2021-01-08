
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
       <form action="backend" id="userForm">
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
    <!-- edit -->
    <div id="editModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="update" id="editForm">
    <div class="form-group">
    <label for="editName">editName :</label>
    <input type="text" class="form-control" name="editName" id="editName" placeholder="Enter Your editName">
  </div>
  <div class="form-group">
    <label for="editAge">editAge :</label>
    <input type="number" class="form-control" name="editAge" id="editAge" placeholder="Enter Your editAge">
  </div>
  <div class="form-group">
    <label for="editEmail">editEmail :</label>
    <input type="email" class="form-control" name="editEmail" id="editEmail" aria-describedby="emailHelp" placeholder="Enter Your editEmail">
  </div>
  <div class="form-group">
    <label for="editPassword">editPassword :</label>
    <input type="password" class="form-control" name="editPassword" id="editPassword" placeholder="editPassword">
  </div>
  <div class="form-group">
    <label for="editMobile">editContact No :</label>
    <input type="number" class="form-control" name="editMobile" id="editMobile" placeholder="Enter Your editMobile">
  </div>
  <input type="hidden" name="editId" id="editId">
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
    <table class="table" id="record">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Age</th>
          <th>Email</th>
          <th>Password</th>
          <th>Mobile</th>
          <th>Date</th>
          <th>File</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $detail)
        <tr>
          <td>{{$detail->id}}</td>
          <td>{{$detail->name}}</td>
          <td>{{$detail->age}}</td>
          <td>{{$detail->email}}</td>
          <td>{{$detail->password}}</td>
          <td>{{$detail->mobile}}</td>
          <td>{{$detail->created_at}}</td>
          
          <td><a onclick="editUser('{{$detail->id}}')" class="btn btn-primary">Edit</a></td>
          <td><a onclick="deleteUser('{{$detail->id}}',this)" class="btn btn-primary">Detele</a></td>
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
<script>
  $('#userForm').validate({
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
    $('#userForm').submit();
  }
  });
    function deleteUser(userId,arg){
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
         swal("Success","Record Successfully Deleted","success");
         $(arg).closest('tr').remove();
         $.each($('#record tbody tr'),function(key,value){
          $(this).find('td:first-child').html(key+1);
         })
      }
    })
  } 
}); 
}
function editUser(userId){
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
  $('#editForm').validate({
    rules:{
      editName:{
        required:true,
      },
       editAge:{
        required:true,
      },
      editEmail:{
        required:true,
      },
      editPassword:{
        required:true,
      },
      editMobile:{
        required:true,
    }
  },
    submitHandler:function () {
      $('#editForm').submit(); 
    }
  });
   $('#record').DataTable();
</script>
</html>