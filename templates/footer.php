       <!-- footer wrapper start -->
        <div id="footer-wrapper">

            <div class="shadow-top"></div>

            <footer id="footer" class="container_12">

                <!-- sliding text article start -->
                <article class="grid_3 jcarousellite carousel-article">
                    <h4>Sliding text article</h4>

                    <ul id="foo3" class="carousel-li">
                        <li>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error 
                                sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo 
                                inventore veritatis et quasi.  
                            </p>
                        </li>

                        <li>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error 
                                sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo 
                                inventore veritatis et quasi. 
                            </p>
                        </li>

                        <li>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error 
                                sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo 
                                inventore veritatis et quasi. 
                            </p>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                    <div class="carousel-pagination" id="foo3_pag"></div>

                </article><!-- sliding text article end -->

                <!-- latest blog entries start -->
                <article class="grid_3">
                    <h4>Latest blog entries</h4>

                    <ul class="footer-blog">
                        <li>
                            <div class="meta">
                                <p>
                                    21 <br />
                                    <span class="date">JAN</span>
                                </p>
                            </div>
                            <div class="post">
                                <a href="blog.html">
                                    Sed ut perspiciatis unde omnis iste  |  
                                    <span class="light">Web design</span>
                                </a>
                            </div> 
                        </li> 

                        <li>
                            <div class="meta">
                                <p>
                                    22 <br />
                                    <span class="date">SEP</span>
                                </p>
                            </div>
                            <div class="post">
                                <a href="blog.html">
                                    Sed ut perspiciatis unde omnis iste  |  
                                    <span class="light">Photography</span>
                                </a>
                            </div> 
                        </li> 
                    </ul>
                </article><!-- latest blog entries end -->

                <!-- instagram feed start -->
                <article class="grid_3 social-feed instagram-feed">
                    <h4>Instagram photo stream</h4>
                </article><!-- instagram feed end -->


                <!-- contact start -->
                <article class="grid_3">
                    <h4>Contact us</h4>
                    <p>
                        You can reach us on social networks, or send us a message 
                        through our contact form <a href="contact.html" class="text-red">here.</a>
                    </p>

                    <ul class="social">
                        <li class="dribbble">
                            <a href="#">dribbble</a>
                        </li>

                        <li class="facebook">
                            <a href="#">facebook</a>
                        </li>

                        <li class="pinterest">
                            <a href="#">pinterest</a>
                        </li>

                        <li class="twitter">
                            <a href="#">twitter</a>
                        </li>
                    </ul>
                </article><!-- contact end -->
            </footer><!-- footer end -->

            <!-- copyright container start -->
            <section class="copyright-container">

                <div class="copyright container_12">
                    <p>
                        Copyright Alexx 2012. All rights reserved. Theme by 
                        <span class="text-red">Pixel-industry.</span>
                    </p>

                    <ul class="breadcrumbs">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="active">
                            <a href="products.html">Pages</a>
                        <li>
                            <a href="portfolio3.html">Portfolio</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="elements.html">Features</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul> 
                </div>
            </section><!-- copyright container end -->
        </div><!-- footer wrapper end -->

        <script>
            $(window).load(function() {
                $('#slider1, #slider2').nivoSlider({
                    pauseTime: 3000
                });
            });
            
            $('.tweets-list-container').tweetscroll({
                username: 'pixel_industry', 
                time: true, 
                limit: 11, 
                replies: true, 
                position: 'append',
                date_format: 'style2',
                animation: 'slide_up',
                visible_tweets: 2
            });
            
            $("#foo3").carouFredSel({
                items: 1,
                auto: true,
                scroll: 1,
                pagination  : "#foo3_pag"
            });
            
            //placeholder fix
            $('input[placeholder], textarea[placeholder]').placeholder();
        </script>
        
               <script>
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            
            /* ================ TWEETS SCROLL ================ */
            $('.tweets-list-container').tweetscroll({
                username: 'pixel_industry', 
                time: true, 
                limit: 11, 
                replies: true, 
                position: 'append',
                date_format: 'style2',
                animation: 'slide_up',
                visible_tweets: 1
            });
            
            $("#foo3").carouFredSel({
                items: 1,
                auto: true,
                scroll: 1,
                pagination  : "#foo3_pag"
            });

            //placeholder fix
            $('input[placeholder], textarea[placeholder]').placeholder();
            
        </script>
        
    </body>
</html>
