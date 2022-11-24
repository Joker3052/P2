<?php
include_once("model/Book.php");

class Model {
	public function getBookList()
	{
		// Dưới đây mình gắn cứng 1 array để mô phỏng dữ liệu trong database
		return array(
			"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
			"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
		);
	}
	
	public function getBook($book)
	{
		//Gọi function getBooklist để lấy dữ liệu cần thiết
                //Trong thực tế ở đây bạn sẽ dùng câu truy vấn select vào trong database
		$allBooks = $this->getBookList();
		return $allBooks[$book];
	}
	
	
}