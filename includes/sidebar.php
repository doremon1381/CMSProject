<?php declare(strict_types=1); include("db.php") ?>

<div class="col-lg-4">
  <!-- Search widget-->
  <div class="card mb-4">
      <div class="card-header">Search</div>
      <div class="card-body">
        <form action="" method="post">
            <div class="input-group">
                <input class="form-control" name="search" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                <button class="btn btn-primary" id="button-search" type="submit" name="submit">Go!</button>
            </div>
        </form>
      </div>
  </div>
  <!-- Categories widget-->
  <div class="card mb-4">
      <div class="card-header">Categories</div>
      <div class="card-body">
          <div class="row">
              <div class="col-sm-6">
                  <ul class="list-unstyled mb-0">
                    <?php 
                        $query = "select * from categories";
                        $queryResult = $connection->query($query);
                        if (!$queryResult)
                            die("ERROR");
                        while($r = $queryResult->fetch_assoc()){
                    ?>
                      <li><a href="<?php 
                        echo empty($r['href']) ? '#!' : $r['href'];
                      ?>"><?php echo $r['cat_type']; ?></a></li>
                      <?php } ?>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- Side widget-->
  <div class="card mb-4">
      <div class="card-header">Side Widget</div>
      <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
  </div>
</div>