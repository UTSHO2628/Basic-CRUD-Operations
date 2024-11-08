<?php
include "db.php";

if(ISSET($_GET['id_no']))

{
    $id_no = intval($_GET['id_no']);

    $sql = "SELECT* FROM products WHERE id_no = $id_no";

    $result = $connection->query($sql);

    $record = $result->fetch_assoc();

}

if($_SERVER["REQUEST_METHOD"]=="POST")

{
    $id_no= $_POST['id_no'];
    $id= $_POST['id'];
    $product_name= $_POST['product_name'];
    $description= $_POST['description'];
    $quantity= $_POST['quantity'];
    $price= $_POST['price'];

    $sql = "UPDATE products SET id='$id', product_name='$product_name', description='$description', quantity='$quantity', price='$price' WHERE id_no =$id_no ";

    if($connection->query($sql)==TRUE)
 {
    header( "location: show_details.php");
 }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Details of Selling Product</title>
</head>
<body>
    <h1 class="text-center text-5xl my-10">Update Information of Product</h1>

    <form action="update_details.php" method="POST" class="w-1/2 mx-auto py-4 space-y-3">

    <input name="id_no" type="hidden"  value="<?= $record['id_no']; ?>" placeholder="id_no" class="w-full border border-blue-700 p-2 rounded-md">
    <label for="a" class="p-2 text-xl ">Product Id</label>
    <input name="id" type="number" id="a" value="<?= $record['id']; ?>" placeholder="Enter the id" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="b" class="p-2 text-xl">Products Name</label>
    <input name="product_name" type="text" id="b" value="<?= $record['product_name']; ?>" placeholder="Enter products name" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="c" class="p-2 text-xl">Description</label>
    <textarea id="c" name="description" rows="3" cols="50" placeholder="Enter description here" class="w-full border border-blue-700 p-2 rounded-md"> <?= $record['description']; ?> </textarea>

    <label for="e" class="p-2 text-xl">Quantity</label>
    <input name="quantity" type="number" id="e" value="<?= $record['quantity']; ?>" placeholder="Quantity of the product" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="d" class="p-2 text-xl">Price</label>
    <input name="price" type="number" id="d" value="<?= $record['price']; ?>" placeholder="Enter the Price" class="w-full border border-blue-700 p-2 rounded-md">



    <button class="w-full bg-blue-500 text-white p-2 rounded-md">Submit</button>




    </form>

</body>
</html>