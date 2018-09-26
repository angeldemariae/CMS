  <?php include 'include/db.php' ?>
  <?php include 'include/header.php' ?>

    <!-- Navigation -->
  
  <?php include 'include/navigation.php' ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


                <?php 




    if (isset($_POST['submit'])) {

          $search = $_POST['search'];


          $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
          $result = mysqli_query($connection, $query);
 
        if (!$result) {
            
            die("Query Failed" . mysqli_error($connection));
        }

        $count = mysqli_num_rows($result);

        if ($count == 0) {
            
            echo "<h1> NO RESULT </h1>";
        }

        else {


                while ($row = mysqli_fetch_assoc($result)) {

                  $post_title = $row['post_title'];
                  $post_authur = $row['post_author'];
                  $post_date = $row['post_date'];
                  $post_image = $row['post_image'];
                  $post_contents = $row['post_content'];


                  ?>


<h1 class="page-header">
    Page Heading
    <small>Secondary Text</small>
</h1>

<!-- First Blog Post -->
<h2>
    <a href="#"><?php echo "{$post_title}"; ?></a>
</h2>
<p class="lead">
    by <a href="index.php"><?php echo "{$post_authur}"; ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> <?php echo "{$post_date}"; ?></p>
<hr>
<img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
<hr>
<p><?php echo "{$post_contents}"; ?></p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>


 <?php  }


        } 


    }

?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            
            <?php include 'include/sidebar.php' ?>

        </div>
        <!-- /.row -->

        <hr>

         <?php include 'include/footer.php' ?>

       