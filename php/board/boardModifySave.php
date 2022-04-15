<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $boardID = $_POST['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $youPass = $_POST['youPass'];
    $memberID = $_SESSION['memberID'];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);

    //echo $boardID;
    
    //쿼리문 작성
    $sql = "SELECT youPass, memberID FROM myMember WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);


    if($_SESSION['memberID'] == $memberInfo['memberID']) {
        if($result){

            //아이디 비밀번호 확인(내가 쓴 글)
            if($memberInfo['youPass'] == $youPass && $memberInfo['memberID'] == $memberID){
                //수정(쿼리문 작성)
                $sql = "UPDATE myBoard SET boardTitle ='{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID ='{$boardID}'";
                $connect -> query($sql);
            } else {
                echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 확인해주세요.');</script>";
            }
        }

    } else {
        echo "해당 권한이 없습니다.";
    }
?>
    <script>
        location.href = "board.php";
    </script>
</body>
</html>