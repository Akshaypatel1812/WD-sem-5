<!DOCTYPE html>
<html>
<head>
    <title>Name Length Calculator Result</title>
</head>
<body>
    <?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $nameLength = strlen($name);
        echo "The length of your name, $name, is $nameLength characters.";
    } else {
        echo "Please enter your name in the form above.";
    }
    ?>
</body>
</html>

