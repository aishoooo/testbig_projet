<div class="blog_sidebar">
    <div class="widget mb_60 d-inline-block p_30 primary_link bg_white full_row wow animated slideInUp">
        <h3 class="widget_title mb_30 text-capitalize">Categories</h3>
        <div class="d-flex flex-wrap justify-content-start">
            <?php
            $query = "SELECT category.name,category.category_id,COUNT(post.id) FROM post
                        RIGHT JOIN category ON post.category_id = category.category_id
                        GROUP BY name";
            $category = $db->select($query);
            if ($category) {
                while ($result = $category->fetch_assoc()) {
            ?>
                    <div class="p-2">
                        <a href="posts.php?category=<?php echo $result['category_id']; ?>">
                            <?php echo $result['name']; ?>
                        </a>
                        <span class="badge badge-secondary"><?php echo $result['COUNT(post.id)']; ?></span>
                    </div>
                <?php  } ?> <!--end while-->
            <?php  } ?>
        </div>
    </div>
</div>



<!-- securisation du formulaire de contact, securisation php myadmin, sécurisation des failles xss, sécurisation du sql-->