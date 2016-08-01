<?php

        const host = "localhost";
        const username = "root";
        const password = "";
        const dbname = "institute";

function getConnection() {
    $con = new mysqli(host, username, password, dbname) or die(mysqli_error($con));

    return $con;
}

//print_r(getConnection());