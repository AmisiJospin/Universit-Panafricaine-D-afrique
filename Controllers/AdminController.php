<?php 
    class AdminController extends Controller{
        public function add(){
            //header("Location: ". WEBROOT ."Admin/add/");
           // $actionData = $create;
            $this -> renderViews("AddMembers");
        }
        public function bureau(){
            $this -> renderViews("AddMembers");
        }
        public function create(){

           // echo "Arrived";
            if ( isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['lastname']) &&
            isset($_POST['instutition']) && isset($_POST['division']) && isset($_POST['matricule']) && 
            isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['bureau']) && 
            isset($_POST['affectation']) && isset($_POST['poste']) && isset($_POST['password']) &&
            isset($_FILES['profile']) ) {
            # code...
           require(ROOT ."Models/LoginModel.php");

                $first_name = trim($_POST['firstname']);
                $second_name = trim($_POST['secondname']);
                $last_name = trim($_POST['lastname']);
                $instutition = trim($_POST['instutition']);
                $division = trim($_POST['division']);
                $matricule = trim($_POST['matricule']);
                $contact = trim($_POST['contact']);
                $email = trim($_POST['email']);
                $bureau = trim($_POST['bureau']);
                $affectation = trim($_POST['affectation']);
                $poste = trim($_POST['poste']);
                $password = trim($_POST['password']);

                if ( $_FILES['profile']['error'] == 0) {
                    # code...
                   // $information_of_file = pathinfo($_FILES['profile']);
                    move_uploaded_file( $_FILES['profile']['tmp_name'], ROOT ."Public/uploads/". basename($_FILES['profile']['name']));

                    $profile = file_get_contents( ROOT ."Public/uploads/". $_FILES['profile']['name'] );
                    //echo $profile;
                }
                 $inform = new LoginModel();
                    $inform -> create_member_acccount($first_name, $second_name, $last_name, $instutition, $division, $matricule, $contact, $email, $profile, $bureau, $affectation, $poste, $password);
                    header("Location: ". WEBROOT ."Admin/add");
                    //echo "Member added";
                    $this -> renderViews("AddMembers");
           //$this -> renderViews("");
                }else{

                }
            
        }
    }