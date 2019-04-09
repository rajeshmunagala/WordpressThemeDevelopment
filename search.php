<?php

get_header();

if(have_posts()): ?>
   <h2>Search results for: <?php the_search_query(); ?></h2>
    
    <?php
    while(have_posts()): the_post(); ?>
    <article class="post <?php if(has_post_thumbnail()){?>has_thumbnail<?php }?>">
<!--      post thumnail is here-->
       <div class="post-thumnail">
          <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('samll-thumbnail');?>
          </a>
           
       </div>
       
        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        
        <p class="post-info"><?php the_time('F j, Y g:i a');?> | by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a> | Posted in 
        
        <?php
         $categories = get_the_category();
         $separator = ", ";
         $output = '';
        
        if ($categories) {
            foreach($categories as $category){
                $output .= '<a href="'. get_category_link($category->term_id) .'">'.$category->cat_name .'</a>'. $separator;
            }
            echo trim($output, $separator);
        }
        ?>
        </p>
          
           <p> <?php the_excerpt();?> </p>
      
    </article>
    
    <?php endwhile;
else:
    echo "<p>You don't have posts</p>";
endif;

get_footer();
?>