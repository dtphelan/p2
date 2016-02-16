<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <title>DWA-15 Project 2</title>
    <meta charset='utf-8'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='css/main.css' type='text/css'>

    <!-- Outside code: Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <?php require('logic.php'); ?>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://p1.danielphelan.me">Daniel Phelan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://p1.danielphelan.me">Project 1</a></li>
            <li class="active"><a href="#">Project 2</a></li>
            <li><a href="#">Project 3</a></li>
            <li><a href="#">Project 4</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class='container'>

        <h1>DWA-15 Project 2</h1>

        <div>
            <?php echo $password; ?>
            <!--<?php echo '<pre>'; ?>
                <?php print_r($out); ?>
            <?php echo '</pre>'; ?>-->
        </div>

        <div>
            Enjoy some options.<br>
            <form method='GET' action='index.php'>
                <input type='number' name='words' value='<?php echo $words ?>'><label>How many words?</label><br>
                <input type='checkbox' name='numbers' <?php echo $numberCheck ?>><label>Use numbers?</label><br>
                <input type='checkbox' name='symbols' <?php echo $symbolCheck ?>><label>Use symbols?</label><br>
                <input type='radio' name='capitalization' value='camelcase' <?php echo $camelCheck ?>><label>CamelCase</label><br>
                <input type='radio' name='capitalization' value='lowercase' <?php echo $lowerCheck ?> ><label>lowercase</label><br>
                <input type='radio' name='capitalization' value='uppercase' <?php echo $upperCheck ?>><label>UPPERCASE</label><br>
                <input type='submit' value='Tell me a secret'><br>
            </form>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</body>
</html>