<?php
 require_once("../baseball/db_connect.php")
?>

<!doctype html>
<html lang="en">

<head>
    <title>新增文章頁</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php include("../baseball/assets/css/css_lin.php") ?>


    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/[version.number]/[distribution]/ckeditor.js"></script> -->
    <script src="/baseball/ckeditor/ckeditor5-build-classic-41.0.0/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    
</head>

<body>

    <div class="container">
        <div class="py-2">
            <a class="btn btn-primary" 
                href="article.php"
                role="button"
            ><i class="fa-solid fa-chevron-left"></i>回文章列表</a>
        </div>

        <h1>新增文章</h1>
        <form action="doPost.php" method="post">
            <div class="mb-2">
                <label for="class">選取文章類別</label>
                <select class="form-select" name="type" id="">
                    <option value="">請選擇類型</option>
                    <option value="打擊">打擊</option>
                    <option value="投球">投球</option>
                    <option value="守備">守備</option>
                    <option value="體能">體能</option>
                    <option value="知識">知識</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="formFileMultiple" class="form-label">選取圖片</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>

            </div>

            <div class="mb-2">
                <label for="" class="form-label">文章標題</label>
                <input type="text" class="form-control" name="title" required max="" min="">
                <!-- 用required 可以用開發者工具刪掉required就能送出資料 所以才要用後端去做驗證-->

            </div>
         

            <div class="mb-2">
                <label for="" class="form-label">文章內容</label>
                <textarea id="editor" name="editor" class="form-control" aria-label="With textarea">

                </textarea>

                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor') )
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>






            <div class="mb-2">

            </div>


            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>

    <?php include("../baseball/assets/js/js_lin.php") ?>
   
</body>

</html>




















<!-- <div class="container">
        <form action="doPost.php" method="post">
            <div class="mb-2">
                <label for="" class="form-label">account</label>
                <input type="text" class="form-control" name="account" required max="12" min="4"> 
                  // 用required 可以用開發者工具刪掉required就能送出資料 所以才要用後端去做驗證
                <div class="form-text">請輸入4~12字元長度的帳號</div>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Retype-password</label>
                <input type="password" class="form-control" name="repassword">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Phone</label>
                <div class="row g-3">
                    <div class="col">
                        <input type="tel" class="form-control" name="phone[]">
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control" name="phone[]">
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control" name="phone[]">
                    </div>
                </div>

            </div>
            <div class="mb-2">
                <label for="" class="form-label">性別</label>
                <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                    <label class="form-check-label" for="others">Others</label>
                </div>
                </div>
            </div>
            <div class="mb-2">
                <label for="">職業</label> 
                // 下拉式選單 
                <select class="form-select" name="job" id="" >
                    <option value="">請選擇職業</option>
                    <option value="1">工程師</option>
                    <option value="2">教師</option>
                    <option value="3">學生</option>
                    <option value="4">自營業</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">介紹</label>
                <textarea class="form-control" name="intro" id="" cols="30" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div> -->