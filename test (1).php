<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>레시피 공유 사이트</title>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #fafafa;
}

/* 상단 오른쪽 메뉴 */
.top-menu {
    width: 100%;
    padding: 15px 25px;
    background-color: #f5f5f5;

    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 18px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.top-menu a, 
.top-menu span {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    font-size: 15px;
}

/* 메인 제목 */
.main-title {
    text-align: center;
    font-size: 40px;
    margin-top: 50px;
    margin-bottom: 15px;
    font-weight: 800;
    color: #3c3c3c;
    letter-spacing: -1px;
}

.sub-text {
    text-align: center;
    font-size: 20px;
    color: #666;
    margin-bottom: 40px;
}

/* 메인 대표 이미지 */
.main-img {
    display: block;
    width: 70%;
    max-width: 650px;
    margin: 0 auto 50px auto;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

/* 카드 레이아웃 */
.card-box {
    display: flex;
    justify-content: center;
    gap: 25px;
    margin-top: 10px;
    margin-bottom: 40px;
}

.card {
    background: white;
    padding: 20px;
    width: 220px;
    text-align: center;
    border-radius: 12px;
    font-size: 17px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.12);
    transition: 0.2s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.18);
}

/* 글쓰기 버튼 */
.menu-btn {
    display: block;
    width: 220px;
    text-align: center;
    padding: 15px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 18px;
    font-weight: bold;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 60px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    transition: 0.2s;
}

.menu-btn:hover {
    background-color: #45a049;
    transform: translateY(-2px);
}
</style>

</head>

<body>

<!-- 상단 로그인/로그아웃 메뉴 -->
<div class="top-menu">
<?php
if (isset($_SESSION['nicname'])) {
    $nic = $_SESSION['nicname'];
    echo "<a href='29_logout22.php'>로그아웃</a>";
    echo "<span>환영합니다, $nic 님</span>";
} else {
    echo "<a href='29_member.html'>회원가입</a>";
    echo "<a href='29_login.html'>로그인</a>";
}
?>
</div>

<!-- 메인 제목 -->
<h1 class="main-title">레시피 공유 사이트</h1>
<p class="sub-text">여러분의 맛있는 요리 레시피를 함께 나누어보세요!</p>

<!-- 대표 이미지 -->
<img src="images/main_food.jpg" class="main-img">

<!-- 인기 레시피 카드 -->
<div class="card-box">
    <div class="card">🍝 파스타 만드는 법</div>
    <div class="card">🍗 간장치킨 황금레시피</div>
    <div class="card">🍰 폭신한 수플레 팬케이크</div>
</div>

<!-- 글쓰기 버튼 -->
<a href="34_board.php" class="menu-btn">게시판 글 더보기</a>

</body>
</html>