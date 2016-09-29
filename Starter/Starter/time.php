<?php
/*this script returns server time and a random display color in response to an AJAX request*/



//call date function
$date = date("1, F jS");
$time = date('g:ia');
echo "It's $date.<br/> The time is $time.";
echo "<p hidden id='colorChoice'>$greetingColor</p>";


//set session variable




?>