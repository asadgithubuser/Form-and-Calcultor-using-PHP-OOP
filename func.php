<?php
	class Name{
		

		public function show($post){
			$name = $post['num1'];
			$name2 = $post['num2'];
			
			$full_name = $name ." ".$name2;
			return 	$full_name;		
			
		}
		
		
		
		
		
		
		
	}

?>

