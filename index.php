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

    ?>
</body>

</html>