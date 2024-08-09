<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



<!-- /.content-header -->
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Registered Users</h3>
                <a href="registeredu.php"  class="btn btn-danger btn-sm float-right">BACK</a>
                <!--button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User/Admin </button-->
                <!--button type="button" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#modal-default">
                  
                </button-->
            </div>
            
            <!-- /.card-header -->
            <div class="card-body"></div>
                    <div class="row">
                        <div class="col-md-6">
                        <form action="codedit.php" method="POST">
                            <div class="modal-body">
                                <?php
                                    if(isset($_GET['username_id']))
                                    {
                                        $username = $_GET['username_id'];
                                        $query = "SELECT * from sign_up where username='$username' LIMIT 1";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                
                                                <div class="form-group">
                                                        <label for=""> UserName</label>
                                                        <input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="UserName">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> EMail ID</label>
                                                        <input type="email" name="email" name="email" value="<?php echo $row['email_id'] ?>" class="form-control" placeholder="EMail ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> Password</label>
                                                        <input type="password" name="password" value="<?php echo $row['passwordsignup'] ?>" class="form-control" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> Role</label>
                                                        <input type="text" name="role" value="<?php echo $row['role'] ?>" class="form-control" class="form-control" placeholder="Role">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> Membership</label>
                                                        <input type="text" name="Membership" value="<?php echo $row['Membership'] ?>" class="form-control" class="form-control" placeholder="Membership">
                                                    </div>
                                           
                                                <?php
                                                
                                                }
                                            }
                                            else
                                            {
                                                echo "<h4> No Record FOund.! </h4>";
                                            }
                                        }
                                        ?>
                                       
                                </div>
                                <div class="modal-footer justify-content-between">
                                
                                <button type="submit" name="updateuser" class="btn btn-primary">Update changes</button>
                                </div>
           </form>
            </div>
        </div>
    </div>
  </div>
</div>
</section>
</div>





















</div>

<?php
include('includes/footer.php')
?>