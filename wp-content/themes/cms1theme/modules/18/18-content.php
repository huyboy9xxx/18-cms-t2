<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18">
    <div class="container set-width">
        <div class="cart-main">
            <div class="row cart-body">
                <div class="col-md-7">
                    <div class="cart-title">
                        <span>Product</span>
                        <div class="title-right">
                            <span>Price</span>
                            <span>Quantity</span>
                            <span>Total</span>
                        </div>
                    </div>

                    <ul class='cart-item'>
                        <li>
                            <a class='remove' href="#">×</a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo $url_path ?>/images/1.jpeg" alt="">
                            </a>
                        </li>
                        <li class='name'>
                            <a href="#">All Star Canvas Hi Converse - 31, blue</a>
                        </li>
                        <li class="right-item">
                            <div class='price'>
                                <a href="#"><b>$29,00</b></a>
                            </div>
  
                                <div class="number-spinner">
                                    <div class="handle-counter" id="handleCounter">
                                        <button class="counter-minus  btn">-</button>
                                        <input type="text" value="1">
                                        <button class="counter-plus  btn">+</button>
                                    </div>
                                </div>

                            <div class='total'>
                                <a href="#"><b>$29,00</b></a>
                            </div>
                        </li>
                            
                    </ul>
                    <div class="back-update">
                        <button class="btn back">← Continue shopping</button>
                        <button class="btn update">Update cart</button>
                    </div>
                </div>
                <div class="col-md-5 line-h">
                    <div class="steps-price">
                        <div class="cart-title">
                            <span>Cart Totals</span>
                        </div>
                        <div class="cart-title height-item">
                            <span class="subtotal">Subtotal</span>
                            <div class="title-right">
                                <span>$29,00</span>
                            </div>
                        </div>
                        <div class="shipping">
                            <span>Shipping</span>
                            <div class="right-shipping">
                                <span>Enter your address to view shipping options.</span>
                                <a href="#">Calculate shipping</a>
                            </div>
                        </div>
                        <div class="cart-title total">
                            <span>Total</span>
                        </div>
                        <div class="cart-title coupon">
                            <button class="btn">Proceed to checkout</button>
                            <span>Coupon</span>
                        </div>
                        <input type="text" class="form-control coupon-code" placeholder="Coupon Code">
                        <input type="submit" class="btn submit" value="Apply coupon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
