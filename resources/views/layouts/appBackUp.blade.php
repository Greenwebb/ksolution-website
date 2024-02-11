<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', '') }}</title> --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>Home&#8211; Lending K Solutions </title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Home&raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Home&raquo; Comments Feed" href="comments/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/multibank.cmsmasters.net\/classic\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.4"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='cmsmasters-default-vars-css' href='wp-content/themes/multibank/assets/css/default-vars.min8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style5379.css?ver=6.7.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style5379.css?ver=6.7.3' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout3781.css?ver=6.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen3781.css?ver=6.2.2' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='wp-content/themes/multibank/assets/css/woocommerce.min8a54.css?ver=1.0.0' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='multibank-root-style-css' href='wp-content/themes/multibank/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mine900.css?ver=5.14.0' type='text/css' media='all' />
    <link rel='stylesheet' id='multibank-frontend-css' href='wp-content/themes/multibank/assets/css/frontend.min8449.css?ver=screen' type='text/css' media='all' />
    <link rel='stylesheet' id='multibank-gutenberg-css' href='wp-content/themes/multibank/assets/css/gutenberg-wp-frontend.min8a54.css?ver=1.0.0' type='text/css' media='all' />
    <style id='multibank-gutenberg-inline-css' type='text/css'>
        .has-cmsmasters-colors-text-color {
            color: var(--cmsmasters-colors-text) !important;
        }

        .has-cmsmasters-colors-text-background-color {
            background-color: var(--cmsmasters-colors-text) !important;
        }

        .has-cmsmasters-colors-link-color {
            color: var(--cmsmasters-colors-link) !important;
        }

        .has-cmsmasters-colors-link-background-color {
            background-color: var(--cmsmasters-colors-link) !important;
        }

        .has-cmsmasters-colors-hover-color {
            color: var(--cmsmasters-colors-hover) !important;
        }

        .has-cmsmasters-colors-hover-background-color {
            background-color: var(--cmsmasters-colors-hover) !important;
        }

        .has-cmsmasters-colors-heading-color {
            color: var(--cmsmasters-colors-heading) !important;
        }

        .has-cmsmasters-colors-heading-background-color {
            background-color: var(--cmsmasters-colors-heading) !important;
        }

        .has-cmsmasters-colors-bg-color {
            color: var(--cmsmasters-colors-bg) !important;
        }

        .has-cmsmasters-colors-bg-background-color {
            background-color: var(--cmsmasters-colors-bg) !important;
        }

        .has-cmsmasters-colors-alternate-color {
            color: var(--cmsmasters-colors-alternate) !important;
        }

        .has-cmsmasters-colors-alternate-background-color {
            background-color: var(--cmsmasters-colors-alternate) !important;
        }

        .has-cmsmasters-colors-bd-color {
            color: var(--cmsmasters-colors-bd) !important;
        }

        .has-cmsmasters-colors-bd-background-color {
            background-color: var(--cmsmasters-colors-bd) !important;
        }
    </style>
    <link href="loans/assets/css/style.css" rel="stylesheet" />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.mina25a.css?ver=3.5.5' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-22-css' href='wp-content/uploads/sites/8/elementor/css/post-220ef9.css?ver=1640877577' type='text/css' media='all' />
    <link rel='stylesheet' id='cmsmasters-icons-css' href='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/cmsicons/css/cmsmasters-icons.min8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='cmsmasters-frontend-css' href='wp-content/plugins/cmsmasters-elementor-addon/assets/css/frontend.min52d0.css?ver=1.3.7' type='text/css' media='all' />
    
    {{-- Home rels --}}
    <link rel='stylesheet' id='elementor-post-7626-css' href='wp-content/uploads/sites/8/elementor/css/post-76263ae4.css?ver=1640877917' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-163-css' href='wp-content/uploads/sites/8/elementor/css/post-163362f.css?ver=1640877578' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-136-css' href='wp-content/uploads/sites/8/elementor/css/post-136362f.css?ver=1640877578' type='text/css' media='all' />
    
    {{-- Personal Loans rels --}}
    <link rel='stylesheet' id='elementor-post-2513-css' href='wp-content/uploads/sites/8/elementor/css/post-25133218.css?ver=1640878810' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-163-css' href='wp-content/uploads/sites/8/elementor/css/post-163362f.css?ver=1640877578' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-136-css' href='wp-content/uploads/sites/8/elementor/css/post-136362f.css?ver=1640877578' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-79-css' href='wp-content/uploads/sites/8/elementor/css/post-793218.css?ver=1640878810' type='text/css' media='all' />
    
    {{-- Contact Us rels --}}
    <link rel='stylesheet' id='elementor-post-3209-css' href='wp-content/uploads/sites/8/elementor/css/post-3209514c.css?ver=1640877914' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-163-css' href='wp-content/uploads/sites/8/elementor/css/post-163362f.css?ver=1640877578' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-136-css' href='wp-content/uploads/sites/8/elementor/css/post-136362f.css?ver=1640877578' type='text/css' media='all' />
	
    {{-- Services --}}
    <link rel='stylesheet' id='elementor-post-2948-css' href='wp-content/uploads/sites/8/elementor/css/post-2948315f.css?ver=1640878241' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-163-css' href='wp-content/uploads/sites/8/elementor/css/post-163362f.css?ver=1640877578' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-136-css' href='wp-content/uploads/sites/8/elementor/css/post-136362f.css?ver=1640877578' type='text/css' media='all' />
    

    {{-- Faq --}}


    {{--  Regulatory --}}


    {{-- About Us  --}}


    <link rel='stylesheet' id='multibank-child-style-css' href='wp-content/themes/multibank-child/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-cmsmasters-demo-icons-css' href='wp-content/uploads/sites/8/elementor/cmsmasters-local-icons/cmsmasters-demo-icons/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='multibank-gutenberg-css' href='wp-content/themes/multibank/assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='loan.css' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/7626.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.4" />
    <meta name="generator" content="WooCommerce 6.2.2" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed4119.json?url=https%3A%2F%2Fmultibank.cmsmasters.net%2Fclassic%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed091b?url=https%3A%2F%2Fmultibank.cmsmasters.net%2Fclassic%2F&amp;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }

        </style>
    </noscript>
    <style>
        /* From */
        /* @media only screen and (max-width: 900px) {
            .testt {
                align-self: center;
            }
            .corn{
                width: 15pc !important;
            }
        }
        @media only screen and (min-width: 900px) {
        
            .corn{
                width: 25pc !important;
            }
        }
        .elementor-3209 .elementor-element.elementor-element-ab7d648:not(.elementor-motion-effects-element-type-background):not(.cmsmasters-bg-effect)>.elementor-widget-wrap,
            .elementor-3209 .elementor-element.elementor-element-ab7d648>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer,
            .elementor-3209 .elementor-element.elementor-element-ab7d648>.elementor-widget-wrap>.cmsmasters-bg-effects-container>.cmsmasters-bg-effects-element {
                background-image: url("wp-content/uploads/sites/8/2021/11/about.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            } */
        
        
            /* From Personal Page */
        @media (min-width: 768px) {

        .elementor-column.elementor-col-33,
        .elementor-column[data-col="33"] {
            width: 100%;
        }
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 0;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .cmsmasters-theme-button::before,
        button::before {
        background-color: transparent;
        background-image: var(--cmsmasters-button-normal-colors-bg-image);
        opacity: 1;
        }
    </style>
    <link rel="icon" href="wp-content/uploads/sites/8/2021/11/logo.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/sites/8/2021/11/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/sites/8/2021/11/logo.png" />
    <meta name="msapplication-TileImage" content="wp-content/uploads/sites/8/2021/11/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="dropzone.min.js"></script>
    <link rel="stylesheet" href="dropzone.min.css" type="text/css" />
    @livewireStyles
</head>
<body id="cmsmasters_body" class="home page-template-default page page-id-7626 wp-embed-responsive theme-K Solutions woocommerce-no-js cmsmasters-content-layout-fullwidth elementor-default elementor-kit-22 elementor-page elementor-page-7626">
    <div data-elementor-type="cmsmasters_header" data-elementor-id="163" class="elementor elementor-163 cmsmasters-location-cmsmasters_header" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-b219929 elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="b219929" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-93714dc" data-id="93714dc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-f6106d3 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default cmsmasters-block-default" data-id="f6106d3" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ad607a2" data-id="ad607a2" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-75424be8 elementor-widget__width-initial cmsmasters-color-variation-default cmsmasters-pointer-none cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-title cmsmasters-widget-title" data-id="75424be8" data-element_type="widget" data-widget_type="cmsmasters-title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="cmsmasters-widget-title__heading"><a href="index.php" class="">Coperate Social Responsibilty CSR</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f4aab35" data-id="f4aab35" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-56dc8d8 cmsmasters-button-align-right cmsmasters-icon-arrangement-together cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="56dc8d8" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner">
                                                                <a href="contact.php" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view-default cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-left"><span class="elementor-widget-cmsmasters-button__icon"><i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-card"></i></span>
                                                                        <span class="elementor-widget-cmsmasters-button__text">Covid 19 statement</span>
                                                                    </span>
                                                                </a>
                                                                
    
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-7590763e elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle cmsmasters-block-default" data-id="7590763e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1939c356" data-id="1939c356" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-50a7d591 cmsmasters-logo-mobile-alignment-left elementor-widget__width-initial cmsmasters-logo-type-image cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-site-logo" data-id="50a7d591" data-element_type="widget" data-widget_type="cmsmasters-site-logo.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-site-logo__container">
                                            <div class="elementor-widget-cmsmasters-site-logo__image-container">
                                                <a href="index.php" class="elementor-widget-cmsmasters-site-logo__link" rel="nofollow"><img style="width: 90px;" src="wp-content/uploads/sites/8/2021/11/logo.png" alt="Classic" title="Classic" class="cmsmasters-lazyload-disabled elementor-widget-cmsmasters-site-logo__img" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="left:35%" class="elementor-element elementor-element-632bf7d7 elementor-widget__width-initial elementor-hidden-tablet elementor-hidden-mobile cmsmasters-icon-position-right cmsmasters-dropdown-breakpoints-tablet cmsmasters-toggle-view-stacked cmsmasters-toggle-shape-square cmsmasters-dropdown-icon-right cmsmasters-pointer-none cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-nav-menu" data-id="632bf7d7" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;dropdown_breakpoints&quot;:&quot;tablet&quot;,&quot;dropdown_horizontal_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="cmsmasters-nav-menu.default">
                                    <div class="elementor-widget-container">
                                        <nav class="elementor-widget-cmsmasters-nav-menu__main elementor-widget-cmsmasters-nav-menu__container cmsmasters-layout-horizontal">
                                            <ul id="menu-1-632bf7d7" class="elementor-widget-cmsmasters-nav-menu__container-inner">
                                                <li id="menu-item-9259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7626 current_page_item menu-item-9259">
                                                    <a href="/" aria-current="page" class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-active elementor-widget-cmsmasters-nav-menu__item-link-top"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Home</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="fas fa-angle-down"></i></span></span>
                                                        </span><span class="cmsmasters-animation"></span></a>
                                                </li>
                                                <li id="menu-item-7533" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7533"><a href="{{ route('about') }}" class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">About Us</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="fas fa-angle-down"></i></span></span></span><span class="cmsmasters-animation"></span></a></li>
                                                <li id="menu-item-7546" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7546"><a class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top" href="/services"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Services</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="fas fa-angle-down"></i></span></span></span><span class="cmsmasters-animation"></span></a>
                                                    <ul class="sub-menu elementor-widget-cmsmasters-nav-menu__dropdown-submenu">
    
                                                        <li id="menu-item-7536" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7536"><a href="/invoice-discounting" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Invoice Discounting</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-7544" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7544"><a href="/order-financing" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Order Financing</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-7537" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7537"><a href="/personal" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Personal Loans</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-9471" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-9471"><a href="/financial-literacy" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Financial Literacy</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-9471" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-9471"><a href="/regulatory-services" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Regulatory services</span><span class="cmsmasters-animation"></span></a></li>
                                                    </ul>
                                                </li>
                                               
                                                <li id="menu-item-7534" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7534"><a href="/faq" class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">FAQ</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="fas fa-angle-down"></i></span></span></span><span class="cmsmasters-animation"></span></a></li>
                                                <li id="menu-item-7534" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7534"><a href="/contact-us" class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Contact Us</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="fas fa-angle-down"></i></span></span></span><span class="cmsmasters-animation"></span></a></li>
                                            </ul>
                                        </nav>
                                        <div class="elementor-widget-cmsmasters-nav-menu__toggle-container cmsmasters-layout-horizontal cmsmasters-menu-dropdown-type-">
                                            <div class="elementor-widget-cmsmasters-nav-menu__toggle cmsmasters-icon-align-"><span class="cmsmasters-toggle-icon"><i class="eicon-menu-bar"></i></span><span class="cmsmasters-toggle-icon-active"><i class="eicon-close"></i></span></div>
                                        </div>
                                        <nav class="elementor-widget-cmsmasters-nav-menu__dropdown elementor-widget-cmsmasters-nav-menu__container cmsmasters-layout-horizontal cmsmasters-menu-dropdown-type-">
                                            <ul id="cmsmasters_menu-4-632bf7d7" class="elementor-widget-cmsmasters-nav-menu__container-inner cmsmasters-nav-menu-dropdown">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7626 current_page_item menu-item-9259"><a href="index.php" aria-current="page" class="elementor-widget-cmsmasters-nav-menu__dropdown-item"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Home</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-chevron-down"></i></span></span></span></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7533"><a href="/about-us" class="elementor-widget-cmsmasters-nav-menu__dropdown-item"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">About</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-chevron-down"></i></span></span></span></a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7546"><a href="/services" class="elementor-widget-cmsmasters-nav-menu__dropdown-item"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Services</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-chevron-down"></i></span></span></span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-7536" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7536"><a href="/invoice-discounting" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Invoice Discounting</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-7544" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7544"><a href="/order-financing" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Order Financing</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-7537" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7537"><a href="/personal" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Personal Loans</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-9471" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-9471"><a href="/financial-literacy" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Financial Literacy</span><span class="cmsmasters-animation"></span></a></li>
                                                        <li id="menu-item-9471" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-9471"><a href="/regulatory-services" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Regulatory services</span><span class="cmsmasters-animation"></span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7534"><a href="contact.php" class="elementor-widget-cmsmasters-nav-menu__dropdown-item"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Contacts Us</span></a></li>
    
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-31f891aa" data-id="31f891aa" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7c561dc1 cmsmasters-search-type-search-popup cmsmasters-popup-trigger-type-link elementor-widget__width-initial cmsmasters-popup-trigger-content-icon cmsmasters-popup-close-view-default cmsmasters-popup-close-icon-position-right cmsmasters-submit-button-view-button cmsmasters-form-input-icon-no cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-search" data-id="7c561dc1" data-element_type="widget" data-settings="{&quot;type_of_search&quot;:&quot;search-popup&quot;,&quot;esc_close&quot;:&quot;yes&quot;}" data-widget_type="cmsmasters-search.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-search__container">
                                            <div class="elementor-widget-cmsmasters-search__popup-container cmsmasters-search-popup-move-up-effect cmsmasters-overlay-close cmsmasters-disabled-scroll">
                                                <div class="elementor-widget-cmsmasters-search__popup-content">
                                                    <form role="search" method="get" class="elementor-widget-cmsmasters-search__form" action="index.php">
                                                        <div class="elementor-widget-cmsmasters-search__form-container cmsmasters-submit-button-view-button cmsmasters-buttons-type-icon"><input type="search" class="elementor-widget-cmsmasters-search__field" value="" name="s" placeholder="Search..." /><button type="submit" class="elementor-widget-cmsmasters-search__submit"><span class="elementor-widget-cmsmasters-search__submit-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-search1"></i></span></button></div>
                                                    </form>
                                                </div><span class="elementor-widget-cmsmasters-search__popup-close"><span class="elementor-widget-cmsmasters-search__popup-close-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-close"></i></span></span>
                                            </div>
                                            <div class="elementor-widget-cmsmasters-search__popup-trigger-container">
                                                <div class="elementor-widget-cmsmasters-search__popup-trigger-inner"><span class="elementor-widget-cmsmasters-search__popup-trigger-inner-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-search1"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-455244cf elementor-widget__width-initial cmsmasters-button-mobile-align-justify elementor-widget-tablet__width-initial elementor-hidden-mobile cmsmasters-icon-arrangement-together cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="455244cf" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="contact.php" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view-default cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-left"><span class="elementor-widget-cmsmasters-button__icon"><i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-log-in"></i></span><span class="elementor-widget-cmsmasters-button__text">Login</span></span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8408496 elementor-widget__width-initial cmsmasters-trigger-view-framed elementor-hidden-desktop elementor-widget-tablet__width-initial cmsmasters-trigger-shape-square cmsmasters-trigger-border-type-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-offcanvas" data-id="8408496" data-element_type="widget" data-settings="{&quot;content_block&quot;:[{&quot;_id&quot;:&quot;61e5ee6&quot;,&quot;nav_menu&quot;:null,&quot;offcanvas_item_style&quot;:&quot;yes&quot;,&quot;offcanvas_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;20&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;20&quot;,&quot;isLinked&quot;:false},&quot;offcanvas_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;15&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;15&quot;,&quot;isLinked&quot;:false},&quot;logo_image_source&quot;:&quot;custom&quot;,&quot;logo_image&quot;:{&quot;url&quot;:&quot;https:\/\/multibank.cmsmasters.net\/\/wp-content\/uploads\/sites\/8\/2021\/11\/logo-offcanvas-1.png&quot;,&quot;id&quot;:162},&quot;title&quot;:&quot;&quot;,&quot;content_type&quot;:&quot;logo&quot;,&quot;logo_type&quot;:&quot;image&quot;,&quot;logo_image_retina&quot;:&quot;&quot;,&quot;logo_image_2x&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:&quot;home&quot;,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;saved_section&quot;:null,&quot;template_id&quot;:null,&quot;offcanvas_alignment&quot;:&quot;&quot;,&quot;content_margin_bottom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:&quot;&quot;,&quot;content_custom_bg&quot;:&quot;&quot;,&quot;box_to_down&quot;:&quot;false&quot;},{&quot;_id&quot;:&quot;aa42cf9&quot;,&quot;content_type&quot;:&quot;navigation&quot;,&quot;nav_menu&quot;:&quot;75&quot;,&quot;offcanvas_item_style&quot;:&quot;yes&quot;,&quot;offcanvas_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;20&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;20&quot;,&quot;isLinked&quot;:false},&quot;offcanvas_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;15&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;15&quot;,&quot;isLinked&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;logo_image_source&quot;:null,&quot;logo_type&quot;:null,&quot;logo_image&quot;:null,&quot;logo_image_retina&quot;:null,&quot;logo_image_2x&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:null,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;saved_section&quot;:null,&quot;template_id&quot;:null,&quot;offcanvas_alignment&quot;:&quot;&quot;,&quot;content_margin_bottom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:&quot;&quot;,&quot;content_custom_bg&quot;:&quot;&quot;,&quot;box_to_down&quot;:&quot;false&quot;},{&quot;content_type&quot;:&quot;section&quot;,&quot;nav_menu&quot;:null,&quot;offcanvas_item_style&quot;:&quot;yes&quot;,&quot;offcanvas_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;20&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;20&quot;,&quot;isLinked&quot;:false},&quot;offcanvas_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;15&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;15&quot;,&quot;isLinked&quot;:false},&quot;_id&quot;:&quot;7e275af&quot;,&quot;saved_section&quot;:&quot;9595&quot;,&quot;content_margin_bottom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;title&quot;:&quot;&quot;,&quot;logo_image_source&quot;:null,&quot;logo_type&quot;:null,&quot;logo_image&quot;:null,&quot;logo_image_retina&quot;:null,&quot;logo_image_2x&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:null,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;template_id&quot;:null,&quot;offcanvas_alignment&quot;:&quot;&quot;,&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:&quot;&quot;,&quot;content_custom_bg&quot;:&quot;&quot;,&quot;box_to_down&quot;:&quot;false&quot;},{&quot;_id&quot;:&quot;a061751&quot;,&quot;content_type&quot;:&quot;section&quot;,&quot;nav_menu&quot;:null,&quot;saved_section&quot;:&quot;9598&quot;,&quot;box_to_down&quot;:&quot;true&quot;,&quot;title&quot;:&quot;&quot;,&quot;logo_image_source&quot;:null,&quot;logo_type&quot;:null,&quot;logo_image&quot;:null,&quot;logo_image_retina&quot;:null,&quot;logo_image_2x&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:null,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;template_id&quot;:null,&quot;offcanvas_item_style&quot;:&quot;&quot;,&quot;offcanvas_alignment&quot;:null,&quot;offcanvas_padding&quot;:null,&quot;content_margin_bottom&quot;:null,&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:null,&quot;content_custom_bg&quot;:null}],&quot;canvas_position&quot;:&quot;left&quot;,&quot;animation_type&quot;:&quot;slide&quot;,&quot;overlay_close&quot;:&quot;yes&quot;,&quot;esc_close&quot;:&quot;yes&quot;}" data-widget_type="cmsmasters-offcanvas.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-offcanvas__wrapper">
                                            <div class="elementor-widget-cmsmasters-offcanvas__trigger-container">
                                                <div class="elementor-widget-cmsmasters-offcanvas__trigger"><span class="elementor-widget-cmsmasters-offcanvas__trigger-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-menu"></i></span><span class="elementor-widget-cmsmasters-offcanvas__trigger-icon-active"><i class="eicon-close"></i></span></div>
                                            </div>
                                            <div class="elementor-widget-cmsmasters-offcanvas__content cmsmasters-offcanvas-content-8408496 cmsmasters-canvas-animation-type-slide cmsmasters-canvas-position-left cmsmasters-offcanvas-alignment-center">
                                                <div class="elementor-widget-cmsmasters-offcanvas__close-container cmsmasters-close-hor-align- cmsmasters-close-ver-align- cmsmasters-position-inside cmsmasters-close-view-default">
                                                    <div class="elementor-widget-cmsmasters-offcanvas__close"><span class="elementor-widget-cmsmasters-offcanvas__close-icon"><i class="cmsmsdemo-icon- cmsms-demo-icon-close"></i></span></div>
                                                </div>
                                                <div class="elementor-widget-cmsmasters-offcanvas__body">
                                                    <div class="elementor-widget-cmsmasters-offcanvas__body-container cmsmasters-block-all-down">
                                                        <div class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-61e5ee6 cmsmasters-box-down-false">
                                                            <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <div class="elementor-widget-cmsmasters-offcanvas__site-logo">
                                                                        <a href="index.php" class="elementor-widget-cmsmasters-offcanvas__site-logo-link"><img style="width: 31%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAP+KeNJXAAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="Classic" title="Classic" class="elementor-widget-cmsmasters-offcanvas__site-logo-img cmsmasters_img cmsmasters-lazyload lazyload" data-sizes="auto" data-src="wp-content/uploads/sites/8/2021/11/logo-offcanvas-1.png"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-aa42cf9 cmsmasters-box-down-false">
                                                            <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <nav class="elementor-widget-cmsmasters-offcanvas__menu-container">
                                                                        <ul id="menu-1-8408496" class="elementor-widget-cmsmasters-offcanvas__menu-inner">
                                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7626 current_page_item menu-item-9259">
                                                                                <a href="index.php" aria-current="page" class=" elementor-widget-cmsmasters-offcanvas__item-active elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"><span class="elementor-widget-cmsmasters-offcanvas__item-text">Home</span></a>
                                                                            </li>
                                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7533"><a href="about.php" class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"><span class="elementor-widget-cmsmasters-offcanvas__item-text">About</span></a></li>
                                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7546"><a class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"><span class="elementor-widget-cmsmasters-offcanvas__item-text">Services</span><span class="elementor-widget-cmsmasters-nav-menu__arrow"><span class="cmsmasters-wrap-icon"><i class="fas fa-angle-down"></i></span></span></span><span class="cmsmasters-animation"></span></a>
                                                                                <ul class="sub-menu">
                                                                                    <li id="menu-item-7536" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7536"><a href="invoice_discounting.php" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Invoice Discounting</span><span class="cmsmasters-animation"></span></a></li>
                                                                                    <li id="menu-item-7544" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7544"><a href="order_financing.php" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Order Financing</span><span class="cmsmasters-animation"></span></a></li>
                                                                                    <li id="menu-item-7537" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-7537"><a href="personal.php" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Personal Loans</span><span class="cmsmasters-animation"></span></a></li>
                                                                                    <li id="menu-item-9471" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-9471"><a href="financial_literacy.php" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Financial Literacy</span><span class="cmsmasters-animation"></span></a></li>
                                                                                    <li id="menu-item-9471" class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-9471"><a href="regulatory_services.php" class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"><span class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span class="elementor-widget-cmsmasters-nav-menu__item-text">Regulatory services </span><span class="cmsmasters-animation"></span></a></li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7534"><a href="faq.php" class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"><span class="elementor-widget-cmsmasters-offcanvas__item-text">FAQ</span></a></li>
                                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7534"><a href="contact.php" class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"><span class="elementor-widget-cmsmasters-offcanvas__item-text">Contact Us</span></a></li>
    
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-7e275af cmsmasters-box-down-false">
                                                            <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <div data-elementor-type="section" data-elementor-id="9595" class="elementor elementor-9595 cmsmasters-location-cmsmasters_header" data-elementor-settings="[]">
                                                                        <div class="elementor-inner">
                                                                            <div class="elementor-section-wrap">
                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-047345a elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="047345a" data-element_type="section">
                                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c2103d3" data-id="c2103d3" data-element_type="column">
                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-6c2f955 cmsmasters-widget-align-center cmsmasters-widget-layout-row cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list" data-id="6c2f955" data-element_type="widget" data-widget_type="cmsmasters-icon-list.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <ul class="cmsmasters-widget-icon-list-items">
                                                                                                            <li class="cmsmasters-widget-icon-list-item">
                                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                                                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                                                                                            <a href="#">Co-operate Social Responsibilty CSR</a> </span>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </li>
                                                                                                            
    
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-a061751 cmsmasters-box-down-true">
                                                            <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <div data-elementor-type="section" data-elementor-id="9598" class="elementor elementor-9598 cmsmasters-location-cmsmasters_header" data-elementor-settings="[]">
                                                                        <div class="elementor-inner">
                                                                            <div class="elementor-section-wrap">
                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-ac385a6 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="ac385a6" data-element_type="section">
                                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4269a0d" data-id="4269a0d" data-element_type="column">
                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="elementor-element elementor-element-f2171df cmsmasters-button-align-center cmsmasters-icon-arrangement-together cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="f2171df" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="contact.php" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view-default cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-left"><span class="elementor-widget-cmsmasters-button__icon"><i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-card"></i></span><span class="elementor-widget-cmsmasters-button__text">Transfers and payments</span></span></a></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="contact.php" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view-default cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-left"><span class="elementor-widget-cmsmasters-button__icon"><i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-card"></i></span><span class="elementor-widget-cmsmasters-button__text">Transfers and payments</span></span></a></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <section class="elementor-section elementor-top-section elementor-element elementor-element-62edf0d6 elementor-section-content-middle elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="62edf0d6" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-248b2451" data-id="248b2451" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22b283e9 cmsmasters-button-tablet-align-justify cmsmasters-button-mobile-align-justify cmsmasters-button-align-justify cmsmasters-icon-arrangement-together cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="22b283e9" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                            <div class="elementor-widget-cmsmasters-button__button-container-inner cmsmasters-with-percentage"><a href="contact.php" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view-default cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-left"><span class="elementor-widget-cmsmasters-button__icon"><i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-log-in"></i></span><span class="elementor-widget-cmsmasters-button__text">Online finance</span></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </div>


