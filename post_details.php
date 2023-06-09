<?php
if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    header("location:index.php");
} else {
    $id = $_GET['id'];
}
?>
<?php include "includes/header.php" ?>


<!--    Blog Post Start
   ==================================================-->
    <div class="tm-section-wrap">
        <div class="tm-parallax" data-parallax="scroll" data-image-src="images/vert.jpg"></div>
            <section id="projet" class="tm-section">
                <section class="blog_area py_80 bg_secondery full_row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                            <?php
                                include "includes/sidebar.php";
                             ?>
                                <div class="blog_details">
                                        <!--show post-->
                                    <?php
                                    $query = "SELECT * FROM post WHERE id=$id";
                                    $post = $db->select($query);
                                     if ($post) {
                                         while ($result = $post->fetch_assoc()) {
                                    ?>
                                            <div class="blog_img overlay_one wow animated slideInUp"><img src="admin/<?php echo $result['image']; ?>" alt="image"></div>
                                            <div class="blog_content bg_white">
                                                <div class="blog_title mb_20 color_primary">
                                                    <h5><?php echo $result['title']; ?></h5>
                                                </div>
                                                <div class="admin">
                                                
                                                <span class="color_primary">Par - <?php echo $result['author']; ?></span>
                                                </div>
                                                <div class="date color_primary float-left"><?php echo $format->formatDate($result['date']);  ?></div>
                                                    
                                                <div class="single_blog_content d-inline-block mt_30 color_secondery wow animated slideInUp">
                                                    <p> <?php echo $result['body']; ?></p>
                                                </div>
                                            </div>
                                        <?php  } ?> <!--end while-->
                                    <?php  } else {
                                       header("location:index.php");
                                    } ?>

                                    <div id="disqus_thread"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    <div>
<!--    Blog Post End
==================================================-->
<?php include "includes/footer.php"; ?>