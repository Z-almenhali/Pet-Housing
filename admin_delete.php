
<!DOCTYPE html>
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <link rel="StyleSheet" href="mystyle.css">
    <script type="text/javascript" src="jsdoc.js"></script>
    <title>Contact Us</title>
</head>

<body>
    <table>
        <thead>
            <div class="container">
                <div class="menu">
                    <ul>
                        <li class="logo"><img src="pet-house.png" alt="logo of the website"></li>
                        <li><a href="Index.html">Home</a></li>
                        <li><a href="PetPage.html">Pets</a></li>
                        <li><a href="ContactPage.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="words">
                    <h1> Admin </h1>
                    <p style="font-weight: lighter;">To get more information about the guest request!
                    </p>
                    <br>
                    <br>
                </div>
            </div>
        </thead>
        <tbody>
            <tr>
                <td>

                    <!-- Form section-->
                    <section class="petType">
                        <div class="topic">Please Enter Phone Number:</div><br>
                        <form id="myForm" action="" method="GET">
                            <div class="phone-item">
                                <input type="text" id="phone" name="phone" onblur="bluringFields()" onfocus=" Hint('phone');" placeholder="### ### ####" maxlength="10" />
                                <p id="phoneHint"></p>
                               
                            </div>
                            <div class="btn-check">
                                <button name="check" type="submit" href="#">Check</button>
                            </div>
                        </form>
                    <!-- Echo style-->
                        <?php
                            
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "pethousingdb";
                            
                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                            
                            if(array_key_exists('check', $_GET)){
                                $phone = $_GET['phone'];
                            
                            $sql = "DELETE FROM customer where phone =  '".$phone."'";
                            //"select* from customer where phone=" . $_POST['phone'] . ";"
                            //  $result = $conn->query($sql);
                            if($conn->query($sql)===true){
                                echo "Recored deleted !";
                            }else echo "Error deleting the record..";
                            
                           // if ($result->num_rows > 0) {
                            // output data of each row
                           // while($row = $result->fetch_assoc()) {
                           // echo " <p class='EchoCss'> Name: " . $row["Fname"]. " " . $row["Lname"]. ",     " . "       Email: " . $row["email"]. "<br><br>" . "Pet Type: " . $row["pet_type"]. ",    " . "     Details: " . $row["additional_details"]."</p> <br>" ;
                            }
                            
                            $conn->close();
                        ?>

                    </section>
                </td>

            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <img src="student.png" alt="logo of student">
                    <p>Group Members</p>
                    <ul>
                        <li>Jumanah Jan 1808740 | </li>
                        <li>Fay Aldossary 1807565 | </li>
                        <li>Jamela Saad 1805925 | </li>
                        <li>Zehar Almenhali 1807627</li>
                    </ul>
                </td>
            </tr>
        </tfoot>
        </section>

    </table>
    
</body>



</html>