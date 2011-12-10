tinyURL is an easy to use php class that will allow you to create dynamic tinyURLS using the tinyurl.com api.

USE:
include('tinyURL.php');

// random number
$ran = rand(0, 99999);
$u = 'www.foo.com?bar='.$ran;

// assemble url
$url = new tinyURL($u);