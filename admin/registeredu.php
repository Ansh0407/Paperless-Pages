<?php
include('authentication.php');

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
<!-- Modal -->
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User/Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="code.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label for=""> UserName</label>
                    <input type="text" name="username" class="form-control" placeholder="UserName">
                </div>
                <div class="form-group">
                    <label for=""> EMail ID</label>
                    <input type="email" name="email" class="form-control" placeholder="EMail ID">
                </div>
                <div class="form-group">
                    <label for=""> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for=""> Role</label>
                    <input type="text" name="role" class="form-control" placeholder="Role">
                </div>
                <div class="form-group">
                    <label for=""> Membership</label>
                    <input type="text" name="Membership" class="form-control" placeholder="Membership">
                </div>    
            </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" name="adduser" class="btn btn-primary">Save changes</button>
                </div>
           </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- delete user -->
      <!-- Modal -->
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete User/Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="code.php" method="POST">
            <div class="modal-body">
              <input type="hidden" name="delete_id" class="delete_user_username">
              <p>
                Delete this data?
              </p>
            </div>  
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="deleteuser" class="btn btn-primary">Yes, Delete</button>
            </div>
           </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- delete user -->

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered Users & Administrators</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
              if(isset($_SESSION['status']))
              {
                  echo "<h4>".$_SESSION['status']."</h4>";
                  unset($_SESSION['status']);
              }

            ?>
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Registered Users & Administrators</h3>
                <!--a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-sm float-right">Add User</a-->
                <!--button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User/Admin </button-->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal-default">
                  Add User/Admin
                </button>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>EMail ID</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Membership</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $query = "select * from sign_up";
                          $query_run = mysqli_query($con, $query);

                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $row)
                              {
                                  ?>
                                  <tr>
                                      <td><?php echo $row['username']; ?> </td>
                                      <td><?php echo $row['email_id']; ?> </td>
                                      <td><?php echo $row['passwordsignup']; ?> </td>
                                      <td><?php echo $row['role']; ?> </td>
                                      <td><?php echo $row['Membership']; ?> </td>
                                      <td><a href="registeredu-edit1.php?username_id=<?php echo $row['username']; ?>" class="btn btn-info btn-sm">Edit</a></td>
                                      <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                                      </tr>
                                    <?php
                              }
                          }
                          else
                          {
                            ?>
                              <tr>
                                  <td>No Record Found</td>
                              </tr>
                            <?php   
                          }
                          ?>
                        
                    </tbody>
                </table>
            
            </div>
        </div>   
    </div>

 </div>
 </div>
 </div>
 
</div>

<?php include('includes/script.php');?>

<script>
  $(document).ready(function () {
    $('.deletebtn').click(function (e){
      e.preventDefault();

      var username_id = $(this).val();
      //console.log(user.username);
      $('.delete_user_username').val(username_id);
      $('#DeleteModal').modal('show');
    });
  });
  </script>
<?php include('includes/footer.php');?>