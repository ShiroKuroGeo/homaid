<?php
include('../Database.php');
class users
{
    public function register($firstname, $lastname, $username, $email, $password)
    {
        return $this->registerFunction($firstname, $lastname, $username, $email, $password);
    }

    public function registerHomeOwner($firstname, $lastname, $username, $email, $password, $profile, $valid)
    {
        return $this->registerHomeOwnerFunction($firstname, $lastname, $username, $email, $password, $profile, $valid);
    }

    public function login($username, $password)
    {
        return $this->loginFunction($username, $password);
    }

    private function registerFunction($firstname, $lastname, $username, $email, $password)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->registerQuery());
                $stmt->execute(array($firstname, $lastname, $username, $email, md5($password)));
                $result = $stmt->fetch();
                $db->closeConnection();

                if (!$result) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function registerHomeOwnerFunction($firstname, $lastname, $username, $email, $password, $profile, $valid){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->registerHomeOwnerQuery());
                $stmt->execute(array($firstname, $lastname, $username, $email, md5($password), $profile, $valid));
                $result = $stmt->fetch();
                $db->closeConnection();

                if (!$result) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function loginFunction($username, $password)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->loginQuery());
                $stmt->execute(array($username, md5($password)));
                $role = null;
                $status = null;

                while ($row = $stmt->fetch()) {

                    $role = $row['role'];
                    $status = $row['status'];
                    $_SESSION['id'] = $row['user_id'];
                }

                if ($status == 1) {
                    if ($role == 1) {
                        return 1;
                    } else if ($role == 2) {
                        return 2;
                    } else if ($role == 3) {
                        return 3;
                    }else{
                        return 4;
                    }
                } else {
                    return 5;
                }

            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function registerQuery(){
        return "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`, `role`) VALUES (?,?,?,?,?,1)";
    }

    private function registerHomeOwnerQuery(){
        return "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`, `picture`, `valid_id`, `role`) VALUES (?,?,?,?,?,?,?,2)";
    }

    private function loginQuery(){
        return "SELECT * FROM `users` WHERE `username` = ? AND `password` = ?";
    }
}
