<?php 
require('top.php');
?>
<ul id="adaptive" class="cs-hidden">
                <li class="item-a">
                    
            <div class="full-slider-box f-slide-1">
                
                <div class="slider-text">
                    <div class="f-slider-text">
                    <span>Limited Offer</span>
                    <strong>40% off <br> with<font> Promo Code</font></strong>
                    <a href="" class="f-slider-btn">Shop Now</a>
                </div>
                </div>
            </div>
                </li>

                <li class="item-a">
                    
                    <div class="full-slider-box f-slide-2">
                        
                        <div class="slider-text">
                            <div class="f-slider-text">
                            <span>Limited Offer</span>
                            <strong>40% off <br> with<font> Promo Code</font></strong>
                            <a href="" class="f-slider-btn">Shop Now</a>
                        </div>
                        </div>
                    </div>
                        </li>


                        <li class="item-a">
                    
                            <div class="full-slider-box f-slide-3">
                                
                                <div class="slider-text">
                                    <div class="f-slider-text">
                                    <span>Limited Offer</span>
                                    <strong>40% off <br> with<font> Promo Code</font></strong>
                                    <a href="" class="f-slider-btn">Shop Now</a>
                                </div>
                                </div>
                            </div>
                                </li> 
                 </ul>

                
            
                 <div class="featured-heading">
                     <h2>Featured Categories</h2>
                 </div>

                 <ul id="autoWidth" class="cs-hidden">
                    <li class="item">
                 <div class="feature-box">
                    <a href="#">
                        <img src="shop/images/Poster/1.jpg" />
                    </a>
                </div>

                    <span>Poster</span>
                    </li>

                    <li class="item">
                        <div class="feature-box">
                           <a href="#">
                               <img src="shop/images/jacket/3.jpg" />
                           </a>
                       </div>
       
                           <span>Jacket</span>
                           </li>

                           <li class="item">
                            <div class="feature-box">
                               <a href="#">
                                   <img src="shop/images/sticker/1.jpg" />
                               </a>
                           </div>
           
                               <span>Sticker/Keychain</span>
                               </li>

                               <li class="item">
                                <div class="feature-box">
                                   <a href="#">
                                       <img src="shop/images/tshirt/1.jpg" />
                                   </a>
                               </div>
               
                                   <span>Tshirt</span>
                                   </li>
                            </ul>


                            <section class="new-arrival">

                                <div class="arrival-heading">
                                    <strong>New Arrival</strong>
                                    <p>We Provide You New Merch Items</p>
                                </div>

                           
                                <div class="product-container">

                                <?php
							$get_product=get_product($con,10);
							foreach($get_product as $list){
							?>
                                    <div class="product-box">
                                        <div class="product-img">
                                            <a class="add-cart fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">
                                                <i class='bx bxs-cart'></i>
                                            </a>
                                      <a href="product.php?id=<?php echo $list['id']?>"> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" /> </a>
                                        </div>
                                        <div class="product-details">
                                            <a href="#" class="p-name"><?php echo $list['name']?></a>
                                            <span class="p-price">₱<?php echo $list['price']?></span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                               
                                
                        
                            </section>


                            <div class="sale">
                                <div class="sale-box">
                                    <img src="shop/images/jacket/5.jpg" />
                                    <a href="#">
                                        <div class="sale-text">
                                            <strong>Haikyuu MSBY jacket</strong>
                                            <span>Sale off 20%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale-box">
                                    <img src="shop/images/jacket/6.jpg" />
                                    <a href="#">
                                        <div class="sale-text">
                                            <strong>Haikyuu Itachiyama</strong>
                                            <span>Sale off 20%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale-box">
                                    <img src="shop/images/jacket/7.jfif" />
                                    <a href="#">
                                        <div class="sale-text">
                                            <strong>Haikyuu Aoba johsai</strong>
                                            <span>Sale off 20%</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
        <?php require('footer.php') ?>