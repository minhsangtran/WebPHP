 <?php
				 	$sql=mysql_query("select * from tintuc");
					
				 ?>
                   <div class="tieude">
            	<h3>Tin tức sản phẩm</h3>
            		</div>
            	<ul class="tintucsp">	
                <?php
				while($dong_tin=mysql_fetch_array($sql)){
				?>
                	<li><a href="#">
                    	<p style="float:left;"><img src="admincp/modules/quanlytintuc/uploads/<?php echo $dong_tin['hinhanh'] ?>" width="40" height="30" /></p>
                        <p style="overflow:hidden;padding-left:5px;"><?php echo $dong_tin['tentintuc'] ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>