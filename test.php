
<?php
	class A {
		public static function who() {
			echo __CLASS__;
	}

	public static function test() {
		static::who();
	
	$a = new A;
	$a->operation();
	
	$b = new B;
	$b->operation();
?>