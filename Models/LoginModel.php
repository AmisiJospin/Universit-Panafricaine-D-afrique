<?php
	class LoginModel extends Model{
		
		public function __construct(){
			//$this -> pdo = $dbconn;
		}
		public function login_admin($email, $password){
			try {
				// Check le username and password if both are correct to allow an admin to login
				$sql = "SELECT * FROM staffmembers WHERE email = ? AND password = ? ";

				$stmt = Database::getDatabaseInstance() -> prepare($sql);
				$stmt -> execute([$email, $password]);

				if($data = $stmt -> fetch(PDO::FETCH_ASSOC)){
					// Check if the member is an adminstrateur
					$sql = "SELECT * FROM administrator WHERE member_id = ? AND admin_state = ?";

					$stmt_admin_check = Database::getDatabaseInstance() -> prepare($sql);
					$stmt_admin_check -> execute([ (int) $data["id_member"], 1]);

					if($isAdmin = $stmt_admin_check -> fetch(PDO::FETCH_ASSOC)){
						if($isAdmin != null){
							return $data;
						}
					}
					else{
						return "Please tu ne pas l'Administrateur du System";
					}
				}
				return "null ++";
			} catch (Exception $e) {
				error_log("Error occured: ". $e -> getMessage());
			}
		}
		public function create_member_acccount( $first_name, $second_name, $last_name, $instutition, $division, $matricule, $contact, $email, $profile, $bureau, $affectation, $poste, $password){
			try {
				$time = date("y-m-d");
				$sql = "INSERT INTO staffmembers (first_name, second_name, last_name, instutition,
			 			division, matricule, contact, email, profile, bureau, affectation, poste, password, timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

				$stmt = Database::getDatabaseInstance() -> prepare($sql);
				$stmt -> execute([ $first_name, $second_name, $last_name, $instutition, $division, $matricule, $contact, $email, $profile, $bureau, $affectation, $poste, $password,
					$time ]);
				return;
			} catch (Exception $e) {
				error_log("Error occured: ". $e -> getMessage());
			}

		}
		public function update_admin_account($first_name, $second_name, $last_name, $instutition, $division, $matricule, $contact, $email, $profile, $bureau, $affectation, $poste, $password, $admin_id){
			try {
				$time = date("y-m-d");
				$sql = "UPDATE staffmembers SET first_name = ?, second_name = ?, last_name = ?, instutition = ?,
			 			division = ?, matricule = ?, contact = ?, email = ?, profile = ?, bureau = ?, affectation = ?, poste = ?, password = ?, timestamp = ? WHERE id_member = ?";
			 	$stmt_exec = Database::getDatabaseInstance() -> prepare($sql);
			 	$stmt_exec -> execute([ $first_name, $second_name, $last_name, $instutition, $division, $matricule, $contact, $email, $profile, $bureau, $affectation, $poste, $password,
					$time, $admin_id ]);
			 	return;
				
			} catch (Exception $e) {
				error_log("Error occured: ". $e -> getMessage());
			}

		}
		public function  make_a_member_admin(){

		}
	}