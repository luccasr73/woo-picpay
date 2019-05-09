<?php
/**
 * Plugin Name:          WooCommerce PicPay
 * Plugin URI:           https://github.com/dadeke/woo-picpay
 * Description:          Includes PicPay E-Commerce as a payment gateway to WooCommerce.
 * Author:               Deividson Damasio
 * Author URI:           http://deividson.net
 * Version:              1.1.1
 * License:              GPLv3 or later
 * Text Domain:          woo-picpay
 * Domain Path:          /languages
 * WC requires at least: 3.0.0
 * WC tested up to:      3.6.2
 *
 * WooCommerce PicPay is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * WooCommerce PicPay is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WooCommerce PicPay. If not, see
 * <https://www.gnu.org/licenses/gpl-3.0.txt>.
 *
 * @package Woo_PicPay
 */

defined('ABSPATH') || exit;

// Plugin constants.
define('WC_PICPAY_VERSION', '1.1.1');
define('WC_PICPAY_PLUGIN_FILE', __FILE__);

if(!class_exists('WC_PicPay')) {
	include_once dirname(__FILE__) . '/includes/class-wc-picpay.php';
	add_action('plugins_loaded', array('WC_PicPay', 'init'));
}
