<?php
    require_once "./connect.php";
    $sql = "SELECT * FROM danhsachsanpham";
    $stsm = $conn->prepare($sql);
    $stsm->execute();
    $stsm->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<body>
    <div class="container-sm text-center py-5">
        <table class="table table-striped table-bordered">
            <thead class="p-3 mb-2 bg-dark text-white">
                <tr>
                    <th style='width:50px;'>ID</th>
                    <th>NAME PRODUCTS</th>
                    <th>THUMBNAIL</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>DESCRIPTION</th>
                    <th style="width: 150px">STATUS</th>

                </tr>
            </thead>
            <?php
            $index = 0;
            $list_product = $stsm->fetchAll();
            foreach ($list_product as $product) {
                $index++;
                extract($product);
                echo '<tbody>
                            <tr>
                                <th>' . $index . '</th>
                                <td>' . $product_name . '</td>
                                <td style = "width: 112px;">
                                <img src = "./image/' . $THUMBNAIL . '" alt = "' . $product_name . '"style = "width:100px;">
                                </td>
                                <td>' . $PRICE . '</td>
                                <td>' . $QUANTITY . '</td>
                                <td>' . $DECRIPTION . '</td>
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                    <button class = "btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>';
            }
            ?>
    </div>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>