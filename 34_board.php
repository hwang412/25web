<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.board-container {
    width: 700px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
}

th {
    background: #4a90e2;
    color: white;
    padding: 10px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

a {
    color: #333;
    text-decoration: none;
}

a:hover {
    color: #4a90e2;
}

.write-btn-area {
    text-align: right;
    margin-bottom: 15px;
}

.write-btn {
    padding: 8px 15px;
    font-size: 14px;
    background: #4a90e2;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.write-btn:hover {
    background: #357ab8;
}

.page-links {
    text-align: center;
    margin-top: 20px;
}

.page-links a {
    padding: 5px 8px;
    margin: 0 3px;
}

.page-links b {
    color: #4a90e2;
}
</style>

<body>
<h1>레시피 목록 게시판</h1>

<div class="board-container">

<div class="write-btn-area">
    <a href="34_detailpost.php">
        <button class="write-btn">글쓰기</button>
    </a>
</div>

<table>
<tr>
  <th>NO</th><th>제목</th><th>작성자</th><th>작성일</th><th>조회</th>
</tr>

<?php
$connect=mysqli_connect("localhost","root","","sample");

if(empty($_GET['page'])) $page=1;
else $page=$_GET['page'];

$line_page=5;
$block_page=3;

$s1="select * from board";
$result=mysqli_query($connect,$s1);
$totrow=mysqli_num_rows($result);
$totpage=ceil($totrow/$line_page);
$totblock=ceil($totpage/$block_page);
$cblock=ceil($page/$block_page);
$frow=($page-1)*$line_page;

$selrec="select * from board order by no desc limit $frow,$line_page";
$info=mysqli_query($connect,$selrec);

while($rowinfo=mysqli_fetch_array($info))
{
	echo "<tr>";
	echo "<td>$rowinfo[no]</td>";
	echo "<td><a href='34_detailpost.php?title=$rowinfo[title]'>$rowinfo[title]</a></td>";
	echo "<td>$rowinfo[irum]</td>";
	echo "<td>$rowinfo[regdate]</td>";
	echo "<td>$rowinfo[hits]</td>";
	echo "</tr>";
}

mysqli_close($connect);
?>
</table>

<div class="page-links">
<?php
$fpage=(($cblock-1)*$block_page)+1;
$lpage=min($totpage,$cblock*$block_page);

if($cblock>1){
    $prvblock=($cblock-1)*$block_page;
    echo "<a href='34_board.php?page=$prvblock'>◀ 이전</a>";
}

for($i=$fpage;$i<=$lpage;$i++){
    if($i==$page) echo "<b>[$i]</b>";
    else echo "<a href='34_board.php?page=$i'>[$i]</a>";
}

if($cblock<$totblock){
    $nxtblock=($cblock+1)*$block_page;
    echo "<a href='34_board.php?page=$nxtblock'>다음 ▶</a>";
}
?>
</div>

</div>
</body>