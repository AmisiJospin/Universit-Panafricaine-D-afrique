<?php
	
	class LoginController extends Controller{
		public function index(){
			$this -> renderViews("Login");
		}
		public function login(){
			if ( isset($_POST["username"]) && isset($_POST["password"])) {
				# code...		
				require(ROOT ."Models/LoginModel.php");

				$email = trim($_POST["username"]);
				$password = trim($_POST["password"]);

				$userInfo = new LoginModel();
				$user = $userInfo -> login_admin( $email, $password);

		
				if ( $user['first_name'] != null ) {
					# code...
					$_SESSION['member_id'] = $user['id_member'];
					$_SESSION['password'] = $user['password'];
					//header("Location: ". WEBROOT ."Home/home");

					$this -> renderViews("Home");
		
				} else {
					# code...
					//header("Location: ../../Framework/helpers/ErrorMessage.php?data=$user");
				}
				
				
			} else {
				# code...
			}
		}
	}

	
	