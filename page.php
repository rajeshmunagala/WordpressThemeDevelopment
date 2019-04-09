<?php

get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    <article class="post page">
        <h1><?php the_title(); ?></h1>
        <?php the_content();?>
    </article>
    <?php endwhile;
else: 
    echo "<p>You don't have posts</p>";
endif;
get_footer();


?>