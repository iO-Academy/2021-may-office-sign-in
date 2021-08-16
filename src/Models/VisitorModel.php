<?php

namespace App\Models;

class VisitorModel
{
    private $db;


    /**
     * @param $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function addVisitor(array $visitor)
    {
        $query = $this->db->prepare(
            "INSERT INTO `visitors` (
                            `name`,
                            `company`
                          ) 
                          VALUES (
                            :name,
                            :company
);"

        );
        return $query->execute();
    }

    public function getVisitors()
    {
        $query = $this->db->prepare(
            "SELECT `name`, `company`, `entry_time` FROM `visitors`"
        );
        $query->execute();
        return $query->fetchAll();
    }


}