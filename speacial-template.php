<?php

/*
Template Name: Special Template
*/

get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    <article class="post page">
        <h1><?php the_title(); ?></h1>
<!--        info box-->
       <div class="info-box">
           <h4>Disclaimer Title</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est assumenda reiciendis nemo, possimus vel labore non dolorem minima sit. Saepe explicabo rerum esse ipsa maxime harum, debitis quod optio totam.</p>
       </div>
        <?php the_content();?>
    </article>
    <?php endwhile;
else: 
    echo "<p>You don't have posts</p>";
endif;
get_footer();


?>