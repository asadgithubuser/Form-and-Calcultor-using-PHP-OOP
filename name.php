<?php
	class Name{
		
		public $name;
		
		public function show($post){
			$name = $post['submit'];
			
			switch($name){
				case 1:
				$result = $post['num1']+ $post['num2'];
				return "Add Result is :".$result;
				break;
				
				case 2:
				$result = $post['num1']* $post['num2'];
				return "Multiple Result is :".$result;
				break;
				
				case 3:
				$result = $post['num1']- $post['num2'];
				return "Substraction Result is :".$result;
				break;
				
				case 4:
				$result = $post['num1']/ $post['num2'];
				return "Divition Result is :".$result;
				break;
			};
			
		}
		
		
		
		
		
		
		
	}

?>

