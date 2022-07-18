<?php // establish a connection with the following paramaters (hostname, username, password, database,port,socket)
$conn = mysqli_connect('localhost', 'justin', 'password', 'joe_text_form');

if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}
