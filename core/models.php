<?php  

require_once 'dbConfig.php';

function getAllChefs($pdo) {
    $sql = "SELECT * FROM chef_data 
            ORDER BY first_name ASC";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getChefByID($pdo, $chef_id) {
    $sql = "SELECT * FROM chef_data WHERE chef_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$chef_id]);

    if ($executeQuery) {
        return $stmt->fetch();
    }
}

function searchForChef($pdo, $searchQuery) {
    $sql = "SELECT * FROM chef_data WHERE 
            CONCAT(first_name, last_name, email, gender, 
                   c_address, city, nationality, 
                   years_of_experience, date_added) 
            LIKE ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute(["%" . $searchQuery . "%"]);
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function insertNewChef($pdo, $first_name, $last_name, $email, 
    $gender, $c_address, $city, $nationality, $years_of_experience) {

    $sql = "INSERT INTO chef_data 
            (
                first_name,
                last_name,
                email,
                gender,
                c_address,
                city,
                nationality,
                years_of_experience
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([
        $first_name, $last_name, $email, 
        $gender, $c_address, $city, 
        $nationality, $years_of_experience,
    ]);

    if ($executeQuery) {
        return true;
    }
}

function editChef($pdo, $first_name, $last_name, $email, $gender, 
    $c_address, $city, $nationality, $years_of_experience, $chef_id) {

    $sql = "UPDATE chef_data
                SET first_name = ?,
                    last_name = ?,
                    email = ?,
                    gender = ?,
                    c_address = ?,
                    city = ?,
                    nationality = ?,
                    years_of_experience = ?
                WHERE chef_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([
        $first_name, $last_name, $email, 
        $gender, $c_address, $city, 
        $nationality, $years_of_experience, $chef_id
    ]);

    if ($executeQuery) {
        return true;
    }
}

function deleteChef($pdo, $chef_id) {
    $sql = "DELETE FROM chef_data 
            WHERE chef_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$chef_id]);

    if ($executeQuery) {
        return true;
    }
}
?>
