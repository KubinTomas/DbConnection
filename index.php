<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include "DbConnector.php";
    include "services/math/CalculatorService.php";
    include "services/math/MathService.php";

    // $dbConnector = DbConnector::GetDefaultDbConnector();
    // $dbConnection = $dbConnector->Connection();

    $dbConnection = DbConnector::GetDefaultDbConnection();

    $calculator = new CalculatorService(1);

    echo "Echlte.." . $calculator->Sum(5, 10);


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "onlze";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    echo "<br>";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    echo "<br>";

    // $sql = "INSERT INTO car (name, age) VALUES ('Ttttt', 9994)";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }




    ?>
</body>

</html>