<?php
/*
Plugin Name:Make simple Header
Plugin URI: 
Description: Make short code for display custom Header.
Author: Cédric HOUNNOU
Version: 1.0
License: GPLv2 or later
*/

// this function must return a Header
?>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family: 'Montserrat M', sans-serif !important;
            color: #003441;
        }
        @media screen and (min-width: 1600px) and (max-width: 2500px)
		{
            header .first_nav{
                display: flex;
                flex-wrap: nowrap;
                background-color: #8c183e;
                padding-top: 25px;
                height: 50px;
            }
            header .first_nav div{
                padding-right: 0%;
                color: white;
            }
            header .first_nav div img{
                margin-top: 0px;
                
            } 
            header .separate_ln_logo{
                margin-right: 35%;
                margin-left: 12%;
                font-size: small;
            }
            header .associate_img_p{
                display: flex;
                flex-wrap: wrap;
            }
            header .associate_img_p div img{
                padding-left: 30%;
            }
            header .associate_img_p div p{
                margin-top: 5%;
                font-size:xx-small;
            }
            header .separe_2lastdiv{
                margin-right: 3%;
                margin-left: 20%;
            }
            
            /* for ul */
            header nav ul{
                display: flex;
                flex-wrap: nowrap;
                height: 28px;
                list-style:none;
            }
            header nav li {
                /* border-right: 3px solid #fae6e8;
                padding-right: 1%;
                width: 20%; */
                border-right: 2px solid #fae6e8;
                padding-right: 2%;
                margin-left: 3%;
                /* width: 8%; */

            }
            header nav li:nth-child(3){
                margin-right: 30%;
                border-right: 3px solid transparent;

            }
            header li a {
                color: black;
                text-decoration-line: none;
            }	
            header li:last-child {
                border-right: 3px solid transparent;
            }
            /* nav li:nth-child(2){
                margin-right: 15%;
                /* color: #8c183e; */
            /* }  */

    	}
		@media screen and (min-width: 375px) and (max-width: 505px)
		{
            header .first_nav{
            display: flex;
            flex-wrap: nowrap;
            background-color: #8c183e;
            padding-top: 25px;
            height: 50px;
            }
            header .first_nav div{
                padding-right: 0%;
                color: white;
            }
            header .first_nav div img{
                margin-top: 0px;
                
            } 
            header .separate_ln_logo{
                margin-right: 0%;
                margin-left: 12%;
                font-size: 58%;
                width: 58%; 
            }
            header .associate_img_p{
                display: flex;
                flex-wrap: wrap;
            }
            header .associate_img_p div img{
                padding-left: 30%;
            }
            header .associate_img_p div p{
                margin-top: 29%;
                font-size: 25%;
                width: max-content;
            }
            header .separe_2lastdiv{
                margin-right: 3%;
                margin-left: 20%;
            }
            
            /* for ul */
            header nav ul{
                display: flex;
                flex-wrap: nowrap;
                height: 16px;
                list-style:none;
            }
            header nav li {
                font-size: 30%;
                border-right: 2px solid #fae6e8;
                padding-right: 2%;
                margin-left: 3%;
                

            }
            header nav li:nth-child(3){
                margin-right: 30%;
                border-right: 3px solid transparent;

            }
            header li a {
                color: black;
                text-decoration-line: none;
            }	
            header li:last-child {
            border-right: 3px solid transparent;
             }
            /* nav li:nth-child(2){
                margin-right: 15%;
                /* color: #8c183e; */
            /* }  */


    	}
        @media screen and (min-width: 506px) and (max-width: 697px)
		{
            header .first_nav{
            display: flex;
            flex-wrap: nowrap;
            background-color: #8c183e;
            padding-top: 25px;
            height: 50px;
            }
            header .first_nav div{
                padding-right: 0%;
                color: white;
            }
            header .first_nav div img{
                margin-top: 0px;
                
            } 
            header .separate_ln_logo{
                margin-right: -7%;
                margin-left: 8%;
                font-size: 56%;
                width: 43%;
            }
            header .associate_img_p{
                display: flex;
                flex-wrap: wrap;
            }
            header .associate_img_p div img{
                padding-left: 30%;
            }
            header .associate_img_p div p{
                margin-top: 29%;
                font-size: 25%;
                width: max-content;
            }
            header .separe_2lastdiv{
                margin-right: 3%;
                margin-left: 20%;
            }
            
            /* for ul */
            header nav ul{
                display: flex;
                flex-wrap: nowrap;
                height: 16px;
                list-style:none;
            }
            header nav li {
                font-size: 30%;
                border-right: 2px solid #fae6e8;
                padding-right: 2%;
                margin-left: 3%;
                

            }
            header nav li:nth-child(3){
                margin-right: 30%;
                border-right: 3px solid transparent;

            }
            header li a {
                color: black;
                text-decoration-line: none;
            }	
            header li:last-child {
            border-right: 3px solid transparent;
             }
            /* nav li:nth-child(2){
                margin-right: 15%;
                /* color: #8c183e; */
            /* }  */


    	}
        @media screen and (min-width: 698px) and (max-width: 1002px)
		{
            
            header .first_nav{
                display: flex;
                flex-wrap: nowrap;
                background-color: #8c183e;
                padding-top: 25px;
                height: 50px;
            }
            header .first_nav div{
                padding-right: 0%;
                color: white;
            }
            header .first_nav div img{
                margin-top: 0px;
                
            } 
            header .separate_ln_logo{
                margin-right: 0%;
                margin-left: 6%;
                font-size: small;
                width: 54%;
            }
            header .associate_img_p{
                display: flex;
                flex-wrap: wrap;
            }
            header .associate_img_p div img{
                padding-left: 30%;
            }
            header .associate_img_p div p{
                margin-top: 5%;
                font-size: xx-small;
                width: max-content;
            }
            header .separe_2lastdiv{
                margin-right: 3%;
                margin-left: 20%;
            }
            
            /* for ul */
            header nav ul{
                display: flex;
                flex-wrap: nowrap;
                height: 16px;
                list-style:none;
            }
            header nav li {
                font-size: 55%;
                border-right: 2px solid #fae6e8;
                padding-right: 2%;
                margin-left: 3%;
                /* width: 8%; */

            }
            header nav li:nth-child(3){
                margin-right: 30%;
                border-right: 3px solid transparent;

            }
            header li a {
                color: black;
                text-decoration-line: none;
            }
            header li:last-child {
                border-right: 3px solid transparent;
            }	
            /* nav li:nth-child(2){
                margin-right: 15%;
                /* color: #8c183e; */
            /* }  */

    	}
        @media screen and (min-width: 1002px) and (max-width: 1600px)
		{
            
            header .first_nav{
                display: flex;
                flex-wrap: nowrap;
                background-color: #8c183e;
                padding-top: 25px;
                height: 50px;
            }
            header .first_nav div{
                padding-right: 0%;
                color: white;
            }
            header .first_nav div img{
                margin-top: 0px;
                
            } 
            header .separate_ln_logo{
                margin-right: 0%;
                margin-left: 6%;
                font-size: small;
                width: 38%;
            }
            header .associate_img_p{
                display: flex;
                flex-wrap: wrap;
            }
            header .associate_img_p div img{
                padding-left: 30%;
            }
            header .associate_img_p div p{
                margin-top: 5%;
                font-size: xx-small;
                width: max-content;
            }
            header .separe_2lastdiv{
                margin-right: 3%;
                margin-left: 20%;
            }
            
            /* for ul */
            header nav ul{
                display: flex;
                flex-wrap: nowrap;
                height: 16px;
                list-style:none;
            }
            header nav li {
                font-size: 55%;
                border-right: 2px solid #fae6e8;
                padding-right: 2%;
                margin-left: 3%;
                /* width: 8%; */

            }
            header nav li:nth-child(3){
                margin-right: 30%;
                border-right: 3px solid transparent;

            }
            header li a {
                color: black;
                text-decoration-line: none;
            }
            header li:last-child {
                border-right: 3px solid transparent;
            }	
            /* nav li:nth-child(2){
                margin-right: 15%;
                /* color: #8c183e; */
            /* }  */

    	}
    </style>
