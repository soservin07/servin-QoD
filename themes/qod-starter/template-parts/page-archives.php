<?php  //***********initiate variables */
$args = "";
$query = "";

?>

<h2 class="entry-title">
    <?php the_title(); ?>
</h2>
<?php
$query = get_posts('posts_per_page=-1');
//************get all most wanted authors */
foreach ($query as $x) {
    // echo '<a href="' . get_permalink($x) . '">' . $x->post_title . '</a><br>';
}
wp_reset_postdata();
// $query = fetch_feed(get_home_url() . '/wp-json/wp/v2/posts');
// $query = 'http:' . get_site_url(null, '/wp-json/wp/v2/posts?filter[order]=rand&filter[posts_per_page]=100', 'http');
// $query = file_get_contents($query);
// $query = json_decode($query);
//$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] //fetch_feed($url);
// echo 'http://localhost:3000/qod/wp-json/wp/v2/posts?filter[order]=rand&filter[posts_per_page]=10';

//********get all categories */
// $query = wp_list_categories();




//*****************get all TAGS*** */
$args = array(
    'taxonomy' => 'post_tag',
    'hide_empty' => true
);
$query = get_tags($args);
?>

<pre>
    <?php print_r($query);
    ?>
</pre>


<section class="entry-content">

</section>