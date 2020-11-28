<?php  
    define('HOST','127.0.0.1:3306');
    define('USER','root');
    define('PSWD', '');
    define('DBNM','netflix');

    function connectToDatabase(){
        $conn = new mysqli(HOST,USER,PSWD,DBNM);
        if($conn) {
            return $conn;
        }
        return null;
    }

?>