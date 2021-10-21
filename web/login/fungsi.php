<?php

//mengconnect kan
$conn = mysqli_connect("localhost","root","","login");

    //looping 
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }
    
    function regis($data) {
        global $conn;

        $user = strtolower(stripslashes($data["username"]));
        $pass = mysqli_real_escape_string($conn, $data["pass"]);
        $repass = mysqli_real_escape_string($conn, $data["repass"]);

        //cek username udah ada
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$user'");
        
        if( mysqli_fetch_assoc($result) ){
            echo "<script>
                    alert ('username sudah terdaftar!')
                </script>";
            return false;
        }

        //cek konfirmasi pasword
        if($pass !== $repass){
            echo "<script>
                    alert('password anda tidak sama!');
                    </script>";
            return false;
        }
        //enkripsi passowrd
        $password = password_hash($pass, PASSWORD_DEFAULT);
        
        //memasukan ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$user','$password')");

        return mysqli_affected_rows($conn);


    }

?>