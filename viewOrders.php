<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    	<!-- W3 CSS-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    	
	<!-- Google Fonts -->
	<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Pacifico">	

    <style>
        .w3-pacifico {font-family: "Pacifico", serif;}
        h1 {font-family: "Pacifico", serif; }
    </style>

</head>
<body class = "w3-pale-red">
    <div class="w3-container w3-center w3-pink">
    <h1>Clementine Bakery</h1>
    <h2>View Orders</h2>
    <img src="ChocolateCake.png" alt="10%" height ="10%" class="w3-display-topleft" />
    <img src="Croissant.png" alt="10%" height ="10%" class="w3-display-topright" />
    </div>
    <?php include "menu.php"; ?>
    <div class="w3-container w3-light-gray">
    <?php 
   $orders = file("orders.txt");

   $number_of_orders = count($orders);
   if($number_of_orders == 0){
    echo "No orders pending";
   } 
   else{
     echo "<table class='w3-table w3-striped w3-border'>";
     echo "   <tr class = w3-blue-gray>";
     echo "     <th>Date time</th>";
     echo "     <th>Product</th>";
     echo "     <th>Quantity</th>";
     echo "     <th>Total</th>";
     echo "   </tr>";
     echo "</table";
   }

   #loop though each row
   for($i = 0; $i < $number_of_orders; $i++) {
    # retrieve current row from multi dimensional array
    $curOrder = explode(';', $orders[$i]);

    # begin table row
    echo "<tr>";

    for($j = 0; $j < count($curOrder); $j++)
        echo "<td>".$curOrder[$j]."</td>";

        // end table row
   }
    ?>
    </div>
</body>
</html>