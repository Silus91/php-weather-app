<?php
require('form.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Weather search</title>
    <link rel="stylesheet" href="index.css">  
  </head>
  <body>
    <div class="container">

    <!-- form card -->
    <div class="row">
        <div class=" col s12 m6 offset-m3">
          <div class="card">
            <div class="card-content">
              <form action="" method="get">
                <input placeholder="City" type="text" name="city" id="city" value=""  class="autocomplete" />
                <button class="btn " type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </body>
</html>


