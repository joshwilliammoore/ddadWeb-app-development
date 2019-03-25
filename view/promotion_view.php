<?php
        require_once "../controler/promotions.php";
        require_once "../model/dataAccess.php";
        require_once "../model/promotion.php";
        ?>
<!doctype html>
<html>

<head>
<title>Promotional List</title>
<link href="../CSS/table.css" rel="stylesheet" type="text/css">
<link href="../CSS/main.css" rel="stylesheet" type="text/css">
<link href="../CSS/search.css" rel="stylesheet" type="text/css">
<link href="../CSS/vehicles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../AJAX/clientcode-anon.js"></script>
</head>

<div class="topnav">
<a class="active" href="index.php">Home</a>
<a href="vehiclelist_view.php">Vehicle List</a>
<a href="admintools_view.php">Admin Tools</a>
<a href="signup.php">Sign up</a>
<a href="basket_view.php">Basket</a>
<div class="login-container">
</div>
</div>



<div class="title">
<h1>Promotional List</h1>
</div>

<body>
<div id="searchfield">
<form action="promotion_view.php" method="get">
<input type="text" name="searchname" /> <input type="submit" value="Search" />
</form>
<div class="results">
<div class="result"></div>
</div>
</div>
<table id="resultstable" ALIGN=left>
<thead>
<tr>
<th>
<form action="promotion_view.php" method="get">
<input type="submit" name="prom_ID" value="ID" class="btn" />
</form>
</th>
<th>
<form action="promotion_view.php" method="get">
<input type="submit" name="vehicleMake" value="Vehicle Make" class="btn" />
</form>
</th>
<th>
<form action="promotion_view.php" method="get">
<input type="submit" name="Discount" value="Discount" class="btn" />
</form>
</th>
<th>
<form action="promotion_view.php" method="get">
<input type="submit" name="endDate" value="End Date  " class="btn" />
</form>
</th>
</tr>
</thead>
<tbody>
<?php foreach ($results as $promotion): ?>
<tr>
<td><?=$promotion->prom_id?></td>
<td><?=$promotion->vehicleMake?></td>
<td><?=$promotion->discount?></td>
<td><?=$promotion->endDate?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</form>

<form action="promotion_view.php">
        The IDs of Promotions: <input type="text" name="prom_id">
<br>
<input type="submit" name="addToBasket" value="Add to basket">
</form>

<div class="responsive">
<div class="gallery">
<a target="_blank" href="car_image1.jpg">
<img src="../view/images/car_image1.jpg" alt="vehicle1" style="style=height:200px;object-fit:cover;">
</a>
<div class="desc">SEAT The Alhambra<br/>Standard MPV<br/>
<input type="submit" name="addToBasket" value="Add to basket"></div>
</div>
</div>

<div class="responsive">
<div class="gallery">
<a target="_blank" href="bus_image1.jpg">
<img src="../view/images/bus_image1.jpg" alt="vehicle2" style=height:200px;object-fit:cover;">
</a>
<div class="desc">Mercedes Sprinter<br/>VIP Coach<br/>
<input type="submit" name="addToBasket" value="Add to basket"></div>
</div>
</div>

<div class="responsive">
<div class="gallery">
<a target="_blank" href="bus_image2.jpg">
<img src="../view/images/bus_image2.jpg" alt="vehicle3" style=height:200px;object-fit:cover;">
</a>
<div class="desc">Mercedes Sprinter<br/>VIP Coach<br/>
<input type="submit" name="addToBasket" value="Add to basket"></div>
</div>
</div>

<div class="responsive">
<div class="gallery">
<a target="_blank" href="bus_image3.jpg">
<img src="../view/images/bus_image3.jpg" alt="vehicle4" style=height:200px;object-fit:cover;">
</a>
<div class="desc">Mercedes Sprinter<br/>VIP Coach<br/>
<input type="submit" name="addToBasket" value="Add to basket"></div>
</div>
</div>

<div class="clearfix"></div>


</body>

</html>