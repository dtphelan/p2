<?php

# Define blank variables
$symbolCheck = '';
$numberCheck = '';
$capitalization = '';
$camelCheck = '';
$upperCheck = '';
$lowerCheck = '';
$password = '';

# Put an empty value in $words, $symbols, and $variables so our page works before the GET call
$words = isset($_GET['words']) ? $_GET['words'] : '';
$symbols = isset($_GET['symbols']) ? $_GET['symbols'] : '';
$numbers = isset($_GET['numbers']) ? $_GET['numbers'] : '';
$capitalization = isset($_GET['capitalization']) ? $_GET['capitalization'] : '';

# Set the default number of words to 4
if($words == '') {
    $words = 4;
}

# Hard-coded list of words for minimum viable product
# $randomWords = Array ('Alpha', 'Bravo', 'Charlie', 'Delta', 'Echo', 'Foxtrot', 'Golf', 'Hotel', 'India', 'Juliet', 'Kilo', 'Lima', 'Mike', 'November', 'Oscar', 'Papa', 'Quebec', 'Romeo', 'Sierra', 'Tango', 'Uniform', 'Victor', 'Whiskey', 'Xray',  'Yankee', 'Zulu');

# Scraper function
$html = '';

$urls = Array ('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-05-06-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-07-08-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-09-10-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-11-12-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-13-14-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-15-16-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-17-18-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-19-20-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-21-22-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-23-24-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-25-26-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-27-28-hundred.html', 'http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html');

# Choose a random URL from Paul's website, instead of loading each page (nicer to Paul, and improves performance of the password generator). Then, put the URL's HTML into $html.
$key = array_rand($urls);
$chosenUrl = $urls[$key];
$html = $html . file_get_contents($chosenUrl);

# Find everything between <li> and </li> on the chosen page, then put them in the $randomWords array
preg_match_all('|<li>(.*?)</li>|s', $html, $out);
$randomWords = $out[1];

$randomSymbols = Array ('!','@','#','$','%','^','&','*','~','?','+',':',';','<','>','{','}','.',',');

# Working on implementing more customization options for users
$hyphenated = 'no';
$spaces = '';

# Choose a word from the list, then concatenate it to $password
for($i = 0; $i < $words; $i++) {

    $key = array_rand($randomWords);
    $chosenWord = $randomWords[$key];

    # Capitalization options
    if($capitalization == 'lowercase') {
        $chosenWord = strtolower($chosenWord);
        $lowerCheck = 'checked';
    }

    if($capitalization == 'uppercase') {
        $chosenWord = strtoupper($chosenWord);
        $upperCheck = 'checked';
    }

    if($capitalization == 'camelcase') {
        $chosenWord = ucwords($chosenWord);
        $camelCheck = ' checked';
    }

    if($hyphenated == '') {
        $chosenWord = $chosenWord . '-';
    }

    $password = $password . $chosenWord;

}

# Concatenate a number to $password
if($numbers == 'on') {

    $password = $password . rand(0,9);
    $numberCheck = 'checked';

}

# Concatenate a symbol from $randomSymbols to $password
if($symbols == 'on') {

    $key = array_rand($randomSymbols);
    $chosenSymbol = $randomSymbols[$key];

    $password = $password . $chosenSymbol;
    $symbolCheck = 'checked';
}

# Some words in the scraped list have symbols, so this removes them if the user doesn't want symbols
if($symbolCheck !== 'checked') {

    $password = preg_replace('~\W~', '', $password);

}

# Strip whitespace from the password, if the user doesn't want it
if($spaces == ''){
    $password = preg_replace('/\n/', '', $password);
    $password = preg_replace('/\r/', '', $password);
    $password = preg_replace('/\t+/', '', $password);
}

# Validate that the number of words is, in fact, a number
if(is_numeric($words)) {

    $password = $password;

}
else {

    $password = 'Oh no! That\'s not what I was expecting. Try entering numbers (i.e. 4).';

}

?>
