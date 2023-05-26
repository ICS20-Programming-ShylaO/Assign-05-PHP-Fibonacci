<!DOCTYPE html>

<!-- ICS20-Programming-Assign-05-PHP-Fibonacci -->
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Displaying Fibonacci Sequence, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[1].webmanifest">

    <!-- Style Sheet and Google's MDL -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css"> 
      
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Calculating the Fibonacci Sequence, Using PHP</title>
  </head>
  <body>
    <!-- Header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Fibonacci Sequence Displayer in PHP</span>
        </div> 
      </header>
      <main class="mdl-layout__content">
        <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Calculating Fibonacci Sequence</h1>";
      echo "<h3>This program calculates and displays the Fibonacci sequence, one of nature's greatest phenomenons, ending on the term of the given integer.</h3>";
    ?>
    <center>
    <img src="./images/pinecone_fibonacci.jpg" alt="Fibonacci Sequence in Nature" id="pinecone" width="15%" height="auto"><br>
      <img src="./images/fibonacci_visual.png" alt="Numerical Display Fibonacci" id="swirl" width="23%" height="auto"><br>
      
    <!-- Form for the positive integer -->
      <br><br>
    <form action="./results.php" method="post" target="results">
      <label for="lblFinalTerm">Term:</label>
      <input type="number" id="final-term" step="1" placeholder="Eg. 4" name="final-term"><br><br>
      <br><br>
      <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Calculate Fibonacci Sequence
          </button>
    </form>

      <br>
      <!-- iframe to display the special response and sequence -->
      <iframe id="results" name="results"></iframe>
    </center>
      </main>
    </body>
</html>