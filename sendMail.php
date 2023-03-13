<?php
$subject = 'MY TEST EMAIL';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Danil';
$text1 = "firstName: {$firstName}" . "\n";
$text2='Hi';
$text3=' my dear';
$text4=' boy';
$text5=' Where';
$text6=' are';
$text7=' you';
$text8=' going?';
$message =$text1. $text2. $text3 . $text4 . $text5 . $text6 . $text7;
$message .= $text8;
echo $message;
$headers = 'From: chrom3byhearts@gmail.com';
mail('d.v.solomatin@student.khai.edu', $subject, $message, $headers);
