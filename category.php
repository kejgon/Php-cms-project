<!-------------HEADER--------->
<?php include "includes/header.php";?>


<!---------NAVIGATION------------>
<?php include "includes/navigation.php";?>




<!-- Page Content -->
<div class="container">

    <div class="row">



        <!-- Blog Entries Column -->

        <div class="col-md-8">

            <?php


if(isset($_GET['category'])){

$post_category_id = $_GET['category'];
}

$query = "SELECT * FROM posts Where post_category_id = $post_category_id ";
$selec_all_posts = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($selec_all_posts)){

$post_id = $row['post_id'];

$post_title =  $row['post_title'];
$post_autor =  $row['post_autor'];
$post_date =  $row['post_date'];
$post_image =  $row['post_image'];
$post_content =  substr($row['post_content'],0,400 );




?>



            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $post_autor?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date?></p>
            <hr>
            <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
            <hr>
            <p><?php echo $post_content?></p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            <?php  }

 


?>





        </div>




        <!-- Blog Sidebar Widgets Column -->

        <?php include "includes/sidebar.php";?>

    </div>
    <!-- /.row -->

    <hr>

    <!---------FOOTER------------>
    <?php include "includes/footer.php";?>