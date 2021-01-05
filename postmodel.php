<?php
require 'db.class.php';
class post
{
  public $id_post = null;
  public $id_user;
  public $description;
function __construct($iduser,$desc) {

    $this->id_user = $iduser;
    $this->description = $desc;
  }


  public function insert( ){
    $db = new DB();
    $query = "INSERT into `post` (`description`,`id_user`) values (:description,:iduser); Select LAST_INSERT_ID() as postid; ";
    $myparams = array(
      "description" => $this->description,
      "iduser"=>$this->id_user
    );
   
    $result = $db->insertWLID($query,$myparams);
    

    move_uploaded_file($_FILES["img"]["tmp_name"], "images/posts/" . $result . ".jpg");
    
  }

  static function delete($id) {
    $sql = "delete from post where id_post = :id;";
    $db = new DB();
    $db->query($sql, array("id"=>$id));

  }

  static function getById($id) {
    $sql = "select * from post where id_post = :id;";
    $db = new DB();
    $result = $db->query($sql, array("id"=>$id))[0];
    //echo (implode(',', $result));
    $p = new post($result->id_user, $result->description);
    $p->id_post =  $result->id_post;
    return $p;
  }

  public function update(){
    $sql= 'update post set description = :newdescription where id_post = :id';
    $db = new DB();
    $db->query($sql, array("newdescription"=>$this->description, "id"=>$this->id_post));
    unlink( "images/posts/" . $this->id_post . ".jpg");

    move_uploaded_file($_FILES["img"]["tmp_name"], "images/posts/" . $this->id_post . ".jpg");

  }

    };
  ?>

