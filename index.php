<!DOCTYPE html>
<html>
<head>

    <title>Daniel Phelan - DWA-15 Project 2</title>
    <meta charset='utf-8'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='css/main.css' type='text/css'>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

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
            <li class="active"><a href="http://p2.danielphelan.me">Project 2</a></li>
            <li><a href="http://p3.danielphelan.me">Project 3</a></li>
            <li><a href="http://p4.danielphelan.me">Project 4</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class='container'>

        <div class='text-center col-xs-12'>
            <p>Get started with this password:</p>
            <p class='emphasis'><?php echo $password; ?></p>
        </div>

        <div id='form'>
            <form method='GET' action='index.php'>
                <div class= 'col-sm-4 col-sm-offset-2 col-md-offset-3'>
                    <label>
                        <input type='number' name='words' value='<?php echo $words ?>' class='form-control'>
                        How many words?
                    </label>
                    <div class='checkbox'>
                    <label>
                        <input type='checkbox' name='numbers' <?php echo $numberCheck ?> class='checkbox'>
                        Add a number?
                    </label>
                    </div>
                    <div class='checkbox'>
                    <label>
                        <input type='checkbox' name='symbols' <?php echo $symbolCheck ?> class='checkbox'>
                        Add a symbol?
                    </label>
                    </div>
                </div>
                <div class='radio col-sm-4'>
                    <label>
                        <input id='radio1' type='radio' name='capitalization' value='camelcase' <?php echo $camelCheck ?> class='radio'>CamelCase
                    </label><br>
                    <label>
                        <input id='radio2' type='radio' name='capitalization' value='lowercase' <?php echo $lowerCheck ?>  class='radio'>lowercase
                    </label><br>
                    <label>
                        <input id='radio3' type='radio' name='capitalization' value='uppercase' <?php echo $upperCheck ?> class='radio'>UPPERCASE
                    </label><br>
                </div>
                <div class='radio col-sm-4'>
                    <label>
                        <input type='radio' name='spacing' value='none' <?php echo $noSpacingCheck ?> class='radio'>No spacing
                    </label><br>
                    <label>
                        <input type='radio' name='spacing' value='hyphenated' <?php echo $hyphenatedCheck ?> class='radio'>Hyphenate
                    </label><br>
                    <label>
                        <input type='radio' name='spacing' value='spaces' <?php echo $spacesCheck ?> class='radio'>Spaces
                    </label><br>
                </div>
                <div class='row col-xs-12 text-center'>
                    <input class='btn btn-lg' type='submit' value='Get another password'><br>
                </div>
            </form>
        </div>

        <div>
            <div class='col-md-4 col-sm-5 col-sm-offset-1'>
                <p>Good old <a href='https://xkcd.com/'>xkcd.</a> A cartoon for the internet age, it has illustrated (literally) many Computer Science and Math concepts. One of its most widespread panels talks about password strength, encouraging users to adopt long, string-based passwords.</p>
                <p>You can generate your own xkcd password above. Choose the number of words you want, the presence of numbers or symbols, capitalization, and spacing options.</p>
            </div>

            <figure class='text-center col-md-6 col-sm-6'>
                <img src='http://imgs.xkcd.com/comics/password_strength.png' class='img'>
                <figcaption><a href='https://xkcd.com/936/'>Comic courtesy of xkcd.</a>
            </figure>
        </div>

    </div>

</body>
</html>
