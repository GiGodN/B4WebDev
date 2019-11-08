<?php
$page_title = 'Trip Cost Calculator';
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
	return number_format($dollars, 2);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) && 
    is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) &&
    is_numeric($_POST['efficiency'])) {
        $cost = calculat_trip_cost($_POST['distance'], $_POST['efficiency'], $_POST['gallon_price']);

        print '<div class="page-header"><h1>Total Estimated Cost</h1></div>
		<p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . 
		' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . $cost . 
		'. If you drive at an average of 65 miles per hour, the trip will take approximately ' . $cost . 
		' hours.</p>';
    }
    else {
        print '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
    }
}
?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
	<p>Distance (in miles): <input type="number" name="distance" value="<?php if(isset($_POST['distance'])) print $_POST['distance'];?>"></p>
	<p>Ave. Price Per Gallon:
		<?php
			create_radio('3.00');
			create_radio('3.50');
			create_radio('4.00');
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
	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('includes/footer.html'); ?>