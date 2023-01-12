<!--
    Name: Justin Abraham
    Date: October 14, 2022
    Course: IT202 003
    Assignment: Semester Project Phase 1
-->
<?php
    require_once('database.php');
    $queryCategories = 'SELECT menuCategoryID, menuCategoryName FROM menuCategories ORDER BY menuCategoryID';
    $statement = $db->prepare($queryCategories);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Luminsecenza</title>
    <link rel="icon" type="image/x-icon" href="/images/GreekMyth-apollo-bold-400w.png">
    <link rel="stylesheet" href="styles/style2.css">
    <script type="text/javascript" lang="javascript" src="js/create.js"></script>
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
            <form id="createDishForm" method="post" action="add_dish.php">
                <fieldset>
                    <legend>Create your own dish here!</legend>
                    <table id="createTable" name="createTable">
                        <tr>
                            <th>Dish Category</th>
                            <th>
                                <select id="catSelect" name="catSelect" class="forminp" required>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['menuCategoryID'];?>"><?php echo $category['menuCategoryName'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>Dish Code</th>
                            <th>
                                <input id="codeInput" name="codeInput" type="text" placeholder="ABC123" class="forminp" pattern="[A-Za-z0-9]{4,10}" maxlength="10" minlength="4">
                            </th>
                        </tr>
                        <tr>
                            <th>Dish Name</th>
                            <th>
                                <input id="nameInput" name="nameInput" type="text" class="forminp" maxlength="255" minlength="4">
                            </th>
                        </tr>
                        <tr>
                            <th>Dish Description</th>
                            <th>
                                <textarea id="descrptInput" name="descrptInput" minlength="4" maxlength="255" ></textarea>
                            </th>
                        </tr>
                        <tr>
                            <th>Dish Price</th>
                            <th>
                                <input id="priceInput" name="priceInput" type="text" pattern="^[0-9]{1,10}((\.)[0-9]{0,2})$" required> 
                            </th>
                        </tr>
                        <tr id="subresRow">
                            <th>
                                <input type="reset" value="Clear Form">
                            </th>
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