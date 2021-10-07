({
    optimize: 'uglify2',
    inlineText: true,
    preserveLicenseComments: false,
    skipDirOptimize: false, // true // Set this value to true if you want to skip optimizing the other non-build bundle JS files, will speed up the build
    deps: [
        'fotorama/fotorama',
        'jquery/ui',
        'jquery/jquery-migrate'
    ],
    shim: {
        'jquery/jquery.hashchange': ['jquery', 'jquery/jquery-migrate'],
        'fotorama/fotorama': ['jquery', 'jquery/jquery-migrate', 'magnifier/magnify'],
        'jquery/jquery-migrate': ['jquery', 'jquery/jquery.cookie'],
        MutationObserver: ['es6-collections'],
        tinymce: {
            exports: 'tinymce',
        },
        moment: {
            exports: 'moment',
        },
        matchMedia: {
            exports: 'mediaCheck',
        },
    },
    paths: {
        'jquery/ui': 'jquery/jquery-ui',
        'jquery/validate': 'jquery/jquery.validate',
        'jquery/hover-intent': 'jquery/jquery.hoverIntent',
        'jquery/file-uploader': 'jquery/fileUploader/jquery.fileupload-fp',
        'jquery/jquery.hashchange': 'jquery/jquery.ba-hashchange.min',
        'jquery/jquery-storageapi': 'jquery/jquery.storageapi.min',
        'spectrum': 'jquery/spectrum/spectrum',
        'tinycolor': 'jquery/spectrum/tinycolor',
        prototype: 'legacy-build.min',
        text: 'requirejs/text',
        domReady: 'requirejs/domReady',
        tinymce: 'tiny_mce/tiny_mce_src',
        'ui/template': 'Magento_Ui/templates',
        'mixins': 'mage/requirejs/mixins'
    },
    map: {
        '*': {
            ko: 'knockoutjs/knockout',
            knockout: 'knockoutjs/knockout',
            mageUtils: 'mage/utils/main',
            rowBuilder: 'Magento_Theme/js/row-builder',
            toggleAdvanced: 'mage/toggle',
            translateInline: 'mage/translate-inline',
            sticky: 'mage/sticky',
            tabs: 'mage/tabs',
            zoom: 'mage/zoom',
            collapsible: 'mage/collapsible',
            dropdownDialog: 'mage/dropdown',
            dropdown: 'mage/dropdowns',
            accordion: 'mage/accordion',
            loader: 'mage/loader',
            tooltip: 'mage/tooltip',
            deletableItem: 'mage/deletable-item',
            itemTable: 'mage/item-table',
            fieldsetControls: 'mage/fieldset-controls',
            fieldsetResetControl: 'mage/fieldset-controls',
            redirectUrl: 'mage/redirect-url',
            loaderAjax: 'mage/loader',
            menu: 'mage/menu',
            popupWindow: 'mage/popup-window',
            validation: 'mage/validation/validation',
            welcome: 'Magento_Theme/js/view/welcome',
            uiElement: 'Magento_Ui/js/lib/core/element/element',
            uiCollection: 'Magento_Ui/js/lib/core/collection',
            uiComponent: 'Magento_Ui/js/lib/core/collection',
            uiClass: 'Magento_Ui/js/lib/core/class',
            uiEvents: 'Magento_Ui/js/lib/core/events',
            uiRegistry: 'Magento_Ui/js/lib/registry/registry',
            consoleLogger: 'Magento_Ui/js/lib/logger/console-logger',
            uiLayout: 'Magento_Ui/js/core/renderer/layout',
            buttonAdapter: 'Magento_Ui/js/form/button-adapter',
            rjsResolver: 'mage/requirejs/resolver',
            discountCode: 'Magento_Checkout/js/discount-codes',
            shoppingCart: 'Magento_Checkout/js/shopping-cart',
            regionUpdater: 'Magento_Checkout/js/region-updater',
            sidebar: 'Magento_Checkout/js/sidebar',
            checkoutLoader: 'Magento_Checkout/js/checkout-loader',
            checkoutData: 'Magento_Checkout/js/checkout-data',
            proceedToCheckout: 'Magento_Checkout/js/proceed-to-checkout',
            pageCache: 'Magento_PageCache/js/page-cache',
            wishlist: 'Magento_Wishlist/js/wishlist',
            addToWishlist: 'Magento_Wishlist/js/add-to-wishlist',
            wishlistSearch: 'Magento_Wishlist/js/search',
            requireCookie: 'Magento_Cookie/js/require-cookie',
            cookieNotices: 'Magento_Cookie/js/notices',
            compareList: 'Magento_Catalog/js/list',
            relatedProducts: 'Magento_Catalog/js/related-products',
            upsellProducts: 'Magento_Catalog/js/upsell-products',
            productListToolbarForm: 'Magento_Catalog/js/product/list/toolbar',
            catalogGallery: 'Magento_Catalog/js/gallery',
            priceBox: 'Magento_Catalog/js/price-box',
            priceOptionDate: 'Magento_Catalog/js/price-option-date',
            priceOptionFile: 'Magento_Catalog/js/price-option-file',
            priceOptions: 'Magento_Catalog/js/price-options',
            priceUtils: 'Magento_Catalog/js/price-utils',
            catalogAddToCart: 'Magento_Catalog/js/catalog-add-to-cart',
            loadPlayer: 'Magento_ProductVideo/js/load-player',
            fotoramaVideoEvents: 'Magento_ProductVideo/js/fotorama-add-video-events',
            bundleOption: 'Magento_Bundle/bundle',
            priceBundle: 'Magento_Bundle/js/price-bundle',
            slide: 'Magento_Bundle/js/slide',
            productSummary: 'Magento_Bundle/js/product-summary',
            checkoutBalance: 'Magento_Customer/js/checkout-balance',
            address: 'Magento_Customer/address',
            changeEmailPassword: 'Magento_Customer/change-email-password',
            passwordStrengthIndicator: 'Magento_Customer/js/password-strength-indicator',
            zxcvbn: 'Magento_Customer/js/zxcvbn',
            addressValidation: 'Magento_Customer/js/addressValidation',
            creditCardType: 'Magento_Payment/cc-type',
            addToCart: 'Magento_Msrp/js/msrp',
            giftMessage: 'Magento_Sales/gift-message',
            ordersReturns: 'Magento_Sales/orders-returns',
            downloadable: 'Magento_Downloadable/downloadable',
            orderBySkuFailure: 'Magento_AdvancedCheckout/js/order-by-sku-failure',
            fileChooser: 'Magento_AdvancedCheckout/js/file-chooser',
            configurable: 'Magento_ConfigurableProduct/js/configurable',
            fileElement: 'Magento_CustomerCustomAttributes/file-element',
            transparent: 'Magento_Payment/transparent',
            recentlyViewedProducts: 'Magento_Reports/js/recently-viewed',
            captcha: 'Magento_Captcha/captcha',
            catalogSearch: 'Magento_CatalogSearch/form-mini',
            giftOptions: 'Magento_GiftMessage/gift-options',
            extraOptions: 'Magento_GiftMessage/extra-options',
            taxToggle: 'Magento_Weee/tax-toggle',
            ticker: 'Magento_CatalogEvent/js/ticker',
            carousel: 'Magento_CatalogEvent/js/carousel',
            multipleWishlist: 'Magento_MultipleWishlist/js/multiple-wishlist',
            multiShipping: 'Magento_Multishipping/js/multi-shipping',
            orderOverview: 'Magento_Multishipping/js/overview',
            payment: 'Magento_Multishipping/js/payment',
            orderReview: 'Magento_Paypal/order-review',
            paypalCheckout: 'Magento_Paypal/js/paypal-checkout',
            editTrigger: 'mage/edit-trigger',
            addClass: 'Magento_Translation/add-class',
            quickSearch: 'Magento_Search/form-mini',
        },
    },
    modules: [
        {
            name: 'requirejs/require',
            include: [
                'mage/requirejs/mixins',
                'mage/common',
                'jquery/jquery.cookie',
                'jquery/jquery-storageapi',
                'jquery/jquery.mobile.custom',
                'jquery/jquery.hashchange',
                'jquery/ui',
            ],
            exclude: [
                'mage/collapsible',
            ]
        },
        {
            name: 'mage/bootstrap',
            include: [
                'jquery',
                'knockoutjs/knockout',
                'mage/translate',
                'jquery/jquery-migrate',
                "jquery/jquery-ui-timepicker-addon",
                'mage/dataPost',
                'mage/translate-inline',
                'Magento_Theme/js/responsive',
                'Magento_Theme/js/theme',
                "text!ui/template/modal/modal-popup.html",
                "text!ui/template/modal/modal-slide.html",
                "text!ui/template/modal/modal-custom.html",
                "text!ui/template/tooltip/tooltip.html",
                "Magento_Ui/js/lib/key-codes",
                "Magento_Ui/js/modal/confirm",
                "Magento_Ui/js/modal/modal",
                "Magento_Ui/js/lib/core/class",
                "Magento_Ui/js/lib/knockout/template/observable_source",
                "Magento_Ui/js/lib/knockout/template/loader",
                "Magento_Ui/js/lib/knockout/template/renderer",
                "Magento_Ui/js/lib/logger/levels-pool",
                "Magento_Ui/js/lib/logger/logger",
                "Magento_Ui/js/lib/logger/entry",
                "Magento_Ui/js/lib/logger/entry-factory",
                "Magento_Ui/js/lib/logger/console-output-handler",
                "Magento_Ui/js/lib/logger/formatter",
                "Magento_Ui/js/lib/logger/message-pool",
                "Magento_Ui/js/lib/registry/registry",
                "Magento_Ui/js/lib/core/events",
                "Magento_Ui/js/lib/core/storage/local",
                "Magento_Ui/js/lib/logger/logger-utils",
                "Magento_Ui/js/lib/logger/console-logger",
                "Magento_Ui/js/lib/knockout/template/engine",
                "Magento_Ui/js/lib/view/utils/dom-observer",
                "Magento_Ui/js/lib/knockout/extender/bound-nodes",
                "Magento_Ui/js/lib/view/utils/bindings",
                "Magento_Ui/js/lib/view/utils/async",
                "Magento_Ui/js/lib/knockout/bindings/resizable",
                "Magento_Ui/js/lib/knockout/bindings/i18n",
                "Magento_Ui/js/lib/knockout/bindings/scope",
                "Magento_Ui/js/lib/knockout/bindings/range",
                "Magento_Ui/js/lib/knockout/bindings/mage-init",
                "Magento_Ui/js/lib/knockout/bindings/keyboard",
                "Magento_Ui/js/lib/knockout/bindings/optgroup",
                "Magento_Ui/js/lib/knockout/bindings/after-render",
                "Magento_Ui/js/lib/knockout/bindings/autoselect",
                "Magento_Ui/js/lib/knockout/bindings/datepicker",
                "Magento_Ui/js/lib/knockout/bindings/outer_click",
                "Magento_Ui/js/lib/knockout/bindings/fadeVisible",
                "Magento_Ui/js/lib/knockout/bindings/collapsible",
                "Magento_Ui/js/lib/knockout/bindings/staticChecked",
                "Magento_Ui/js/lib/knockout/bindings/simple-checked",
                "Magento_Ui/js/lib/knockout/bindings/bind-html",
                "Magento_Ui/js/lib/knockout/bindings/tooltip",
                "Magento_Ui/js/lib/knockout/extender/observable_array",
                "Magento_Ui/js/lib/knockout/bindings/bootstrap",
                "Magento_Ui/js/lib/knockout/bootstrap",
            ],
            exclude: [
                'requirejs/require',
                'mage/collapsible',
            ]
        },
        {
            name: 'bundles/default',
            create: true,
            include: [
                'loaderAjax',
                'loader',
                'mage/cookies',
                'dropdown',
                'dropdownDialog',
                'text!Magento_Tax/template/checkout/minicart/subtotal/totals.html',
                'text!Magento_Captcha/template/checkout/captcha.html',
                'text!Magento_Checkout/template/minicart/item/price.html',
                'text!Magento_Catalog/template/product/image_with_borders.html',
                'text!Magento_Checkout/template/minicart/subtotal.html',
                'text!Magento_Msrp/template/checkout/minicart/subtotal/totals.html',
                'text!Magento_Checkout/template/minicart/item/default.html',
                'text!Magento_Ui/template/messages.html',
                'text!Magento_Customer/template/authentication-popup.html',
                'text!Magento_Checkout/template/minicart/content.html',
                'text!ui/template/collection.html',
                'text!ui/template/block-loader.html',
                'text!ui/template/modal/modal-custom.html',
                'text!ui/template/modal/modal-slide.html',
                'text!ui/template/modal/modal-popup.html',
                'text!ui/template/tooltip/tooltip.html',
                'Magento_Ui/js/core/app',
                'Magento_Customer/js/view/customer',
                'Magento_Msrp/js/view/checkout/minicart/subtotal/totals',
                'Magento_Tax/js/view/checkout/minicart/subtotal/totals',
                'Magento_Catalog/js/view/image',
                'uiComponent',
                'Magento_Checkout/js/view/minicart',
                'Magento_Ui/js/block-loader',
                'quickSearch',
                'Magento_Catalog/js/view/compare-products',
                'tabs',
                'menu',
                'Magento_Theme/js/view/messages',
                'Magento_Customer/js/view/authentication-popup',
                'Magento_Ui/js/view/messages',
                'Magento_Captcha/js/view/checkout/loginCaptcha',
                'Magento_Customer/js/section-config',
                'Magento_Customer/js/customer-data',
                'Magento_Customer/js/invalidation-processor',
                'Magento_Customer/js/invalidation-rules/website-rule',
                'pageCache',
                'validation',
                'Magento_Catalog/js/storage-manager',
                'Magento_Wishlist/js/view/wishlist',
                'Magento_Sales/js/view/last-ordered-items',
                'Magento_Ui/js/core/app',
                'Magento_Ui/js/view/messages',
                'Magento_Ui/js/form/form',
            ],
            exclude: [
                'requirejs/require',
                'mage/collapsible',
            ],
        },
        {
            name: 'bundles/cart',
            create: true,
            include: [
                'Magento_Ui/js/form/element/abstract',
                'Magento_Ui/js/form/element/select',
                'Magento_Ui/js/form/element/region',
                'Magento_Checkout/js/view/cart/totals',
                'Magento_Tax/js/view/checkout/summary/subtotal',
                'Magento_Tax/js/view/checkout/cart/totals/grand-total',
                'Magento_SalesRule/js/view/cart/totals/discount',
                'Magento_Tax/js/view/checkout/cart/totals/tax',
                'Magento_Weee/js/view/cart/totals/weee',
                'Magento_Checkout/js/proceed-to-checkout',
                'Magento_Checkout/js/shopping-cart',
                'Magento_GiftMessage/js/view/gift-message',
                'Magento_GiftMessage/js/view/gift-message',
                'discountCode',
                'sticky',
                'text!Magento_Checkout/template/cart/totals.html',
                'text!Magento_Tax/template/checkout/summary/subtotal.html',
                'text!Magento_Tax/template/checkout/cart/totals/grand-total.html',
                'text!Magento_Tax/template/checkout/cart/totals/tax.html',
                'text!Magento_GiftMessage/template/gift-message-item-level.html',
                'text!Magento_GiftMessage/template/gift-message-form.html',
                'text!Magento_GiftMessage/template/gift-message.html',
                'text!Magento_GiftMessage/template/gift-message-form.html',
                'text!Magento_Weee/template/checkout/summary/weee.html',
                'text!Magento_SalesRule/template/cart/totals/discount.html',
                'text!ui/template/form/field.html',
                'text!ui/template/form/element/select.html',
                'text!ui/template/form/element/input.html',
            ],
            exclude: [
                'bundles/default',
                'bundles/catalog',
                'requirejs/require',
                'bundles/shipping',
                'mage/bootstrap',
                'mage/collapsible',
            ],
        },
        {
            name: 'bundles/shipping',
            create: true,
            include: [
                'Magento_Checkout/js/model/shipping-rates-validator',
                'Magento_OfflineShipping/js/view/shipping-rates-validation/flatrate',
                'Magento_Shipping/js/view/checkout/shipping/shipping-policy',
                'Magento_Tax/js/view/checkout/shipping_method/price',
                'Magento_Tax/js/view/checkout/summary/shipping',
                'Magento_Checkout/js/view/shipping-information',
                'Magento_Checkout/js/view/shipping-information/list',
                'Magento_Checkout/js/view/shipping-information/address-renderer/default',
                'Magento_OfflineShipping/js/view/shipping-rates-validation/tablerate',
                'Magento_Checkout/js/view/shipping-address/address-renderer/default',
                'Magento_Dhl/js/view/shipping-rates-validation',
                'Magento_Fedex/js/view/shipping-rates-validation',
                'Magento_OfflineShipping/js/view/shipping-rates-validation/freeshipping',
                'Magento_OfflineShipping/js/view/shipping-rates-validation/flatrate',
                'Magento_OfflineShipping/js/view/shipping-rates-validation/tablerate',
                'Magento_Ups/js/view/shipping-rates-validation',
                'Magento_Usps/js/view/shipping-rates-validation',
                'Magento_Checkout/js/model/shipping-rates-validator',
                'Magento_Checkout/js/view/cart/shipping-rates',
                'Magento_Tax/js/view/checkout/shipping_method/price',
                'Magento_Checkout/js/view/cart/shipping-estimation',
                'Magento_Tax/js/view/checkout/cart/totals/shipping',
                'text!Magento_Checkout/template/shipping-information.html',
                'text!Magento_Checkout/template/shipping.html',
                'text!Magento_Checkout/template/shipping-address/list.html',
                'text!Magento_Checkout/template/shipping-address/form.html',
                'text!Magento_Shipping/template/checkout/shipping/shipping-policy.html',
                'text!Magento_Checkout/template/shipping-address/shipping-method-list.html',
                'text!Magento_Checkout/template/shipping-address/shipping-method-item.html',
                'text!Magento_Tax/template/checkout/shipping_method/price.html',
                'text!Magento_Checkout/template/shipping-address/address-renderer/default.html',
                'text!Magento_Checkout/template/shipping-information/address-renderer/default.html',
                'text!Magento_Checkout/template/shipping-information/list.html',
                'text!Magento_Tax/template/checkout/summary/shipping.html',
                'text!Magento_Checkout/template/cart/shipping-rates.html',
                'text!Magento_Checkout/template/cart/shipping-estimation.html',
                'text!Magento_Tax/template/checkout/shipping_method/price.html',
                'text!Magento_Tax/template/checkout/cart/totals/shipping.html',
            ],
            exclude: [
                'bundles/default',
                'bundles/catalog',
                'bundles/checkout',
                'bundles/cart',
                'requirejs/require',
                'mage/bootstrap',
                'mage/collapsible',
            ],
        },
        {
            name: 'bundles/checkout',
            create: true,
            include: [
                'Magento_Customer/js/section-config',
                'Magento_Customer/js/customer-data',
                'Magento_Customer/js/invalidation-rules/website-rule',
                'checkoutLoader',
                'Magento_Payment/js/view/payment/payments',
                'Magento_OfflinePayments/js/view/payment/offline-payments',
                'Magento_Paypal/js/view/payment/paypal-payments',
                'Magento_Checkout/js/view/payment/email-validator',
                'Magento_CheckoutAgreements/js/view/agreement-validation',
                'Magento_Checkout/js/view/form/element/email',
                'Magento_Checkout/js/view/payment/list',
                'Magento_CheckoutAgreements/js/view/checkout-agreements',
                'Magento_Checkout/js/view/billing-address',
                'Magento_Ui/js/form/element/select',
                'Magento_Ui/js/form/element/region',
                'Magento_Ui/js/form/element/abstract',
                'Magento_Ui/js/form/components/group',
                'Magento_Checkout/js/view/billing-address',
                'Magento_SalesRule/js/view/payment/discount',
                'Magento_SalesRule/js/view/payment/discount-messages',
                'Magento_Checkout/js/view/payment',
                'Magento_Checkout/js/view/shipping',
                'Magento_Checkout/js/view/form/element/email',
                'Magento_Checkout/js/view/shipping-address/list',
                'Magento_Checkout/js/view/authentication',
                'Magento_Checkout/js/view/authentication-messages',
                'Magento_Checkout/js/view/progress-bar',
                'Magento_Checkout/js/view/estimation',
                'Magento_Checkout/js/view/sidebar',
                'Magento_Checkout/js/view/summary',
                'Magento_Checkout/js/view/summary/totals',
                'Magento_Tax/js/view/checkout/summary/subtotal',
                'Magento_Tax/js/view/checkout/summary/grand-total',
                'Magento_Tax/js/view/checkout/summary/tax',
                'Magento_Weee/js/view/checkout/summary/weee',
                'Magento_SalesRule/js/view/summary/discount',
                'Magento_Checkout/js/view/summary/cart-items',
                'Magento_Checkout/js/view/summary/item/details',
                'Magento_Checkout/js/view/summary/item/details/thumbnail',
                'Magento_Tax/js/view/checkout/summary/item/details/subtotal',
                'Magento_Weee/js/view/checkout/summary/item/price/row_incl_tax',
                'Magento_Weee/js/view/checkout/summary/item/price/row_excl_tax',
                'Magento_Checkout/js/model/payment/method-group',
                'mage/url',
                'Magento_Checkout/js/view/payment/default',
                'Magento_Checkout/js/action/redirect-on-success',
                'Magento_Ui/js/form/element/post-code',
                'text!Magento_Checkout/template/payment/before-place-order.html',
                'text!Magento_Checkout/template/estimation.html',
                'text!Magento_Checkout/template/sidebar.html',
                'text!Magento_Checkout/template/summary.html',
                'text!Magento_Checkout/template/summary/totals.html',
                'text!Magento_Checkout/template/onepage.html',
                'text!Magento_Customer/template/authentication-popup.html',
                'text!Magento_Checkout/template/authentication.html',
                'text!Magento_Checkout/template/progress-bar.html',
                'text!Magento_Checkout/template/summary/cart-items.html',
                'text!Magento_Checkout/template/payment.html',
                'text!Magento_Checkout/template/summary/item/details.html',
                'text!Magento_Checkout/template/form/element/email.html',
                'text!Magento_Checkout/template/payment-methods/list.html',
                'text!Magento_SalesRule/template/payment/discount.html',
                'text!Magento_Checkout/template/summary/item/details/thumbnail.html',
                'text!Magento_Tax/template/checkout/summary/item/details/subtotal.html',
                'text!Magento_Weee/template/checkout/summary/item/price/row_excl_tax.html',
                'text!Magento_Checkout/template/billing-address.html',
                'text!Magento_Checkout/template/billing-address/details.html',
                'text!Magento_Checkout/template/billing-address/list.html',
                'text!Magento_Checkout/template/billing-address/form.html',
                'text!Magento_Tax/template/checkout/summary/subtotal.html',
                'text!Magento_SalesRule/template/summary/discount.html',
                'text!Magento_Weee/template/checkout/summary/weee.html',
                'text!Magento_Tax/template/checkout/summary/tax.html',
                'text!Magento_Tax/template/checkout/summary/grand-total.html',
                'text!Magento_CheckoutAgreements/template/checkout/checkout-agreements.html',
                'text!ui/template/form/element/helper/tooltip.html',
                'text!ui/template/form/element/input.html',
                'text!ui/template/form/element/select.html',
                'text!ui/template/form/field.html',
                'text!ui/template/group/group.html',
                'priceUtils'
            ],
            exclude: [
                'bundles/default',
                'requirejs/require',
                'bundles/shipping',
                'mage/bootstrap',
                'Magento_Checkout/js/action/place-order',
                'mage/collapsible',
            ],
        },
        {
            name: 'bundles/catalog',
            create: true,
            include: [
                'addToWishlist',
                'requireCookie',
                'priceBox',
                'Magento_Swatches/js/swatch-renderer',
                'Magento_Swatches/js/catalog-add-to-cart',
                'Magento_Wishlist/js/add-to-wishlist',
                'Magento_Catalog/js/catalog-add-to-cart',
                'productListToolbarForm',
                'accordion',
                'Magento_Catalog/js/validate-product',
                'Magento_ProductVideo/js/fotorama-add-video-events',
                'Magento_Review/js/error-placement',
                'Magento_Review/js/process-reviews',
                'Magento_Catalog/js/product/view/provider',
                'Magento_Catalog/js/price-box',
                'Magento_Catalog/js/validate-product',
                'Magento_Review/js/view/review',
                'Magento_Review/js/validate-review',
                'mage/gallery/gallery',
                'Magento_InstantPurchase/js/view/instant-purchase',
                'priceBundle',
                'priceUtils',
                'priceOptions',
                'sticky',
                'productSummary',
                'slide',
            ],
            exclude: [
                'requirejs/require',
                'bundles/default',
                'bundles/checkout',
                'bundles/cart',
                'bundles/shipping',
                'mage/bootstrap',
                'mage/collapsible',
            ],
        },
    ],

    onModuleBundleComplete: function (data) {
        function onBundleComplete (config, data) {
            const fileName = `${config.dir}/requirejs-config.js`;
            const bundleConfig = {};
            bundleConfig[data.name] = data.included;
            bundleConfig[data.name] = bundleConfig[data.name].map(bundle => bundle.replace(/\.js$/, ''));
            const contents = `require.config({
           bundles: ${JSON.stringify(bundleConfig)},
        });`;
            fs.appendFile(fileName, contents, function(err) {});
        }
        onBundleComplete(config, data);
    }
});
