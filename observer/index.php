<?php 

	interface Observer{
		public function handle();
	}
	interface Subject{
		public function attach($observable);
		public function detach($index);
		public function notify();
	}

	Class Login implements Subject{
		protected $observables =   [];
		
		private function attachObservers($observable){
			foreach ($observable as $observer) {
				if( ! $observer instanceof Observer){
					throw new Exception;
				} 
				$this->attach($observer);
			}
		}

		public function attach($observable){
			if(is_array($observable)){
				return $this->attachObservers($observable);
			}

			$this->observables[] = $observable;
			return $this;
		}


		public function detach($index){
			unset($this->observables[$index]);
		}

		public function notify(){
			foreach ($this->observables as $obs) {
				$obs->handle();
			}
		}

	}//End Class - Login

	/**
	* EmailNotifier
	*/
	class EmailNotifier implements Observer
	{
		public function handle(){
			var_dump('Fire Off An Email');
		}		
	}

	/**
	* AdminNotifier
	*/
	class AdminNotifier implements Observer
	{
		public function handle(){
			var_dump('Fire Off An Admin something');
		}		
	}

	$login = new Login;
	$login->attach([
		new EmailNotifier,
		new AdminNotifier
		]);
	$login->notify();	

	
 ?>