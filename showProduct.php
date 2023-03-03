<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Show products</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        echo "Cảm ơn bạn đã đặt hàng!";
    }
        $sanpham=array(
            'GIÀY DÉP'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://shopgiayreplica.com/wp-content/uploads/2019/11/nike-air-force-1-shadow-replica-5.jpg"/>',
                    'name'=>'Giày Nike nữ màu tím',
                    'Price'=>"465.000",
                    'Code'=>"GN21",
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://giaynation.com/wp-content/uploads/2022/05/Gia%CC%80y-Nike-nam-tra%CC%86%CC%81ng-F65.jpg"/>',
                    'name'=>'Giày Nike nam trắng xanh',
                    'Price'=>"475.000",
                    'Code'=>"GN22",
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://toplist.vn/images/800px/giay-sneaker-nu-729209.jpg"/>',
                    'name'=>'Giày Nike màu hồng nữ tính',
                    'Price'=>"250.000",
                    'Code'=>"GN23",
                
                )
                ),

                'TÚI XÁCH'=>array(

                    'sp03'=>array(
                        'img'=>'<img src="https://product.hstatic.net/1000003969/product/xanh-duong_txt294_3_20230218170306_ca61b62926484cafaf742f6fd35315f7_master.jpeg"/>',
                        'name'=>'Túi xách công sở',
                        'Price'=>"2.800.000",
                        'Code'=>"TX21",
                    ),
                    'sp01'=>array(
                        'img'=>'<img src="https://cf.shopee.vn/file/cb6d28fabb3945f25b996801ad0d6aaa"/>',
                        'name'=>'Túi xách đeo vai nhỏ nữ kiểu Hàn Quốc',
                        'Price'=>"800.000",
                        'Code'=>"TX22",
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://gence.vn/wp-content/uploads/2022/06/tui-xach-nam-gence-da-bo-swift-mau-xanh-gce25-1.jpg"/>',
                        'name'=>'Túi xách da nam',
                        'Price'=>"1.990.000",
                        'Code'=>"TX23",
                    ),
                    )
                )
        
    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles">*<?php echo $k ?>*</div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-4">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"><?php echo $vl1['Code']?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text">
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <span style="font-size:  10px;">399 đánh giá</span>
                                <p style="text-align: center"><a href="addSP.php?id=<?php echo $key;?>"></a></p>    
                                </p>
                            </div>
                            <div id="plus_button">
                            <button class="datmua"  onclick='tb()'>Đặt mua</button>
                        </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>       
    <?php
    }
    ?>
</body>
<script>
    const tb = () =>{
        alert ('Thank you your order')
    }
</script>
</html>