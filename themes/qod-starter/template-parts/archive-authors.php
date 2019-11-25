<?php
    

    $query = get_posts(array('posts_per_page'=>-1,
                            'hide_emptry'=>true));
    $tmp='<ul>';
        foreach ($query as $x) {
            
            $tmp.= '<li><a href="' . get_permalink($x) . '">' . $x->post_title . '</a></li>';
            
       }
    $tmp.='</ul>';
    echo $tmp;
    wp_reset_postdata();
?>