<?php
   $query = get_categories('taxonomy=category');
   
   $tmp='<ul>';
   foreach($query as $x){
    $tmp.='<li><a href="'.get_term_link($x).'">'. $x->slug.'</a></li>';
    //    $tmp.='<li><a href="">'. get_category_by_slug($x).'</a></li>';
   }
   $tmp.='</ul>';
   echo $tmp;
    wp_reset_postdata();
?>
