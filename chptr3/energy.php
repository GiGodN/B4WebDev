<?php
$page_title = 'Energy Cost Calculator';
$active = "ener";
include('includes/header.html');

function create_radio($value, $name = 'gallon_price') {
	print '<input type="radio" name="' . $name . '" value="' . $value . '"';
	if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
		print ' checked="checked"';
	}
	print "> $value ";
}

function create_textT($placeholder, $name = 'ener_amnt') {
	print '<input type="number" name="' . $name . '" placeholder="' . $placeholder . '"';
	if(!empty($_POST[$name])) {
        print ' value="' . $_POST[$name] . '"';
    }
    print  "> \n";
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $energy = $_POST['ener_amnt'];
    $total = 0;
    if(!empty($energy) && is_numeric($energy)) {
        for($i = 1; $i <= $energy; $i++) {
            if($i <= 50) $total += 3.50;
            else if($i <= 150) $total += 4.00;
            else if($i <= 250) $total += 5.20;
            else $total += 6.50;
        }
    }
    print "total cost for $energy units of energy is $total";
}
?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="energy.php" method="post">
    <?php create_textT('Enter Units of energey used');?>
    <br>
    <input type="submit" name="submit" value="Calculate!">
</form>

<?php include('includes/footer.html'); ?>