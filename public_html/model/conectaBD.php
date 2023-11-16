<?php
    function connectaBD(){
        $host = "127.0.0.1";
        $dbname = "tdiw-k11";
        $user = "tdiw-k11";
        $password = "FYF1iC4n";
        $connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");
        return ($connection);
    }