<?php

    /**
     * Simple helper to debug to the console
     *
     * @param $data object, array, string $data
     * @param $context string  Optional a description.
     *
     * @return string
     */
    function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}
/* 

Following code attempts to pull details from the url and filepath in order to determine where we are in the file structure and 
determine how to reference other files for links etc.

*/

    list($path) = explode('?', $_SERVER['REQUEST_URI']); // Remove request parameters
    $path = substr($path, strlen(dirname($_SERVER['SCRIPT_NAME']))); // Remove script path
    
    $pathInfo = array();
    foreach (explode('/', $path) as $dir) { // Explode path to directories and remove empty items
      if (!empty($dir)) {
        $pathInfo[] = urldecode($dir);
      }
    }

    debug_to_console($path, 'path variable : ');
    debug_to_console($_SERVER['REQUEST_URI'], '$_SERVER[REQUEST_URI] : ');
    debug_to_console($_SERVER['SCRIPT_NAME'], '$_SERVER[SCRIPT_NAME] : ');
    debug_to_console(dirname($_SERVER['SCRIPT_NAME']), 'dirname($_SERVER[SCRIPT_NAME]) : ');
    debug_to_console($pathInfo, 'pathInfo variable : ');



?>
<footer class="raleway">
    <ul id="footer-nav">
        <li><a href="site-pages/contact.php">Contact Us</a></li>
        <li><a href="site-pages/legal.php">Legal</a></li>
        <li><a href="site-pages/careers.php">Careers</a></li>
    </ul>
</footer>