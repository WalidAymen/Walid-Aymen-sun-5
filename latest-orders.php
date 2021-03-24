<!DOCTYPE html>
<html lang="en">
<head>
    <title>latest orders</title>
</head>
<body>
    <form action="query-handler.php" method="get">
    <input type="number" name="num" placeholder="number"> <br> <br>
    <input type="submit" name="latest_orders_submit" value="submit">
    </form>
    <?php 
        session_start();
        if (!empty($_SESSION['oreders'])) {
            $orders=$_SESSION['oreders'];?>
            <table style="padding: 20px; margin: 20px;">
                <thead >
                    <th style="padding: 20px; margin: 20px;">Order number</th>
                    <th style="padding: 20px; margin: 20px;">Order date</th>
                    <th style="padding: 20px; margin: 20px;">Customer number</th>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) { ?>
                    <tr>
                        <td style="padding: 20px; margin: 20px;"><?=$order['orderNumber']?></td>
                        <td style="padding: 20px; margin: 20px;"><?=$order['orderDate']?></td>
                        <td style="padding: 20px; margin: 20px;"><?=$order['customerNumber']?></td>
                    </tr>
                    <?php
                        }
                        unset($_SESSION['oreders']);
            }
    ?>
                </tbody>
            </table>
        
</body>
</html>