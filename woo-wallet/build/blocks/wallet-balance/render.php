<?php
/**
 * Wallet Balance Block – Server-Side Render
 *
 * Dynamically renders the wallet balance block on the frontend.
 * This file is referenced by block.json's "render" field and receives
 * $attributes and $content automatically.
 *
 * @package StandaleneTech
 * @since   1.7.0
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (empty for dynamic blocks).
 * @var WP_Block $block      Block instance.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Don't render if user is not logged in.
if ( ! is_user_logged_in() ) {
	return '';
}

// Don't render if WooWallet is not available.
if ( ! function_exists( 'woo_wallet' ) || ! woo_wallet()->wallet ) {
	return '';
}

// ── Extract attributes with defaults ──────────────────────────────────────
$wallet_icon   = isset( $attributes['walletIcon'] ) ? sanitize_text_field( $attributes['walletIcon'] ) : 'classic-wallet';
$icon_size     = isset( $attributes['iconSize'] ) ? absint( $attributes['iconSize'] ) : 24;
$icon_color    = isset( $attributes['iconColor'] ) ? sanitize_hex_color( $attributes['iconColor'] ) : '';
$balance_color = isset( $attributes['balanceColor'] ) ? sanitize_hex_color( $attributes['balanceColor'] ) : '';
$link_url      = isset( $attributes['linkUrl'] ) && ! empty( $attributes['linkUrl'] ) ? esc_url( $attributes['linkUrl'] ) : '';
$show_balance  = isset( $attributes['showBalance'] ) ? (bool) $attributes['showBalance'] : true;

// ── Resolve the link URL ──────────────────────────────────────────────────
if ( empty( $link_url ) ) {
	$link_url = esc_url( wc_get_account_endpoint_url( get_option( 'woocommerce_woo_wallet_endpoint', 'my-wallet' ) ) );
}

// ── Get formatted wallet balance ──────────────────────────────────────────
$balance = woo_wallet()->wallet->get_wallet_balance( get_current_user_id() );

// ── SVG Icons Map ─────────────────────────────────────────────────────────
$icons = array(
	'classic-wallet' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="' . $icon_size . '" height="' . $icon_size . '" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="2" y="6" width="20" height="14" rx="2" ry="2"/><path d="M2 10h20"/><circle cx="18" cy="14" r="1" fill="currentColor" stroke="none"/><path d="M6 6V4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v2"/></svg>',

	'coin-wallet' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="' . $icon_size . '" height="' . $icon_size . '" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="1" y="7" width="18" height="13" rx="2" ry="2"/><path d="M1 11h18"/><circle cx="15" cy="15" r="1" fill="currentColor" stroke="none"/><path d="M5 7V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v2"/><circle cx="19.5" cy="4.5" r="3" stroke-width="1.5"/><path d="M19.5 3.5v2M18.5 4.5h2" stroke-width="1"/></svg>',

	'purse' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="' . $icon_size . '" height="' . $icon_size . '" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 8V6a6 6 0 0 1 12 0v2"/><rect x="3" y="8" width="18" height="13" rx="2" ry="2"/><path d="M3 12h18"/><circle cx="12" cy="16" r="1.5" fill="currentColor" stroke="none"/></svg>',

	'credit-card' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="' . $icon_size . '" height="' . $icon_size . '" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="2" y="5" width="20" height="14" rx="2" ry="2"/><path d="M2 10h20"/><path d="M6 15h4" stroke-width="2"/><path d="M14 15h4" stroke-width="1" opacity="0.5"/></svg>',

	'piggy-bank' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="' . $icon_size . '" height="' . $icon_size . '" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M19 10c0-1.1-.4-2.2-1.2-3C16.6 5.8 14.4 5 12 5c-4.4 0-8 2.7-8 6s3.6 6 8 6c1.4 0 2.7-.3 3.8-.7L18 18v-3.2c.6-1 1-2.3 1-3.8V10z"/><circle cx="9" cy="10" r="1" fill="currentColor" stroke="none"/><path d="M15 9h2" stroke-width="2"/><path d="M4 11l-2 1"/><path d="M9 17l-1 3M15 17l1 3" stroke-width="1.5"/></svg>',

	'money-bag' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="' . $icon_size . '" height="' . $icon_size . '" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M9.5 2l2.5 3 2.5-3"/><path d="M12 5C7.6 5 4 8.1 4 12c0 4.4 3.6 8 8 8s8-3.6 8-8c0-3.9-3.6-7-8-7z"/><path d="M14.5 10.5c0-.8-.9-1.5-2.5-1.5s-2.5.7-2.5 1.5S10.4 12 12 12s2.5.7 2.5 1.5-1.1 1.5-2.5 1.5-2.5-.7-2.5-1.5"/><path d="M12 8.5V9M12 15v.5"/></svg>',
);

// Fall back to classic-wallet if the selected icon doesn't exist.
$icon_svg = isset( $icons[ $wallet_icon ] ) ? $icons[ $wallet_icon ] : $icons['classic-wallet'];

// ── Build inline styles ───────────────────────────────────────────────────
$icon_style    = $icon_color ? 'color:' . $icon_color . ';' : '';
$balance_style = $balance_color ? 'color:' . $balance_color . ';' : '';

// ── Get block wrapper attributes ──────────────────────────────────────────
$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wc-block-woo-wallet-balance',
	)
);

// ── Render ────────────────────────────────────────────────────────────────
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<a
		class="wc-block-woo-wallet-balance__link"
		href="<?php echo esc_url( $link_url ); ?>"
		title="<?php esc_attr_e( 'View your wallet', 'woo-wallet' ); ?>"
		aria-label="<?php esc_attr_e( 'View your wallet', 'woo-wallet' ); ?>"
	>
		<span
			class="wc-block-woo-wallet-balance__icon"
			<?php if ( $icon_style ) : ?>
				style="<?php echo esc_attr( $icon_style ); ?>"
			<?php endif; ?>
		>
			<?php echo $icon_svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Pre-defined SVG markup. ?>
		</span>
		<?php if ( $show_balance ) : ?>
			<span
				class="wc-block-woo-wallet-balance__amount"
				<?php if ( $balance_style ) : ?>
					style="<?php echo esc_attr( $balance_style ); ?>"
				<?php endif; ?>
			>
				<?php echo $balance; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Output from wc_price(). ?>
			</span>
		<?php endif; ?>
	</a>
</div>
