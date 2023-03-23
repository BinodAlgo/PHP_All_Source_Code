<?php
// Syntax
function echo_stuff() {
  echo 'Hey boss!';
}

echo_stuff();

// Function arguments
function my_name( $name ) {
  echo $name;
}

my_name( 'John' );
my_name( 'Jane' );
my_name( 'Jeff' );

// Default arguments
function full_name( $firstname = 'John', $lastname = 'Morris' ) {
  echo $firstname . $lastname;
}

full_name();
full_name('John', 'Doe');

// Return values
function multiply( $number, $multiplier ) {
  return $number * $multiplier;
}

$value = multiply( 2, 50 );

echo multiply( 2, 40 );
echo multiply( 2, 33 );
echo multiply( 1234323433, 23432343 );
