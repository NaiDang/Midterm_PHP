<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
    <a href="showSP.php"></a>
    <?php
        // Khởi tạo mảng sản phẩm
        $products = array();
        
        // Kiểm tra nếu form được submit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin sản phẩm từ form
            $img = $_FILES['img'];
            $name = $_POST['name'];
            $Price = $_POST['Price'];
            $Code = $_POST['Code'];
        
            // Kiểm tra file hình ảnh
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Chỉ chấp nhận file hình ảnh có định dạng JPG, JPEG, PNG.";
                exit();
            }
        
            // Lưu file hình ảnh vào thư mục uploads
            move_uploaded_file($_FILES["img"], $target_file);
        
            // Thêm thông tin sản phẩm vào mảng
            $product = array(
                "img" => $img,
                "name" => $name,
                "Price" => $Price,
                "Code" => $Code,
            );
            array_push($products, $product);
        
            // Hiển thị thông báo khi sản phẩm được thêm thành công
            echo "Sản phẩm đã được thêm thành công!";
        }
    ?>
    <h2>Thêm sản phẩm mới</h2>
	<form action="" method="POST">
		<label for="img">Hình ảnh sản phẩm:</label><br>
		<input type="file" name="img"><br>

		<label for="name">Tên sản phẩm:</label><br>
		<input type="text" name="name"><br>

		<label for="Price">Giá sản phẩm:</label><br>
		<input type="text" name="Price"><br><br>

        <label for="Code">Mã sản phẩm:</label><br>
		<input type="text" name="Code"><br>

		<input type="submit" value="Thêm sản phẩm">
	</form>
</body>
</html>