<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div style="margin-left: auto; margin-right: auto; margin-top: 1%; width: 95%; ">
<div class="row">
	 <?php echo CHtml::link("<i class='icon icon-leaf'></i> Agrícola",array("site/index","tipo"=>"1"), array("target"=>"_self", "class"=>"btn btn-info")); ?>
	 <?php echo CHtml::link("<i class='icon icon-tint'></i> Acuícola",array("site/index","tipo"=>"2"), array("target"=>"_self", "class"=>"btn btn-info")); ?>
	 <?php echo CHtml::link("<i class='icon icon-th'></i> Pecuaria",array("site/index","tipo"=>"3"), array("target"=>"_self", "class"=>"btn btn-info")); ?>
	 <?php echo CHtml::link("<i class='icon icon-globe'></i> Manejo Ambiental",array("site/index","tipo"=>"4"), array("target"=>"_self", "class"=>"btn btn-info")); ?>
	 <?php echo CHtml::link("<i class='icon icon-th'></i> Todos",array("site/index"), array("target"=>"_self", "class"=>"btn btn-default")); ?>
</div>
</div>
	<div id="product-board" class="clearfix">
		<?php foreach($model as $m): ?>
		
		<div class="product large">
			<h5 class="cultivo"><i class="icon icon-th"></i> <?php echo $m->cultivos->cultivo_name; ?></h5>
			<div style="border-top: 1px solid #ececec; margin: auto; width: 100%;"></div>
				<div class="imgbox">
			<img src="images/<?php echo $m->pro_img; ?>.png" class="img-responsive" align="center" />
			</div>
			<div class="details">
				<!-- <p class="name"><a href="product.html">Frogless</a></p> -->
				<p class="price"><span class="cur"></span><span class="total"><?php echo $m->pro_name;?></span></p>
				<div style="padding-top: 20px;">
					<a href="" class="details-expand btn btn-info" data-target="details-<?php echo $m->pro_id; ?>">+</a>
				</div>
				<!-- <a href="" class="btn btn-default" data-target="details-<?php echo $m->pro_id; ?>">Solución</a> -->
			</div>
			<div class="details-extra" id="details-<?php echo $m->pro_id; ?>">
				<div style="margin: 5%;">
					<h5>Causa</h5>
					<p class="price" ><?php echo $m->pro_causa; ?></p>
				</div>
				<div style="margin: 5%;">
					<h5>Solución</h5>
					<p class="price" ><?php echo $m->pro_sol; ?></p>
				</div>
				<div style="margin: 5%;">
					<h5>Cómo  Aplicar</h5>
					<p class="price" ><?php echo $m->pro_cyc; ?></p>
				</div>
				<!-- <button class="btn btn-bottom btn-atc qadd">Add to cart</button>			 -->
			</div>
		</div>

	<?php endforeach; ?>

	</div> <!-- //end product-board -->