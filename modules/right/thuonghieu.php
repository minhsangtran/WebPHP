<?php
	$sql_thuonghieu="select * from sanpham where sanpham.nhasx='$_GET[id]'";
	$num_thuonghieu=mysql_query($sql_thuonghieu);
	$count=mysql_num_rows($num_thuonghieu);
	
?>
<?php
	$sql_tenthuonghieu="select tenhieusp from hieusp where idhieusp='$_GET[id]' ";
	$row=mysql_query($sql_tenthuonghieu);
	$dong=mysql_fetch_array($row);
?>
	<div class="tieude"><?php echo $dong['tenhieusp'] ?></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_thuonghieu=mysql_fetch_array($num_thuonghieu)){
						?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_thuonghieu['hieusp'] ?>&id=<?php echo $dong_thuonghieu['idsanpham'] ?>">
                       
                        	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_thuonghieu['hinhanh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_thuonghieu['tensp'] ?></p>
                            <p><?php echo $dong_thuonghieu['giadexuat'] ?></p>
                            
                        	<p>Chi tiết</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>