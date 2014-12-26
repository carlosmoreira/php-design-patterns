<?php 
	
	interface coffee{
		public function cost();
		public function description();
	}
	

	//Coffee Types.........
	class SimpleCoffee implements coffee
	{
		public function cost(){
			return 2.50;
		}
		public function description(){
			return "Simple Coffee";
		}
	}


	class FanyCoffee implements coffee{
		public function cost(){
			return 4.50;
		}
		public function description(){
			return "Fancy Coffee";
		}	
	}



	//Toppings..........
	class ToppingWhipCream implements coffee{
		
		private $coffee;

		public  function __construct(coffee $coffee){
			$this->coffee = $coffee;
		}

		public function cost(){
			return .50 + $this->coffee->cost();
		}
		public function description(){
			return $this->coffee->description() . " with Whipped Cream";
		}	
	}	


	class ToppingSugar implements coffee{
		private $coffee;

		public  function __construct(coffee $coffee){
			$this->coffee = $coffee;
		}

		public function cost(){
			return .25 + $this->coffee->cost();
		}
		public function description(){
			return $this->coffee->description() . " with Sugar";
		}	
	}	



	$myCoffee = new SimpleCoffee();
	$myCoffee = new ToppingWhipCream($myCoffee);
	
	echo "Cost: ($" . $myCoffee->cost() . ") " .   $myCoffee->description();



 ?>