<?php
session_start();
if (isset($_POST['add'])) {
	//open xml file	
	$bookstore = simplexml_load_file('files/books.xml');


	$book = $bookstore->addChild('book');

	$lang = $book->addChild('title', $_POST['title']);

	if (!empty($_POST['category'])) {
		$lang->addAttribute('lang', $_POST['lang']);
	}

	$authors = explode(",", $_POST['author']);
	foreach ($authors as $author) {
		$book->addChild('author', trim($author));
	}

	$book->addChild('year', $_POST['year']);
	$book->addChild('price', $_POST['price']);

	if (!empty($_POST['category'])) {
		$book->addAttribute('category', $_POST['category']);
	}


	// Save to file
	// Prettify / Format XML and save
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($bookstore->asXML());
	$dom->save('files/books.xml');
	// Prettify / Format XML and save

	$_SESSION['message'] = 'Thêm mới sách thành công !';
	header('location: index.php');
} else {
	$_SESSION['message'] = 'Fill up add form first';
	header('location: index.php');
}
