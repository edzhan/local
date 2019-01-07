// http://mysite/web/index.php?r=my/index&user=12356<br>
<h1>action Index</h1>
<?
use controllers\MyController;
print_r($hi);
foreach ($names as $name){
    print_r('<br>'.$name);
}
print_r('<br>'.$user);
echo '<br/>';
foreach ($names as $name) {
    print_r($name);
    echo '<br/>';
    print_r($name);
    echo '<br/>';
}
