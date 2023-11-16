<?php
$product1 = array(
    'id' => 1,
    'image' => 'https://cdn01.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture/Apro/Apro_product_28930/iphone-11-64gb-_main_115_450.png.webp',
    'price' => 2000,
    'name' => 'IPHONE 13',
    'description' => '6.1”, OLED, Super Retina XDR 512GB'
);

$product2 = array(
    'id' => 2,
    'image' => 'https://halostore.vn/store/wp-content/uploads/2021/09/iphone-13-blue-1-600x600.jpg',
    'price' => 1500,
    'name' => 'IPHONE 11',
    'description' => 'OLED 6.5 inch 128GB'
);

$product3 = array(
    'id' => 3,
    'image' => 'https://cdn.tgdd.vn/Products/Images/42/274360/samsung-galaxy-a13-xanh-thumb-1-600x600.jpg',
    'price' => 2000,
    'name' => 'SAMSUNG GALAXY S13',
    'description' => '6,8 inch'
);

$products = array($product1, $product2, $product3);

if (isset($_GET['delete_product_id'])) {
    $deleteProductId = $_GET['delete_product_id'];

    // Tìm kiếm sản phẩm cần xóa trong mảng
    $index = array_search($deleteProductId, array_column($products, 'id'));

    // Nếu sản phẩm được tìm thấy, xóa nó
    if ($index !== false) {
        unset($products[$index]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Product Name</th>
                <th>Specifications</th>
                <th>Status</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                src="<?php echo $product['image']; ?>"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $product['name']; ?></p>
                                <p class="text-muted mb-0"><?php echo $product['description']; ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">2532 x 1770 Pixels</p>
                        <p class="text-muted mb-0">RAM 4GB, Face ID, IP68</p>
                    </td>
                    <td>
                        <span>Stocking</span>
                    </td>
                    <td>525</td>
                    <td>
                        <a href="?delete_product_id=<?php echo $product['id']; ?>" class="btn btn-link btn-rounded btn-sm fw-bold">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2Qr
