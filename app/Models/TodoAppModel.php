<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class TodoAppModel extends Model {

        var $table = "feladatok";

        public function __construct() {
            parent::__construct();

            //Model hozzákapcsolása a db-hez:
            $db = db_connect();	//\Config\Database::connect();
        }

        public function get_all_todo()
        {
            //összes feladat lekérdezése:
            $query = $this->db->query("SELECT * FROM feladatok ORDER BY fid");
            return $query->getResult();
        }

        public function get_todo_by_id($fid)
        {
            //$id (fid) feladat lekérdezése:
            $query = $this->db->query("SELECT * FROM feladatok WHERE fid = " . $fid);
            return $query->getResult();
        }

        public function add_new($data)
        {
            $query = $this->db->table($this->table)->insert($data);

            return $this->db->insertID();
        }
    }