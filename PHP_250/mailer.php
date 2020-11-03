<?php

$to = "levantan15081998@gmail.com";
$subject = "Test Mail";
$message = "Xin chào, Test mail thôi";
$from = "levantanstudy@gmail.com";
$headers = "From: $from";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent";
} else {
    echo "Mail failed";
}
