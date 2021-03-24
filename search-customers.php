<!DOCTYPE html>
<html lang="en">
<head>
    <title>search customers</title>
</head>
<body>
    <form action="query-handler.php" method="get">
    <input type="text" name="customer" placeholder="customer"> <br> <br>
    <input type="submit" name="customer_submit" value="submit">
    </form>
    <?php 
        session_start();
        if (!empty($_SESSION['customers'])) {
            $customers=$_SESSION['customers'];?>
            <table style="padding: 20px; margin: 20px;">
                <thead >
                    <th style="padding: 20px; margin: 20px;">customer name</th>
                    <th style="padding: 20px; margin: 20px;">customer country</th>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td style="padding: 20px; margin: 20px;"><?=$customer['customerName']?></td>
                        <td style="padding: 20px; margin: 20px;"><?=$customer['country']?></td>
                    </tr>
                    <?php
                        }
                        unset($_SESSION['customers']);
            }
    ?>
                </tbody>
            </table>
        
</body>
</html>