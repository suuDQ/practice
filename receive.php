<pre><?php print_r($_POST); ?></pre>

<?php
echo htmlspecialchars($_POST['recipe_name'],ENT_QUOTES,'UTF-8')."<br>";

if ($_POST['category'] === '1') {
  echo "和食" ."<br>";
} else if ($_POST['category'] === '2') {
  echo "中華" ."<br>";
} else if ($_POST['category'] === '3') {
  echo "洋食" ."<br>";
}

if ($_POST['difficulty'] === "1") echo "簡単" ."<br>";
if ($_POST['difficulty'] === "2") echo "普通" ."<br>";
if ($_POST['difficulty'] === "3") echo "難しい" ."<br>";




/*$box = array("リンゴ","みかん","ぶどう");
echo "$box[1]";

$var = 50;
echo gettype( $var ) . "\n";
*/
//P102
?>
