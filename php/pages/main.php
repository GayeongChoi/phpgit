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
    <title>PHP 사이트</title>
    <?php
        include "../include/style.php";
    ?>
    <style>
        #footer {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->


    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>

        <section id="banner">
        <h3 class="ir_so">배너 영역</h3>
            <div class="slider__wrap">
                <div class="slider__img">
                    <div class="slider__inner">
                        <div class="slider s1">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW PROJECT</h4>
                                <p>너무 무리하지 말아요!
                                    <br>이미 당신은 해내고 있고!
                                    <br>앞으로도 잘 할 수 있어요! 
                                </p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s2">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW PROJECT</h4>
                                <p>너무 무리하지 말아요!
                                    <br>이미 당신은 해내고 있고!
                                    <br>앞으로도 잘 할 수 있어요! 
                                </p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s3">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW PROJECT</h4>
                                <p>너무 무리하지 말아요!
                                    <br>이미 당신은 해내고 있고!
                                    <br>앞으로도 잘 할 수 있어요! 
                                </p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s4">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW PROJECT</h4>
                                <p>너무 무리하지 말아요!
                                    <br>이미 당신은 해내고 있고!
                                    <br>앞으로도 잘 할 수 있어요! 
                                </p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s5">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW PROJECT</h4>
                                <p>너무 무리하지 말아요!
                                    <br>이미 당신은 해내고 있고!
                                    <br>앞으로도 잘 할 수 있어요! 
                                </p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s6">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW PROJECT</h4>
                                <p>너무 무리하지 말아요!
                                    <br>이미 당신은 해내고 있고!
                                    <br>앞으로도 잘 할 수 있어요! 
                                </p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__btn">
                    <a href="#" class="prev"></a>
                    <a href="#" class="next"></a>
                </div>
                <div class="slider__dot"></div>
            </div>                                                                        
    </section>

        <section id="blog-type" class="section center type">
            <div class="container">
                <h3 class="section__title">코딩 블로그</h3>
                <p class="section__desc">코딩와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
