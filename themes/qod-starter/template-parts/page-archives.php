<?php  //***********initiate variables */
$args = "";
$query = "";

?>

<h2 class="entry-title">
    <?php the_title(); ?>
</h2>
<section class="archive=content">
<h3>Quote Authors</h3>
    <?php
    //************get all most wanted authors */
    get_template_part('author');

    ?>

</section>
<section class="archive=content">
<h3>Categories</h3>
    <?php
    //********get all categories */
    get_template_part('category');
    ?>
</section>
<section class="archive=content">
<h3>Tags</h3>
    <?php
    //*****************get all TAGS*** */
        get_template_part('tag');
        
    ?>
</section>
<pre>
    <?php //print_r($query);
    ?>
</pre>


<section class="entry-content">

</section>