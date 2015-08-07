<?php 
   require('./simplehtmldom_1_5/simple_html_dom.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Group Crawler</title>
  </head>
  <body>
    <h1>Results</h1>
<?php
      // define url to crawl
      $url = "http://www.bing.com/search?q=ninjas";
      // crawl the webpage
      // this will return the pages html DOM
      $html = file_get_html($url);
      // now read through the simpleDOMHtml to figure out how to use it
      // inspect element at the above link to figure out what to look for
      // write the necessary output to format our crawl results
      
    ?>
  </body>
</html>
