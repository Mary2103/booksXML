<?php
session_start();

if (isset($_POST['edit'])) {
	$bookstore = simplexml_load_file('files/books.xml');
	foreach ($bookstore->book as $book) {
		if ((string)$book->title == $_POST['title']) {
			$book->title = $_POST['title'];
			$book->author = $_POST['author'];
			$book->year = $_POST['year'];
			$book->price = $_POST['price'];
			if (!empty($_POST['category'])) {
				$book['category'] = $_POST['category'];
			}

			if (!empty($_POST['lang'])) {
				$book['lang'] = $_POST['lang'];
			}
			break;
		}
	}

	file_put_contents('files/books.xml', $bookstore->asXML());
	$_SESSION['message'] = 'Cập nhật thông tin thành công';
	header('location: index.php');
} else {
	$_SESSION['message'] = 'Vui lòng chọn sách để chỉnh sửa';
	header('location: index.php');
}
