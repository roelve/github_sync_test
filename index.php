<?php get_header(); ?>

        <header id="header-3" class="header-3 soft-scroll">
            <nav>
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <nav class="pull">
                            <?php wp_nav_menu( array(
                                    'menu' => 'primary',
                                    'menu_class' => 'top-nav',
                                    'container' => '',
                                    'depth' => '1'
                            ) ); ?>
                        </nav>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- /.nav -->
        </header>
        <header id="header-3" class="header-3 soft-scroll">
            <nav>
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <nav class="pull">
                            <?php wp_nav_menu( array(
                                    'menu' => 'primary',
                                    'menu_class' => 'top-nav',
                                    'container' => '',
                                    'depth' => '1'
                            ) ); ?>
                        </nav>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- /.nav -->
            <?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'blocks_header_3_bck' ), 'large' ); ?>
            <section class="hero" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
                <div class="container">
                    <div class="brand"><a href="<?php echo esc_url( home_url() ); ?>"> <?php echo PG_Image::removeSizeAttributes( wp_get_attachment_image( get_theme_mod( 'blocks_header_3_logo' ), 'large', null, array(
                                    'class' => 'brand-img img-responsive'
                            ) ), 'both' ); ?> </a>
                    </div>
                    <div class="navicon"><a id="nav-toggle" class="nav-slide-btn" href="#"><span></span></a>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="editContent">
                            <h1><?php echo get_theme_mod( 'blocks_header_3_title', __( 'Pinegrow Blocks', 'github_sync_test' ) ); ?></h1>
                        </div>
                        <div class="editContent">
                            <p class="lead"><?php echo get_theme_mod( 'blocks_header_3_text', __( 'Lots of easy to use component blocks for fast Bootstrap site development', 'github_sync_test' ) ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="col-md-6"><a href="<?php echo esc_url( get_theme_mod( 'blocks_header_3_button1_url' ) ); ?>" class="btn btn-info btn-block"><?php echo get_theme_mod( 'blocks_header_3_button1_label', __( 'Find out more', 'github_sync_test' ) ); ?></a>
                        </div>
                        <div class="col-md-6"><a href="<?php echo esc_url( get_theme_mod( 'blocks_header_3_button2_url' ) ); ?>" class="btn btn-danger btn-block"><?php echo get_theme_mod( 'blocks_header_3_button2_label', __( 'Buy here', 'github_sync_test' ) ); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <section id="content-1-3" class="content-block content-1-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="underlined-title">
                            <h1><?php echo get_theme_mod( 'blocks_content_1_3_title', __( 'Every service under one roof', 'github_sync_test' ) ); ?></h1>
                            <hr>
                        </div>
                        <div class="services-wrapper">
                            <?php
                                $services_args = array(
                                    'post_parent' => get_theme_mod('blocks_content_1_3_source'),
                                    'post_type' => 'blocks_content',
                                    'post_status' => 'publish',
                                    'nopaging' => true,
                                    'order' => 'ASC',
                                    'orderby' => 'menu_order'
                                )
                            ?>
                            <?php $services = new WP_Query( $services_args ); ?>
                            <?php if ( $services->have_posts() ) : ?>
                                <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                                    <?php PG_Helper_v2::rememberShownPost(); ?>
                                    <div class="col-md-4">
                                        <div class="icon bg-crete"><span class="fa <?php echo get_post_meta( get_the_ID(), 'icon', true ); ?>"></span>
                                        </div>
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'github_sync_test' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <section id="content-2-2" class="content-block content-2-2 bg-pomegranate">
            <div class="container">
                <!-- Start Row -->
                <div class="row">
                    <?php
                        $blocks_args = array(
                            'post_parent' => get_theme_mod('blocks_content_2_2_source'),
                            'post_type' => 'blocks_content',
                            'post_status' => array( 'publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash', 'any' ),
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        )
                    ?>
                    <?php $blocks = new WP_Query( $blocks_args ); ?>
                    <?php if ( $blocks->have_posts() ) : ?>
                        <?php $blocks_item_number = 0; ?>
                        <?php while ( $blocks->have_posts() ) : $blocks->the_post(); ?>
                            <?php PG_Helper_v2::rememberShownPost(); ?>
                            <div class="col-sm-4 col-xs-12 text-center">
                                <div class="icon-outline"><span class="fa <?php echo get_post_meta( get_the_ID(), 'icon', true ); ?>"></span>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                            <?php $blocks_item_number++; ?>
                            <?php if( $blocks_item_number % 3 == 0 ) echo '<div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>'; ?>
                            <?php if( $blocks_item_number % 1 == 0 ) echo '<div class="clearfix visible-xs-block"></div>'; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'github_sync_test' ); ?></p>
                    <?php endif; ?>
                </div>
                <!--// END Row -->
            </div>
        </section>
        <section id="content-3-4" class="content-block content-3-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <?php echo PG_Image::removeSizeAttributes( wp_get_attachment_image( get_theme_mod( 'blocks_content_3_4_image' ), null, null, array(
                                'class' => 'img-responsive'
                        ) ), 'both' ); ?>
                        <h2><?php echo get_theme_mod( 'blocks_content_3_4_title', __( 'Young Photographer of the Year', 'github_sync_test' ) ); ?></h2>
                        <p><?php echo get_theme_mod( 'blocks_content_3_4_text', __( 'Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Laceaque quiae sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent accullignis lomnus.', 'github_sync_test' ) ); ?></p>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <?php
                            $blocks_args = array(
                                'post_parent' => get_theme_mod('blocks_content_3_4_source'),
                                'post_type' => 'blocks_content',
                                'post_status' => 'publish',
                                'nopaging' => true,
                                'order' => 'ASC',
                                'orderby' => 'menu_order'
                            )
                        ?>
                        <?php $blocks = new WP_Query( $blocks_args ); ?>
                        <?php if ( $blocks->have_posts() ) : ?>
                            <div class="panel-group">
                                <?php $blocks_item_number = 0; ?>
                                <?php while ( $blocks->have_posts() && $blocks_item_number++ < 9999 ) : $blocks->the_post(); ?>
                                    <?php PG_Helper_v2::rememberShownPost(); ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a class="panel-toggle <?php if($blocks_item_number > 1) echo 'collapsed'; ?>" data-toggle="collapse" data-parent=".panel-group" href="<?php echo '#panel-'.get_the_ID() ?>"><span><?php the_title(); ?></span></a></h4>
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div id="panel-<?php the_ID(); ?>" class="panel-collapse collapse <?php if($blocks_item_number == 1) echo 'in'; ?>">
                                            <div class="panel-body">
                                                <?php the_content(); ?>
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'github_sync_test' ); ?></p>
                        <?php endif; ?>
                        <!-- /.accordion -->
                    </div>
                    <!-- /.column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <section id="content-3-6" class="content-block content-3-6">
            <div class="container">
                <div class="row">
                    <!-- Feature Box 1 -->
                    <?php
                        $blocks_args = array(
                            'post_parent' => get_theme_mod('blocks_content_3_6_source'),
                            'post_type' => 'blocks_content',
                            'post_status' => 'publish',
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        )
                    ?>
                    <?php $blocks = new WP_Query( $blocks_args ); ?>
                    <?php if ( $blocks->have_posts() ) : ?>
                        <?php $blocks_item_number = 0; ?>
                        <?php while ( $blocks->have_posts() ) : $blocks->the_post(); ?>
                            <?php PG_Helper_v2::rememberShownPost(); ?>
                            <div class="col-sm-4 col-xs-12">
                                <div class="feature-box">
                                    <div class="icon"><span class="fa <?php echo get_post_meta( get_the_ID(), 'icon', true ); ?>"></span>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php $blocks_item_number++; ?>
                            <?php if( $blocks_item_number % 3 == 0 ) echo '<div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>'; ?>
                            <?php if( $blocks_item_number % 1 == 0 ) echo '<div class="clearfix visible-xs-block"></div>'; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'github_sync_test' ); ?></p>
                    <?php endif; ?>
                    <!-- Feature Box 2 -->
                    <!-- Feature Box 3 -->
                </div>
                <!-- Row Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <section id="content-2-8" class="content-2-8 content-block-nopad bg-crete">
            <div class="image-container col-sm-6 pull-left">
                <?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'blocks_content_2_8_image' ), 'large' ); ?>
                <div class="background-image-holder" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
