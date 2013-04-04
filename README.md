VisitorCountee
==============
For the purpose of this homework a simple webpage has been created.
This webpage displays a counter for the number of visits as well as statistics for the browsers used.
For the first part (counting visits):
the index.php calls 2 python scripts:
1)the first one (counterget.py) gets the number of visitors from a plain text file or creates the file if it doesn't exist 
2)the second script (counterset.py) adds one to the number already existing in the plain text file

Here is an example of how we called the python script from the index.php:
<?php 
$result = exec("/usr/bin/python counterget.py");
?>
Here the output of counterget.py was stored in the variable result

For the second part (most popular browser): the pattern is basically the same there are two python scripts that are called

First of all the index.php displays the user browser. The user browser is found in 2 steps :
We call $_SERVER['HTTP_USER_AGENT'] and then store the result in th variable ua
Then using regular expressions we look for the 6 most common browsers (chromium, chrome, safari, opera, msie, mozilla). We store the broser obtained in $browser variable

The index.php displays a table with all the browsers and the number of times the page was opened with each one. Those numbers are obtained using the browserget.py

We will call the browserset.py with the value of $browser obtained earlier. The script is going to add one to the file of this browser
