<?php
class pro{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function pro_list()
    {
        $results=$this->db->query("SELECT * FROM `pro_tbl`");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function pro_list_catid($cat_id)
    {
        $results=$this->db->query("SELECT * FROM `pro_tbl` WHERE cat_id='$cat_id'");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function pro_list_defult()
    {
        $results=$this->db->query("SELECT * FROM `pro_tbl` WHERE chid='0' ");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function pro_under_list_defult($id)
    {
        $results=$this->db->query("SELECT * FROM `pro_tbl` WHERE chid='$id'");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function pro_add($data,$to)
    {
        $this->db->query("INSERT INTO `pro_tbl` (title,cat_id,text,price,off_price,rate,count,image1) 
        VALUES ('$data[title]','$data[cat_id]','$data[text]','$data[price]','$data[off_price]','$data[rate]','$data[count]','$to')");
    }

    public function procat_list()
    {
        $results=$this->db->query("SELECT * FROM `procat_tbl` WHERE chid!='0'");
        return $results;
    }

    public function pro_delete($id)
    {
        $this->db->query("DELETE FROM `pro_tbl` WHERE id='$id' ");
    }

    public function pro_showEdit($id)
    {
        $results=$this->db->query("SELECT * FROM `pro_tbl` WHERE id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function pro_edit($data,$to,$id)
    {
       $this->db->query("UPDATE `pro_tbl` SET title='$data[title]',text='$data[text]',cat_id='$data[cat_id]',
        price='$data[price]',off_price='$data[off_price]',rate='$data[rate]',count='$data[count]',image1='$to' WHERE id='$id'");
    }
}
