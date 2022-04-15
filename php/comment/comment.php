<?php
include "../connect/connect.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>

    <?php
        include "../include/style.php";
    ?>
<!-- //style -->
</head>
<body>
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
    <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">코딩 초보 퀴즈</h3>
                <p class="section__desc">
                    코딩에 관한 기초적인 지식을 퀴즈로 배우는 사이트입니다.
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/logo.png" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">코딩 퀴즈 풀기</h3>
                            <p class="card__desc">코딩 관한 기초지식들을 퀴즈로 배웁니다. 
                                코딩에 입문하시는 분들에게 기초적인 코딩 지식을 퀴즈로 재미있게 공부합니다.
                                다양한 문제를 통해서 코딩에 대해 재밌게 입문 해보세요!
                            </p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/portfolio.png" alt="이미지2">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">Javascript/HTML/CSS 레퍼런스</h3>
                            <p class="card__desc">Javascript / HTML / CSS에 대한 레퍼런스 입니다. Javascript / HTML / CSS에 대한에 지식들을 정리 해놓았습니다. 웹 표준을 준수, 웹 사이트 레이아웃, 다양한 이펙트 효과 등이 정리 되어있습니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/tistory.png" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">티스토리 방문</h3>
                            <p class="card__desc">다양한 Javascript나 메서드등을 익히기 위한 다양한 예제들이 준비되어 있습니다. 그 외 참고하실 수 있는 여러 사항들을 포스트 해두었습니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- //card-type -->

        <section id="comment-type" class="section center purple">
            <h3 class="section__title">퀴즈 관련 댓글 달기</h3>
            <p class="section__desc">누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 작성 가능합니다. 100글자 이내로 써주세요</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment">
                        <fieldset>
                            <legend class="ir_so">댓글쓰기</legend>
                            <div class="comment__wrap">
                                <div>
                                    <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youText" class="ir_so">댓글 쓰기</label>
                                    <input type="text" name="youText" id="youText" class="input__style width" placeholder="퀴즈와 코딩에 대해 자유롭게 적어주세요!" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="submit" value="댓글 작성하기">작성하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">
                    <!-- <div class="list">
                        <p class="comment__desc">저 신청할께요!! 5월달 강의 신청합니다.</p>
                        <div class="comment__icon">
                            <span class="face"><img src="../assets/img/face2@2x.png" alt="얼굴"></span>
                            <span class="name">황상연</span>
                            <span class="date">2022-03-11</span>
                        </div>
                    </div> -->
    
<?php
    $sql = "SELECT * FROM myComment";
    $result = $connect -> query($sql);
    // $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($commentInfo);
    // echo "<pre>";

    if($result) {
        $count = $result -> num_rows;
        
        if($count > 0) {
            for($i=1; $i<=$count; $i++){
                $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='list'>";
                echo "<p class='comment__desc'>".$commentInfo['youText']."</td>";
                echo "<div class='comment__icon'>";
                echo "<span class='face'><img src='../assets/img/face.png' alt='이미지'></span>";
                echo "<span class='name'>".$commentInfo['youName']."</span>";
                echo "<span class='data'>".date('Y-m-d', $commentInfo['regTime'])."</span>";
                echo "</div>";
                echo "</div>";
            }
        }
    }
?>

                </div>
            </div>
        </section>
    </main>

    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>