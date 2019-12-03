<?php
$page_title = 'Trip Cost Calculator';
$active = "calc";
include('includes/header.html');

function create_radio($value, $name = 'gallon_price') {
	print '<input type="radio" name="' . $name . '" value="' . $value . '"';
	if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
		print ' checked="checked"';
	}
	print "> $value ";
}

function calculat_trip_cost($miles, $mpg, $ppg) {
	$gallons = $miles / $mgp;
	$dollars = $gallons * $ppg;
	return $dollars;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'], $_POST['speed']) && 
    is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) &&
    is_numeric($_POST['efficiency']) && is_numeric($_POST['speed'])) {
		$speed = $_POST['speed'];
		print $_POST['distance'] . '<br>' . $_POST['efficiency'] . '<br>' . $_POST['gallon_price'] . '<br>' . $_POST['speed'];
        $cost = calculat_trip_cost($_POST['distance'], $_POST['efficiency'], $_POST['gallon_price']);

        print '<div class="page-header"><h1>Total Estimated Cost</h1></div>
		<p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . 
		' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . $cost
		. '. The trip would tak you ';
		if(number_format($_POST['distance'] / $speed, 2) >= 24) {
			print number_format(($_POST['distance'] / $speed) / 24, 2) . ' days at a speed of ' . $speed;
		}
		else {
			print number_format($_POST['distance'] / $speed, 2) . ' hours at a speed of ' . $speed;
		}
    }
    else {
        print '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
    }
}
?>

<div class="page-header">
	<h1>Trip Cost Calculator</h1>
</div>
<form action="calculator.php" method="post">
	<p>Distance (in miles): <input type="number" name="distance"
			value="<?php if(isset($_POST['distance'])) print $_POST['distance'];?>"></p>
	<p>Average speed (in mph): <input type="number" name="speed"
			value="<?php if(isset($_POST['speed'])) print $_POST['speed'];?>"></p>
	<p>Ave. Price Per Gallon:
		<?php
			for ($i = 3.00; $i <= 4.0; $i+=0.5) {
				create_radio(number_format($i, 2));
			}
		?>
	</p>
	<p>Fuel Efficiency: <select name="efficiency">
			<option value="10" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) 
		print 'selected="selected" '?>>Terrible</option>
			<option value="20" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) 
		print 'selected="selected" ';?>>Decent</option>
			<option value="30" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) 
		print 'selected="selected" ';?>>Very Good</option>
			<option value="50" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) 
		print 'selected="selected" ';?>>Outstanding</option>
		</select></p>
	<p><input type="checkbox" name="city" <?php if(isset($_POST['city'])) print 'checked'?>>Do you plan on city driving</p>
	<p>Any comments on our forms <br><textarea name="comments" cols="25" rows="3"><?php
	if(isset($_POST['comments'])) print trim($_POST['comments']);?></textarea></p>
	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('includes/footer.html'); ?>