<!DOCTYPE html>
<html>
  <head>
    <title>Upload</title>
    <link rel="stylesheet" href="Css.css">
  </head>
  <body class="phpbg">
    <?php

          $filename=$_FILES['fuResume']['name'];
          $location="uploadedfiles/".$filename;



          if(move_uploaded_file($_FILES['fuResume']['tmp_name'],$location)){
            echo '</br></br></br></br></br></br></br><b class="results">File Uploaded Successfully</b>';
          } else {
            echo '</br></br></br></br></br></br></br><b class="results">Failed</b>';
          }

    ?>
    <div></br></br></br><script>
      var names = '<?= $filename ?>';
      var names2 = names.split(".")
      document.write(names2)//makes the filename and the type arrays ('file','png')
    </script></div>
  </body>
</html>
