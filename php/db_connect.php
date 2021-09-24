<?php
	$db_host = "localhost";
	$db_user = "admin";
	$db_pass = "adminPrav";
	$db_database = "logins";

	$link = mysql_connect($db_host,$db_user,$db_pass);
	mysql_select_db($db_database,$link) or die("Нет соеденения с БД ".mysql_error());
	mysql_query("SET names UTF-8");
?>
// Подключаем перед доктайпом
//выводим циклом примерно такой конструкцией 
<?php
  $result = mysql_query("SELECT * FROM  table_products", $link);
			if(mysql_num_rows($result)>0){
				$row = mysql_fetch_array($result);
				do{ 
					echo '
					<div class=" col-md-3 col-sm-4 col-xs-6 item-wrap">
						<div class="item">
							<p class="descr-string">'.$row["title"].'</p>
							<h3 class="brand">'.$row["brand"].'</h3>
							<div class="img-wrap">
								<img src="upload_images/'.$row["image"].'" alt="">
							</div>
							<span class="price">'.$row["price"].'$</span>
							<a  href="#" class="bye"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Купить</span></a>
						</div>
					</div>
					';
				}
				while($row = mysql_fetch_array($result));
				echo '</div>';
			}
?>