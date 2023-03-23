<?php
// Hello World With PHP
echo 'Hello World' . "<br>";

// Variables
$variable = 'I am' . 'a variable';
$number = 22;
$number23 = $number/2;
$a = "number";

echo 'My age is ' . $$a . "<br>";

// Arrays
$array = array('name', 'email', 'address');
print_r($array);
echo $array[2];

$array2[] = "salad";
$array2[] = "bowl";
print_r($array2);

$array3 = array(
	'name' => 'John',
	'age' => 35,
	'email' => 'email@email.com',
);
print_r($array3);
echo $array3['name'] . "<br>";

// If, else, switch
$number = 4;
$number2 = '1';
$number3 = 3;

if ($number!==$number2) {
	echo 'true';
} else {
	echo 'false';
}

switch($number) {
	case 1:
		echo 'True';
		break;

	case 2:
		echo 'False';

	default:
		echo 'no idea';
}

echo "<br>";

// For and For Each Loops
for($i=0;$i<=10;$i=$i+1) {
	echo "$i<br>";
}

$array = array("name", "email", "address");
print_r($array);
foreach($array as $key=>$value) {
	echo "Key $key: $value</br>";
}

echo "<br>";

// While Loops
$i = 0;

$array = array('name','email','address');

while ($array[$i]) {
	echo "$array[$i]<br>";

	$i++;
}

// $_GET Variables
if ( isset($_GET['s'] ) ) {
	echo '<p>Your search term is: ' . $_GET['s'];
}
?>
<form method="get" action="">
	<label>Enter search term</label>
	<input type="search" name="s" value="<?php echo $_GET['s']; ?>">
</form>
<?php
echo "<br>";

// $_POST Variables
if ( isset($_POST['s'] ) ) {
	echo '<p>Your search term is: ' . $_POST['s'];
}
?>
<form method="post" action="">
	<label>Enter search term</label>
	<input type="search" name="s" value="<?php echo $_POST['s']; ?>">
</form>

























