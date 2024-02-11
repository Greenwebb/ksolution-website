@section('pageTitle', 'Invoice Discounting')
<div data-elementor-type="cmsmasters_singular" data-elementor-id="79" class="elementor elementor-79 cmsmasters-location-cmsmasters_singular post-2514 cmsms_service type-cmsms_service status-publish has-post-thumbnail hentry" data-elementor-settings="[]">
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
                                                        <div class="cmsmasters-widget-breadcrumbs__content"><a href="{{ route('invoice-discounting') }} " class="cmsmasters-home">Home</a><span class="cmsmasters-widget-breadcrumbs__sep"><i class="cmsmsdemo-icon- cmsms-demo-icon-chevron-right"></i></span><span>Invoice Discounting</span></div>
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
                                                    <h1 class="entry-title cmsmasters-widget-title__heading ">Invoice Discounting</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6e0abb96 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="6e0abb96" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-heading-title elementor-size-default">An invoice discounting facility provides you with instant access to cash tied up in your outstanding invoices.</div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4a6b1db2 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-text-editor" data-id="4a6b1db2" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                Invoice discounting facilities are extended to clients on the strength of an off-taker to whom they have previously supplied goods and/or services. The quality of the off-taker forms a key credit decision basis, as this will be the guarantee of payment being made at the end of the tenor.</div>
                                            </div>
                                            <div class="elementor-element elementor-element-3bef50e cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="3bef50e" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                            <div class="elementor-widget-container">
                                                    <div class="elementor-widget-cmsmasters-button__button-container">
                                                        <div class="elementor-widget-cmsmasters-button__button-container-inner"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button" href="#" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span class="elementor-widget-cmsmasters-button__text">Apply Today</span></span></a></div>
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
                                        <img width="1024" height="677" src="https://ownrblog.com/wp-content/uploads/2022/01/shutterstock_417073792-1-scaled.jpg?w=1104" class="attachment-large size-large cmsmasters_img cmsmasters-lazyload lazyload" alt="" loading="lazy" data-sizes="auto" data-ls-sizes="(max-width: 1024px) 100vw, 1024px" />
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
                                        <div data-elementor-type="wp-post" data-elementor-id="2514" class="elementor elementor-2514" data-elementor-settings="[]">
                                            <div class="elementor-section-wrap">
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-ae32452 elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="ae32452" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-99cbf4f" data-id="99cbf4f" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-786eaeb cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="786eaeb" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">open your checking account</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5284003 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="5284003" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">How to get started</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7b00f58 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-text-editor" data-id="7b00f58" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>With an Invoice Discounting Loan, your business can draw money against invoices issued for completed contracts before payment is received from your creditors</p>
                                                                    </div>
                                                                </div>
                                                                
                                                                @include('__partials\how-to-apply')
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-7b0ca1d elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="7b0ca1d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a6e437c" data-id="a6e437c" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-210d7dd elementor-section-full_width elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="210d7dd" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d3bee3a" data-id="d3bee3a" data-element_type="column">
                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-9d6d7cc cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="9d6d7cc" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-heading-title elementor-size-default">Features & benefits</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-388f2b0 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="388f2b0" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">Get access to cash as you issue new invoices</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-78abe67 cmsmasters-widget-align-left cmsmasters-widget-layout-row cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list" data-id="78abe67" data-element_type="widget" data-widget_type="cmsmasters-icon-list.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <ul class="cmsmasters-widget-icon-list-items">
                                                                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                                                                        <span>
                                                                                                            <i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-check-circle"></i> </span>
                                                                                                    </span>
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                                                                            Fast and simple application process </span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </li>
                                                                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                                                                        <span>
                                                                                                            <i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-check-circle"></i> </span>
                                                                                                    </span>
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                                                                             Access to Funds for working Capital.</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </li>
                                                                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                                                                        <span>
                                                                                                            <i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-check-circle"></i> </span>
                                                                                                    </span>
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                                                                            Maintain cash-flow for your business.
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </li>
                                                                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                                                                        <span>
                                                                                                            <i aria-hidden="true" class="cmsmsdemo-icon- cmsms-demo-icon-check-circle"></i> </span>
                                                                                                    </span>
                                                                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                                                                        <span class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                                                                            Rates are negotiable.</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-b9d9390 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="b9d9390" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <p data-aos="fade-up"
                                                                                        data-aos-offset="200"
                                                                                        data-aos-delay="2000"
                                                                                        data-aos-duration="1000"
                                                                                        data-aos-easing="ease-in-out"
                                                                                        data-aos-mirror="true"
                                                                                        data-aos-once="false"
                                                                                        data-aos-anchor-placement="top-center" class="elementor-heading-title elementor-size-default">Plus peace of mind that your money is safe and secure, with our 100% Security Guarantee.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-82ee643" data-id="82ee643" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-4c75517 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-image" data-id="4c75517" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;" width="520" height="640" src="https://techcrunch.com/wp-content/uploads/2020/06/GettyImages-1128201585.jpg?w=940&h=465&crop=1" class="attachment-medium_large size-medium_large cmsmasters_img cmsmasters-lazyload lazyload" alt="" loading="lazy" data-sizes="auto" data-ls-sizes="(max-width: 520px) 100vw, 520px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-27203f9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="27203f9" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-042e794" data-id="042e794" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a265a87 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-image" data-id="a265a87" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;" width="560" height="420" src="wp-content/uploads/sites/8/2021/11/open-service-2-1-30x23.jpg" class="attachment-medium_large size-medium_large cmsmasters_img cmsmasters-lazyload lazyload" alt="" loading="lazy" data-sizes="auto" data-ls-sizes="(max-width: 560px) 100vw, 560px" data-src="https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/11/open-service-2-1.jpg" data-srcset="https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/11/open-service-2-1.jpg 560w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/11/open-service-2-1-300x225.jpg 300w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/11/open-service-2-1-400x300.jpg 400w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/11/open-service-2-1-30x23.jpg 30w, https://multibank.cmsmasters.net/classic/wp-content/uploads/sites/8/2021/11/open-service-2-1-13x10.jpg 13w" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-42ce332" data-id="42ce332" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-6102f71 elementor-section-full_width elementor-section-height-default elementor-section-height-default cmsmasters-block-default" data-id="6102f71" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-884f728" data-id="884f728" data-element_type="column">
                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-8b9008d cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="8b9008d" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-heading-title elementor-size-default">Requirements</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-c800876 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="c800876" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">What do you need to get an <b style="color: rgb(10, 201, 105)">{{ $desc }}ing</b> loan?</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-ab5d056 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading" data-id="ab5d056" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        @include('__partials\requirements')
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-992ca49 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button" data-id="992ca49" data-element_type="widget" data-widget_type="cmsmasters-button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                                                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a href="{{ route('contact-us') }}" class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm" role="button"><span class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span class="elementor-widget-cmsmasters-button__text">See if you&#039;re eligible</span></span></a></div>
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