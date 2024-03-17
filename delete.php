<?php
session_start();

// Kiểm tra biến $_GET['id']
if (!isset($_GET['id'])) {
	echo "Lỗi: Thiếu thông tin sách cần xóa.";
	exit;
}

// Kiểm tra file XML
if (!file_exists('files/books.xml')) {
	echo "Lỗi: File XML không tồn tại.";
	exit;
}

$booktitle = $_GET['id'];


try {
	// Tải file XML
	$bookstore = simplexml_load_file('files/books.xml');

	// Tìm kiếm sách cần xóa bằng XPath
	$result = $bookstore->xpath("//book[title='$booktitle']");

	// Kiểm tra xem sách có tồn tại không
	if (!$result) {
		echo "Lỗi: Sách không tồn tại.";
		exit;
	}

	// Xóa sách từ file XML
	unset($result[0][0]);

	// Ghi dữ liệu vào file XML
	$result = file_put_contents('files/books.xml', $bookstore->asXML());

	if ($result === false) {
		throw new Exception("Lỗi: Không thể ghi vào file XML.");
	}

	// Hiển thị thông báo thành công
	$_SESSION['message'] = 'Sách đã được xóa thành công.';

	// Chuyển hướng đến trang chủ
	header('location: index.php');
} catch (Exception $e) {
	echo "Lỗi: " . $e->getMessage();
}
