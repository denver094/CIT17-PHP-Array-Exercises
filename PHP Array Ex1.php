   
    <!-- Arrays allow you to assign multiple values to one variable. For this PHP exercise, write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions, echo the following statement to the browser:
     We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some  rain. At least we didn't get any hail or sleet.
     Don't forget to include a title for your page, both in the header and on the page itself -->



 	<?php

 	  echo "-----PHP Array Exercise 1:</br></br>";

     	$weatherConditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
     	var_dump($weatherConditions);
 	?>

 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Weather Forecast</title>
 	</head>
 	<body>

 		<h1 style="color: green; font-weight: bold; font-style: italic;">Todays Weather Report</h1>
 		<?php
            echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weatherConditions[1] . " and " . $weatherConditions[6] . ". Then came " . $weatherConditions[1] . " with a few " . $weatherConditions[2] . " and some  " . $weatherConditions[0] . ". At least we didn't get any " . $weatherConditions[3] . " or " . $weatherConditions[4] . ". "; 
        ?>

 	</body>
 	</html>