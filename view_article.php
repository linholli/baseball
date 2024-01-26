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
        <title>文章顯示頁</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


        <?php include("../baseball/assets/css/css_lin.php") ?>
        
    </head>

    <body>
    <div class="container">
        <div class="py-2">
            <a class="btn btn-primary" 
                href="article.php"
                role="button"
            ><i class="fa-solid fa-chevron-left"></i>回文章列表</a>
        </div>

        <?php
            $rows =$result->fetch_assoc();

            foreach ($rows as $article):


        ?>
            <div><h1><?=$article["title"]?></h1></div>


            
        <div class="py-2">
            <a class="btn btn-primary" 
                href="edit_article.php"
                role="button"
            >編輯</a>
        </div>
        <?php endforeach; ?>
    </div>


        <?php include("../baseball/assets/js/js_lin.php") ?>
        
    </body>
</html>
