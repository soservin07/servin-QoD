<?php

$args = array(
    'taxonomy' => 'post_tag',
    'hide_empty' => true
);
$query = get_tags($args);
$tmp='<ul>';
foreach($query as $x){
    $tmp.= '<li><a href="'.get_term_link($x).'">'.$x->name.'</a></li>';
}
$tmp.='</ul>';
echo $tmp;
wp_reset_postdata();
?>


