
   <?php get_header(); ?>
      <div class="row">
       <div class="col-sm-6 blog-main">
           <?php 
           if (have_posts()): while(have_posts()) : the_post();
            get_template_part('content-single',get_post_format() ); 
            endwhile;
            ?>
           <nav>
            
            <ul class="pager">
                    <li><?php next_posts_link('previous');?></li>
                    <li><?php previous_posts_link('next');?></li>
       </ul>
       </nav>
            <?php endif;
           ?>
           
     

        </div>
          <!-- /.blog-main -->
        <?php get_sidebar(); ?>
          
      </div>

        

    <!-- /.row -->
<?php get_footer(); ?>
      
   <!-- /.container -->

   
