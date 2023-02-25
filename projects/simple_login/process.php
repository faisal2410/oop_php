<?php
class User {
    private $username;
    private $password;

    public function __construct( $username, $password ) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}

class Admin extends User {
    public static function isAdmin() {        
        return true;
    }
}

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User( $username, $password );
$admin = new Admin( $username, $password );

echo "<h2>User Information:</h2>";
echo "Username: " . $user->getUsername() . "<br>";
echo "Password: " . $user->getPassword() . "<br><br>";

echo "<h2>Admin Information:</h2>";
echo "Username: " . $admin->getUsername() . "<br>";
echo "Password: " . $admin->getPassword() . "<br>";
echo "Is Admin: " . Admin::isAdmin();

