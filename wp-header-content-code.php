<!----------------- LOGO --------------------->
<?php
    $logo = wp_get_attachment_image_src( absint( get_theme_mod( 'ocin_logo' ) ), 'full' );
    $logo = $logo[0];
?>
<?php if ( is_front_page() && is_home() ) : ?>
    <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="ql_logo">
            <?php if ( !empty( $logo ) ) : echo '<img src="' . esc_url( $logo ) . '" />'; else: bloginfo( 'name' ); endif; ?>
        </a>
    </p>
    <?php else : ?>
    <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="ql_logo">
            <?php if ( !empty( $logo ) ) : echo '<img src="' . esc_url( $logo ) . '" />'; else: bloginfo( 'name' ); endif; ?>
        </a>
    </p>
<?php endif; ?>
<!----------------- Slogan --------------------->
<h5 class="site-tagline"><?php echo get_bloginfo( 'description' ); ?></h5>
<!----------------- contact (Here 72 is user id)--------------------->
<div class="mobile-number"><i class="fas fa-phone-alt"></i><?php printf( get_the_author_meta( 'user_description',72 ) ); ?> <span>|</span></div>
<div class="Email-address"><i class="fas fa-envelope"></i><?php printf( get_the_author_meta( 'user_email',72 ) ); ?> <span>|</span></div>
<!----------------- search (In the action Field pass here your action link)--------------------->
<form role="search" method="get" class="woocommerce-product-search" action="https://woocommerce-532574-1802103.cloudwaysapps.com/" style="display:flex;">
    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Søg" value="" name="s">
    <button type="submit" value="Søg">Søg</button>
    <input type="hidden" name="post_type" value="product">
</form>
<!-----------------if woocommerse active cart icon with product --------------------->
<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
    <div class="cart">
        <div class="ql_cart_wrap">
            <button class="kurv-button" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>">
                <i class="fas fa-shopping-cart"></i>
                <span>KURV</span>
                <span class="count">(<?php echo esc_html( WC()->cart->cart_contents_count ); ?>)</span>
                <i class="ql-chevron-down"></i>
            </button>
            <div id="ql_woo_cart">
                <?php global $woocommerce; ?>
                <?php the_widget( 'WC_Widget_Cart' );  ?>
            </div><!-- /ql_woo_cart --> 
        </div>
    </div>
<?php } //if WooCommerce active ?>
<!-----------------menu --------------------->
<div class="collapse in navbar-collapse" id="ql_nav_collapse">
    <nav id="jqueryslidemenu" class="jqueryslidemenu navbar" role="navigation">
        <?php
            wp_nav_menu( array(                     
                'theme_location'    => 'primary',
                'menu_id'           => 'primary-menu',
                'depth'             => 3,
                'menu_class'        => 'nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            ));
        ?>
    </nav>
</div>
<!----------------- Mobile cart clickeable carticon--------------------->
<a class="kurv-button" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>">
    <img src="http://woocommerce-532574-1802103.cloudwaysapps.com/wp-contents/uploads/2021/03/shopping-cart-2.png" alt="shopping-cart">
    <span class="count"><p><?php echo esc_html( WC()->cart->cart_contents_count ); ?></p></span>
</a>

<!----------------- Mobile menu--------------------->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    <p>menu</p>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
        <?php
        wp_nav_menu( array(                     
            'theme_location'  => 'primary',
            'menu_id' => 'primary-menu',
            'depth'             => 3,
            'menu_class'        => 'nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
        ));
        ?>
    </nav>
</div><!-- /ql_nav_collapse -->

