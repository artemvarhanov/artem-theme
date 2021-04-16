<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
        
       <div class="container-about">
         <?php the_content(); ?>
       </div>
                
             
    <?php
    if ( function_exists('dynamic_sidebar') ) {
      dynamic_sidebar('sidebar');
    } 
    ?>
            <?php get_footer(); ?>
        </main>
        
    </div>
      
</body>

   