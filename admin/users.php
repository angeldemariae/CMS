<?php include "include2/header.php" ?> 


    <div id="wrapper">

        <!-- Navigation -->


       <?php include "include2/navigation.php" ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->


<div class="row">






<div class="col-lg-12">

<h1 class="page-header">
    Blank Page
    <small>Subheading</small>
</h1>

<?php 

if (isset($_GET['source'])) {

    $the_source = $_GET['source'];
}
else{

    $the_source = '';
}
switch ($the_source) {
case 'add_user':
    include 'include2/add_user.php';
    break;

case 'edit_user':
    include 'include2/edit_user.php';
    break;


default:
    include 'include2/view_all_users.php';
    break;
}



 ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "include2/footer.php" ?>