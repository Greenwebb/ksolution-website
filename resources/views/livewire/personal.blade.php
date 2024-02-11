@section('pageTitle', 'Personal Loan')
<div>
<div data-elementor-type="cmsmasters_singular" data-elementor-id="79" class="elementor elementor-79 cmsmasters-location-cmsmasters_singular post-2513 cmsms_service type-cmsms_service status-publish has-post-thumbnail hentry" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-dd5847e elementor-section-full_width elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="dd5847e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11ebb65c" data-id="11ebb65c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-57223135 elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="57223135" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-wide">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d3b673e" data-id="3d3b673e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1b6b4b94 cmsmasters-separator-type-icon cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-breadcrumbs cmsmasters-widget-breadcrumbs" data-id="1b6b4b94" data-element_type="widget" data-widget_type="cmsmasters-breadcrumbs.default">
                                                <div class="elementor-widget-container">
                                                    <div class="cmsmasters-widget-breadcrumbs__container">
                                                        <div class="cmsmasters-widget-breadcrumbs__content"><a href="{{ route('home') }}" class="cmsmasters-home">Home</a><span class="cmsmasters-widget-breadcrumbs__sep"><i class="cmsmsdemo-icon- cmsms-demo-icon-chevron-right"></i></span><span>Personal Loans</span></div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4a460e8f elementor-section-full_width elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="4a460e8f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-437d757b" data-id="437d757b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-24d472e0 elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="24d472e0" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-wide">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-31606ab8" data-id="31606ab8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-68733a97 cmsmasters-line-clamp-no cmsmasters-color-variation-default cmsmasters-pointer-none cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-post-title cmsmasters-widget-title" data-id="68733a97" data-element_type="widget" data-widget_type="cmsmasters-post-title.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="entry-title cmsmasters-widget-title__heading ">Personal Loans</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6e0abb96 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="6e0abb96" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-heading-title elementor-size-default">Make your plans a reality with a personal loan</div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4a6b1db2 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-text-editor" data-id="4a6b1db2" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                We offer easy access, speedy approval and quick payouts on personal loans tailored exclusively for permanently-employed civil servants. In addition, you get the full amount that you were approved for – Zingena Zonse with K Solutions Loans. </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3bef50e cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="3bef50e" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-widget-cmsmasters-button__button-container">
                                                        <div class="elementor-widget-cmsmasters-button__button-container-inner"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button" href="#" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span class="elementor-widget-cmsmasters-button__text">Apply Now</span></span></a></div>
                                                    </div>

                                                    {{-- Start Modal --}}

                                                    @include('__partials\loan-application-wizard')

                                                    {{-- Modal --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3a9f7d51" data-id="3a9f7d51" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3da44cb2 cmsmasters-object-fit cmsmasters-object-fit-cover cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-post-featured-image cmsmasters-widget-image" data-id="3da44cb2" data-element_type="widget" data-widget_type="cmsmasters-post-featured-image.default">
                                <div class="elementor-widget-container">
                                    <div class="cmsmasters-widget-image__wrap">
                                        <a href="" data-elementor-open-lightbox=""><img width="1024" height="677" src="https://madamenoire.com/wp-content/uploads/sites/9/2019/04/1554843736215.jpg?strip=all&quality=80" class="attachment-large size-large cmsmasters_img cmsmasters-lazyload lazyload" alt="" loading="lazy" data-sizes="auto" data-ls-sizes="(max-width: 1024px) 100vw, 1024px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-7a3d0962 elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="7a3d0962" data-element_type="section">
                <div class="elementor-container elementor-column-gap-wide">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a4228b7" data-id="3a4228b7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-12b155b0 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-post-content cmsmasters-widget-content elementor-widget-theme-post-content" data-id="12b155b0" data-element_type="widget" data-widget_type="cmsmasters-post-content.default">
                                <div class="elementor-widget-container">
                                    <div class="entry-content">
                                        <div data-elementor-type="wp-post" data-elementor-id="2513" class="elementor elementor-2513" data-elementor-settings="[]">
                                            <div class="elementor-section-wrap">
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-6f6562a elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="6f6562a" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f98253a" data-id="f98253a" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-44c66cb cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="44c66cb" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Loan packages & description</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-fc3e703 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="fc3e703" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Personal Loans</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-92a42b2 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-text-editor" data-id="92a42b2" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>Your mortgage should be as unique as the home you buy</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-da9abe8 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="da9abe8" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                    <div class="elementor-container elementor-column-gap-wide">
                                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7c291f8" data-id="7c291f8" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-64766d3 elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="64766d3" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26ee19e" data-id="26ee19e" data-element_type="column">
                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-5cd1506 cmsmasters-featured-box__graphic-align-left cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-featured-box" data-id="5cd1506" data-element_type="widget" data-widget_type="cmsmasters-featured-box.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-featured-box__wrapper">
                                                                                            <div class="elementor-widget-cmsmasters-featured-box__content">
                                                                                                <div class="elementor-widget-cmsmasters-featured-box__content-vertical-inner">
                                                                                                    <div class="elementor-widget-cmsmasters-featured-box__type-wrap elementor-widget-cmsmasters-featured-box__content-item">
                                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Salaried Backed Loans</h5>
                                                                                                        <div class="elementor-widget-cmsmasters-featured-box__description elementor-widget-cmsmasters-featured-box__content-item">No interest rate surprises</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-06f960c cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-text-editor" data-id="06f960c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                    There are no application or hidden fees.

You can settle as early as you like, and you only pay for the period that the loan was active.

We charge interest on your outstanding loan balance over the actual life of the loan. </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-5bd0379 cmsmasters-widget-layout-column elementor-widget__width-initial cmsmasters-widget-align-column-left cmsmasters-widget-direction-default cmsmasters-value-position-bottom cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list" data-id="5bd0379" data-element_type="widget" data-widget_type="cmsmasters-icon-list.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <ul class="cmsmasters-widget-icon-list-items">
                                                                                            <li class="cmsmasters-widget-icon-list-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                                                                            3.25% </span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="cmsmasters-widget-icon-list-item-value cmsmasters-widget-icon-list-item-value">Rate</span>
                                                                                            </li>
                                                                                            <li class="cmsmasters-widget-icon-list-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                                                                            0 </span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="cmsmasters-widget-icon-list-item-value cmsmasters-widget-icon-list-item-value">APR</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-edb839d elementor-widget-divider--view-line cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-divider" data-id="edb839d" data-element_type="widget" data-widget_type="divider.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-divider">
                                                                                            <span class="elementor-divider-separator">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                                <div class="elementor-element elementor-element-7eb7a01 elementor-widget__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="7eb7a01" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button" href="#" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span class="elementor-widget-cmsmasters-button__text">Apply Now</span></span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </section>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-db2f173" data-id="db2f173" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-9740adc elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="9740adc" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-537b081" data-id="537b081" data-element_type="column">
                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-c5db9aa cmsmasters-featured-box__graphic-align-left cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-featured-box" data-id="c5db9aa" data-element_type="widget" data-widget_type="cmsmasters-featured-box.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-featured-box__wrapper">
                                                                                            <div class="elementor-widget-cmsmasters-featured-box__content">
                                                                                                <div class="elementor-widget-cmsmasters-featured-box__content-vertical-inner">
                                                                                                    <div class="elementor-widget-cmsmasters-featured-box__type-wrap elementor-widget-cmsmasters-featured-box__content-item">
                                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Payroll Loans</h5>
                                                                                                        <div class="elementor-widget-cmsmasters-featured-box__description elementor-widget-cmsmasters-featured-box__content-item">No down payment option </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-431617a cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-text-editor" data-id="431617a" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        VA loans are home mortgages backed by the Department of Veterans Affairs (VA). With a VA loan, eligible service members and veterans can buy a home with little or no down payment, or refinance an existing home to get cash out or a lower monthly payment.
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-a734e9a cmsmasters-widget-layout-column elementor-widget__width-initial cmsmasters-widget-align-column-left cmsmasters-widget-direction-default cmsmasters-value-position-bottom cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list" data-id="a734e9a" data-element_type="widget" data-widget_type="cmsmasters-icon-list.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <ul class="cmsmasters-widget-icon-list-items">
                                                                                            <li class="cmsmasters-widget-icon-list-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                                                                            3.375% </span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="cmsmasters-widget-icon-list-item-value cmsmasters-widget-icon-list-item-value">Rate</span>
                                                                                            </li>
                                                                                            <li class="cmsmasters-widget-icon-list-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                                                                            3.629% </span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="cmsmasters-widget-icon-list-item-value cmsmasters-widget-icon-list-item-value">APR</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-49a6356 elementor-widget-divider--view-line cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-divider" data-id="49a6356" data-element_type="widget" data-widget_type="divider.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-divider">
                                                                                            <span class="elementor-divider-separator">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-41b1e68 elementor-widget__width-initial cmsmasters-icon-arrangement-together cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="41b1e68" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="contacts/index.html" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view-default cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-right"><span class="elementor-widget-cmsmasters-button__icon"><i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-arrow-right"></i></span><span class="elementor-widget-cmsmasters-button__text">Learn More</span></span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-c984429 elementor-widget__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="c984429" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="../savings-accounts/index.html" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span class="elementor-widget-cmsmasters-button__text">Apply Now</span></span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                </section>


                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-9f918c6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="9f918c6" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div data-aos="fade-right"
                                                        data-aos-duration="300"
                                                        {{-- data-aos-easing="linear" --}}
                                                        data-aos-easing="ease-in-out"
                                                        data-aos-mirror="true"
                                                        data-aos-once="false"
                                                        data-aos-anchor-placement="top-center" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3037e0d" data-id="3037e0d" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-7e0e5cb elementor-section-full_width elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="7e0e5cb" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e7b65c1" data-id="e7b65c1" data-element_type="column">
                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-f1ddc80 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="f1ddc80" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">how to get started</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-3b58463 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="3b58463" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">Get real insights about the first-time <b style="color: rgb(10, 201, 105)">salary-backed-loan</b> experience</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-4db7e7e cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="4db7e7e" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <p>We provide salaried backed loans to both clients with or without a salary scheme. Payroll loans
                                                                                            are available as per memorandum of understanding agreed with the employer.</p>
                                                                                        @include('__partials\requirements')                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-14707a8 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="14707a8" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                            {{-- <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="#" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span class="elementor-widget-cmsmasters-button__text">First-time Salary backed loan guide</span></span></a></div> --}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div data-aos="fade-left" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-55d13f4" data-id="55d13f4" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-5f96381 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-image" data-id="5f96381" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img width="520" height="600" src="wp-content/uploads/sites/8/2021/10/open-service-3-30x35.jpg" class="attachment-medium_large size-medium_large cmsmasters_img cmsmasters-lazyload lazyload" alt="" loading="lazy" data-sizes="auto" data-ls-sizes="(max-width: 520px) 100vw, 520px" data-src="https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/10/open-service-3.jpg" data-srcset="https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/10/open-service-3.jpg 520w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/10/open-service-3-260x300.jpg 260w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/10/open-service-3-30x35.jpg 30w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/10/open-service-3-9x10.jpg 9w" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16dc250" data-id="16dc250" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a70d173 elementor-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-icon" data-id="a70d173" data-element_type="widget" data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <a class="elementor-icon" href="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJ0eXBlIjoidmlkZW8iLCJ2aWRlb1R5cGUiOiJob3N0ZWQiLCJ1cmwiOiIjIn0%3D">
                                                                                <i aria-hidden="true" class="fab fa-youtube"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>


                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-b4f6f97 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="b4f6f97" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                    <div class="elementor-container elementor-column-gap-wide">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-60a6afb" data-id="60a6afb" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-f1ddc80 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="f1ddc80" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Loan Features</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b8c508e elementor-widget__width-initial elementor-widget-tablet__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="b8c508e" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Why borrow with <b style="color: rgb(10, 201, 105)">K-S</b><b style="color: rgb(7, 108, 148)">olution</b><b style="color: rgb(10, 201, 105)">s</b></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-6493258 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="6493258" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                    <div class="elementor-container elementor-column-gap-wide">
                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ad55530" data-id="ad55530" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-08e344a cmsmasters-featured-box__graphic-align-left cmsmasters-featured-box__graphic-position-column cmsmasters-featured-box__graphic-position-tablet-column cmsmasters-featured-box__graphic-position-mobile-column cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-featured-box" data-id="08e344a" data-element_type="widget" data-widget_type="cmsmasters-featured-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-widget-cmsmasters-featured-box__wrapper">
                                                                            <div class="elementor-widget-cmsmasters-featured-box__content">
                                                                                <div class="elementor-widget-cmsmasters-featured-box__content-vertical-inner">
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__graphic-wrapper elementor-widget-cmsmasters-featured-box__content-item elementor-widget-cmsmasters-featured-box__icon">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Customers First</h5>
                                                                                        <div class="elementor-widget-cmsmasters-featured-box__icon-wrap elementor-widget-cmsmasters-featured-box__graphic-item"><i class="cmsmsdemo-icon- cmsms-demo-icon-money"></i></div>
                                                                                    </div>
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__type-wrap elementor-widget-cmsmasters-featured-box__content-item">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Our customers come first</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-dd7274f cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="dd7274f" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">Customer satisfaction is of the utmost importance to us. We offer fast and flexible loans to customers underserved by mainstream financiers.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3b02580" data-id="3b02580" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-daba0b7 cmsmasters-featured-box__graphic-align-left cmsmasters-featured-box__graphic-position-column cmsmasters-featured-box__graphic-position-tablet-column cmsmasters-featured-box__graphic-position-mobile-column cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-featured-box" data-id="daba0b7" data-element_type="widget" data-widget_type="cmsmasters-featured-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-widget-cmsmasters-featured-box__wrapper">
                                                                            <div class="elementor-widget-cmsmasters-featured-box__content">
                                                                                <div class="elementor-widget-cmsmasters-featured-box__content-vertical-inner">
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__graphic-wrapper elementor-widget-cmsmasters-featured-box__content-item elementor-widget-cmsmasters-featured-box__icon">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Unbeatable Service</h5>
                                                                                        <div class="elementor-widget-cmsmasters-featured-box__icon-wrap elementor-widget-cmsmasters-featured-box__graphic-item"><i class="cmsmsdemo-icon- cmsms-demo-icon-diamond"></i></div>
                                                                                    </div>
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__type-wrap elementor-widget-cmsmasters-featured-box__content-item">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Unbeatable Service</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-879862d cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="879862d" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">We build long term, trusted relationships with all our clients and help them achieve their financial goals - today and tomorrow. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6d7d4fb" data-id="6d7d4fb" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-7fd4006 cmsmasters-featured-box__graphic-align-left cmsmasters-featured-box__graphic-position-column cmsmasters-featured-box__graphic-position-tablet-column cmsmasters-featured-box__graphic-position-mobile-column cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-featured-box" data-id="7fd4006" data-element_type="widget" data-widget_type="cmsmasters-featured-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-widget-cmsmasters-featured-box__wrapper">
                                                                            <div class="elementor-widget-cmsmasters-featured-box__content">
                                                                                <div class="elementor-widget-cmsmasters-featured-box__content-vertical-inner">
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__graphic-wrapper elementor-widget-cmsmasters-featured-box__content-item elementor-widget-cmsmasters-featured-box__icon">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Transparency</h5>
                                                                                        <div class="elementor-widget-cmsmasters-featured-box__icon-wrap elementor-widget-cmsmasters-featured-box__graphic-item"><i class="cmsmsdemo-icon- cmsms-demo-icon-coin-1"></i></div>
                                                                                    </div>
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__type-wrap elementor-widget-cmsmasters-featured-box__content-item">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Transparency</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-39a841a cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="39a841a" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">We pride ourselves on being a responsible lender, communicating openly and transparently with our customers.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0a7d3ec" data-id="0a7d3ec" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-2623edc cmsmasters-featured-box__graphic-align-left cmsmasters-featured-box__graphic-position-column cmsmasters-featured-box__graphic-position-tablet-column cmsmasters-featured-box__graphic-position-mobile-column cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-featured-box" data-id="2623edc" data-element_type="widget" data-widget_type="cmsmasters-featured-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-widget-cmsmasters-featured-box__wrapper">
                                                                            <div class="elementor-widget-cmsmasters-featured-box__content">
                                                                                <div class="elementor-widget-cmsmasters-featured-box__content-vertical-inner">
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__graphic-wrapper elementor-widget-cmsmasters-featured-box__content-item elementor-widget-cmsmasters-featured-box__icon">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Easy to Apply</h5>
                                                                                        <div class="elementor-widget-cmsmasters-featured-box__icon-wrap elementor-widget-cmsmasters-featured-box__graphic-item"><i class="cmsmsdemo-icon- cmsms-demo-icon-smartphone-1"></i></div>
                                                                                    </div>
                                                                                    <div class="elementor-widget-cmsmasters-featured-box__type-wrap elementor-widget-cmsmasters-featured-box__content-item">
                                                                                        <h5 class="elementor-widget-cmsmasters-featured-box__title elementor-widget-cmsmasters-featured-box__content-item">Easy to Apply</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-fc197c1 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="fc197c1" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">Our personal loans require no security, no deposit and no guarantees.</p>
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
            </section>

        </div>
    </div>
</div>
</div>