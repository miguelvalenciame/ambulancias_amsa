<?php get_header(); ?>

<section class="hero-area">

    <div class="container">


        <div class="row mt-5 mb-5 ml-0 mr-0">

            <div class="col-md-6">



                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>


                <h1><?php the_title(); ?></h1>


                <?php  } // end while
                } // end if
                ?>


            </div>



            <div class="col-md-6">

                <center>

                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post(); ?>


                    <?php the_content(); ?>


                    <?php  } // end while
                    } // end if
                    ?>

                </center>
            </div>


        </div>

    </div>

</section>




<?php get_footer(); ?>