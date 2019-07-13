<?php
    function is_username_valid($username)
    {
        if(preg_match('/^([a-zA-Z][a-zA-Z0-9]{5,9})$/', $username)) 
        {
            echo "True";
        } else {
            echo "False";
        }
    }
    function is_password_valid($password)
    {
        if(preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!$%^&*-])(?=.*?[\@]).{8,}$/', $password)) 
        {
            echo "True";
        } else {
            echo "False";
        }
    }

// cek validasi username
is_username_valid("@sony");
echo "<br>";
is_username_valid("Ayu22v");
echo "<br>";

// cek validasi password
is_password_valid("p@ssW0rd#");
echo "<br>";
is_password_valid("C0d3YourFuture!#");
echo "<br>";
?>