<?php

function framepress_breadcrumb() { 
echo '<ul id="crumbs">'; 
 
if (!is_home()) { 
echo '<li><a href="'; 
echo get_option('home'); 
echo '">'; 
echo 'Home'; 
echo "</a></li>"; 
 
if (is_category() || is_single()) { 
echo '<i class="fa fa-angle-double-right"></i><li>'; 
the_category(' </li><li> '); 
 
if (is_single()) { 
echo '</li><i class="fa fa-angle-double-right"></i><li>'; 
the_title(); 
echo '</li>'; 
} 
} elseif (is_page()) { 
echo '<i class="fa fa-angle-double-right"></i><li>'; 
echo the_title(); 
echo '</li>'; 
} 
} 
 
elseif (is_tag()) {single_tag_title();} 
 
elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';} 
 
elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';} 
 
elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';} 
 
elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';} 
  
elseif (is_search()) {echo"<li>Search Results"; echo'</li>';} 
echo '</ul>'; 
} 

?>