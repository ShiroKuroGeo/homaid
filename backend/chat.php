<?php
require('Database.php');

class chat
{
    public function chats($id, $uid, $message)
    {
        return $this->chatFunction($id, $uid, $message);
    }

    public function getAllMessage($userId, $id)
    {
        return $this->getAllMessageFunction($userId, $id);
    }

    public function getAllWhoMessage($userId)
    {
        return $this->getAllWhoMessageFunction($userId);
    }

    private function chatFunction($id, $uid, $message)
    {
        try {
            $db = new database();
            if ($db->getStatus()) {
                $query = $db->getCon()->prepare($this->chatQuery());
                $query->execute(array($id, $uid, $message));

                if (!$query->fetch()) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }
    private function getAllMessageFunction($userId, $id)
    {
        try {
            $db = new database();
            if ($db->getStatus()) {
                $query = $db->getCon()->prepare($this->getAllMessageQuery());
                $query->execute(array($userId, $userId, $id, $id));
                return json_encode($query->fetchAll());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function getAllWhoMessageFunction($userId)
    {
        try {
            $db = new database();
            if ($db->getStatus()) {
                $query = $db->getCon()->prepare($this->getAllWhoMessageQuery());
                $query->execute(array($userId));
                return json_encode($query->fetchAll());
            } else {
                return 501;
            }
        } catch (PDOException $th) {
            throw $th;
        }
    }

    private function chatQuery()
    {
        return "INSERT INTO `chats`(`sender`, `reciever`, `message`) VALUES (?,?,?)";
    }

    private function getAllMessageQuery(){
        return "SELECT c.*, sendui.picture as sendPic, sendui.firstname, sendui.lastname, recui.picture as recPic, recui.firstname AS ref, recui.lastname AS rel FROM `chats` AS c INNER JOIN `users` AS sendui INNER JOIN `users` AS recui ON c.sender = sendui.user_id AND c.reciever = recui.user_id WHERE (c.`sender` = ? OR c.`reciever` = ?) AND (c.`sender` = ? OR c.`reciever` = ?) ORDER BY c.created ASC";
    }

    private function getAllWhoMessageQuery(){
        return "SELECT c.*, sendui.picture as sendPic, sendui.firstname, sendui.lastname, recui.picture as recPic, recui.firstname AS ref, recui.lastname AS rel FROM `chats` AS c INNER JOIN `users` AS sendui INNER JOIN `users` AS recui ON c.sender = sendui.user_id AND c.reciever = recui.user_id WHERE c.reciever = ? GROUP BY c.sender ORDER BY created DESC";
    }
}
