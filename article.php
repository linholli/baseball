<?php
require_once("../baseball/db_connect.php");

$sqlAll = "SELECT * FROM article WHERE valid=1";
$resultAll = $conn->query($sqlAll);
$articleTotalCount = $resultAll->num_rows;

$sql = "SELECT * FROM article WHERE valid=1";
$result = $conn->query($sql);

?>


<!doctype html>
<html lang="en">

<head>
    <title>文章列表頁</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php include("../baseball/assets/css/css_lin.php") ?>
</head>

<body>
    <div class="container">
        <h1 class="articletitle "><i class="fa-solid fa-baseball-bat-ball"></i>文章列表頁<i class="fa-solid fa-baseball"></i></h1>
        <div class="py-2">
            <div class="row g-3">
                <div class="col">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="輸入關鍵字搜尋文章" aria-label="Recipient's username" aria-describedby="button-addon2" name="search" 
                            <?php
                                 if (isset($_GET["search"])) :
                                     $searchValue = $_GET["search"];
                                    ?> value="<?= $searchValue ?>" <?php endif; ?>>

                            <!-- 可保留搜尋條件 放在使用者頁面  -->
                            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass fa-fw"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="box1 box">文章編號</th>
                        <th class="box2 box">文章標題</th>
                        <th class="box3 box">文章內容</th>
                        <th class="box4 box">照片</th>
                        <th class="box5 box">發布時間</th>
                        <th class="box6 box">類型</th>
                        <th class="box">顯示</th>
                        <th class="box">編輯</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = $result->fetch_all(MYSQLI_ASSOC);

                    foreach ($rows as $article) :
                    ?>
                        <tr>
                            <td class="articlebox"><?= $article["id"] ?></td>
                            <td class="articlebox"><?= $article["title"] ?></td>
                            <td class="articlebox"><?= $article["description"] ?></td>
                            
                            <td class="articlebox"><img class="imgcover" src="../baseball/assets/img/article_img/<?= $article["photo"] ?>" alt=""></td>
                            
                            <td class="articlebox"><?= $article["created_at"] ?></td>
                            <td class="articlebox"><?= $article["type"] ?></td>
                            <td class="articlebox"><a class="btn btn-primary" href="view_article.php?id=<?= $article["id"] ?>" role="button"><i class="fa-solid fa-eye"></i></a>
                            </td>
                            <td class="articlebox"><a class="btn btn-primary" href="view_article.php?id=<?= $article["id"] ?>" role="button"><i class="fa-solid fa-pen-to-square"></i></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>

    <?php include("../baseball/assets/js/js_lin.php") ?>
</body>

</html>