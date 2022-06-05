
<?php

$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }

?>