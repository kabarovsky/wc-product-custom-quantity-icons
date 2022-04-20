# wc-product-custom-quantity-icons
Adding custom quantity arrows/icons to WC product quantity input

1. simple.php

It's a simple product add-to-cart template located in woocommerce/add-to-cart/

In there, we're wrapping default quantity input field (PHP part in the simple.php file) with .quantity-wrapper div and adding span elements/icons for custom minus and plus actions

2. quantity.scss

We're styling custom wrapper, custom icons and default input field 

3. quantity.js

jQuery to change input value on custom icons click