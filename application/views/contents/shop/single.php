<div class="container-fluid">
	<div style="margin-left:90%;">
	<h3>Welcome <?= $this->session->userdata('username'); ?></h3>
	<a href="<?= base_url('app/logout'); ?>">Logout</a>
	</div>
	<hr>

<p>Products><span><?php echo $product_detail[0]->category_name?></span></p>
<div class="container-fluid" >
	<div class="panel-body well">
		<div style="float:left;">
    	 <img style="width:400px;height:400px;margin-right:30px;" src="<?php echo base_url('uploads/'.$product_detail[0]->product_image)?>" alt="" />
 		</div>
     	<div >
			<h2><?php echo $product_detail[0]->product_name?></h2>
			<p><?php echo $product_detail[0]->description?></p>
		</div>
			<div class="price">
                  <p>Price: <span><?php echo $this->cart->format_number($product_detail[0]->sell_price)?>PHP</span></p>
                  <p>Category: <span><?php echo $product_detail[0]->category_name?></span></p>
              </div>
                    <div class="add-cart">
                        <form action="<?php echo base_url('Shop/save_cart');?>" method="post">
                            <input type="number" class="buyfield" name="qty" value="1" min="0" max="<?php echo $product_detail[0]->quantity?>"/>
                            <input type="hidden" class="buyfield" name="product_id" value="<?php echo $product_detail[0]->product_id?>"/>
                            <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                        </form>				
                    </div>              
          </div>
      </div>
</div>