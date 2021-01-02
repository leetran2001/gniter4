<?php
	class Arith_operation extends CI_Controller
	{
	   public function __construct()
	   {
		parent::__construct();
	   }
		
	   public function index()
	   {
		$a=100;
		$b=10;
		$arith=new Calc();
		echo "<br><hr>";
		echo "Addition: $a + $b = ".$arith->add($a,$b);
		echo "<br>Subtraction: $a - $b =  ".$arith->sub($a,$b);
		echo "<br>Multiplication: $a * $b =  ".$arith->mul($a,$b);
		echo "<br>Division: $a / $b = ".$arith->div($a,$b);
		echo "<br>Modulus: $a % $b = ".$arith->rem($a,$b);
		echo "<br><hr>";
	   }
	}
?>