<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=$_POST['id'];
    $product_name= $_POST['product_name'];
    $description= $_POST['description'];
    $quantity= $_POST['quantity'];
    $price= $_POST['price'];

    $sql = "INSERT INTO products(id, product_name, description, quantity, price) VALUES('$id', '$product_name', '$description', '$quantity', '$price')";

    if($connection->query($sql)==TRUE)
    {
        header("location: show_details.php");
    }
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add Details of Selling Product</title>
</head>
<body>
    <h1 class="text-center text-5xl my-10">Enter Information of Products</h1>

    <form action="add_selling_details.php" method="POST" class="w-1/2 mx-auto py-4 space-y-3">

    <label for="a" class="p-2 text-xl ">Product Id</label>
    <input name="id" type="number" id="a" placeholder="Enter the id" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="b" class="p-2 text-xl">Products Name</label>
    <input name="product_name" type="text" id="b" placeholder="Enter products name" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="c" class="p-2 text-xl">Description</label>
    <textarea id="c" name="description" rows="3" cols="50" placeholder="Enter description here" class="w-full border border-blue-700 p-2 rounded-md"></textarea>

    <label for="e" class="p-2 text-xl">Quantity</label>
    <input name="quantity" type="number" id="e" placeholder="Quantity of the product" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="d" class="p-2 text-xl">Price</label>
    <input name="price" type="number" id="d" placeholder="Enter the Price" class="w-full border border-blue-700 p-2 rounded-md">



    <button class="w-full bg-blue-500 text-white p-2 rounded-md">Submit</button>




    </form>

</body>
</html>