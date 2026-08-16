=== Wallet for WooCommerce ===
Contributors: standalonetech, subratamal, moumitaadak
Tags: woocommerce wallet, cashback, store credit, partial payment, digital wallet
Requires PHP: 7.4
Requires at least: 6.4
Tested up to: 7.0
Stable tag: 1.6.12
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

✨ WooCommerce wallet with cashback rewards, store credit, partial payment & top-ups. Boost customer loyalty effortlessly.

== Description ==

Maximize convenience and savings for your customers with **Wallet for WooCommerce** (TeraWallet). This all-in-one digital wallet and store credit system is specifically designed to streamline the checkout process and boost customer loyalty.

TeraWallet empowers your customers to deposit funds into their personal accounts, transfer money to other users, and make purchases effortlessly using their wallet balance. By reducing the need for repeated payment detail entries, you provide a frictionless shopping experience that encourages repeat business.

Beyond core wallet functionality, TeraWallet features a robust **Cashback Rewards System**. Incentivize purchases by offering rewards based on cart totals, specific products, or categories. You can even convert WooCommerce coupons into wallet rewards, providing a unique way to drive engagement.

👉 **Try the live demo:** [https://demo.standalonetech.com/](https://demo.standalonetech.com/)
👉 **Read full documentation:** [https://docs.standalonetech.com/](https://docs.standalonetech.com/)
👉 **[Upgrade to Pro](https://standalonetech.com/product/woocommerce-wallet-pro/?utm_source=wordpress&utm_medium=plugin_page&utm_campaign=upgrade)** — unlock withdrawals, expiry, coupons, importer & AffiliateWP integration.

== ✨ Why choose Wallet for WooCommerce? ==

*   🚀 **Frictionless Checkout:** One-click payments via wallet balance reduce cart abandonment.
*   💰 **Automated Cashback:** Automated rewards keep customers coming back for more.
*   🏦 **Store Credit System:** Easily handle refunds by crediting the user's wallet instantly.
*   🔄 **Wallet Transfers:** Allow customers to share funds with friends and family.

== 🛠 Features ==

*   🏦 **Core Wallet Management:** A centralized ledger system that tracks every credit and debit with 100% accuracy using SQL-level locking to prevent race conditions.
*   💰 **Dynamic Cashback System:**
    *   **Cart-Wise:** Rewards based on the total order value.
    *   **Product-Wise:** Granular control over rewards for individual items.
    *   **Category-Wise:** Rewards based on product taxonomies.
*   💳 **Smart Checkout Options:**
    *   **Full Payment:** Pay for the entire order using the wallet gateway.
    *   **Partial Payment:** Use wallet balance for part of the total and pay the rest via other gateways (Stripe, PayPal, etc.).
    *   **Auto-Deduct:** Automatically apply available balance as a discount at checkout.
*   🔄 **User Empowerment:**
    *   **Wallet Top-ups:** Customers can add funds via their dashboard using any supported payment method.
    *   **Peer-to-Peer Transfers:** Securely send wallet balance to other registered users via email.
*   🎁 **Engagement Rewards:** Credit users for specific actions:
    *   New user registration bonus.
    *   Daily login rewards.
    *   Product review rewards.
*   🛠 **Admin Control Center:**
    *   View all user balances and transaction history.
    *   Manually adjust (credit/debit) any user's balance with detailed notes.
    *   Lock/Unlock user wallets for security and fraud prevention.
*   🔗 **Seamless Integrations:**
    *   Full support for WooCommerce Blocks checkout.
    *   Compatible with WPML and WooCommerce Subscriptions.
    *   Built-in support for Dokan, WCFM, and WCMarketplace.

*   🌍 **Multi-Currency Support:** First-class integrations with the most-used WooCommerce currency switchers. Wallet balances, top-ups, transfers, and cashback are all converted through the active provider's live rates.
    *   [YayCurrency – Multi-Currency Switcher](https://wordpress.org/plugins/yaycurrency/)
    *   [WOOCS – WooCommerce Currency Switcher (FOX)](https://wordpress.org/plugins/woocommerce-currency-switcher/)
    *   [WPML Multilingual & Multi-Currency](https://wpml.org/) (WCML)
    *   [CURCY – Multi Currency for WooCommerce](https://wordpress.org/plugins/woo-multi-currency/) (VillaTheme)
    *   [Aelia Currency Switcher](https://aelia.co/shop/currency-switcher-woocommerce/)
    *   **Generic fallback** for any other plugin that filters `woocommerce_currency` — active-currency detection still works, conversion falls open to the stored amount with an audit-log warning.

== 🚀 Pro Features ==

**[⭐ Upgrade to Pro](https://standalonetech.com/product/woocommerce-wallet-pro/?utm_source=wordpress&utm_medium=plugin_page&utm_campaign=upgrade)** to unlock advanced wallet features and specialized integrations:

*   💸 **Wallet Withdrawal:** Allow customers to request withdrawals from their wallet balance to their bank or other payment methods.
*   ⌛ **Wallet Expiry:** Set expiration dates for wallet balance or cashback to encourage timely spending.
*   🎟️ **Wallet Coupons:** Create exclusive coupons that can only be redeemed into the user's wallet.
*   📥 **Wallet Importer:** Easily bulk import wallet balances and transaction history from CSV files.
*   🤝 **AffiliateWP Integration:** Automatically credit affiliate commissions directly to the user's wallet.
*   🎂 **Milestone & Birthday Bonuses:** Credit the wallet when a customer's lifetime spend crosses a threshold you set, and once a year on their birthday.
*   📊 **Breakage & Aging Reports:** See how much wallet credit is about to expire, how much never will be spent, plus withdrawal and coupon reporting on the Wallet Dashboard.

== Installation ==

= Minimum Requirements =

* PHP 7.4 or greater is required (PHP 8.0 or greater is recommended)
* MySQL 5.6 or greater, OR MariaDB version 10.1 or greater, is required
* WordPress 6.0 or greater is required
* WooCommerce 7.2 or greater is required

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't need to leave your web browser. To do an automatic install of WooCommerce Wallet Payment, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.

In the search field type "Wallet for WooCommerce" and click Search Plugins. Once you've found the plugin you can view details about it such as the point release, rating and description. Most importantly of course, you can install it by simply clicking "Install Now".

= Manual installation =

The manual installation method involves downloading our plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Updating =

Automatic updates should work like a charm; as always though, ensure you backup your site just in case.

If on the off-chance you do encounter issues with the wallet endpoints pages after an update you simply need to flush the permalinks by going to WordPress > Settings > Permalinks and hitting 'save'. That should return things to normal.

= Important =

A hidden "Wallet Topup" product is automatically created upon activation. Ensure it remains **Published** and **Private**.

== Frequently Asked Questions ==

= How does wallet payment work? =
Wallet payment acts as a native WooCommerce gateway. Customers with sufficient balance can select "Wallet" at checkout to pay for their order instantly.

= Does it support partial payment? =
Yes! If enabled in settings, customers can use their wallet balance to pay for a portion of the order and cover the remainder with another gateway like Stripe or PayPal.

= When is cashback applied? =
Cashback is triggered by order status changes. You can configure which status (e.g., 'Completed' or 'Processing') triggers the reward in the plugin settings.

= Why is the wallet not visible at checkout? =
Ensure the Wallet gateway is enabled in **WooCommerce > Settings > Payments**. Also, check if "Hide if empty" is enabled in TeraWallet settings if the user has a zero balance.

= Where can I get support? =
You can ask for help in the [WordPress Plugin Forum](https://wordpress.org/support/plugin/woo-wallet) or email us at support@standalonetech.com.

= Where is the REST API documentation? =
You can find the documentation for our [Wallet REST API here](https://github.com/malsubrata/woo-wallet/wiki/API-V3).

== Screenshots ==

1. User wallet dashboard page.
2. Wallet topup page.
3. Transfer wallet balance.
4. Transaction details page.
5. Admin wallet details page.
6. Admin adjust wallet balance.
7. Admin wallet transaction details page.
8. Wallet payment gateway.
9. WooCommerce refund.
10. Wallet actions.

== Changelog ==

= v1.6.12 (August 16, 2026) =
– **Fix:-** A wallet credit or debit that did not name a user explicitly was applied to user ID 0 instead of the logged-in customer. The wallet object resolved "the current user" while WordPress was still including plugin files — before the function that answers that question exists — so it silently settled on 0 and kept that value for the whole request. It is now resolved at the moment it is needed. Only third-party code using the shorthand `credit()`/`debit()` form was affected; nothing in TeraWallet itself calls it that way, so no existing balances are wrong.
– **Tweak:-** The "Upgrade to Pro" banner is no longer an admin notice. It was attached to the `admin_notices` hook and filtered down to TeraWallet's screens from inside the callback; it is now ordinary page content, emitted by TeraWallet's own admin pages through a new `woo_wallet_admin_page_header` action. It cannot reach the wider dashboard by any route, and third-party code can attach its own output to TeraWallet pages through the same hook.
– **Tweak:-** The banner itself has been rewritten. On a store already carrying wallet credit it now opens with that store's own outstanding balance and the number of customers holding one, then makes the case against those figures rather than listing features in the abstract; stores with little or no wallet activity get a capability-led version instead. Withdrawals, credit expiry and the breakage reports are described by what they do for the store, the remaining four Pro features are named, and the price, the money-back guarantee and a single clear action are all present without leaving the page. It links to the in-admin Upgrade to Pro page — which carries the full comparison, the store's own numbers and the purchase FAQ — instead of sending a first click straight off-site.
– **Tweak:-** The banner's dismiss button has been removed. Dismissal existed because a site-wide notice has to be dismissible; now that the banner appears only on this plugin's own five screens and nowhere else, there is nothing to dismiss it from. It still disappears the moment TeraWallet Pro is installed. Existing dismissals are simply forgotten — the per-user meta and the legacy site option are no longer read.
– **Tweak:-** Pending database upgrades now run on `plugins_loaded` instead of while the plugin file is still being included. At the earlier point WordPress has not yet loaded its pluggable functions and WooCommerce may not have loaded at all, so an upgrade routine that needed either one would end the request with a fatal error. This has constrained what upgrade routines could safely do since 1.0.8; they can now use the full WordPress and WooCommerce API.

[See changelog for all versions](https://raw.githubusercontent.com/malsubrata/woo-wallet/master/changelog.txt).

== Upgrade Notice ==

= 1.6.1 =
Security: closes a race in the Delete Logs bulk action and prevents double-credit of cashback on duplicate order-status transitions / replayed webhooks — recommended upgrade for all sites. Two new opt-in cashback settings added: enable *Refund clawback* (Settings → Wallet Credit) to claw back cashback when orders are refunded; enable *Allow negative clawback* to permit exact reversal when the customer has already spent the credit. The `max_cashback_scope` setting defaults to `per_order` on fresh installs; upgraded sites are automatically migrated to `per_item` to preserve existing behaviour. The React Actions tab is now part of the standard settings flow and persists to a single `_wallet_settings_actions` option (legacy per-action option rows are kept as a rollback safety net). The Delete Logs bulk action now opens a modal so admins can pick delete mode (soft / hard) and balance handling (keep / wipe). Schema migration is automatic and idempotent — back up before upgrading.

= 1.6.0 =
Security: closes an overdraft window in the debit balance gate and a duplicate-IPN double-credit window in the top-up callback — recommended upgrade for all sites. Also adds multi-currency provider adapters (WOOCS, WCML, CURCY, Aelia, YayCurrency + generic fallback), fixes ledger currency bugs in partial-payment and cashback flows, and extends the REST API with per-currency fields. Schema migration is automatic and idempotent — back up before upgrading.

= 1.5.18 =
Security fix for wallet transfer race conditions, new Go Pro admin page, and database query optimizations.
