// TINY URLS
// AUTHOR: DREW DAHLMAN
// DATE: 11.7.2011
// VERSION: 1.0
// NOTES:
// To use this class simply include in your php document. include('class.tinyURL.php');
// To create the url $tinyURL->shorten($url);
// The class will create the url and return it for your use!

class tinyURL{
    function tinyURL($u){
       	// Tiny URL API CALL
        $daurl = 'http://tinyurl.com/api-create.php?url='.$u;
        
        // GET THE CONTENT
        $handle = fopen($daurl, "r");

        // If there is something, read and return
        if ($handle) {
            while (!feof($handle)) {
                $buffer = fgets($handle, 4096);
                return $buffer;
            }
            fclose($handle);
        }
    }
}