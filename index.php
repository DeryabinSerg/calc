<?php

if ($_POST ['submit'])
{
	$a = (int)$_POST['first']; // первоее число
	$b = (int)$_POST['second']; // второе число
	$p = $_POST['operation']; // определитель выбранного действия 
	$c; //результат
	//описание действий 
	if($p=='+')
		 $c = $a + $b;
	 else if ($p=='-')
		 $c = $a - $b;
	 else if ($p=='*')
		 $c = $a * $b;
	 else if($p=='/')
	 {
		 if($b==0)
			 echo 'лучше умнож на ноль';
		 else $c = $a / $b;
		 
	 }
	 else $c = pow($a, $b);
}

?>

<form action="" method="post"> //описание формы
<input type="textbox" name="first" required>
<select name="operation" required>
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="^">^</option>
</select>
<input type="textbox" name="second" required>
<input type="submit" name="submit">
</form>
<?php
	if ($c)
		echo $c; //вывод результата 
?>
