<?php
$a = 'joe@example.org';
$b = 'bogus - at - example dot org';
$c = '(bogus@example.org)';

$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
    echo "This (a) sanitized email address is considered valid."."<br>";
    echo "Before: $a"."<br>";
    echo "After:  $sanitized_a"."<br>";
}

$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
    echo "This sanitized email address is considered valid."."<br>";
    echo "Before: $b"."<br>";
    echo "After:  $sanitized_b"."<br>";
} else {
    echo "This (b) sanitized email address is considered invalid."."<br>";
    echo "Before: $b"."<br>";
    echo "After:  $sanitized_b"."<br>";
}

$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
    echo "This (c) sanitized email address is considered valid"."<br>";
    echo "Before: $c"."<br>";
    echo "After:  $sanitized_c"."<br>";    
}
?>