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
    $blogID = $_GET['blogID'];
    $blogID = $connect -> real_escape_string($blogID); //주소창에 아디값을 임의로 지정해서 삭제못하게

    // 쿼리문 작성(보드ID값 삭제하기)
    $sql = "DELETE FROM myBlog WHERE blogID = {$blogID}";
    $connect -> query($sql);

    echo "<script>alert('삭제되었습니다.'); location.href = 'blog.php';</script>";
?>
</body>
</html>