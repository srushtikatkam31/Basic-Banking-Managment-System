<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/transaction.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Stalinist+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bbg">
        <nav class="navbar">
            <a href="index.php"><span class="logo"></span></a>
            <a href="index.php"><span class="btn">Home</span></a>
        </nav>

    <div class="table_op">
        <table>
	       <tr>
                <th>Account No</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Branch</th>
                <th>Balance</th>
	        </tr>
        <?php
            include('database.php');
            $sql=mysqli_query($con,"Select * from bankusers");
            while($result=mysqli_fetch_assoc($sql))
            {
                $id=$result['CustomerID'];
            ?>
                <tr>
                        <td><?php echo $result['Account_No'];?></td>
                        <td><?php echo $result['Customer_Name'];?></td>
                        <td><?php echo $result['Email'];?></td>
                        <td><?php echo $result['Branch_Name'];?></td>
                        <td><?php echo $result['AvailableBalance'];?></td>
                        <td class="button"><a href="transfer.php?CustomerID=<?php echo $id ?>">Transfer</a></td>
                        <td class="button"><a href="Transaction_History.php">History</a></td>
                </tr> 
                <?php
            }
        ?>
</table>
    </div>
    </div>
</body>
</html>