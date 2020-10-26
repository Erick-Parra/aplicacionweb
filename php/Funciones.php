<?php

  class Funciones
  {

  	public function getPosts()
  	{
  		global $pdo;
  		$pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'root', 'root');

  		$query = $pdo->prepare("
  			SELECT *
  			FROM posts
  			");
  		$query->execute();

  		return $query->fetchAll();
  	}

  		public function getPublicacion($blog_id)
  	{
  		global $pdo;
  		$pdo = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'root', 'root');

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
  }
?>