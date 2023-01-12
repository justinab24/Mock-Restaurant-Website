<!-- 
    Name: Justin Abraham
    Date: December 9, 2022
    Course: IT202 003
    Assignment: Semester Project Phase 3
-->
<?php 
    $categoryID = filter_input(INPUT_POST, 'catSelect', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'codeInput');
    $name = filter_input(INPUT_POST, 'nameInput');
    $dishDescription = filter_input(INPUT_POST, 'descrptInput');
    $dishPrice = filter_input(INPUT_POST, 'priceInput', FILTER_VALIDATE_FLOAT);

    if ($categoryID == NULL || $categoryID == FALSE || $code == NULL || $name == NULL || $dishDescription == NULL || $dishPrice == NULL || $dishPrice == FALSE) {
        echo "Invalid dish data, make sure to check all fields!";
        include('database_error.php');
    } else {
        require_once('database.php');
        $query = 'INSERT INTO dishes
                    (menuCategoryID, dishCode, dishName, description, price, dateAdded)
                  VALUES
                    (:categoryID, :code, :name, :dishDescription, :dishPrice, NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryID', $categoryID);
        $statement->bindValue(':code', $code);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':dishDescription', $dishDescription);
        $statement->bindValue(':dishPrice', $dishPrice);
        $statement->execute();
        $statement->closeCursor();

        include ('create.php');
    }
?>