</div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 content clearfix">
                        <h1><?php echo get_theme_mod( 'blocks_content_2_8_title', __( 'Our customer support is the very best!', 'github_sync_test' ) ); ?></h1>
                        <p class="lead"><?php echo get_theme_mod( 'blocks_content_2_8_text', __( 'We don\\\'t want to overload you with hundreds of styles you don\\\'t want, or need. We give you a strong base to express your own creativity.', 'github_sync_test' ) ); ?></p>
                        <?php
                            $blocks_args = array(
                                'post_parent' => get_theme_mod('blocks_content_2_8_source'),
                                'post_type' => 'blocks_content',
                                'post_status' => 'publish',
                                'nopaging' => true,
                                'order' => 'ASC',
                                'orderby' => 'menu_order'
                            )
                        ?>
                        <?php $blocks = new WP_Query( $blocks_args ); ?>
                        <?php if ( $blocks->have_posts() ) : ?>
                            <?php while ( $blocks->have_posts() ) : $blocks->the_post(); ?>
                                <?php PG_Helper_v2::rememberShownPost(); ?>
                                <div class="row pad15">
                                    <div class="col-xs-2"><span class="fa fa-4x <?php echo get_post_meta( get_the_ID(), 'icon', true ); ?>"></span>
                                    </div>
                                    <div class="col-xs-10">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <!-- /.row -->
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.row-->
            </div>
            <!-- /.container -->
        </section>
        <div class="map min-height-500px" data-map-lat="<?php echo get_theme_mod( 'blocks_map_lat' ); ?>" data-map-long="<?php echo get_theme_mod( 'blocks_map_long' ); ?>" data-map-zoom="<?php echo get_theme_mod( 'blocks_map_zoom' ); ?>" data-marker-image="<?php echo esc_url( get_template_directory_uri().'/images/map-pin.png' ) ?>"></div>        

<?php get_footer(); ?>