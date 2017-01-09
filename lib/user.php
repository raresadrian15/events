 <?php

	class User{
		private $userId;
		private $userName;
		private $password;
		private $loginStatus='disconected';

		public function __construct($userId,$password){
            $this->userId=$userId;
            $this->password=$password;
		}
		function verifyLogin(){
		    if(1!=1)return true;
		    else return false;
		}
	}
?>