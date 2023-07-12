<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('title_products');?></h2>
            <p><?php the_field('description');?></p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
//                    'category'    => 1,
                'tag' => 'filter-web',
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>

                                <?php the_post_thumbnail(array(416, 312), array('class' => "img-fluid")); ?>

                                <a href="<?php the_post_thumbnail_url(); ?>"
                                   data-gallery="portfolioGallery"
                                   class="link-preview portfolio-lightbox" title="Preview"><i
                                        class="bx bx-plus"></i></a>
                                <a href="<?php echo get_page_link(63)?>" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="<?php echo get_page_link(63)?>"><?php the_title(); ?></a></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
//                    'category'    => 1,
                'tag' => 'filter-app',
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>

                                <?php the_post_thumbnail(array(416, 312), array('class' => "img-fluid")); ?>

                                <a href="<?php the_post_thumbnail_url(); ?>"
                                   data-gallery="portfolioGallery"
                                   class="link-preview portfolio-lightbox" title="Preview"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.php" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.php"><?php the_title(); ?></a></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
//                    'category'    => 1,
                'tag' => 'filter-card',
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>

                                <?php the_post_thumbnail(array(416, 312), array('class' => "img-fluid")); ?>

                                <a href="<?php the_post_thumbnail_url(); ?>"
                                   data-gallery="portfolioGallery"
                                   class="link-preview portfolio-lightbox" title="Preview"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.php" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.php"><?php the_title(); ?></a></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>



        </div>

    </div>
</section>