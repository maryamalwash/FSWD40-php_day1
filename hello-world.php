
<!DOCTYPE html>

<html>

<head>

<title>Hello World</title>

<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h1 class="h1_1">
ex01:
 <?php
 $name = "maryam alwash";
  echo $name; ?>
</h1>
<hr>
<H1>
ex2:
	<?php
	$d = date("D");
	if ($d == "mon")
	echo "Happy Mondy!";
		else
	echo "Have a nice Day!";
	?>
</H1>
<hr>
<h1>
ex03:
<?php
	$s = date("D");

	if ($s == "Mon")
	echo "Happy Monday!";

	elseif ($s == "tue")
	echo "Happy Tueseday!";

	elseif ($s == "wed")
	echo "Happy Wednesday!";

	elseif ($s == "thu")
	echo "Happy Thursday!";

	elseif ($s == "fri")
	echo "Happy Friday!";

	elseif ($s == "sat")
	echo "Happy Saturday!";

	else 
	echo "Happy Sunday!"; 
?>
</h1>
<hr>
<h1>
ex04/a:<br>
	<?php 
	$name = "Maryam Alwash";
	
	for ($i=0;$i<50;$i++){
	echo "$name<br>";
	}
	?>
</h1>
<hr>
<h1>

ex04/b:<br>
<?php
$name = "Maryam Alwash";
$i =0;
do {
echo "maryam <br>";
$i++;
}
while ($i<50);
?>
<hr>
</h1>
<h1>
ex05:
<?php
$numbers = array (1,2,3,4,5,6);
foreach($numbers as $value){
echo "<br>$value";
}
?>	
<hr>
</h1>


<h1>
ex06:<br>
<?php
$x = array (

"cartoon"=>array(
"Mickey Mouse" => "Black and white",
"Spongepop"=>"An animated series "
),


"anim" => array(
"death note"=> "Japanese animated Fantasy film",
"spirited away"=>"Japanese animated film"
),
 
"games"=> array ("Super Mario"=> "platform game series",
"pac man"=> "video game series"
)
);
echo $x["cartoon"]["Mickey Mouse"]."<br>";
echo $x["cartoon"]["Spongepop"]."<br>";
echo $x["anim"]["death note"]."<br>";
echo $x["anim"]["spirited away"]."<br>";
echo $x["games"]["Super Mario"]."<br>";
echo $x["games"]["pac man"]."<br>";

?>	
</h1>

</body>

</html>