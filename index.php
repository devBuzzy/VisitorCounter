<html><body>
<?php
$result = exec("/usr/bin/python counterget.py");
?>
<p> This page has been visited <?php  echo $result; ?> times </p>
<?php
exec("/usr/bin/python counterset.py");
?>
<p> Your browser is :   
<?php
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    
    if(preg_match('/(chromium)[ \/]([\w.]+)/', $ua))
            $browser = 'chromium';
    elseif(preg_match('/(chrome)[ \/]([\w.]+)/', $ua))
            $browser = 'chrome';
    elseif(preg_match('/(safari)[ \/]([\w.]+)/', $ua))
            $browser = 'safari';
    elseif(preg_match('/(opera)[ \/]([\w.]+)/', $ua))
            $browser = 'opera';
    elseif(preg_match('/(msie)[ \/]([\w.]+)/', $ua))
            $browser = 'msie';
    elseif(preg_match('/(mozilla)[ \/]([\w.]+)/', $ua))
            $browser = 'mozilla';
    else
	    $browser = 'others';

echo $browser;
?>
</p>

<p>
Browser detection statistics : </br>
<table border="1">
	<tr>
		<td>
			Browser
		</td>
		<td>
			Visits
		</td>
	</tr>
	<tr>
		<td>
			Chromium
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py chromium");
				echo $counts;
			?>
		</td>
	</tr>
	<tr>
		<td>
			Chrome
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py chrome");
				echo $counts;
			?>
		</td>
	</tr>
	<tr>
		<td>
			Safari
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py safari");
				echo $counts;
			?>
		</td>
	</tr>
	<tr>
		<td>
			Opera
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py opera");
				echo $counts;
			?>
		</td>
	</tr>
	<tr>
		<td>
			Msie
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py msie");
				echo $counts;
			?>
		</td>
	</tr>
	<tr>
		<td>
			Mozilla
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py mozilla");
				echo $counts;
			?>
		</td>
	<tr>
	</tr>
		<td>
			Other Browsers
		</td>
		<td>
			<?php
				$counts = exec("/usr/bin/python browserget.py others");
				echo $counts;
			?>
		</td>
	</tr>	
</table>
<?php
	exec("/usr/bin/python browserset.py $browser");;
?>

</p>
</body></html>




