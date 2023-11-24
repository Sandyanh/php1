<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .error {color: red;}
    </style>
</head>
<body>
    <?php
        $productName = $txtPName = $txtDescription =  $description =  $price =  $category = $image = $category = "";
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        // }
        if(isset($_POST['btnsubmit'])){
            if(trim(empty($_POST['nameproduct']))){
                $productName = "* You must enter your product name!";
            }
            if(empty($_POST['description'])){
                $description = "* You must enter your description!";
            }
            //Validate price
            if(empty($_POST['price'])){
                $price = "* You must enter your price";
            }
            $anh = $_FILES['image'];
            echo $anh['name'];
            $ext = pathinfo($anh['name'],PATHINFO_EXTENSION)."<br>";
            $ext_img = ['png','jpg','gif','jpeg','webp'];
            if(in_array($ext, $ext_img)){
                $loi = "File hợp lệ";
            }else if($anh['size']> 50*1024){
                $loi = "File ảnh quá lớn. File upload <50kb";
            }else{
                $loi = "File bạn vừa nhập không phải file ảnh";
            }
            
        }
    ?>
    <div class="container">
        <section class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">ADD PRODUCTS</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nameproduct" id="name" value="<?php echo $txtPName?>">
                        </div>
                        <span class="error"><?php echo $productName; ?> </span>
                    </div>
                    <div class="form-group">
                        <label for="about" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"><?php echo $txtDescription ?></textarea>
                        </div>
                        <span class="error"><?php echo $description; ?> </span>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="price" id="name" value="<?php echo $txtprice ?>">
                        </div>
                        <span class="error"><?php echo $price; ?> </span>
                    </div>
                    <div class="form-group">
                        <label for="tech" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="category">
                                <option value="Laptop">Laptop</option>
                                <option value="Phone">Phone</option>
                                <option value="Tablet">Tablet</option>
                            </select>
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Image Products</label>
                        <div class="col-sm-3">
                             <input type="file" name="image">
                        </div>
                        <span class="error"><?php echo (isset($loi)) ? $loi : "";?></span>
                    </div> <!-- form-group // -->
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <!-- <button type="submit" name="submit" class="btn btn-primary">Save</button> -->
                            <input type="submit" class = "btn btn-primary" name="btnsubmit" value="Save">
                        </div>
                    </div> <!-- form-group // -->
                    
                </form>
            </div><!-- panel-body // -->
        </section><!-- panel// -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>