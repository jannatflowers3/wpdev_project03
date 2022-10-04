
<?php
get_header();

?>
  <div id="posts">
    <?php
if(have_posts()):
  while(have_posts()):
    the_post();
    ?>
    <div class="post">
      <h2><a href="<?php the_permalink();?>"><?php the_title()?>(<?php the_ID()?>)</a></h2>
      <p class="date">  <?php the_time( 'l, F jS, Y' ); ?> By <?php the_author() ?></p>
      <div class="entry">

        <p> 
           <!-- <img src="images/money.jpg" alt="" height="104" width="512" />   -->
           <?php the_post_thumbnail(); ?></p>
<?php  the_content()?>
       
      </div>
      <div class="postmetadata"> <span class="tags"><a href="#"> <?php  the_category();?> Uncategorized</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comments-no"><a href="#">  <?php comments_template() ?> 1 Comment</a></span> <br />
      </div>
    </div>
  
 
  <?php
  endwhile;
endif;
?>
</div>
 <?php
get_sidebar();
  ?>
</div>

<?php
get_footer();

?>

<?php
wp_footer();
?>
</body>
</html>
