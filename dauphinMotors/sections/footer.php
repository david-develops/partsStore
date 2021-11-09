<?php

  if(str_contains(getcwd(),'site-pages')){
      $dirLevel=1;
  }else{
      $dirLevel=0;
  }

?>
<footer class="raleway">
    <ul id="footer-nav">
        <li><a href=<?php echo($dirLevel>0)? 'contact.php':'site-pages/contact.php'?>>Contact Us</a></li>
        <li><a href=<?php echo($dirLevel>0)? 'legal.php':'site-pages/legal.php'?>>Legal</a></li>
        <li><a href=<?php echo($dirLevel>0)? 'careers.php':'site-pages/careers.php'?>>Careers</a></li>
    </ul>
</footer>