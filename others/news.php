<?php
include('simple_html_dom.php');
$html = file_get_html('https://www.ndtv.com/search?searchtext=ev');

$root =  $html->find('div#news_list',0);
$result =  $root->find('ul.src_lst-ul',0);

foreach($result->find('a') as $element)
    echo '<li>' . $element . '</li>';
?>
