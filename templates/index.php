<div id="content-wrapper">
            
            <div class="container_12">
                <ul class="grid_9 content-sidebar-right">
            
            <li class="categories">
                     <h5 style="background:#D74142; color:#FFF; padding-left:5px; padding-top:3px; padding-bottom:3px; margin-bottom:10px;"><strong>Categories</strong></h5>
             </li>

                    <li class="product">
                        <?php foreach (product_get_all() as $product): ?>
                            <section class="product-info">
                                <ul>
                                    <?php $images = json_decode($product['images']) ?>
                                    <?php $image = array_shift($images) ?>
                                    <li>
                                     <img src="upload/medium-<?php echo $image ?>" width="200" height="150">
                                    </li>

                                    <li>
                                        <strong><span class="text-dark" style="font-size:15px"><a href="detail.php?id=10"><?php echo $product['name'] ?></a></span></strong><span class="text-dark"></span>

                                    </li>

                                    <li>
                                        <span class="text-dark"><strong>Author</strong>:</span>
                                        <span class="text-light"><?php echo $product['user_name'] ?></span>
                                    </li>

                                    <li>
                                        <span class="text-dark"><strong>Address:</strong></span>
                                        <span class="text-light"><?php echo $product['user_address'] ?></span></li>
                                </ul>
                                <a href="http://themeforest.net/item/moderna-responsive-html5-template/2857189" class="btn-small">
                                    <span>Request</span>
                                </a><!-- button end -->
                            </section>
                        <?php endforeach ?>
                  </li>
                               <ul class="pagination">
                               <li class="disabled"><a href="#">&laquo;</a></li>
                               <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
                               </ul>
                </ul>
 
                <aside class="grid_3 aside">

                    <ul class="login-widgets">
     
          <!-- categories widget end -->
                        
                        <li class="categories">
                            <h5><strong>Categories</strong></h5>
                            <ul class="arrow-list">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="services.html">Our services</a></li>
                                <li><a href="page-sidebar-left.html">Page with left sidebar</a></li>
                                <li><a href="page-sidebar-right.html">Page with right sidebar</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="product-details.html">Product details</a></li>
                                <li><a href="404.html">404 error page</a></li>
                            </ul>
                        </li><!-- categories widget end -->

                        <li class="tweets-feed">
                            <h5>Twitter widget</h5>
                            <div class="tweets-list-container aside">
                            </div>
                        </li>
                    </ul><!-- sidebar widgets end -->
                </aside><!-- sidebar end -->

            </div><!-- container_12 end -->
        </div>