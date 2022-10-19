<!DOCTYPE html>
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <link rel="StyleSheet" href="mystyle.css">
    <script type="text/javascript" src="jsdoc.js"></script>
    <title>Contact Us</title>
    <!--------------------------------PHP---------------------------->
    <?php
    include('customer_form.php');
    ?>
    <!--------------------------------PHP---------------------------->
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
                    <h1> Contact Us </h1>
                    <p style="font-weight: lighter;">Feel free to contact us if you have any inquiry!
                    </p>
                    <ul>
                        To learn more about pets click on what you want to know about:
                        <li>
                            <a href="https://agriculture.vic.gov.au/livestock-and-animals/animal-welfare-victoria/choosing-a-pet/what-type-of-pet" target="_blank">How
                                to choose a Pet?</a>
                        </li>
                        <li>
                            <a href="https://www.alouetteanimalhospital.ca/10-pet-care-tips/" target="_blank">Pets Care
                                Tips!</a>
                        </li>
                    </ul>
                    <br>
                    <br>
                </div>
            </div>
        </thead>
        <tbody>
            <tr>
                <td>
                    <!-- Contact information section-->
                    <section class="information">
                        <div class="row">
                            <div class="ContactCol">
                                <img src="location.png">
                                <div class="topic">Address</div>
                                <div class="info">KSA, Jeddah</div>
                            </div>
                            <div class="ContactCol">
                                <img src="phone.png">
                                <div class="topic">Phone</div>
                                <div class="info">
                                    <ul>
                                        <li>+966 51 000 0000</li>
                                        <li>+966 52 000 0000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ContactCol">
                                <img src="mail.png">
                                <div class="topic">Email</div>
                                <div class="info">
                                    <ul>
                                        <li><a href="mailto:Jsaad0001@stu.kau.edu.sa">Jsaad0001@stu.kau.edu.sa</a></li>
                                        <li><a href="mailto:jjan0002@stu.kau.edu.sa">Jjan0002@stu.kau.edu.sa</a></li>
                                        <li><a href="mailto:faldoussri@stu.kau.edu.sa">Faldoussri@stu.kau.edu.sa</a>
                                        </li>
                                        <li><a href="mailto:Zalminhali@stu.kau.edu.sa">Zalminhali@stu.kau.edu.sa</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Form section-->
                    <section class="form">
                        <div class="topic">If you have any questions, please contact us:</div><br>
                        <form id="myForm" id="dd" action="" method="POST">
                            <div class="name-item">
                                <p>First Name</p><br>
                                <input type="text" id="name" name="name" onblur="bluringFields()" onfocus=" Hint('name');" placeholder="First" />
                                <p id="fnameHint"></p>
                            </div>
                            <br>
                            <div class="name-item">
                                <p>Last Name</p><br>
                                <input type="text" id="lastName" name="Lname" onblur="bluringFields()" onfocus=" Hint('lastName');" placeholder="Last" />
                                <p id="lnameHint"></p>

                            </div>
                            <br>

                            <div class="name-item">
                                <p>Email &nbsp &nbsp &emsp;</p>
                                <input type="text" id="email" name="email" onblur="bluringFields()" onfocus=" Hint('email');" placeholder=" sssss123@xxxxx.com" />
                                <p id="emailHint"></p>
                            </div>
                            <br>

                            <div class="name-item">
                                <p>Phone &nbsp &emsp; </p>
                                <input type="text" id="phone" name="phone" onblur="bluringFields()" onfocus=" Hint('phone');" placeholder="### ### ####" maxlength="10" />
                                <p id="phoneHint"></p>

                            </div>

                            <div class="question">
                                <br>
                                <p>Pet Type</p>
                                <div class="question-answer">
                                    <div>
                                        <input type="radio" value="dog" id="dog" name="pets" onchange="display_image('Dog.png','Dog picture')" />
                                        <label for="dog" class="radio"><span>Dog</span></label>
                                        <input type="radio" value="cat" id="cat" name="pets" onchange="display_image('Cat.png','Cat picture')" />
                                        <label for="cat" class="radio"><span>Cat</span></label>
                                        <input type="radio" value="brid" id="bird" name="pets" onchange="display_image('Parrot.png','Bird picture')" />
                                        <label for="bird" class="radio"><span>Bird</span></label>
                                    </div>
                                    <div class="Services">
                                        <p>Services</p><br>
                                        <select required name="Services">
                                            <option selected value="0">Select</option>
                                            <option value="1">Toys</option>
                                            <option value="2">Grooming</option>
                                            <option value="3">Veterinary Care</option>
                                        </select>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="Details">
                                        <p>Additional Details</p>
                                        <textarea id="textarea" name="textarea" rows="3" onblur="bluringFields()" onfocus=" Hint('textarea');"></textarea>
                                        <p id="textareaHint"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-block">
                                <button name="submit" type="submit" href="#">Submit</button>
                                <button onclick="cancelFun()" id="cancel" name="reset" type="reset" href="#">Cancel</button>

                            </div>
                        </form>

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
    <script type="text/javascript">
        form = document.getElementById("myForm");
        form.addEventListener('submit', function(event) {
            if (!confirm("Are you sure you want to submit this form?")) {
                if (confirm("Are you sure you want to cancel your submission?")) {
                    alert("The submission is canceled");
                    event.preventDefault();
                }
            }
        })
    </script>
</body>



</html>