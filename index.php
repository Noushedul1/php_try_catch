<?php

// $n = 5;
// if($n > 0){
// 	$div = 2/$n;
// 	echo $div;
// }else{
// 	echo 'Enter grater Than 0';
// }

// try catch (1)

// $n = 0;
// try{
// 	if($n == 0){
// 		throw new Exception("Enter greater than 0");
// 	}
// 	$div = 2/$n;
// 	echo $div;
// }catch(Exception $e){
// 	echo $e->getMessage();
// }

// try catch with function  best!!

// function division($n){
// 	try{
// 		if($n == 0){
// 			throw new Exception("Ennter more than Zero!");
// 		}
// 		if($n == 3){
// 			throw new Exception('Enter Another.');
// 		}
// 		$div = 2/ $n;
// 		echo $div."<br>";
// 	}catch(Exception $e){
// 		echo $e->getMessage();
// 		echo $e->getFile();
// 		// echo $e->getLine();
// 	}
// }

// division(3);

// try catch with custom error handling

// create own exception 
class myException extends Exception{
	function errorMessage(){
		$error = 'My exception message : '. $this->getMessage().
				'<br> My exception Line : '. $this->getLine();
				return $error;
	}
}

function division($n){
	try{
		if($n == 0){
			throw new Exception("Ennter more than Zero!");
		}
		if($n == 3){
			throw new myException('Enter Another.');
		}
		$div = 2/ $n;
		echo $div."<br>";
	}catch(Exception $e){
		echo $e->getMessage();
		// echo $e->getFile();
		// echo $e->getLine();
	}catch(myException $err){
		echo $err->errorMessage();
	}
}

division(3);

?>