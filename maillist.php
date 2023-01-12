<!--
    Name: Justin Abraham
    Date: October 14, 2022
    Course: IT202 003
    Assignment: Semester Project Phase 2
-->
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Luminsecenza</title>
    <link rel="icon" type="image/x-icon" href="/images/GreekMyth-apollo-bold-400w.png">
    <link rel="stylesheet" href="styles/style5.css">
    <script type="text/javascript" lang="javascript" src="js/maillist.js"></script>
</head>
<body>
    <header>
        <img id="headerimg" src="images/GreekMyth-apollo-bold-400w.png">
        <nav id="topnav">
            <ul id="navlist">
                <li><a href="home.html">Home</a></li>
                <li><a href="create.php">Create</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </nav>
        <br>
        <br>
        </b>
        <h1 id="pageTitle">Luminsecenza</h1>
    </header>
    <main>
        <br>
        <br>
        <br>
        <br>
        <div class="formdiv">
            <form id="mailForm" method="post" action="add_customer.php">
                <fieldset>
                    <legend>Join Our Mailing List!</legend>
                    <table id="mailtable">
                        <tr>
                            <th>First Name: </th>
                            <th>
                                <input id="fname" name="fname" type="text" minlength="1" maxlength="255">
                            </th>
                        </tr>
                        <tr>
                            <th>Last Name: </th>
                            <th>
                                <input id="lname" name="lname" type="text" minlength="1" maxlength="255">
                            </th>
                        </tr>
                        <tr>
                            <th>Email: </th>
                            <th>
                                <input id="uemail" name="uemail" type="email" maxlength="255">
                            </th>
                        </tr>
                        <tr>
                            <th>Address: </th>
                            <th>
                                <input id="uaddress" name="uaddress" type="text" minlength="1" maxlength="255" required>
                            </th>
                        </tr>
                        <tr>
                            <th>City: </th>
                            <th>
                                <input id="ucity" name="ucity" type="text" minlength="1" maxlength="255" required>
                            </th>
                        </tr>
                        <tr>
                            <th>State: </th>
                            <th>
                                <input id="ustate" name="ustate" type="text" maxlength="2" required>
                            </th>
                        </tr>
                        <tr>
                            <th>Zip Code: </th>
                            <th>
                                <input id="uzip" name="uzip" type="text" maxlength="5" pattern="[0-9]{5,5}" required>
                            </th>
                        </tr>
                        <tr>
                            <th>How did you hear about us? </th>
                            <th>
                                <select id="howselect" name="howselect" required>
                                    <option value="googlesearch">Google Search</option>
                                    <option value="friend">Friend</option>
                                    <option value="yellowpages">Yellow Pages</option>
                                    <option value="other">Other</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <input type="submit" value="Submit">
                            </th>
                        </tr>
                    </table>
                </fieldset>
            </form> 
        </div>
    </main>
    <footer>
        <p id="toplink">
            <a href="#top">Go to top</a>
        </p>
        <h6>
            Name: Justin Abraham
            Date: December 9, 2022
            Course: IT202 003
            Assignment: Semester Project Phase 3
        </h6>
    </footer>
</body>
</html>