<?php

  class Funciones
  {

  	public function getPosts()
  	{
  		global $pdo;
  		$pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'usuario', 'password');

  		$query = $pdo->prepare("
  			SELECT *
  			FROM posts
  			");
  		$query->execute();

  		return $query->fetchAll();
  	}


    public function getTblImgporcent()
    {
      global $pdo;
      $pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'usuario', 'password');

      $query = $pdo->prepare("
        SELECT *
        FROM tbl_imgporcent
        ");
      $query->execute();

      return $query->fetchAll();
    }



  		public function getPublicacion($blog_id)
  	{
  		global $pdo;
  		$pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'usuario', 'password');

  		$query = $pdo->prepare("
  			SELECT *
  			FROM posts
  			WHERE Id = :blog_id
  			");
  		$query->execute([
  			'Id' => $blog_id
  		]);

  		return $query->fetch();
  	}
    public function getImagen(){
      global $pdo;
      $pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'root', '1234');

      $query = $pdo->prepare("
        SELECT *
        FROM tbl_galeria
        ");
      $query->execute();

      return $query->fetchAll();
    }

      public function getGaleria($blog_id)
    {
      global $pdo;
      $pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'root', '1234');

      $query = $pdo->prepare("
        SELECT *
        FROM tbl_galeria
        WHERE idGaleria = :blog_id
        ");
      $query->execute([
        'idGaleria' => $blog_id
      ]);

      return $query->fetch();
    }
  }
?>