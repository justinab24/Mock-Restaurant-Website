<!-- 
    Name: Justin Abraham
    Date: December 9, 2022
    Course: IT202 003
    Assignment: Semester Project Phase 3
-->

<?php 
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $uemail = filter_input(INPUT_POST, 'uemail');
    $street = filter_input(INPUT_POST, 'uaddress');
    $city = filter_input(INPUT_POST, 'ucity');
    $state = filter_input(INPUT_POST, 'ustate');
    $zip = filter_input(INPUT_POST, 'uzip');
    $ref = filter_input(INPUT_POST, 'howselect');

    if ($fname == NULL || $lname == NULL || $uemail == NULL || $street == NULL || $city == NULL || $state == NULL || $zip == NULL || $ref == NULL) {
        echo "Invalid data, make sure to check all fields!";
        include('database_error.php');
    } else {
        require_once('database.php');
        $query = 'INSERT INTO customers
                    (firstName, lastName, emailAddress, streetAddress, city, state, zipcode, reference, dateAdded)
                  VALUES
                    (:fname, :lname, :uemail, :street, :city, :state , :zip , :ref ,NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':uemail', $uemail);
        $statement->bindValue(':street', $street);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':zip', $zip);
        $statement->bindValue(':ref', $ref);
        $statement->execute();
        $statement->closeCursor();

        include ('maillist.html');
    } 
?>