<?php
    get_header();
?>

<!--LOOP-->
<div>

    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                //the_content();
                get_template_part('template-parts/article', 'top');
                get_template_part('template-parts/article', 'content');
                get_template_part('template-parts/article', 'individuals');
                
            }
        }
    ?>
<!-- // LOOP -->
</div>
   

<?php
    get_footer();
?>    