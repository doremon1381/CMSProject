<?php declare(strict_types=1); include("db.php"); include("search.php") ?>
<?php 
  $paginationNumb = 0;
?>
<!-- Blog entries-->
<div class="col-lg-8">
    <!-- Featured blog post-->
    <div class="card mb-4">
      <?php 
        if (!isset($searchingValue))
            $query = "select * from posts where post_type=1 limit 1 offset ".($paginationNumb*1);
        else 
            $query = "select * from posts where post_tags like '%$searchingValue%' and post_type=1 limit 1 offset ".($paginationNumb*1);
        $feature_post = $connection->query($query)->fetch_assoc();
      ?>
        <?php 
        if (isset($feature_post))
        {
        ?>
        <a href="#!"><img class="card-img-top" src="<?php echo $feature_post['post_img']; ?>" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted"><?php echo date("F j, y", strtotime($feature_post['post_date'])); ?></div>
            <h2 class="card-title"><?php echo $feature_post['post_title'] ?></h2>
            <p class="card-text"><?php echo $feature_post['post_content'] ?></p>
            <a class="btn btn-primary" href="#!">Read more →</a>
        </div> <?php } ?>
    </div>
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        <?php 
            if (!isset($searchingValue))
                $query = "select * from posts where post_type=0 limit 4 offset ".($paginationNumb * 4);
            else 
                $query = "select * from posts where post_type=0 and post_tags like '%$searchingValue%' limit 4 offset ".($paginationNumb * 4);
            
            $result = $connection->query($query);

            $nonFeaturedPosts = array(); 
            while ($record = $result->fetch_assoc()){
                array_push($nonFeaturedPosts, $record);
            }
        ?>        
        <div class="col-lg-6">
            <?php 
                if (isset($nonFeaturedPosts[0]))
                {
            ?>
            <!-- Blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="<?php echo $nonFeaturedPosts[0]['post_img'] ?>" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo date("F j,y",strtotime($nonFeaturedPosts[0]['post_date'])); ?></div>
                    <h2 class="card-title h4"><?php echo $nonFeaturedPosts[0]['post_title']; ?></h2>
                    <p class="card-text"><?php echo $nonFeaturedPosts[0]['post_content']; ?></p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div> <?php } ?>
            <?php 
                if (isset($nonFeaturedPosts[1]))
                { ?>
            <!-- Blog post-->
            <div class="card mb-4">
               <a href="#!"><img class="card-img-top" src="<?php echo $nonFeaturedPosts[1]['post_img'] ?>" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo date("F j,y",strtotime($nonFeaturedPosts[1]['post_date'])); ?></div>
                    <h2 class="card-title h4"><?php echo $nonFeaturedPosts[1]['post_title']; ?></h2>
                    <p class="card-text"><?php echo $nonFeaturedPosts[1]['post_content']; ?></p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div> <?php } ?>
        </div>
        <div class="col-lg-6">
            <?php 
                if (isset($nonFeaturedPosts[2]))
                {
            ?>
            <!-- Blog post-->
            <div class="card mb-4">
               <a href="#!"><img class="card-img-top" src="<?php echo $nonFeaturedPosts[2]['post_img'] ?>" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo date("F j,y",strtotime($nonFeaturedPosts[2]['post_date'])); ?></div>
                    <h2 class="card-title h4"><?php echo $nonFeaturedPosts[2]['post_title']; ?></h2>
                    <p class="card-text"><?php echo $nonFeaturedPosts[2]['post_content']; ?></p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            <?php } ?>
            <!-- Blog post-->
             <?php 
                if (isset($nonFeaturedPosts[3]))
                {
            ?>
            <div class="card mb-4">
               <a href="#!"><img class="card-img-top" src="<?php echo $nonFeaturedPosts[3]['post_img'] ?>" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo date("F j,y",strtotime($nonFeaturedPosts[3]['post_date'])); ?></div>
                    <h2 class="card-title h4"><?php echo $nonFeaturedPosts[3]['post_title']; ?></h2>
                    <p class="card-text"><?php echo $nonFeaturedPosts[3]['post_content']; ?></p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div> <?php } ?>
        </div>
    </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
            <li class="page-item"><a class="page-link" href="#!">2</a></li>
            <li class="page-item"><a class="page-link" href="#!">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
            <li class="page-item"><a class="page-link" href="#!">15</a></li>
            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
        </ul>
    </nav>
</div>