<?php
require_once 'model/Mprocat.php';
$class=new procat();

    switch ($action){
        case 'list':
            $procat=$class->procat_list();
        break;
        case 'add':
            $res=$class->promaincat_list();
            if ($_POST){
                $data=$_POST['frm'];
                $class->procat_add($data);
            }
        break;
        case 'delete':
            $id=$_GET['id'];
            $class->procat_delete($id);
            exit(header("location:index.php?c=procat&a=list"));

        break;
        case 'edit':
            $id=$_GET['id'];
            $results=$class->procat_showEdit($id);
            $res=$class->promaincat_list();
            if ($_POST){
                $data=$_POST['frm'];
                $class->procat_edit($data,$id);
                header("location:index.php?c=procat&a=list");
            }
        break;

    }

require_once 'view/'.$controller."/".$action.'.php';

