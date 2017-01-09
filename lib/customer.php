 <?php
    include('user.php');
	class Customer extends User{
		private $firstName;
		private $lastName;
		private $adress;
		private $phone;
		private $creditCardInfo;
		private $email;

		public function __construct($userName, $password, $first_name, $last_name, $adress, $phone,$email){
            parent::__construct($userName,$password);
            $this->firstName=$first_name;
            $this->lastName=$last_name;
            $this->adress=$adress;
            $this->phone=$phone;
            $this->email=$email;
		}
		function verifyLogin(){
		    if(1==1)return true;
		    else return false;
		}
		function getName(){
		    return $this->firstName . " ". $this->lastName;
        }
	}
?>