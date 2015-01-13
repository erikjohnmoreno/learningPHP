<?php 
	/*
	
	class Book //implements JsonSerializable
	{
		public $id;
		public $name;
		public $edition;

		function __construct($id)
		{
			$this->id = $id;	
		}

		public function jsonSerialize()
		{
			$data = array(
				'id' => $this->id, 
				'name' => $this->name,
				'edition' => $this->edition
				);

			return $data;
		}
	}

	
	class Author //implements JsonSerializable
	{
		public $id;
		public $name;
		public $books = array();

		function __construct($id)
		{
			$this->id = $id;
		}

		public function jsonSerialize()
		{
			$data = array(
				'id' => $this->id,
				'name' => $this->name,
				'books' => $this->books
				);
		
			return $data;
		}
	}

	 
	*/
	class ResourceFactory
	{
	
		static public function authorFromJson($jsonData)
		{
			$author = new Author($jsonData['id']);
			$author->name = $jsonData['name'];

			foreach ($jsonData['books'] as $bookIdentifier) {
				$this->books[] = new Book($bookIdentifier);
			}

			return $author;
		}

		static public function bookFromJson($jsonData)
		{
			$book = new Book($jsonData['id']);
			$book->name = $jsonData['name'];
			$book->edition = (int) $jsonData['edition'];

			return $book;
		}
	}

	$Data = array(
		'id' => 1 ,
		'name' => "erik",
		'author' => "malupet" );

	$a = ResourceFactory::authorFromJson($Data);
	print_r($a);


 ?>