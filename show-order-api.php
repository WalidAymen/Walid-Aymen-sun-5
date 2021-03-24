<!DOCTYPE html>
<html lang="en">
<head>
    <title>show order api</title>
</head>
<body>
    <form action="query-handler.php" method="get">
    <input type="number" name="order_number" placeholder="order_number"> <br> <br>
    <input type="submit" name="order_number_api_submit" value="submit">
    </form>
    <?php 
        session_start();
        if (!empty($_SESSION['orderAPI'])) {
            $orderAPI=$_SESSION['orderAPI']; 
            echo "<br> $orderAPI <br>";        
            unset($_SESSION['orderAPI']);
            }
    ?>        
</body>
</html>