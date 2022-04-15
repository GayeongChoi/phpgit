<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <?php include "../include/style.php"?>
    <style>
        .footer {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php include "../include/skip.php";?> 
    <!-- //skip -->
    <?php include "../include/header.php";?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center">
            <div class="container">
                <h3 class="section__title">코딩 블로그</h3>
                <p class="section__desc">코딩 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__search">
                        <form action="blogSearch.php" name="boradSearch" method="get">
                            <fieldset>
                                <legend class="ir_so">검색 영역</legend>
                                <input type="search" name="searchKeyword" id="blogSearch" class="search" placeholder="검색어를 입력해주세요!">
                                <label for="blogSearch" class="ir_so">검색</label>
                                <button class="button">검색</button>
                            </fieldset>
                        </form>
                        <div class="blog__btn mt20">
                            <a href="blogWrite.php">글쓰기</a>
                        </div> 
                    </div>
                    <div class="blog__cont">
<?php
    if(isset($_GET['page'])) {
        $page = (int) $_GET['page'];
    }else {
        $page = 1;
    }

    // 게시판 불러올 갯수
    $pageView = 5;
    $pageLimit = ($pageView * $page) - $pageView;

$sql = "SELECT * FROM myBlog WHERE blogDelete = 1 ORDER BY blogID DESC LIMIT {$pageLimit}, {$pageView}";

    $result = $connect -> query($sql);

    if($result) {
        $count = $result -> num_rows;

        if($count > 0) {
            
            $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
        }
    }
?>
<?php foreach($result as $blog){ ?>
    <article class="blog">
        <figuer class="blog__header">
            <a href="blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>)"></a>
        </figuer>
        <div class="blog__body">
            <span class="blog__cate"><?=$blog['blogCategory']?></span>
            <div class="blog__title"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
            <div class="blog__desc"><?=$blog['blogContents']?></div>
            <div class="blog__info">
                <span class="author"><a href="#"><?=$blog['blogAuthor']?></a></span>
                <span class="date"><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                <span class='modify'><a href='blogModify.php?blogID=<?=$blog['blogID']?>'>수정</a></span>
                <span class='delete'><a href='blogRemove.php?blogID=<?=$blog['blogID']?>'>삭제</a></span>
            </div>
        </div>
    </article>
<?php } ?>
                        
                    </div>
                    <div class="blog__pages">
                        <ul>
                            <?php include "blogPage.php"; ?>
                           <!-- <li><a href="#">&lt;&lt;</a></li>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">&gt;</a></li>
                            <li><a href="#">&gt;&gt;</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "../include/footer.php"; ?>
</body>
</html>