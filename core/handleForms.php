<?php  

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertChefBtn'])) {
    $insertChef = insertNewChef(
        $pdo,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['c_address'],
        $_POST['city'],
        $_POST['nationality'],
        $_POST['years_of_experience']
    );

    if ($insertChef) {
        $_SESSION['message'] = "Chef successfully inserted!";
        header("Location: ../index.php");
    }
}

if (isset($_POST['editChefBtn'])) {
    $editChef = editChef(
        $pdo,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['c_address'],
        $_POST['city'],
        $_POST['nationality'],
        $_POST['years_of_experience'],
        $_POST['date_added'],
        $_GET['id']
    );

    if ($editChef) {
        $_SESSION['message'] = "Chef successfully edited!";
        header("Location: ../index.php");
    }
}

if (isset($_POST['deleteChefBtn'])) {
    $deleteChef = deleteChef($pdo, $_GET['id']);

    if ($deleteChef) {
        $_SESSION['message'] = "Chef successfully deleted!";
        header("Location: ../index.php");
    }
}

if (isset($_GET['searchBtn'])) {
    $searchForChef = searchForChef($pdo, $_GET['searchInput']);
    foreach ($searchForChef as $row) {
        echo "<tr> 
                <td>{$row['chef_id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['c_address']}</td>
                <td>{$row['city']}</td>
                <td>{$row['nationality']}</td>
                <td>{$row['years_of_experience']}</td>
                <td>{$row['date_added']}</td>
              </tr>";
    }
}

?>
