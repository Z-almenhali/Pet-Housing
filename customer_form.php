<?php


    $dns = "mysql:host=localhost;dbname=pethousingdb";
    $username = "root";
    $password = "";



    try {

        $db = new PDO($dns, $username, $password);


       if (isset($_POST['submit'])) {
            if (!empty($_POST['name'])  && !empty($_POST['Lname']) &&  !empty($_POST['email']) && !empty($_POST['phone']) &&  !empty($_POST['pets']) &&  !empty($_POST['Services'])) {

                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                
                $lname = filter_var($_POST['Lname'], FILTER_SANITIZE_STRING);
          //Check the phone number if its string or number
                if (filter_var($_POST['phone'], FILTER_VALIDATE_INT) === false) {
                    echo "<script> alert (' Please Enter numbers!'); </script>";
                } 
              else  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                echo "<script> alert (' Please Enter correct Email'); </script>";
               }
                
                else {
                    
                    //check DB and insert
                    //prepare statment
                    $statement = $db->prepare("select* from customer where phone=" . $_POST['phone'] . ";");

                    //execute statement
                    $statement->execute();
                    //fecthing

                    while ($customer = $statement->fetch()) {
                        if ($customer['phone'] > 0) {
                            echo "<script> alert (' you already submitted'); </script>";
                        }
                    }

                    try {
                        $insertQuere = "INSERT INTO `customer`(`Fname`, `Lname`, `phone`, `email`, `pet_type`, `services`, `Additional_Details`) VALUES ('" .$name. "','" .$lname. "','" . $_POST['phone'] . "','" . $_POST['email'] . "','" . $_POST['pets'] . "','" . $_POST['Services'] . "','" . $_POST['textarea'] . "')";
                        $insert_statement = $db->prepare($insertQuere);
                        $insert_statement->execute();

                        session_start();
                        $_SESSION['Name'] = $_POST['name'];
                        $_SESSION['LastName'] = $_POST['Lname'];
                        $_SESSION['Email'] = $_POST['email'];
                        $_SESSION['PhoneNumber'] = $_POST['phone'];
                        $_SESSION['PetsType'] = $_POST['pets'];
                        $_SESSION['Services'] = $_POST['Services'];
                        //redirect the browser
                    
                      header("Location:thankyou.html");
                    } catch (PDOException $e) {
                        $msg = "";
                    }
                }
            } else {

                echo " <script> alert('please fill in all the fields'); </script>";
            }
       }
         
    } catch (Exception $e) {

        $error_meassage = $e->getMessage();
        echo "<p> Error Message : $error_meassage";
    }

    ?>