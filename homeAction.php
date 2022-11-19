<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database_name="conversion_db";


    $conn=mysqli_connect($servername,$username,$password,$database_name);

    if(!$conn){
        die("Connection Failed" );


    }
    if(isset($_POST['submit'])){
        $conversion_type = $_POST['Catagory'];
        $vvalue = $_POST['quantity'];
        


        $sql_query = "INSERT INTO conversion_value (conversion_type,vvalue) VALUES ('$conversion_type','$vvalue')";
        

        if(mysqli_query($conn,$sql_query)){
            if("Catagory" == "UtB"){
                $result = $vvalue * 95;
                $sql_query = "INSERT INTO conversion_value (result) VALUES ('$result')";

            }
        }
        else{
            echo "Error: " . $sql."".mysqli_error($conn);
        }
        mysqli_close($conn);



    }
?>
