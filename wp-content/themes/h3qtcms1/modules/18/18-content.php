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
        <?php defined( 'ABSPATH' ) || exit;
        do_action( 'woocommerce_before_cart' ); ?>

        <form class="cart-main" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
            <?php do_action( 'woocommerce_before_cart_table' ); ?>
            <div class="row cart-body">
                <div class="col-md-7">
                    <br>
                    <div class="cart-title">
                        <span>Product</span>
                        <div class="title-right">
                            <span>Price</span>
                            <span>Quantity</span>
                            <span>Total</span>
                        </div>
                    </div>
                    <?php do_action( 'woocommerce_before_cart_contents' ); ?>
                    <?php
                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                    ?>
                    <ul class='cart-item'>

                        <li>
                            <!-- <a class='my-remove' href="#">×</a> -->
                            <?php
                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                    'woocommerce_cart_item_remove_link',
                                    sprintf(
                                        '<a href="%s" class="my-remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                        esc_html__( 'Remove this item', 'woocommerce' ),
                                        esc_attr( $product_id ),
                                        esc_attr( $_product->get_sku() )
                                    ),
                                    $cart_item_key
                                );
                            ?>
                        </li>
                        <li>
                            <!-- <a href="#">
                                <img src="<?php //echo $url_path ?>/images/1.jpeg" alt="">
                            </a> -->
                            <?php
                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                        if ( ! $product_permalink ) {
                            echo $thumbnail; // PHPCS: XSS ok.
                        } else {
                            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                        }
                        ?>
                        </li>
                        <li class='name' class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                            <!-- <a href="#">All Star Canvas Hi Converse - 31, blue</a> -->
                            <?php
                        if ( ! $product_permalink ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                        } else {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                        }

                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                        // Meta data.
                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                        // Backorder notification.
                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                        }
                        ?>
                        </li>
                        <li class="right-item">
                            <div class='price' data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                                <?php
                                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                            ?>
                            </div>
  
                                <div class="my-number-spinner" style="float: right;width: 78px;margin-left: 14px;" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                    <!-- <div class="handle-counter" id="handleCounter">
                                        <button class="counter-minus  btn">-</button>
                                        <input type="text" value="1">
                                        <button class="counter-plus  btn">+</button>
                                    </div> -->
                                    <?php
                        if ( $_product->is_sold_individually() ) {
                            $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                        } else {
                            $product_quantity = woocommerce_quantity_input(
                                array(
                                    'input_name'   => "cart[{$cart_item_key}][qty]",
                                    'input_value'  => $cart_item['quantity'],
                                    'max_value'    => $_product->get_max_purchase_quantity(),
                                    'min_value'    => '0',
                                    'product_name' => $_product->get_name(),
                                ),
                                $_product,
                                false
                            );
                        }

                        echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                        ?>
                                </div>

                            <div class='total' data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                                <?php
                                echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                            ?>
                            </div>
                        </li>
                                        
                    </ul>
                    <?php
                            }
                        }
                        ?>
                    <?php do_action( 'woocommerce_cart_contents' ); ?>
                    <div class="back-update actions">
                        <button class="btn back">← Continue shopping</button>
                      <!--   <button class="btn update">Update cart</button> -->
                        <button type="submit" class="btn update" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

                    <?php do_action( 'woocommerce_cart_actions' ); ?>

                    <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                    </div>
                    <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                </div>
                <div class="col-md-5 line-h">
                    <br>
                    <div class="steps-price">
                        <div class="cart-title">
                            <span><?php esc_html_e( 'Cart totals', 'woocommerce' ); ?></span>
                        </div>
                        <div class="cart-title height-item">
                            <span class="subtotal">Subtotal</span>
                            <div class="title-right">
                                <?php wc_cart_totals_subtotal_html(); ?>
                            </div>
                        </div>
                        <div class="shipping">
                            <span>Shipping</span>
                            <div class="right-shipping">
                                <span>Enter your address to view shipping options.</span>
                                <a href="#">Calculate shipping</a>
                            </div>
                            <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                                <div class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                                    <div><?php wc_cart_totals_coupon_label( $coupon ); ?></div>
                                    <div data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
                                </div>
                            <?php endforeach; ?>
                            <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

                                <?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

                                <?php wc_cart_totals_shipping_html(); ?>

                                <?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

                            <?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

                                <tr class="shipping">
                                    <th><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></th>
                                    <td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
                                </tr>

                            <?php endif; ?>

                            <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
                                <tr class="fee">
                                    <th><?php echo esc_html( $fee->name ); ?></th>
                                    <td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
                                </tr>
                            <?php endforeach; ?>

                            <?php
                            if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
                                $taxable_address = WC()->customer->get_taxable_address();
                                $estimated_text  = '';

                                if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
                                    /* translators: %s location. */
                                    $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
                                }

                                if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
                                    foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
                                        ?>
                                        <tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                                            <th><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></th>
                                            <td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr class="tax-total">
                                        <th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></th>
                                        <td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
                        <div class="cart-title total">
                            <span>Total</span>
                            <div class="title-right">
                                <?php wc_cart_totals_order_total_html(); ?>
                            </div>
                        </div>
                        <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
                        <div class="cart-title coupon">
                            <a href='<?php echo esc_url( wc_get_checkout_url() ); ?>' class="btn"><?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?></a>
                            <span>Coupon</span>
                        </div>
                        <div class="coupon">
                            <input type="text" name="coupon_code" class="form-control coupon-code" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" />
                            <input type="submit" class="btn submit" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">
                            <?php do_action( 'woocommerce_cart_coupon' ); ?>
                        </div>
                        <?php do_action( 'woocommerce_after_cart' ); ?>
                    </div>
                </div>
            </div>
        </form>
        <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
        <?php do_action( 'woocommerce_after_cart' ); ?>
    </div>
</div>