<?
function header(){
    ?> 
    <header>
        <nav class="first_nav">
            <div class="separate_ln_logo">
                EN/NL
            </div>
            <div class="for_logo">
            <!-- <img src='assets/Ohlala_RGB_macaron_light copie72dpi_web.png' height="200" alt='logo'> -->
            <?php twentytwenty_site_logo(); ?>
            </div>

            <div class="separe_2lastdiv">
                <div class="associate_img_p">
                    <div>
                        <img src="assets/icons8-utilisateur-24.png" height="30" alt="">
                        <p><a href=""></a> MY ACCOUNT</p>
                    </div>
                </div>
                
            </div>
            
            <div>
                <div class="associate_img_p">
                    <div>
                        <img src="assets/icons8-basket-60.png" height="30" alt="">

                        <p> MY BASKET</p>

                    </div>
                </div>
                
            </div>
        </nav>
        <!-- <nav class="second_nav">
            <div class="tfirst_div"><p>ONLINE SHOP</p></div>
            <div class="tfirst_div"><p>HANDMADE MACARONS</p></div>
            <div class="tfirst_div last_oft"><p>OUR FLAVOURS</p></div>
            <div class="tlast_div first_ofst"></div><p>OUR STORY</p></div>
            <div class="tlast_div last_ofst"></div><p>CONTACT US</p></div>
        </nav> -->
        <?php
                        if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
                            ?>

                                <nav aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

                                    <ul >

                                    <?php
                                    if ( has_nav_menu( 'primary' ) ) {

                                        wp_nav_menu(
                                            array(
                                                'container'  => '',
                                                'items_wrap' => '%3$s',
                                                'theme_location' => 'primary',
                                            )
                                        );

                                    } elseif ( ! has_nav_menu( 'expanded' ) ) {

                                        wp_list_pages(
                                            array(
                                                'match_menu_classes' => true,
                                                'show_sub_menu_icons' => true,
                                                'title_li' => false,
                                                'walker'   => new TwentyTwenty_Walker_Page(),
                                            )
                                        );

                                    }
                                    ?>

                                    </ul>

                                </nav><!-- .primary-menu-wrapper -->

                            <?php
                        }

                        if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
                            ?>

                            <div class="header-toggles hide-no-js">

                            <?php
                            if ( has_nav_menu( 'expanded' ) ) {
                                ?>

                                <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

                                    <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                        <span class="toggle-inner">
                                            <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                                            <span class="toggle-icon">
                                                <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                                            </span>
                                        </span>
                                    </button><!-- .nav-toggle -->

                                </div><!-- .nav-toggle-wrapper -->

                                <?php
                            }

                            if ( true === $enable_header_search ) {
                                ?>

                                <div class="toggle-wrapper search-toggle-wrapper">

                                    <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                                        <span class="toggle-inner">
                                            <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                            <span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
                                        </span>
                                    </button><!-- .search-toggle -->

                                </div>

                                <?php
                            }
                            ?>

                            </div><!-- .header-toggles -->
                            <?php
                        }
                        ?>

                    </div><!-- .header-navigation-wrapper -->

                </div><!-- .header-inner -->

                <?php
                // Output the search modal (if it is activated in the customizer).
                if ( true === $enable_header_search ) {
                    // get_template_part( 'template-parts/modal-search' );
                }
                ?>

    </header>
}
<?php
add_shortcode('custom_header', 'header');
?>