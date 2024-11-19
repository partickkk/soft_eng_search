<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chef</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php $getChefByID = getChefByID($pdo, $_GET['id']); ?>
    <h1>Edit the Chef!</h1>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <p>
            <label for="firstName">First Name</label> 
            <input type="text" name="first_name" value="<?php echo $getChefByID['first_name']; ?>">
        </p>
        <p>
            <label for="lastName">Last Name</label> 
            <input type="text" name="last_name" value="<?php echo $getChefByID['last_name']; ?>">
        </p>
        <p>
            <label for="email">Email</label> 
            <input type="text" name="email" value="<?php echo $getChefByID['email']; ?>">
        </p>
        <p>
            <label for="gender">Gender</label> 
            <input type="text" name="gender" value="<?php echo $getChefByID['gender']; ?>">
        </p>
        <p>
            <label for="address">Address</label> 
            <input type="text" name="c_address" value="<?php echo $getChefByID['c_address']; ?>">
        </p>
        <p>
            <label for="city">City</label> 
            <input type="text" name="city" value="<?php echo $getChefByID['city']; ?>">
        </p>
        <p>
            <label for="nationality">Nationality</label> 
            <input type="text" name="nationality" value="<?php echo $getChefByID['nationality']; ?>">
        </p>
        <p>
            <label for="experience">Years of Experience</label> 
            <input type="number" name="years_of_experience" value="<?php echo $getChefByID['years_of_experience']; ?>">
        </p>
        <p>
            <input type="submit" value="Save" name="editChefBtn">
        </p>
    </form>
</body>
</html>
