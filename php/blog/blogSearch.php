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
            <!-- 주소
         ekfvoddl0321.dothome.co.kr/php/blog/blog.php 
        richclub9.dothome.co.kr/php/board/board.php 
    -->

    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
    <!-- //style -->
    <style>
        #footer {
            background: #f5f5f5;
        }
    </style>
 
</head>
<body>
<?php
        include "../include/skip.php";
    ?>
    <!-- skip -->

        <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <!-- section -->
        <section id="board-type" class="section center mb100">
        <div class="container">
                <h3 class="section__title">블로그</h3>
                <p class="section__desc">자유롭게 소통할 수 있는 게시판입니다. 자유롭게 작성해 주세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
<?php
    if(isset($_GET['page'])) {
        $page = (int) $_GET['page'];
    }else {
        $page = 1;
    }

    function msg($alert){
        echo "<p class='result'>총 ".$alert." 건이 검색되었습니다.</p>";
    }
    
     // 게시판 불러올 갯수
     $pageView = 5;
     $pageLimit = ($pageView * $page) - $pageView;
 
    $searchKeyword = $_GET['searchKeyword'];
    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    //쿼리문 작성
    $sql = "SELECT * FROM myBlog b JOIN myMember m ON(b.memberID = m.memberID) WHERE b.blogTitle LIKE '%{$searchKeyword}%' ORDER BY blogID DESC" ;
    switch($searchKeyword){
        case 'title':
            $sql .= "WHERE b.blogTitle LIKE '%{$searchKeyword}%' ORDER BY blogID DESC";
            break;
        case 'content':
            $sql .= "WHERE b.blogContents LIKE '%{$searchKeyword}%' ORDER BY blogID DESC";
            break;
        case 'name':
            $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY blogID DESC";
            break;
    }
    $result = $connect -> query($sql);
    //갯수파악
    if($result){
        $count2 = $result -> num_rows;
        msg($count2);
    }
?>
<!-- 작성된 게시판 불러오기 -->
            <?php foreach($result as $blog){ ?>
                      <article class='blog'>
                        <figuer class='blog__header'>
                            <a href="blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>")></a>
                            </figuer>
                            <div class='blog__body'>
                                <span class='blog__cate'>HTML</span>
                                <div class='blog__title'><?=$blog['blogCategory']?></div>
                                <div class="blog__title"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
                                <span class='author'><?=$blog['blogContents']?></span>
                                <div class='blog__info'>
                                    <span class='author'><a href='#'><?=$blog['blogAuthor']?></a></span>
                                    <span class='date'><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                                    <span class='modify'><a href='blogModify.php?blogID=<?=$blog['blogID']?>'>수정</a></span>
                                    <span class='delete'><a href='blogRemove.php?blogID=<?=$blog['blogID']?>'>삭제</a></span>
                                </div>
                            </div>
                        </article>
               <?php } ?>

                    </div>
                    <div class="board__pages">
                        <ul>
                             <?php include "blogPage.php"; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        </main>
            <!-- footer -->
            <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>