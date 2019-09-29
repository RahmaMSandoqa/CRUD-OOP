<?php include "layout/header.php" ?>
<?php include "config/database.php" ?>
<?php include "model/category.php" ?>
<?php include "model/product.php"?>
<?php
$db = new Database();
$connection = $db->conn;
$category = new Categories($connection);
$product=new Products ($connection);
$categories = $category->get_categories();


?>
<div class="container">

    <form >
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control"  id="product_name" aria-describedby="product_name" placeholder="product name">

        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" placeholder=" product price">
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <div>
                Categories
                <select  class="form-control" name="id" id="id">
                    <?php
                    foreach ($categories as $category){
                        echo "<option value='$category[id]'>$category[name]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php include "layout/footer.php" ?>




