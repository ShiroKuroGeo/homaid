<?php
include('../Database.php');
class applicant {
    public function jobs()
    {
        return $this->jobsFunction();
    }

    public function reportUsers($id, $reason, $usid)
    {
        return $this->reportUsersFunction($id, $reason, $usid);
    }
    
    public function updateProfile($picture, $fn, $ln, $id)
    {
        return $this->updateProfileFunction($picture, $fn, $ln, $id);
    }

    public function requiments($id)
    {
        return $this->requimentsFunction($id);
    }
    public function userLogin($id)
    {
        return $this->userLoginFunction($id);
    }
    public function deleteApplication($id)
    {
        return $this->deleteApplicationFunction($id);
    }
    public function hireRequiments($id)
    {
        return $this->hireRequimentsFunction($id);
    }
    public function myApplication($id)
    {
        return $this->myApplicationFunction($id);
    }
    public function applicantUsers($id)
    {
        return $this->applicantUsersFunction($id);
    }
    public function applyJob($id, $user_id)
    {
        return $this->applyJobFunction($id, $user_id);
    }
    public function storeApplication($id, $fn, $age, $skills)
    {
        return $this->storeApplicationFunction($id, $fn, $age, $skills);
    }

    private function jobsFunction(){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->jobsQuery());
                $stmt->execute();
                $result = $stmt->fetchAll();
                return json_encode($result);
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }
    
    private function requimentsFunction($id){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->requimentsQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetchAll();
                return json_encode($result);
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function userLoginFunction($id){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->userLoginQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetchAll();
                return json_encode($result);
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function applicantUsersFunction($id){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->applicantUsersQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetchAll();
                return json_encode($result);
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function hireRequimentsFunction($id){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->hireRequimentsQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetchAll();
                return json_encode($result);
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function myApplicationFunction($id){
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->myApplicationQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetchAll();
                return json_encode($result);
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function applyJobFunction($id, $user_id){
        try {
            $db = new Database();
            if ($db->getStatus()) {

                $stmt = $db->getCon()->prepare($this->checkIfQueryIsOkayQuery());
                $stmt->execute(array($user_id, $id));
                $result = $stmt->fetchAll();

                $res = json_encode($result);

                if ($stmt->rowCount() < 1) {
                    $stmt = $db->getCon()->prepare($this->applyJobQuery());
                    $stmt->execute(array($id, $user_id));
                    $result = $stmt->fetch();
    
                    if(!$result){
                        return 200;
                    }else{
                        return 400;
                    }
                } else {
                    return 401;
                }

            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }
    
    private function storeApplicationFunction($id, $fn, $age, $skills){
        try {
            $db = new Database();
            if ($db->getStatus()) {

                $stmt = $db->getCon()->prepare($this->storeApplicationQuery());
                $stmt->execute(array($id, $fn, $age, $skills, $id));
                $result = $stmt->fetch();

                if(!$result){
                    return 200;
                }else{
                    return 400;
                }

            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }
    
    private function updateProfileFunction($picture, $fn, $ln, $id){
        try {
            $db = new Database();
            if ($db->getStatus()) {

                $stmt = $db->getCon()->prepare($this->updateProfileQuery());
                $stmt->execute(array($picture, $fn, $ln, $id));
                $result = $stmt->fetch();

                if(!$result){
                    return 200;
                }else{
                    return 400;
                }

            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }
    
    private function reportUsersFunction($id, $reason, $usid){
        try {
            $db = new Database();
            if ($db->getStatus()) {

                $stmt = $db->getCon()->prepare($this->reportUsersQuery());
                $stmt->execute(array($id, $reason, $usid));
                $result = $stmt->fetch();

                if(!$result){
                    return 200;
                }else{
                    return 400;
                }

            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }
    
    private function deleteApplicationFunction($id){
        try {
            $db = new Database();
            if ($db->getStatus()) {

                $stmt = $db->getCon()->prepare($this->deleteApplicationQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetch();

                if(!$result){
                    return 200;
                }else{
                    return 400;
                }

            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function jobsQuery(){
        return "SELECT j.*, u.picture, u.firstname FROM `jobs` as j INNER JOIN `users` AS u ON j.user_id = u.user_id";
    }

    private function applyJobQuery(){
        return "INSERT INTO `applyingjobs`(`homeowner_id`, `user_id`) VALUES (?,?)";
    }
    private function userLoginQuery(){
        return "SELECT `user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `picture`, `valid_id`, `role`, `status`, `created_at`, `updated_at` FROM `users` WHERE `user_id` = ?";
    }

    private function applicantUsersQuery(){
        return "SELECT ap.appl_id, ap.status, ap.created_at, ap.updated_at, apli.firstname as afirstname, apli.lastname as plastname, hom.firstname as hfirstname, hom.lastname as hlastname FROM `applyingjobs` AS ap INNER JOIN `users` as apli INNER JOIN `users` AS hom ON ap.homeowner_id = hom.user_id AND ap.user_id = apli.user_id WHERE apli.user_id = ?";
    }

    private function checkIfQueryIsOkayQuery(){
        return "SELECT * FROM `applyingjobs` WHERE `user_id` = ? AND `homeowner_id` = ?";
    }

    private function storeApplicationQuery(){
        return "INSERT INTO `applicants`(`picture`, `user_id`, `fullname`, `age`, `skills`) SELECT `users`.`picture`,?,?,?,? FROM `users` WHERE `users`.`user_id` = ?";
    }
    private function requimentsQuery(){
        return "SELECT r.message, r.requirement  FROM `requirement` AS r INNER JOIN `applyingjobs` AS a WHERE r.apl_id = ?";
    }

    private function hireRequimentsQuery(){
        return "SELECT h.*, hiu.firstname, hiu.lastname, hou.firstname AS houFirstname, hou.lastname AS houLastname FROM `hireds` AS h INNER JOIN `users` AS hiu INNER JOIN `users` AS hou ON h.homeowner_id = hou.user_id AND h.hired_user_id = hiu.user_id WHERE h.hired_user_id = ?";
    }

    private function myApplicationQuery(){
        return "SELECT `appli_id`, `user_id`, `picture`, `fullname`, `age`, `skills`, `status`, `created_at`, `updated_at` FROM `applicants` WHERE `user_id` = ?";
    }

    private function deleteApplicationQuery(){
        return "DELETE FROM `applicants` WHERE `appli_id` = ?";
    }

    private function reportUsersQuery(){
        return "INSERT INTO `reports`(`user_id`, `reason`, `reported_id`) VALUES (?,?,?)";
    }

    public function updateProfileQuery(){
        return "UPDATE `users` SET `picture` = ?, `firstname` = ?, `lastname` = ? WHERE `user_id` = ?";
    }
    
}
