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
            'INSERT INTO `visitors` (`name`, `company`, `entry_time`) VALUES (:name, :company, :entry_time);');
        return $query->execute(
            [':name' => $visitor['name'], ':company'=>$visitor['company'], ':entry_time'=>$_SERVER['REQUEST_TIME']]);
    }


}