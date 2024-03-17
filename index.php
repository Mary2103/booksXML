<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bookstore</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <h1 class="page-header text-center">BOOKSTORE</h1>
        <div class="row">
            <div class="col-sm-9 col-sm-offset-2" style="margin-left:190px">
                <a href="#addnew" class="btn btn-success" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Thêm</a>
                <?php
                session_start();
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                <?php

                    unset($_SESSION['message']);
                }
                ?>
                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Năm xuất bản</th>
                        <th>Giá</th>
                        <th>Danh mục</th>
                        <th>Hành động</th>
                    </thead>
                    <tbody>
                        <?php
                        //load xml file
                        $file = simplexml_load_file('files/books.xml');

                        foreach ($file->book as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row->title; ?></td>
                                <td>
                                    <?php
                                    $authors = array();
                                    foreach ($row->author as $author) {
                                        $authors[] = $author;
                                    }
                                    echo implode(", ", $authors);
                                    ?>
                                </td>
                                <td><?php echo $row->year; ?></td>
                                <td><?php echo $row->price . " $ "; ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td>
                                    <a href="#edit_<?php echo str_replace(' ', '_', $row->title); ?>" data-toggle="modal" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

                                    <a href="#delete_<?php echo str_replace(' ', '_', $row->title); ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Xóa</a>

                                </td>
                                <?php include('edit_delete_modal.php'); ?>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('add_modal.php'); ?>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>