<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/history.css">
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
    <h2>Transaction History</h2>
    <div class="table_op">
        <table>
	       <tr>
                <th>Sender</th>
                <th>Reciever</th>
                <th>Amount</th>
	        </tr>
        <?php
            include('database.php');
            $sql=mysqli_query($con,"Select * from transactions");
            while($result=mysqli_fetch_assoc($sql))
            {
            ?>
                <tr>
                        <td><?php echo $result['sender_name'];?></td>
                        <td><?php echo $result['reciever_name'];?></td>
                        <td><?php echo $result['amount_transfer'];?></td>
                </tr> 
                <?php
            }
        ?>
</table>
    </div>
    </div>
</body>
</html>