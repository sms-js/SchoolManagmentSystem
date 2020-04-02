<?php
require_once("SimpleRest.php");
require_once("User.php");
		
class UserRestHandler extends SimpleRest {

	function getAllUsers() {	

		$user = new User();
		$rawData = $user->getAllUsers();
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No fragrance found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["users"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}
	
	function getUserbyid($id) {	

		$user = new User();
		$rawData = $user->getUserbyid($id);
        
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No fragrance found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["user"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
		
	}
	
	function login_verification($un,$pw){
		$user = new User();
		$rawData = $user->login($un/*,$pw*/);
		
		 
		 
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('status' => 'user doesn\'t exist');		
		} else {
			//while($row=mysql_fetch_array($rawData)){
		
				$row=$rawData[0];
		        $act=$row["activated"];
				$role=$row["role"];
				$password =$row["password"] ;
			
				if($act==1){
				
				if($role=="admin"){
				$statusCode = 404;
					//$rawData = array('status' => 'you are an admin');
					$rawData = array('status' => 'user doesn\'t exist');
				}else{
				if(password_verify($pw,$password)==1 ){
						$statusCode = 200;
						$rawData = array('status' => 'login successfully');
					 }else{
						$statusCode = 404;
						$rawData = array('status' => 'wrong login informations'); 
					 }
				}
				}else{
					$statusCode = 404;
					$rawData = array('status' => 'under verification');
				}
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		//$result["login status"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response; 

			
		}

		
	
	}


	function getUserrole($un){
		
		$user = new User();
	$rawData = $user->getUserrole($un);
	
	if(empty($rawData)) {
		$statusCode = 404;
		$rawData = array('error' => 'No user found!');		
	} else {
		$statusCode = 200;
	}

	$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
	$this ->setHttpHeaders($requestContentType, $statusCode);
	
	$result["role"] = $rawData;
			
	if(strpos($requestContentType,'application/json') !== false){
		$response = $this->encodeJson($result);
		echo $response;
	}
	
	 }
		
		function register_teacher($t_un,$t_eml,$t_pw,$t_fn,$t_bd,$t_g,$t_adr,$t_pn,$t_mn){
		$user = new User();
		/*$birthday = explode("/", "03/25/1998");
			$birthday = mktime(0,0,0,$birthday['0'],$birthday['1'],$birthday['2']);
			echo $birthday;
			echo "////// " .date('m/d/Y',$birthday);*/
		$birthday = explode("/", $t_bd);
		$birthday = mktime(0,0,0,$birthday['0'],$birthday['1'],$birthday['2']);
		$rawData = $user->register_teacher($t_un,$t_eml,$this->make($t_pw),$t_fn,$birthday,$t_g,$t_adr,$t_pn,$t_mn);
        
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('status' => 'ERROR !');		
		} else {
			$statusCode = 200;
			
		}

		$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		
		$result["status"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
		}

		function register_student($t_un,$t_eml,$t_pw,$t_fn,$t_bd,$s_ri,$s_ci,$t_g,$t_adr,$t_pn,$t_mn){
			$user = new User();
			/*$birthday = explode("/", "03/25/1998");
				$birthday = mktime(0,0,0,$birthday['0'],$birthday['1'],$birthday['2']);
				echo $birthday;
				echo "////// " .date('m/d/Y',$birthday);*/
			$birthday = explode("/", $t_bd);
			$birthday = mktime(0,0,0,$birthday['0'],$birthday['1'],$birthday['2']);
			$rawData = $user->register_student($t_un,$t_eml,$this->make($t_pw),$t_fn,$birthday,$s_ri,$s_ci,$t_g,$t_adr,$t_pn,$t_mn);
			
			
			if(empty($rawData)) {
				$statusCode = 404;
				$rawData = array('status' => 'ERROR !');		
			} else {
				$statusCode = 200;
				
			}
	
			$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
			$this ->setHttpHeaders($requestContentType, $statusCode);
			
			$result["status"] = $rawData;
					
			if(strpos($requestContentType,'application/json') !== false){
				$response = $this->encodeJson($result);
				echo $response;
			}
			}

			function register_parent($t_un,$t_eml,$t_pw,$t_fn,$t_bd,$p_p,$t_g,$t_adr,$t_pn,$t_mn,$p_of){
				$user = new User();
				/*$birthday = explode("/", "03/25/1998");
					$birthday = mktime(0,0,0,$birthday['0'],$birthday['1'],$birthday['2']);
					echo $birthday;
					echo "////// " .date('m/d/Y',$birthday);*/
				$birthday = explode("/", $t_bd);
				$birthday = mktime(0,0,0,$birthday['0'],$birthday['1'],$birthday['2']);
				$rawData = $user->register_parent($t_un,$t_eml,$this->make($t_pw),$t_fn,$birthday,$p_p,$t_g,$t_adr,$t_pn,$t_mn,$p_of);
				
				
				if(empty($rawData)) {
					$statusCode = 404;
					$rawData = array('error' => 'ERROR !');		
				} else {
					$statusCode = 200;
					
				}
		
				$requestContentType = 'application/json';//$_POST['HTTP_ACCEPT'];
				$this ->setHttpHeaders($requestContentType, $statusCode);
				
				$result["insert status"] = $rawData;
						
				if(strpos($requestContentType,'application/json') !== false){
					$response = $this->encodeJson($result);
					echo $response;
				}
				}
	
	public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}

	public function make($value, array $options = array())
	{
		$cost = isset($options['rounds']) ? $options['rounds'] : 10;

		$hash = password_hash($value, PASSWORD_BCRYPT, array('cost' => $cost));

		if ($hash === false)
		{
			throw new \RuntimeException("Bcrypt hashing not supported.");
		}

		return $hash;
	}
}
?>