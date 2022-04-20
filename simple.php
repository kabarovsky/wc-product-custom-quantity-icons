
/**  

In woocommerce/add-to-cart/simple.php template wrapping default quantity input field (PHP part below) with .quantity-wrapper div and adding span elements for minus/plus icons */

<div class="quantity-wrapper">
    <span class="qty-icon qty-minus"><i class="fal fa-minus"></i></span>
    <?php
        do_action( 'woocommerce_before_add_to_cart_quantity' );
        woocommerce_quantity_input(
            array(
                'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
            )
        );
        do_action( 'woocommerce_after_add_to_cart_quantity' );
    ?>
    <span class="qty-icon qty-plus"><i class="fal fa-plus"></i></span>
</div>

