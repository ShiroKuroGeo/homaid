<?php
include('../Database.php');
class homeowner
{

    public function getAllApplicant()
    {
        return $this->applicantsFunction();
    }

    public function rateUser($rate, $id)
    {
        return $this->rateUserFunction($rate, $id);
    }

    public function getRating($id)
    {
        return $this->getRatingFunction($id);
    }

    public function applicantsProfile($id)
    {
        return $this->applicantsProfileFunction($id);
    }

    public function MyProfile($id)
    {
        return $this->MyProfileFunction($id);
    }

    public function requirementsOfApplying($app, $id, $mes)
    {
        return $this->requirementsOfApplyingFunction($app, $id, $mes);
    }

    public function updateApplicantApplying($id)
    {
        return $this->updateApplicantApplyingFunction($id);
    }

    public function hired($date, $uid)
    {
        return $this->hiredFunction($date, $uid);
    }

    public function entryHired($uid)
    {
        return $this->entryHiredFunction($uid);
    }

    public function interview($uid)
    {
        return $this->interviewFunction($uid);
    }

    public function doneJob($uid, $jobTitle)
    {
        return $this->doneJobFunction($uid, $jobTitle);
    }

    public function profileDetails($id)
    {
        return $this->profileDetailsFunction($id);
    }

    public function jobPostedDetails($id)
    {
        return $this->jobPostedDetailsFunction($id);
    }

    public function allComment($uid)
    {
        return $this->allCommentFunction($uid);
    }

    public function applicantApplying($uid)
    {
        return $this->applicantApplyingFunction($uid);
    }

    public function hiredThisPerson($hom, $uid)
    {
        return $this->hiredThisPersonFunction($hom, $uid);
    }

    public function comment($uid, $comID, $comment)
    {
        return $this->commentFunction($uid, $comID, $comment);
    }

    public function requirementsOfHired($mes, $id, $jobTitle)
    {
        return $this->requirementsOfHiredFunction($mes, $id, $jobTitle);
    }

    public function storeJobs($id, $jobTitle, $jobCategory, $jobDescrip, $types, $location, $exdate)
    {
        return $this->storeJobsFunction($id, $jobTitle, $jobCategory, $jobDescrip, $types, $location, $exdate);
    }

    public function hireds($id)
    {
        return $this->hiredsFunction($id);
    }

