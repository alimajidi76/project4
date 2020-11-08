<?php
class procat{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function procat_list()
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl`");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function procat_list_defult()
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl` WHERE chid='0' ");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function procat_under_list_defult($id)
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl` WHERE chid='$id'");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function procat_add($data)
    {
        $this->db->query("INSERT INTO `procat_tbl` (title,chid) VALUES ('$data[title]','$data[chid]')");
    }

    public function promaincat_list()
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl` WHERE chid='0'");
        return $results;
    }

    public function procat_delete($id)
    {
        $this->db->query("DELETE FROM `procat_tbl` WHERE id='$id' ");
    }

    public function procat_showEdit($id)
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl` WHERE id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function procat_edit($data,$id)
    {
       $this->db->query("UPDATE `procat_tbl` SET title='$data[title]',chid='$data[chid]' WHERE id='$id'");
    }

    public function select_parent_procat($chid)
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl` WHERE id='$chid'");
       $row=$results->fetch(PDO::FETCH_OBJ);
       return $row->title;
    }
}
