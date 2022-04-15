<?php
     $sql = "SELECT count(blogID) FROM myBlog";
     $result = $connect -> query($sql);
     $blogCount = $result -> fetch_array(MYSQLI_ASSOC);
     $blogCount = $blogCount['count(blogID)'];
     // echo "<pre>";
     // var_dump($boardCount);
     // echo "</pre>";
     //echo $boardCount;
     // 페이지 넘버 갯수
     // 300/10 = 30
     // 301/10 = 31
     // 306/10 = 31
     // 309/10 = 31
     //총 페이지 갯수
     $blogCount = ceil($blogCount/$pageView);

        //현재 페이지를 기준으로 보여주고 싶은 갯수
        $pageCurrent = 5;
        $startPage = $page - $pageCurrent;
        $endPage = $page + $pageCurrent;

    //처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    //마지막 페이지 초기화
    if($endPage >= $blogCount) $endPage = $blogCount;

    //이전 페이지
    if($page != 1){
        $prevPage = $page -1;
        echo "<li><a href='blog.php?page={$prevPage}'>이전</a></li>";
    }

    //1 2 3 4 5 6 7 8 9 10 11 12 13 14....
    //페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";

        if($i == $page){
            $active = "active";
        }
        echo "<li class='{$active}'><a href='blog.php?page={$i}'>{$i}</a></li>";
    }

    //다음 페이지
    if($page != $endPage){
        $nextPage = $page +1;
        echo "<li><a href='blog.php?page={$nextPage}'>다음</a></li>";
    }

    //마지막 페이지
    if($page != $endPage){
        echo "<li><a href='blog.php?page={$blogCount}'>끝</a></li>";
    }
    
?>