{{ $slot }}


<?php include 'components/footer.php' ?><span class="cmsmasters-responsive-width"></span>
@livewireScripts
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();

</script>
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-9595-css' href='wp-content/uploads/sites/8/elementor/css/post-9595ad3e.css?ver=1640877579' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-9598-css' href='wp-content/uploads/sites/8/elementor/css/post-9598ad3e.css?ver=1640877579' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-52-css' href='wp-content/uploads/sites/8/elementor/css/post-52a88e.css?ver=1640877918' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-71-css' href='wp-content/uploads/sites/8/elementor/css/post-71c9b8.css?ver=1640877919' type='text/css' media='all' />
<link rel='stylesheet' id='forminator-module-css-20-css' href='wp-content/uploads/sites/8/forminator/css/style-2089d0.css?ver=1638264673' type='text/css' media='all' />
<link rel='stylesheet' id='forminator-icons-css' href='wp-content/plugins/forminator/assets/forminator-ui/css/forminator-icons.minb2f7.css?ver=1.15.11' type='text/css' media='all' />
<link rel='stylesheet' id='forminator-utilities-css' href='wp-content/plugins/forminator/assets/forminator-ui/css/src/forminator-utilities.minb2f7.css?ver=1.15.11' type='text/css' media='all' />
<link rel='stylesheet' id='forminator-forms-default-base-css' href='wp-content/plugins/forminator/assets/forminator-ui/css/src/form/forminator-form-default.base.minb2f7.css?ver=1.15.11' type='text/css' media='all' />
<link rel='stylesheet' id='forminator-forms-default-full-css' href='wp-content/plugins/forminator/assets/forminator-ui/css/src/form/forminator-form-default.full.minb2f7.css?ver=1.15.11' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css' href='wp-includes/css/buttons.min69c8.css?ver=5.8.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-46-css' href='wp-content/uploads/sites/8/elementor/css/post-46336d.css?ver=1640877580' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.mina25a.css?ver=3.5.5' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min6459.js?ver=2.7.0-wc.6.2.2' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/classic\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/classic\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/multibank.cmsmasters.net\/classic\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min3781.js?ver=6.2.2' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.minc6bb.js?ver=2.1.4-wc.6.2.2' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/classic\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/classic\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min3781.js?ver=6.2.2' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/classic\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/classic\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_d450c22cb3e06e933a9335337781e5d7",
        "fragment_name": "wc_fragments_d450c22cb3e06e933a9335337781e5d7",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min3781.js?ver=6.2.2' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/lazysizes/lazysizes.min9a8d.js?ver=5.3.0' id='lazysizes-js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' id='multibank-frontend-js-extra'>
    /* <![CDATA[ */
    var cmsmasters_localize_vars = {
        "tablet_breakpoint": "1025",
        "tablet_max_breakpoint": "1024",
        "mobile_breakpoint": "768",
        "mobile_max_breakpoint": "767",
        "assets_data": {
            "script": {
                "swiper": {
                    "src": "https:\/\/multibank.cmsmasters.net\/classic\/wp-content\/themes\/multibank\/assets\/lib\/swiper\/js\/swiper.min.js"
                }
            }
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/multibank/assets/js/frontend.min8a54.js?ver=1.0.0' id='multibank-frontend-js'></script>
<script type='text/javascript' src='wp-content/themes/multibank-child/assets/js/script8a54.js?ver=1.0.0' id='multibank-child-script-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min69c8.js?ver=5.8.4' id='wp-embed-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/perfect-scrollbar/perfect-scrollbar.min2fca.js?ver=1.4.0' id='perfect-scrollbar-js'></script>
<script type='text/javascript' src='wp-content/plugins/forminator/assets/js/library/jquery.validate.minb2f7.js?ver=1.15.11' id='forminator-jquery-validate-js'></script>
<script type='text/javascript' src='wp-content/plugins/forminator/assets/forminator-ui/js/forminator-form.minb2f7.js?ver=1.15.11' id='forminator-form-js'></script>
<script type='text/javascript' id='forminator-front-scripts-js-extra'>
    /* <![CDATA[ */
    var ForminatorFront = {
        "ajaxUrl": "https:\/\/multibank.cmsmasters.net\/classic\/wp-admin\/admin-ajax.php",
        "cform": {
            "processing": "Submitting form, please wait",
            "error": "An error occurred while processing the form. Please try again",
            "upload_error": "An upload error occurred while processing the form. Please try again",
            "pagination_prev": "Previous",
            "pagination_next": "Next",
            "pagination_go": "Submit",
            "gateway": {
                "processing": "Processing payment, please wait",
                "paid": "Success! Payment confirmed. Submitting form, please wait",
                "error": "Error! Something went wrong when verifying the payment"
            },
            "captcha_error": "Invalid CAPTCHA",
            "no_file_chosen": "No file chosen",
            "intlTelInput_utils_script": "https:\/\/multibank.cmsmasters.net\/classic\/wp-content\/plugins\/forminator\/assets\/js\/library\/intlTelInputUtils.js",
            "process_error": "Please try again"
        },
        "poll": {
            "processing": "Submitting vote, please wait",
            "error": "An error occurred saving the vote. Please try again"
        },
        "quiz": {
            "view_results": "View Results"
        },
        "select2": {
            "load_more": "Loading more results\u2026",
            "no_result_found": "No results found",
            "searching": "Searching\u2026",
            "loaded_error": "The results could not be loaded."
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/forminator/build/front/front.multi.minb2f7.js?ver=1.15.11' id='forminator-front-scripts-js'></script>
<script type='text/javascript' id='forminator-front-scripts-js-after'>
    (function($, document, window) {
        "use strict";
        (function() {
            $(document).ready(function() {
                if (window.elementorFrontend) {
                    if (typeof elementorFrontend.hooks !== "undefined") {
                        elementorFrontend.hooks.addAction("frontend/element_ready/global", function($scope) {
                            if ($scope.find("#forminator-module-20").length > 0) {
                                if (typeof($.fn.forminatorLoader) !== 'undefined') {
                                    var front_loader_config = {
                                        "action": "forminator_load_form",
                                        "type": "forminator_forms",
                                        "id": 20,
                                        "render_id": 0,
                                        "is_preview": false,
                                        "preview_data": [],
                                        "last_submit_data": [],
                                        "nonce": "402cd45552",
                                        "extra": {
                                            "_wp_http_referer": "\/classic\/",
                                            "page_id": 7626,
                                            "referer_url": ""
                                        }
                                    };
                                    front_loader_config.extra.referer_url = document.referrer;
                                    $('#forminator-module-20[data-forminator-render="0"]')
                                        .forminatorLoader(front_loader_config);
                                }
                            }
                        });
                    }
                }

                if (typeof($.fn.forminatorLoader) === 'undefined') {
                    console.log('forminator scripts not loaded');
                } else {
                    var front_loader_config = {
                        "action": "forminator_load_form",
                        "type": "forminator_forms",
                        "id": 20,
                        "render_id": 0,
                        "is_preview": false,
                        "preview_data": [],
                        "last_submit_data": [],
                        "nonce": "402cd45552",
                        "extra": {
                            "_wp_http_referer": "\/classic\/",
                            "page_id": 7626,
                            "referer_url": ""
                        }
                    };
                    front_loader_config.extra.referer_url = document.referrer;
                    $('#forminator-module-20[data-forminator-render="0"]')
                        .forminatorLoader(front_loader_config);
                }
            });
        })();
    }(jQuery, document, window));
</script>
<script type='text/javascript' src='wp-content/plugins/forminator/assets/js/library/inputmask.minb2f7.js?ver=1.15.11' id='forminator-inputmask-js'></script>
<script type='text/javascript' src='wp-content/plugins/forminator/assets/js/library/jquery.inputmask.minb2f7.js?ver=1.15.11' id='forminator-jquery-inputmask-js'></script>
<script type='text/javascript' src='wp-content/plugins/forminator/assets/js/library/inputmask.bindingb2f7.js?ver=1.15.11' id='forminator-inputmask-binding-js'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCT5Q1hsplgvq5OnniO2YwxvRUyJ7KWW24&amp;ver=1.0.0' id='google-maps-api-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.mina25a.js?ver=3.5.5' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.mina25a.js?ver=3.5.5' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/basicScroll/basicScroll.min19ce.js?ver=3.0.3' id='basicScroll-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/vanilla-tilt/vanilla-tilt.min7d4c.js?ver=1.7.0' id='vanilla-tilt-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/anime/anime.mindeae.js?ver=3.2.1' id='anime-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/hc-sticky/hc-sticky.mindbc2.js?ver=2.2.6' id='hc-sticky-js'></script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/lib/headroom/headroom.mindab2.js?ver=0.12.0' id='headroom-js'></script>
<script type='text/javascript' id='cmsmasters-frontend-js-before'>
    var elementorCmsmastersFrontendConfig = {
        "woocommerce": {
            "default_orderby": "menu_order"
        },
        "instagram_access_token": "",
        "instagram_user_id": "",
        "instagram_account_type": "personal",
        "i18n": {
            "instagram": {
                "img_alt_text": "Instagram Post"
            },
            "meta_data": {
                "metadata_unlike": "Unlike",
                "metadata_like": "Like"
            },
            "edit_element": "Edit %s",
            "saved_section": "Section Template",
            "saved_page": "Page Template",
            "blog_template_id": "Template",
            "post_featured_template_id": "Featured Template",
            "post_regular_template_id": "Regular Template",
            "template_id": "Template"
        },
        "nonces": {
            "social_counter": "0e6bc76908",
            "meta_data": "97e60fdcfc",
            "ajax_widget": "972c7c04aa"
        },
        "version": "1.3.7",
        "ajaxurl": "https:\/\/multibank.cmsmasters.net\/classic\/wp-admin\/admin-ajax.php",
        "urls": {
            "assets": "https:\/\/multibank.cmsmasters.net\/classic\/wp-content\/plugins\/cmsmasters-elementor-addon\/assets\/",
            "modules": "https:\/\/multibank.cmsmasters.net\/classic\/wp-content\/plugins\/cmsmasters-elementor-addon\/modules\/",
            "cmsmasters_assets": "https:\/\/multibank.cmsmasters.net\/classic\/wp-content\/plugins\/cmsmasters-elementor-addon\/assets\/"
        },
        "cmsmasters_version": "1.3.7",
        "facebook_sdk": {
            "lang": "en_US",
            "app_id": ""
        }
    };
</script>
<script type='text/javascript' src='wp-content/plugins/cmsmasters-elementor-addon/assets/js/frontend.min52d0.js?ver=1.3.7' id='cmsmasters-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.mina25a.js?ver=3.5.5' id='share-link-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.5.5",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/multibank.cmsmasters.net\/classic\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 7626,
            "title": "Classic%20%E2%80%93%20Just%20another%20Multibank%20Sites%20site",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.mina25a.js?ver=3.5.5' id='elementor-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-modules.mina25a.js?ver=3.5.5' id='preloaded-modules-js'></script>
{{-- From personal loans --}}
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.mina25a.js?ver=3.5.5' id='elementor-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-modules.mina25a.js?ver=3.5.5' id='preloaded-modules-js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="loans/assets/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="loans/assets/js/jquery.ui.widget.js"></script>
<script src="loans/assets/js/jquery.iframe-transport.js"></script>
<script src="loans/assets/js/jquery.fileupload.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- Our main JS file -->
<script src="loan.js"></script>
<script src="custom.js"></script>

<script src="loans/js/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script>
<script>
    var one = $('#newB');
    var two = $('#exitB');
    one.on('click', function() {
        two.removeClass('active');
        $(this).addClass('active');

    });
    two.on('click', function() {
        one.removeClass('active');
        $(this).addClass('active');
    });
       $('#fileUploader').MultiFile({
		onFileChange: function(){
			console.log(this, arguments);
		}
	});
         $('#drop button').click(function() {
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('#fileUploader').click();
    });
     $('form').valid();

     $("#upload").submit(function(e) {
   // e.preventDefault();    
   $("#exampleModalToggle").modal('hide');
   $('#preloader').show();
});
    </script>
</body>

<!--  K-Solutionsclassic/ by Greenwebb technologies limited, Wed, 22 Jun 2022 07:52:51 GMT -->

</html>

