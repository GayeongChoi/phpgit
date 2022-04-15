<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include "../include/style.php";
    ?>
</head>
<body>
    
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents" class="gray">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <div class="container">
            
        </div>
    </main>
    <!-- //main -->

    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->

    <?php
         include "../connect/connect.php";
         $youEmail = $_POST['youEmail'];
         $youNickName = $_POST['youNickName'];
         $youPass = $_POST['youPass'];
         $youName = $_POST['youName'];
         $youBirth = $_POST['youBirth'];
         $youPhone = $_POST['youPhone'];
         $regTime = time();

         $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
         $youNickName = $connect -> real_escape_string(trim($_POST['youNickName']));
         $youName = $connect -> real_escape_string(trim($_POST['youName']));
         $youBirth = $connect -> real_escape_string(trim($_POST['youBirth']));
         $youPhone = $connect -> real_escape_string(trim($_POST['youPhone']));
         $youPass = $connect -> real_escape_string(trim($_POST['youPass']));
         $youPass = sha1("web".$youPass);

        //메세지 출력
        function msg($alert){
            echo "<p class='alert'>($alert)</p>";
        }
         
        //회원가입
        $sql = "INSERT INTO myMember(youEmail, youNickName, youPass, youName, youBirth, youPhone, regTime) VALUES('$youEmail', '$youNickName', '$youPass', '$youName', '$youBirth', '$youPhone', '$regTime')";
        $result = $connect -> query($sql);
        if($result){
            msg("회원가입을 축하합니다. 로그인을 해주세요!");
        } else {
            msg("관리자에게 문의하세요");
            exit;
        }
        // if($isEmailCheck = true &&  $isPhoneCheck = true){
        // } else {
        //     msg("이메일 또는 핸드폰 번호가 틀립니다. 다시 한번 확인해주세요");
        // }
    ?>
</body>
</html>