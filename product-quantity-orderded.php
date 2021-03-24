<!DOCTYPE html>
<html lang="en">
<head>
    <title>product quantity</title>
</head>
<body>
    <form action="query-handler.php" method="get">
    <input type="text" name="product_name" placeholder="product_name"> <br> <br>
    <input type="submit" name="product_name_submit" value="submit">
    </form>
    <?php 
        session_start();
        if (!empty($_SESSION['prdctQnty'])) {
            $prdctQnty=$_SESSION['prdctQnty']; 
            echo "<br> $prdctQnty <br>";        
            unset($_SESSION['prdctQnty']);
            }
    ?>        
</body>
</html>