<?php
$product1 = array(
    'image' => 'https://cdn01.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture/Apro/Apro_product_28930/iphone-11-64gb-_main_115_450.png.webp',
    'price' => 2000,
    'name' => 'IPHONE 13',
    'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
);

$product2 = array(
    'image' => 'https://halostore.vn/store/wp-content/uploads/2021/09/iphone-13-blue-1-600x600.jpg',
    'price' => 1500,
    'name' => 'IPHONE 11',
    'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
);

$product3 = array(
    'image' => 'https://cdn.tgdd.vn/Products/Images/42/274360/samsung-galaxy-a13-xanh-thumb-1-600x600.jpg',
    'price' => 2000,
    'name' => 'SAMSUNG GALAXY S13',
    'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
);
$products = array($product1, $product2, $product3);
?>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products New</title>
</head>

<body>
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading text-warning">ALL PRODUCTS</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="mt-3 card-img-top" src="<?php echo $product['image']; ?>" alt="Card image cap">
                                <h3 class="jumbotron-heading text-primary text-center mt-3"><?php echo $product['name']; ?></h3>
                                <h5 class="jumbotron-heading text-warning text-center mt-1"><?php echo $product['price']; ?>$</h5>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $product['description']; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </main>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>