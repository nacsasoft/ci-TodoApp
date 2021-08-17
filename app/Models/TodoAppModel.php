<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class TodoAppModel extends Model {

        //var $table = "feladatok";
        //var $builder;


        public function __construct() {
            parent::__construct();

            //kapcsolódás a db-hez:
            $this->db = db_connect();	//\Config\Database::connect();
            $this->builder = $this->db->table("feladatok");

        }

        /**
         * [Összes feladat listázása]
         * @return [array] [cím szerinti rendezés]
         */
        public function get_all_todo()
        {
            //összes feladat lekérdezése:
            //$query = $this->db->query("SELECT * FROM feladatok ORDER BY fid");
            $this->builder->orderBy("fcim", "ASC");
            $query = $this->builder->get();
            return $query->getResult();
        }

        /**
         * Kiválasztott feladat leírását adja vissza
         * 
         * @param  integer      $fid    kiválasztott feladat azonosítója
         * @return megtalált rekord az összes mezővel
         */
        public function get_todo_by_id($fid)
        {
            //$id (fid) feladat lekérdezése:
            //csak egy rekordot adunk vissza, több nem is lehet!!!
            //$query = $this->db->query("SELECT * FROM feladatok WHERE fid = " . $fid);
            $query = $this->builder->getWhere(["fid" => $fid]);
            $row = $query->getRow();
            return $row;
        }

        /**
         * Új feladat felvitele az adatbázisba
         * 
         * @param      array $data { feladat címe és leírása (JSON) }
         */
        public function add_new_todo($data)
        {
            $query = $this->db->table("feladatok")->insert($data);

            return $this->db->insertID();
        }

        /**
         * Meglévő feladat adatainak frissítése az adatbázisban
         * 
         * @param       $fid        { feladat adatbázis azonosító }
         * @param       array $data { feladat címe és leírása (JSON) }
         */
        public function update_todo($fid, $data)
        {
            $query = $this->db->table("feladatok")->update($data, "fid = $fid");

            return true;    // $this->db->insertID();
        }
    }