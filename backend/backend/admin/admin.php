<?php
include('../Database.php');
class admin
{

    public function users()
    {
        return $this->usersFunction();
    }

    public function getID($id)
    {
        return $this->getIDFunction($id);
    }

    public function returnStatus($id)
    {
        return $this->returnStatusFunction($id);
    }

    public function reportToRestrict($id)
    {
        return $this->reportToRestrictFunction($id);
    }

    public function allReported()
    {
        return $this->allReportedFunction();
    }

    public function usersCount()
    {
        return $this->usersCountFunction();
    }

    public function changeStatus($id, $status)
    {
        return $this->changeStatusFunction($id, $status);
    }

    public function jobsCount()
    {
        return $this->jobsCountFunction();
    }

    public function reportsCount()
    {
        return $this->reportsCountFunction();
    }

    public function requestHomowner()
    {
        return $this->requestHomownerFunction();
    }

    private function usersFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->usersQuery());
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

    private function usersCountFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->usersCountQuery());
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

    private function jobsCountFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->jobsCountQuery());
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

    private function reportsCountFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->reportsCountQuery());
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

    private function requestHomownerFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->requestHomownerQuery());
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

    private function allReportedFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->allReportedQuery());
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

    private function returnStatusFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->returnStatusQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetch();

                if (!$result) {
                    return 200;
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

    private function getIDFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->getIDQuery());
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

    private function changeStatusFunction($id, $status)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->changeStatusQuery());
                $stmt->execute(array($status, $id));
                $result = $stmt->fetch();
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

    private function reportToRestrictFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->reportToRestrictQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetch();

                if (!$result) {
                    $stmt2 = $db->getCon()->prepare($this->deleteReportedQuery());
                    $stmt2->execute(array($id));
                    $result2 = $stmt2->fetch();

                    if (!$result2) {
                        return 200;
                    } else {
                        return 401;
                    }
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

    private function usersQuery()
    {
        return "SELECT * FROM `users` WHERE `role` != 3 ORDER BY `created_at` DESC LIMIT 5";
    }

    private function usersCountQuery()
    {
        return "SELECT * FROM `users`";
    }

    private function jobsCountQuery()
    {
        return "SELECT * FROM `jobs`";
    }

    private function reportsCountQuery()
    {
        return "SELECT * FROM `reports`";
    }

    private function requestHomownerQuery()
    {
        return "SELECT * FROM `users` WHERE `role` != 3 ORDER BY `user_id` DESC";
    }

    private function getIDQuery()
    {
        return "SELECT * FROM `users` WHERE `user_id` = ?";
    }

    private function changeStatusQuery()
    {
        return "UPDATE `users` SET `status` = ? WHERE `user_id` = ?";
    }

    private function allReportedQuery()
    {
        return "SELECT re.reported_id, re.reason, re.status as statre, re.report_id, re.created_at, repui.firstname AS repFirstname, repui.lastname AS repLastname, ui.firstname, ui.lastname FROM `reports` AS re INNER JOIN `users` AS repui INNER JOIN `users` AS ui ON re.user_id = ui.user_id AND re.reported_id = repui.user_id ORDER BY `created_at` DESC";
    }

    private function reportToRestrictQuery()
    {
        return "UPDATE `users` SET `status`= 3 WHERE `user_id` = ?";
    }

    private function returnStatusQuery()
    {
        return "UPDATE `applicants` SET `status`= 0 WHERE `user_id` = ?";
    }

    private function deleteReportedQuery()
    {
        return "UPDATE `reports` SET `status` = 1 WHERE `reported_id` = ?";
    }
}
