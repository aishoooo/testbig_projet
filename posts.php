<?php include "includes/header.php" ?>
<?php
if (!isset($_GET['category']) || $_GET['category'] == NULL) {
    echo "try again";
} else {
    $id = $_GET['category'];
}
?>




<!--    Blog Post Start
==================================================-->
<section class="blog_area py_80 bg_secondery full_row">
    <div class="container">
        <div class="row">
        <h2 class="tm-text-primary">Mes Projets</h2>
        <hr class="mb-5">
            <div class="col-md-7 col-lg-8">
            <?php
            include "includes/sidebar.php";
            ?>
                <div class="blog_list mb_60">
                    <?php
                    $query = "SELECT * FROM post WHERE category_id = $id ORDER BY id DESC ";
                    $post = $db->select($query);
                    if ($post) {
                        while ($result = $post->fetch_assoc()) {
                    ?>
                            <div class="blog_item mb_30 wow animated slideInUp">
                                <div class="comments">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    <span class="color_white">12</span>
                                </div>
                                <div class="blog_img overlay_one"><img src="admin/<?php echo $result['image']; ?>" alt="image"></div>
                                <div class="blog_content bg_white">
                                    <div class="blog_title">
                                        <a class="color_primary" href="post_details.php?id=<?php echo $result['id'];  ?>">
                                            <h5><?php echo $result['title'];  ?></h5>
                                        </a>
                                    </div>
                                    <p class="mt_15 mb_30"> <?php echo $format->textShorten($result['body']);  ?></p>

                                    <div class="admin">
                                        <span class="color_white">Par - <?php echo $result['author']; ?></span>
                                    </div>
                                    <div class="date float-right color_primary"><?php echo $format->formatDate($result['date']);  ?></div>
                                </div>
                            </div>
                        <?php  } ?> <!--end while-->
                    <?php  } else { ?>
                        <h3>AUCUNE publication disponible dans cette catégorie</h3>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--    Blog Post End
==================================================-->
<?php include "includes/footer.php"; ?>