        <!-- ================= Instagram ================= -->

        <div class="row instagram">
            <h2>Instagram</h2>
            <div class="col-sm-2 col-xs-4 photo">
                <img src="<?php echo get_template_directory_uri(). '/img/post2.jpg' ?>" alt="">
            </div>
            <div class="col-sm-2 col-xs-4 photo">
                <img src="<?php echo get_template_directory_uri(). '/img/post3.jpg' ?>" alt="">
            </div>
            <div class="col-sm-2 col-xs-4 photo">
                <img src="<?php echo get_template_directory_uri(). '/img/post1.jpg' ?>" alt="">
            </div>
            <div class="col-sm-2 col-xs-4 photo">
                <img src="<?php echo get_template_directory_uri(). '/img/post3.jpg' ?>" alt="">
            </div>
            <div class="col-sm-2 col-xs-4 photo">
                <img src="<?php echo get_template_directory_uri(). '/img/post2.jpg' ?>" alt="">
            </div>
            <div class="col-sm-2 col-xs-4 photo">
                <img src="<?php echo get_template_directory_uri(). '/img/post2.jpg' ?>" alt="">
            </div>
        </div>

        <!-- ================= Footer ================= -->

        <div class="row footer">
            <div class="col-sm-4 col-xs-4 tags">
                <h3>Tags</h3>
                <!--
                <div class="col-sm-4 col-xs-6 single">
                    <a href="#">lifestyle</a>
                </div>
                <div class="col-sm-4 col-xs-6 single">
                    <a href="#">sport</a>
                </div>
                <div class="col-sm-4 col-xs-6 single">
                    <a href="#">travel</a>
                </div>
                <div class="col-sm-4 col-xs-6 single">
                    <a href="#">gym</a>
                </div>-->
                
                
                <?php
                    $tags = get_tags();
                    $html = '';
                     
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );

                        $html .= "<div class='col-sm-4 col-xs-6 single'>";

                        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                        $html .= "{$tag->name}</a>";

                         $html .= "</div>";
                    }
                    echo $html;
                ?>
      
            </div>
            <div class="col-sm-4 col-xs-4 subscribe">
                <h3>Subscribe</h3>
                <p>Receive notifications of new posts by email.</p>
                <form action="">
                    <div class="form-group">
                        <input class="form-control" id="subscribe" placeholder="Your e-mail">
                    </div>
                    <button type="submit" class="btn btn-default">SUBSCRIBE</button>
                </form>
            </div>
            <div class="col-sm-4 col-xs-4 categoriesFooter">
               <h3>Categories</h3>
                <?php
                    $categories = get_categories();
                    foreach($categories as $category) {
                       echo '<div class="category"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_stylesheet_directory_uri() . '/js/vendor/bootstrap.min.js' ?>"></script>

    <script src="<?php echo get_stylesheet_directory_uri() . '/js/menu.js' ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri() . '/js/arrow.js' ?>"></script>
    
    <!--wordpress footer-->
    <?php wp_footer(); ?> 
</body>
</html>





