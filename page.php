<?php

get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    <article class="post page">
    <?php if( has_children() OR $post->post_parent > 0) {?>
         <nav class="site-nav childern-links clearfix">
             <span class="parent-link"><a href="<?php echo get_the_permalink( get_top_ancestor_id()); ?> "><?php echo get_the_title( get_top_ancestor_id());?></a></span> 
             <ul>
                 <?php 
                    $args = array(
                        //'child_of' => $post->ID,
                        'child_of' => get_top_ancestor_id(),
                        'title_li' =>''
                    );?>
             <?php wp_list_pages($args);?>
             </ul>
         </nav>
      <?php } ?>
       
        <h1><?php the_title(); ?></h1>
        <?php the_content();?>
    </article>
    <?php endwhile;
else: 
    echo "<p>You don't have posts</p>";
endif;
get_footer();


?>