    private function applicantsFunction()
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->applicantsQuery());
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

    private function hiredThisPersonFunction($hom, $uid)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {

                $stmt = $db->getCon()->prepare($this->checkIfQueryIsOkayQuery());
                $stmt->execute(array($hom, $uid));
                $result = $stmt->fetchAll();

                $res = json_encode($result);

                if ($stmt->rowCount() < 1) {

                    $stmt = $db->getCon()->prepare($this->hiredThisPersonQuery());
                    $stmt->execute(array($hom, $uid));
                    $result = $stmt->fetch();

                    if (!$result) {
                        return 200;
                    } else {
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

    private function storeJobsFunction($id, $jobTitle, $jobCategory, $jobDescrip, $types, $location, $exdate)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->storeJobsQuery());
                $stmt->execute(array($id, $jobTitle, $jobCategory, $jobDescrip, $types, $location, $exdate));
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

    private function hiredFunction($date, $uid)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->hiredQuery());
                $stmt->execute(array($date, $uid));
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

    private function entryHiredFunction($uid)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->entryHiredQuery());
                $stmt->execute(array($uid));
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

    private function interviewFunction($uid)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->interviewQuery());
                $stmt->execute(array($uid));
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

    private function doneJobFunction($uid, $jobTitle)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->doneJobQuery());
                $stmt->execute(array($jobTitle, $uid));
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

    private function rateUserFunction($rate, $id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->rateUserQuery());
                $stmt->execute(array($rate, $id));
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

    private function commentFunction($uid, $comID, $comment)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->commentQuery());
                $stmt->execute(array($uid, $comID, $comment));
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

    private function updateApplicantApplyingFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->updateApplicantApplyingQuery());
                $stmt->execute(array($id));
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

    private function requirementsOfApplyingFunction($app, $id, $mes)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->requirementsOfApplyingQuery());
                $stmt->execute(array($app, $id, $mes));
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

    private function requirementsOfHiredFunction($mes, $id, $jobTitle)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->requirementsOfHiredQuery());
                $stmt->execute(array($mes, $id, $jobTitle));
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

    private function applicantsProfileFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->applicantsProfileQuery());
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

    private function getRatingFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->getRatingQuery());
                $stmt->execute(array($id));
                $result = $stmt->fetchColumn();
                return $result;
            } else {
                return "NoDatabaseConnection";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }

    private function MyProfileFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->MyProfileQuery());
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

    private function hiredsFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->hiredsQuery());
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

    private function allCommentFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->allCommentQuery());
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

    private function profileDetailsFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->profileDetailsQuery());
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

    private function jobPostedDetailsFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->jobPostedDetailsQuery());
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

    private function applicantApplyingFunction($id)
    {
        try {
            $db = new Database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare($this->applicantApplyingQuery());
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

    private function applicantsQuery()
    {
        return "SELECT a.appli_id, a.picture, a.age, a.skills, a.status, a.created_at, u.rating, u.no_of_rating, a.updated_at, u.firstname, u.lastname, u.user_id FROM `applicants` AS a INNER JOIN `users` AS u ON a.user_id = u.user_id";
    }

    private function applicantsProfileQuery()
    {
        return "SELECT u.*, p.age, p.skills FROM `applicants` AS p INNER JOIN `users` AS u ON p.user_id = u.user_id WHERE u.user_id = ? LIMIT 1";
    }

    private function MyProfileQuery()
    {
        return "SELECT * FROM `users` WHERE user_id = ?";
    }

    private function hiredsQuery()
    {
        return "SELECT *, h.status FROM `hireds` AS h INNER JOIN `users` AS u ON h.hired_user_id = u.user_id WHERE h.homeowner_id = ?;";
    }

    private function hiredThisPersonQuery()
    {
        return "INSERT INTO `hireds` (`homeowner_id`,`hired_user_id`) VALUES (?,?)";
    }

    private function hiredQuery()
    {
        return "UPDATE hireds SET `status` = 5, `date_interview` = ? WHERE `hired_id` = ?";
    }

    private function entryHiredQuery()
    {
        return "UPDATE hireds SET `status` = 2 WHERE `hired_id` = ?";
    }

    private function interviewQuery()
    {
        return "UPDATE hireds SET `status` = 3 WHERE `hired_id` = ?";
    }

    private function doneJobQuery()
    {
        return "UPDATE hireds SET `status` = 10, `jobTitle` = ? WHERE `hired_id` = ?";
    }

    private function commentQuery()
    {
        return "INSERT INTO `comments`(`user_id`, `commenter`, `comment`) VALUES (?,?,?)";
    }

    private function allCommentQuery()
    {
        return "SELECT u.firstname, u.lastname, u.picture, c.comment, c.created_at FROM `comments` AS c INNER JOIN `users` as u ON c.commenter = u.user_id WHERE c.`user_id` = ? ORDER BY c.created_at DESC";
    }

    private function storeJobsQuery()
    {
        return "INSERT INTO `jobs`(`user_id`, `job_title`, `job_cat`, `job_descrip`,`job_types`,`location`, `exdate`) VALUES (?,?,?,?,?,?,?)";
    }

    private function profileDetailsQuery()
    {
        return "SELECT `user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `picture`, `valid_id`, `role`, `status`, `created_at`, `updated_at` FROM `users` WHERE `user_id` = ?";
    }

    private function jobPostedDetailsQuery()
    {
        return "SELECT j.`job_id`, j.`user_id`, j.`job_title`, j.`job_cat`, j.`job_descrip`, j.`job_status`, j.`created_at`, j.`updated_at`, j.`exdate` , u.picture FROM `jobs` AS j INNER JOIN `users` AS u ON j.user_id = u.user_id WHERE j.`user_id` = ?";
    }

    private function applicantApplyingQuery()
    {
        return "SELECT a.*, u.firstname, u.lastname, u.picture FROM `applyingjobs` AS a LEFT JOIN `users` AS u ON A.user_id = u.user_id WHERE `homeowner_id` = ?";
    }

    private function updateApplicantApplyingQuery()
    {
        return "UPDATE `applyingjobs` SET `status`= 1 WHERE `user_id` = ?";
    }

    private function requirementsOfApplyingQuery()
    {
        return "INSERT INTO `requirement`(`apl_id`, `user_id`, `message`) VALUES (?,?,?)";
    }

    private function requirementsOfHiredQuery()
    {
        return "UPDATE `hireds` SET `requirements`= ? AND `jobTitle` = ? WHERE `hired_id` = ?";
    }

    private function checkIfQueryIsOkayQuery()
    {
        return "SELECT * FROM `hireds` WHERE `homeowner_id` = ? AND `hired_user_id` = ?";
    }

    private function rateUserQuery()
    {
        return 'UPDATE `users` SET `rating` = `rating` + ?, `no_of_rating` = `no_of_rating` + 1 WHERE `user_id` = ?';
    }

    private function getRatingQuery(){
        return 'SELECT `rating` FROM `users` WHERE `user_id` = ?';
    }
}
