<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>select2</title>
  </head>
  <body>
    <?php
//Get a list of file paths using the glob function.
    $fileList = glob('*');
 
//Loop through the array that glob returned.
    foreach ($fileList as $filename) {
       //Simply print them out onto the screen.
        echo '<h4><a href="' . $filename . '" target="_blank">' . $filename . '</a></h4>';
    }
    ?>
  </body>
</html>