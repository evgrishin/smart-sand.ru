<?php
class Product{
	private $article;
	private $name;
	private $description;
	private $image;
	private $priceOpt;
	private $price;
	private $priceDiscount;
	private $atribute;
	private $instock;
	
	
	function __construct()
	{
		
	}
	public static function getProduct($id_product, $name, $img, $variant, $price, $oldprice, $category, $params=0)
	{
				?>
           <div class="col-sm-3">
			<form action="" method="POST" class="modalcb">
			  <input type="hidden" name="id_product" id="id_product" value="<?=$id_product?>">
			  <input type="hidden" name="brand" id="brand" value="Волшебный мир">
			  <input type="hidden" name="ajax" id="ajax" value="ajax">
			  <input type="hidden" name="category" id="category" value="<?=$category?>">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/<?=$img?>" alt="<?=$name?>" class="img-thumbnail">
					<h3><?=$name?></h3>
			   </div>
			  <ul class="price-feature text-center">
			   <?php if ($variant == 'color') {?>
			   	  <li><strong>Цвет: </strong><select name="color" id="color">
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li> 
				  <?php }?>
				  <?php 
				  if (is_array($params))
					  foreach ($params as $param)
					  {
					  	?><li><?=$param?></li><?php 
					  }
				  ?>
				  <?php if ($oldprice != 0) {?>
				  <li><strike><strong><span class="oldprice"><?=$oldprice?></span> руб</strong></strike></li>
				  <?php }?>			   
				  <li class="highlight"><strong><span class="price"><?=$price?></span> руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <button type="submit" class="btn btn-price">Купить</button>
				</div>	
			  </div>
			  </form>
			</div>
			<?php 

	}	
}