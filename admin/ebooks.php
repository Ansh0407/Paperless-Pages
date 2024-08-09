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
              <h4 class="modal-title">Add eBooks</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="codebook.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label for=""> Book ID</label>
                    <input type="text" name="bookid" class="form-control" placeholder="Book ID">
                </div>
                <div class="form-group">
                    <label for=""> Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for=""> Author</label>
                    <input type="text" name="author" class="form-control" placeholder="Author">
                </div>
                <div class="form-group">
                    <label for=""> Genre</label>
                    <input type="text" name="genre" class="form-control" placeholder="Genre">
                </div>
                <div class="form-group">
                    <label for=""> Rating</label>
                    <input type="text" name="rating" class="form-control" placeholder="rating">
                </div>
                <div class="form-group">
                    <label for=""> ISBN</label>
                    <input type="text" name="isbn" class="form-control" placeholder="ISBN ID">
                </div> 
                <div class="form-group">
                    <label for=""> Language</label>
                    <input type="text" name="language" class="form-control" placeholder="language">
                </div> 
                <div class="form-group">
                    <label for=""> Publishing Year</label>
                    <input type="text" name="publication_year" class="form-control" placeholder="publishing year">
                </div> 
                <div class="form-group">
                    <label for=""> Prices</label>
                    <input type="text" name="price" class="form-control" placeholder="Cost">
                </div>    
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="addebook" class="btn btn-primary">Save changes</button>
            </div>
           </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

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
              <li class="breadcrumb-item active">Uploaded eBooks</li>
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
                <h3 class="card-title">Uploaded eBooks Details</h3>
                <!--a href="" class="btn btn-danger btn-sm float-right">Add eBooks</a-->
                <!--button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User/Admin </button-->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal-default">
                  Add EBooks
                </button>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>eBook ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>Rating</th>
                            <th>ISBN</th>
                            <th>Language</th>
                            <th>Publishing Year</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $query = "select * from ebooks";
                          $query_run = mysqli_query($con, $query);

                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $row)
                              {
                                  ?>
                                  <tr>
                                      <td><?php echo $row['bookid']; ?> </td>
                                      <td><?php echo $row['title']; ?> </td>
                                      <td><?php echo $row['author']; ?> </td>
                                      <td><?php echo $row['genre']; ?> </td>
                                      <td><?php echo $row['rating']; ?> </td>
                                      <td><?php echo $row['isbn']; ?> </td>
                                      <td><?php echo $row['language']; ?> </td>
                                      <td><?php echo $row['publication_year']; ?> </td>
                                      <td><?php echo $row['prices']; ?> </td>
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

<?php
include('includes/footer.php')
?>