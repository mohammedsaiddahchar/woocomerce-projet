<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Woocomerce Projet</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<?php  
		$orders = file_get_contents('http://localhost/projet/orders.php');
		$orders = json_decode($orders, true);
		$customers = file_get_contents('http://localhost/projet/customers.php');
		$customers = json_decode($customers, true);
		$products = file_get_contents('http://localhost/projet/products.php');
		$products = json_decode($products, true);
	?>
	<div>
		<br><br>
		<center>
			<h3>Data Customers</h3>
		</center>
		<br><br>
	</div>
<div class="container">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Country</th>
						<th>City</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ( $customers as $row ) : ?>
					<tr>
						<td><?= $i; ?></td>
						<td>
							<?= $row['username']; ?> 	
						</td>
						<td><?= $row['email']; ?></td>
						<td><?= $row['country']; ?></td>
						<td><?= $row['city']; ?></td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div>
		<br><br>
		<center>
			<h3>Data Orders Woocommerce</h3>
		</center>
		<br><br>
	</div>
<div class="container">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ( $orders as $row ) : ?>
					<tr>
						<td><?= $i; ?></td>
						<td>
							<?= $row['number']; ?> 
							<?= $row['billing']['first_name']; ?> 
							<?= $row['billing']['last_name']; ?>	
						</td>
						<td><?= $row['date_created']; ?></td>
						<td><?= $row['status']; ?></td>
						<td><?= $row['total']; ?></td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<center><h2 class="sub-header">Liste des Produits</h2></center>	
            <div class='table-responsive'>
                <table id='myTable' class='table table-hover'>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Total Sales</th>
                            <th>Picture</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($products as $product){
                                    echo "<tr><td>" . $product["id"]."</td>
                                        <td>" . $product["name"]."</td>
                                        <td>" . $product["status"]."</td>
                                        <td>" . $product["price"]."</td>
                                        <td>" . $product["total_sales"]."</td>
                                        <td><img height='50px' width='50px' src='".$product["images"][0]["src"]."'></td>
                                        <td><button><a class='btn btn-primary' href='EditProduct.php?id=".$product['id']."'>Update</a></button></td>
                                        <td><button onclick=\"myFunction()\"><a class='btn btn-danger' href='delete.php?id=".$product['id']."'>Delete</a></button></td></tr>";
                                }
                            ?>
                    </tbody>
                </table>
                <a class="btn btn-success" href="AddProduct.php">Ajouter un produit</a>
                <script>
function myFunction() {
  confirm("do you want delete this product?");
}
</script>
</body>
</html>