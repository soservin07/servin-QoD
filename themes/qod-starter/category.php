<?php
   $query =wp_list_categories($args);
   $tmp='<ul>';
   foreach($query as $x){
       
       $tmp.='<li>'. get_category_by_slug($x).'</li>';
   }
   $tmp.='</ul>';
   echo $tmp;
    wp_reset_postdata();
?>