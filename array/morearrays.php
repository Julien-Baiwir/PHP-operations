<?php 
$web_development = array (
    'frontend'=> array(),
    'backend' => array(),
);

$web_development ['frontend'] []= 'xhtml';
$web_development ['backend'] []= 'Ruby';
$web_development ['frontend'] []= 'CSS';
$web_development ['backend'] []= 'Flash';
$web_development ['frontend'] []= 'Javascript';

echo '<pre>';
print_r($web_development);
echo '</pre>';

$web_development ['frontend'][0]= 'html';
// array_pop($web_development);
// Remove the last element from the entire $web_development array
unset($web_development['backend'][1]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>