<?php

$connection = mysqli_connect('127.0.0.1','root','','blog');

if( $connection == false ) {
    echo 'not connection database';
    exit();
} else {
    echo 'connection database';
}
