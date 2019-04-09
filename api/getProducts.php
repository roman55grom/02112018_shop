<?php
    require($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
    


    $catalogData = [
        'items' => [],
        'pagination' => [
            'countPages' => 6,
            'currentPage' => $_GET['page']
        ]
    ];

    $productsOnPage = 10;

    // 1-14
    // 15-28
    // 29-42
    
    // (3 - 1) * 14 + 1 = 29
    // (1 - 1) * 12 + 1 =  1
    // (2 - 1) * 12 + 1 = 13

    // 1. Получить количество товаров из БД
    // 2. Поделить это количество на количество товаров    
    //    на одной странице

    // floor();
    // Math.floor()


    $request_cat = ($_GET['category'] != 0) ? "WHERE `category` = {$_GET['category']}" : '' ;

    $lastProductNumber = $_GET['page'] * $productsOnPage;
    $firstProductNumber = ($_GET['page'] - 1) * $productsOnPage + 1;

    $query = "SELECT * FROM `product` {$request_cat} LIMIT {$firstProductNumber}, {$lastProductNumber}";

    $products = mysqli_query($db, $query);

    $productsCount = mysqli_num_rows($products);
    $pagesCount = ceil($productsCount / $productsOnPage);

    $catalogData['pagination']['countPages'] = $pagesCount;
    // 13/10 - 1.3
    // floor(1.3) => 1
    // ceil(1.3) => 2
    // round(1.3) => 1
    // round(1.51) => 2

    while($result = mysqli_fetch_assoc($products)) {
        array_push($catalogData['items'], $result);
    }

    echo json_encode($catalogData);
?>