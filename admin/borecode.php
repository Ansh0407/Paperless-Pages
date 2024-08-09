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
                <h3 class="card-title">Edit Uploaded eBook Details</h3>
                <a href="registeredu.php"  class="btn btn-danger btn-sm float-right">BACK</a>
                <!--button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User/Admin </button-->
                <!--button type="button" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#modal-default">
                  
                </button-->
            </div>
            
            <!-- /.card-header -->
            <div class="card-body"></div>
                    <div class="row">
                        <div class="col-md-6">
                        <form action="codebook.php" method="POST">
                            <div class="modal-body">
                                <?php
                                    if(isset($_GET['bookid']))
                                    {
                                        $bookid = $_GET['bookid'];
                                        $query = "SELECT * from ebooks where bookid='$bookid' LIMIT 1";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                
                                                        <div class="form-group">
                                                            <label for=""> Book ID</label>
                                                            <input type="text" name="bookid" value="<?php echo $row['bookid'] ?>" class="form-control" placeholder="Book ID">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Title</label>
                                                            <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Author</label>
                                                            <input type="text" name="author" value="<?php echo $row['author'] ?>" class="form-control" placeholder="Author">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Genre</label>
                                                            <input type="text" name="genre" value="<?php echo $row['genre'] ?>" class="form-control" placeholder="Genre">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Rating</label>
                                                            <input type="text" name="rating" value="<?php echo $row['rating'] ?>" class="form-control" placeholder="rating">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> ISBN</label>
                                                            <input type="text" name="isbn" value="<?php echo $row['isbn'] ?>" class="form-control" placeholder="ISBN ID">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for=""> Language</label>
                                                            <input type="text" name="language" value="<?php echo $row['language'] ?>" class="form-control" placeholder="language">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for=""> Publishing Year</label>
                                                            <input type="text" name="publiyear" value="<?php echo $row['publi_year'] ?> "class="form-control" placeholder="publishing year">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for=""> Prices</label>
                                                            <input type="text" name="price" value="<?php echo $row['prices'] ?>" class="form-control" placeholder="Cost">
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
                                
                                <button type="submit" name="updatebook" class="btn btn-primary">Update changes</button>
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