<?php
    $sql = "SELECT blogImgFile, blogCategory, blogTitle, blogContents, blogAuthor, blogRegTime FROM myBlog ORDER BY blogID DESC LIMIT 3";
    $result = $connect -> query($sql);
    foreach($result as $blog){
?>
    <article class="blog">
        <figuer class="blog__header">
            <a href="#" style="background-image: url(../assets/img/blog/<?=$blog['blogImgFile']?>);"></a>
        </figuer>
        <div class="blog__body">
            <span class="blog__cate"><?=$blog['blogCategory']?></span>
            <div class="blog__title"><?=$blog['blogTitle']?></div>
            <div class="blog__desc"><?=$blog['blogContents']?></div>
            <div class="blog__info">
                <span class="author"><?=$blog['blogAuthor']?></span>
                <span class="date"><?=date('Y-m-d', $blog['blogRegTime'])?></span>
            </div>
        </div>
    </article>
<?php } ?>
                    </div>
                    <div class="blog__btn">
                        <a href="../blog/blog.php" class="more">더보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="quiz-type" class="section center gray">
            <h2 class="ir_so">퀴즈풀기 영역</h2>
            <div class="container">
                <h3 class="section__title"><span>코딩</span> 퀴즈</h3>
                <p class="section__desc">
                    코딩 초짜들을 위한 코딩 퀴즈입니다.
                </p>
                <div class="quiz__inner">
                    <div class="quiz__header">
                        <div class="quiz__subject">
                            <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject">
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span> .
                            <span class="quiz__ask"></span>
                            <div class="quiz__desc"></div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment green none">해설 보기</button>
                            <button class="next orange right ml10 none">다음 문제</button>
                            <button class="confirm green right">정답 확인</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //quiz-type -->

        <!-- layer -->
        <div class="layer_bg"></div>
            <div class="layer">
                <h2>해설보기</h2>
                <p id="quizComment"></p>
                <a href="#javascript;;" class="close">닫기</a>
            </div>
            <!-- layer -->

        <section id="notice-type" class="section center">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">강의와 관련된 새로운 소식입니다. 다양한 정보를 확인하세요!</p>
                <div class="notice__inner">
                <article class="notice">
                        <h4>공지사항</h4>
                        <ul>
                        <?php
                            $sql = "SELECT boardTitle, regTime, boardID FROM myBoard ORDER BY boardID DESC LIMIT 4";
                            $result = $connect -> query($sql);
                            foreach($result as $board){ ?>
                                <li>
                                    <a href="../board/boardView.php?boardID=<?=$board['boardID']?>">
                                        <?=$board['boardTitle']?>
                                    </a>
                                    <span class="time">
                                        <?=date('Y-m-d', $board['regTime'])?>
                                    </span>
                                </li>
                        <?php ; } ?>
                        </ul>
                        <a href="../board/board.php" class="more">더보기</a>
                    </article>
                    <article class="notice">
                        <h4>댓글</h4>
                            <?php
                                $sql = "SELECT youText, regTime FROM myComment ORDER BY commentID DESC LIMIT 4";
                                $result = $connect -> query($sql);
                                foreach($result as $comment){
                            ?>

                                <li><a href="../comment/comment.php#comment-type"><?=$comment['youText']?></a><span class="time"><?=date('Y-m-d', $comment['regTime'])?></span></li>
                            <?php } ?>
                        </ul>
                        <a href="../comment/comment.php" class="more">더보기</a>
                    </article>
                </div>
            </div>
        </section>

    </main>
    <!-- //main -->

    <?php include "../include/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        //레이어 팝업
        $(".comment").click(function(){                   
            $(".layer").slideDown(300);
            $(".layer_bg").show(300);
        });
        $(".layer .close").click(function(){
            $(".layer").slideUp(300);
            $(".layer_bg").hide(300);
        });

        let quizAnswer = "";

        function quizView(view){
            $(".quiz__num").text(view.quizID);
            $(".quiz__ask").text(view.quizAsk);
            $("#select1 + span").text(view.quizChoice1);
            $("#select2 + span").text(view.quizChoice2);
            $("#select3 + span").text(view.quizChoice3);
            $("#select4 + span").text(view.quizChoice4);
            $("#quizComment").text(view.quizComment);
            quizAnswer = view.quizAnswer;                                       
        }
        //다음 문제 넘어가기
        function quizNext(){

        }

        //정답 체크 : 했는지 안했는지
        function quizCheck(){
            let selectCheck = $(".quiz__selects input:checked").val();
            
            //정답을 체크 안했으면
            if(selectCheck == null || selectCheck == ''){
                alert("정답을 체크해주세요!!!");
                
            } else {
                $(".quiz__btn .next").fadeIn();
                $(".quiz__btn .comment").fadeIn();
                    
                //정답을 체크 했으면
                if(selectCheck == quizAnswer){
                    //정답
                    $(".quiz__selects #select"+quizAnswer).addClass("correct");
                    $(".quiz__selects input").attr("disabled", true);                    
                } else {
                    //오답
                    $(".quiz__selects #select"+selectCheck).addClass("incorrect");
                    $(".quiz__selects #select"+quizAnswer).addClass("correct"); 
                    $(".quiz__selects input").attr("disabled", true);                     
                }
            }
            
        }

        //문제 데이터 가져오기
        function quizData(){
            let quizSubject = $("#quizSubject").val();
          
            $.ajax({
                url: "../quiz/quizInfo.php",
                method: "POST",
                data: {"quizSubject": quizSubject},
                dataType: "json",
                success : function(data){
                    // console.log(data.quiz);
                    quizView(data.quiz);
                    
                },
                error: function(request, status, error){
                    console.log('request' + request);
                    console.log('status' + status);
                    console.log('error' + error);
                }
            })
        }
        quizData();
        //과목 선택하면 체인지
        $("#quizSubject").change(function(){
            quizData();
        });

        //정답 확인
        $(".quiz__btn .confirm").click(function(){
            //정답을 클릭 했는지 안했는지 판단하기
            quizCheck();
            //누르면 나타나게 하기           
            
            
            
            // $(".quiz__btn .next").show() / hide/ toggle;
            // $(".quiz__btn .next").fadeIn / Out/ toggle();
            // $(".quiz__btn .next").slideDown / Up/ Toggle();           
        });

        //다음 문제 버튼을 클릭했을 때
        $(".quiz__btn .next").click(function(){
            quizData();
            $(".quiz__selects input").attr("disabled", false);
            $(".quiz__selects input").prop("checked", false);   //checked 해제
            $(".quiz__selects input").removeClass("correct");
            $(".quiz__selects input").removeClass("incorrect");
            $(".quiz__btn .next").fadeOut();
            $(".quiz__btn .comment").fadeOut();
        });
    </script>
 <script>
        const sliderWrap = document.querySelector(".slider__wrap");
        const sliderImg = document.querySelector(".slider__img");       //이미지 한칸만 움직이는 영역
        const sliderInner = document.querySelector(".slider__inner");    //이미지 움직이는 영역
        const slider = document.querySelectorAll(".slider");            //각각의 이미지
        const sliderBtn = document.querySelector(".slider__btn");        //슬라이드 버튼 선언
        const sliderBtnPrev = sliderBtn.querySelector(".prev");            //슬라이드 버튼(이전)
        const sliderBtnNext = sliderBtn.querySelector(".next");             //슬라이드 버튼(이후)
        const sliderDot = document.querySelector(".slider__dot");            // 닷 영역
        
        let currentIndex = 0;

        let sliderWidth = sliderImg.offsetWidth;    //이미지 가로 값
        let sliderLength = slider.length; //이미지 갯수
        let sliderFirst = slider[0]; //첫번째이미지
        let sliderLast = slider[sliderLength - 1]; //마지막이미지
        let cloneFirst = sliderFirst.cloneNode(true); //첫번째 이미지 복사
        let cloneLast = sliderLast.cloneNode(true); //마지막 이미지 복사

        let posInitial = "";
        let dotIndex = "";
        let sliderTimer = "";
        let interval = 2000;

        console.log(sliderWidth);
        
         // 이미지 복사 - jQuery = appendTo/prependTo : append/prepend
        sliderInner.appendChild(cloneFirst);
        sliderInner.insertBefore(cloneLast, sliderFirst);
        
        function gotoSlider(index){
            sliderInner.classList.add("transition");
            sliderInner.style.left = -100 * (index+1)+"vw";
            currentIndex = index;
            dotActive();
        }

        //닷 메뉴 세팅
        function dotInit(){
            for(let i=0; i<sliderLength; i++){
                dotIndex += "<a href='#' class='dot'></a>"
            }
            dotIndex += "<a href='#' class='play'>play</a>";
            dotIndex += "<a href='#' class='stop show'>stop</a>";
            sliderDot.innerHTML = dotIndex;
            sliderDot.firstElementChild.classList.add("active");
        }
        dotInit();

        //닷 버튼 활성화
        function dotActive(){
            let dotAll = document.querySelectorAll(".slider__dot .dot");

            dotAll.forEach(dot => {
                dot.classList.remove("active"); //전체 닷 메뉴 비활성화
            })

            if(currentIndex == sliderLength) { //마지막 이미지 왔을 때
                dotAll[0].classList.add("active"); // : dotAll[0]을 활성화
            } else if (currentIndex == -1) {   //처음 이미지 왔을 때
                dotAll[sliderLength - 1].classList.add("active"); 
            } else { //현재 보고 있는 이미지 닷 활성화
                dotAll[currentIndex].classList.add("active");
            }
        }

        //닷 버튼 누르면 선택 이미지 이동
        document.querySelectorAll(".slider__dot .dot").forEach((dot, index) => {
            dot.addEventListener("click", () => {
                gotoSlider(index);
            })
        })

        //자동 이동
        function autoPlay(){
            sliderTimer = setInterval(()=>{
                gotoSlider(currentIndex + 1);
            }, interval);
        }

        //이동 멈춤
        function stopPlay(){
            clearInterval(sliderTimer);
        }

        //이전 버튼 클릭
        sliderBtnPrev.addEventListener("click", ()=>{
            let prevIndex = currentIndex - 1;
            gotoSlider(prevIndex);
            stopPlay();
        });

        //다음 버튼 클릭
        sliderBtnNext.addEventListener("click", ()=>{
            let nextIndex = currentIndex + 1;
            gotoSlider(nextIndex);
            stopPlay();
        });

        //애니메이션 완료 후
        sliderInner.addEventListener("transitionend", () => {
            sliderInner.classList.remove("transition");
            
            if(currentIndex == -1){
                sliderInner.style.left = -(sliderLength * 100) + "vw";
                currentIndex = sliderLength -1;
            }
            if(currentIndex == sliderLength){
                sliderInner.style.left = -(1 * 100) + "vw";
                currentIndex = 0;
            }
        });


        //마우스 효과 : 마우스를 올렸을 때        
        sliderInner.addEventListener("mouseenter", ()=>{ 
            stopPlay();
        })
        sliderInner.addEventListener("mouseleave", ()=>{

            if(document.querySelector(".play").classList.contains("show")){
                stopPlay();
            } else {
                autoPlay();
            }
        })
        
        //버튼 클릭하기
        document.querySelector(".play").addEventListener("click", ()=>{
            document.querySelector(".play").classList.remove("show");
            document.querySelector(".stop").classList.add("show");
            autoPlay();
        })
        document.querySelector(".stop").addEventListener("click", ()=>{
            document.querySelector(".stop").classList.remove("show");
            document.querySelector(".play").classList.add("show");
            stopPlay();
        })
    </script>
   
</body>
</html>