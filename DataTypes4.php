<html>
 <head>
  <title>Booleans to Constants</title>
 </head>
 <body>
      <?php
		//Create two variables
		$Bool1 = true;
		$Bool2 = false;
		
		//Output each variable.
		echo "\$bool1: $Bool1 <br />";
		echo "\$bool2: $Bool2 <br />";
		
		/* Setfour variables: 
		Var1 to any integer, 
		Var2 to null, 
		Var3 to any string, 
		Var4 to 0  (zero with no quotes)
		*/		
		$Var1 = 3;
		$Var2 = null;
		$Var3 = "Hello";
		$Var4 = 0;
		
		//Output variable is set, is null, and is empty.
		echo "<br />";
		echo "\$var1 is set: " . isset($Var1) . "<br />";
		echo "\$var2 is set: " . isset($Var2) . "<br />";
		echo "\$var3 is set: " . isset($Var3) . "<br />";
		echo "\$var4 is set: " . isset($Var4) . "<br />";
		echo "<br />";
		echo "\$var1 is null: " . is_null($Var1) . "<br />";
		echo "\$var2 is null: " . is_null($Var2) . "<br />";
		echo "\$var3 is null: " . is_null($Var3) . "<br />";
		echo "\$var4 is null: " . is_null($Var4) . "<br />";
		echo "<br />";
		echo "\$var1 is empty: " . empty($Var1) . "<br />";
		echo "\$var2 is empty: " . empty($Var2) . "<br />";
		echo "\$var3 is empty: " . empty($Var3) . "<br />";
		echo "\$var4 is empty: " . empty($Var4) . "<br />";
		echo "<br />";
		
		/* Setthree variables: 
		Var5 to any integer, 
		Var6 to your full name, 
		Var7 to Var6 + a three-digit integer.
		*/
		$Var5 = 5;
		$Var6 = "Thomas Do";
		$Var7 = $Var6 + 345;
		
		//Output variable's (Var5, Var6, Var7) type is.
		echo "Type? " . gettype($Var5) . "<br />";
		echo "Type? " . gettype($Var6) . "<br />";
		echo "Type? " . gettype($Var7) . "<br />";
		echo "<br />";
		
		//Cast Var5 to a string using settype.
		settype($Var5,"string");
		//Cast Var6 to an integer using the declaration (integer).
		(integer) $Var6;
		
		//Output variable's (Var5, Var6) type is.
		echo "Type? " . gettype($Var5) . "<br />";
		echo "Type? " . gettype($Var6) . "<br />";
		echo "<br />";
		
		//Set a new variable (Var8) to the integer 108
		$Var8 = 108;
		//Define a constant CIS_PHP to 108.
		define("CIS_PHP",108);
		//Output 2 variable 
		echo "Variable: " . $Var8 . "<br />";
		echo "Constant: " . CIS_PHP . "<br />";
		echo "<br />";
		
		//Increment Var8 by 10 (+=) and define CIS_PHP to 118
		$Var8 += 10;
		define("CIS_PHP",118);
		//Output 2 variables and get notice redefine constant
		echo "Variable: " . $Var8 . "<br />";
		echo "Constant: " . CIS_PHP . "<br />";
		echo "<br />";
		
      ?>
 </body>
</html>
