<?php 
    echo 'Hello World';
    $age = 27;
    echo " $age";
    $colors = array('red','blue','green');
    echo ' ' . $colors[1];

    $name = "Mike";
    $city = "Beast Lansing";
    $movie = "Wall-e";
    $friend = "No";
    $candy = "Preworkout";

    echo "<h1>Hello, $name!</h1>\n\n";
    $a = 2;
    $b = 9;
    if ( $a > $b ) {
        echo "$a is greater than $b";
    } else {
        echo "$b is greater than $a";
    }

    $min = 1;
    $max = 50;
    $guess = 4;
    $num = 5;

    if ($guess < $min || $guess > $max) {
        echo '<p>Your guess is out of range</p>';
    } else if ( $num === $guess ) {
        echo '<h5>You guessed correctly</h5>';
    } else if ( $num > $guess ) {
        echo 'sorry that number is too low';
    } else {
        echo 'sorry that number is too high';
    }

    do {
        echo " $num\n\n";
        $num++;
    } while ($num < 10);

    while ($num < 10) {
        echo "$num\n\n";
        $num++;
    }

    for($i = 0; $i < 101; $i++ ) {
        if($i % 15 === 0) echo "\nfizzbizz\n\n";
        else if ($i % 3 === 0) echo "\nfizz\n\n";
        else if ($i % 5 == 0) echo "\nbuzz\n\n";
        else echo $i;
    }

    $current = 1;
    $previous = 0;
    $next = null;
    $limit = 200;

    while ( $current < $limit ) {
        echo $current. ', ';
        $next = $previous + $current;
        $previous = $current;
        $current = $next; 
    }

    function is_palindrome( $string ) {
        $pal_check = ( $string === strrev( $string ));
        return $pal_check;
    }
    $check_string = 'superduper';
    if ( is_palindrome( $check_string )) {
        echo "<p>$check_string is a palindrome</p>";
    } else {
        echo "$check_string is not a palindrome";
    }
?>