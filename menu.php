<!--
    Name: Justin Abraham
    Date: December 9, 2022
    Course: IT202 003
    Assignment: Semester Project Phase 3
-->
<?php 
    require_once('database.php');
    $queryDishes = 'SELECT menuCategoryID, dishCode, dishName, description, price FROM dishes ORDER BY dishID';
    $statement = $db->prepare($queryDishes);
    $statement->execute();
    $dishes = $statement->fetchAll();
    $statement->closeCursor();

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
    <link rel="stylesheet" href="styles/style6.css">
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
        <div class="menuContainer">
            <?php foreach ($dishes as $dish):; ?>
                <div class="menuItem" style="height: fit-content;">
                    <h1 style="margin-top: auto;"><?php echo $dish['dishName'];  ?></h1>
                    <h4><?php echo $dish['dishCode'] ?></h4>
                    <h2><?php echo $dish['description'] ?></h2>
                    <h2>$<?php echo $dish['price'] ?></h2>
                    <div class="bottomTxt" style="font-size: large; font-weight: bold;">
                        <?php foreach ($categories as $category) :; ?>
                            <?php if ($category['menuCategoryID'] == $dish['menuCategoryID']) { ?>
                                <?php echo $category['menuCategoryName']; ?>
                            <?php } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p id="toplink" style="
            font-size: x-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: lightcoral;
            margin: auto;
            width: 100px;
            border-radius: 50%;
        ">
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