<div wire:ignore class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div style="height: auto;" class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
            <div class="form__container">
                <div class="title__container">
                    <h1>{{ $desc }} requistion form</h1>
                    <p>Please fill in the form below to get started</p>
                </div>
                <div class="body__container">
                    <div class="left__container">
                        <div class="side__titles">
                            <div class="title__name">
                                <h3>Your name</h3>
                                <p>Enter & press next</p>
                            </div>
                            <div class="title__name">
                                <h3>Desctibes</h3>
                                <p>select & press next</p>
                            </div>
                            <div class="title__name">
                                <h3>Services</h3>
                                <p>select & press next</p>
                            </div>
                            <div class="title__name">
                                <h3>Budget</h3>
                                <p>Select & press next</p>
                            </div>
                            <div class="title__name">
                                <h3>Complete</h3>
                                <p>Finaly press submit</p>
                            </div>
                        </div>
                        <div class="progress__bar__container">
                            <ul>
                                <li class="active" id="icon1">
                                    <ion-icon name="person-outline"></ion-icon>
                                </li>
                                <li id="icon2">
                                    <ion-icon name="book-outline"></ion-icon>
                                </li>
                                <li id="icon3">
                                    <ion-icon name="layers-outline"></ion-icon>
                                </li>
                                <li id="icon4">
                                    <ion-icon name="pricetag-outline"></ion-icon>
                                </li>
                                <li id="icon5">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form id="multi-file-upload-ajax" method="POST" action="javascript:void(0)">
                        @csrf
                        <div class="right__container">
                            <fieldset id="form1">
                                <div class="sub__title__container ">
                                    <p>Step 1/5</p>
                                    <h2>Let's start with your name credentials</h2>
                                    <p>Please fill the details below so that we can we can get in contacat with you about our product</p>
                                </div>

                                <div class="input__container">
                                    <div class="row">
                                        <div class="col-6"><label>Enter your first name</label>
                                            <input id="fname" required type="text">
                                        </div>
                                        <div class="col-6"><label>Enter your last name</label>
                                            <input id="lname" required type="text">
                                        </div>
                                    </div>

                                    <label for="phone">Phone Number</label>
                                    <input id="phone"required type="tel">
                                    <label for="email">Email Address</label>
                                    <input id="email" required type="email">
                                </div>
                                <div class="input__container">

                                    <a class="nxt__btn" onclick="nextForm();"> Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="active__form" id="form2">
                                <div class="sub__title__container">
                                    <p>Step 2/5</p>
                                    <h2>What best describes you {{ $fname }}?</h2>
                                    <p>Please let us know is this your first time applying for a loan with us.</p>
                                </div>

                                <div class="input__container">

                                    <label for="new_customer">
                                        <div id="newB" class="nav-item selection newB">
                                            <div class="imoji">
                                                <ion-icon name="person-add-outline"></ion-icon>
                                            </div>
                                            <div class="descriptionTitle text-white">
                                                <h4 for="new_customer" class="text-white">New Customer</h4>
                                                <input name="cust_types[]" id="cust_type" type="radio" value="Existing customer" checked>
                                                <p>This is my first time applying for a loan</p>
                                            </div>
                                        </div>
                                    </label>

                                    <label for="existing_customer">
                                        <div id="exitB" class="nav-item selection exitB">
                                            <div class="imoji">
                                                <ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="descriptionTitle text-white">
                                                <h4 class="text-white" for="existing_customer">Existing Customer</h4>
                                                <input name="cust_types[]" id="cust_type" type="radio" value="New customer">
                                                <p>I already have a loan account with k-solutions</p>
                                            </div>
                                        </div>
                                    </label>

                                    <div class="buttons">
                                        <a class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm prev__btn" onclick="prevForm();">Back</a>
                                        <a class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm nxt__btn" onclick="nextForm();">Next</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="active__form" id="form3">
                                <div class="sub__title__container">
                                    <p>Step 3/5</p>
                                    <h2>Upload Your Docs here?</h2>
                                    <p>Required Documents are:
                                        <ol class="text-white">
                                            @if(Request::path() == 'personal' || Request::path() == 'financial-literacy' || Request::path() == 'regulatory-services')
                                                <li>NRC</li>
                                                <li>Passport photo</li>
                                                <li>Letter of undertaking from employer</li>
                                                <li>3 months latest payslip</li>
                                                <li>Utility bill</li>
                                                <li>3 months latest Bank statement</li>
                                            @else
                                                <li>NRC</li>
                                                <li>Passport photo</li>
                                                <li>Company Profile / Pacra Form</li>
                                                <li>ZRA Tax Clearance</li>
                                                <li>Letter of undertaking from employer</li>
                                                <li>3 months latest payslip</li>
                                                <li>Utility bill</li>
                                                <li>3 months latest Bank statement</li>
                                                <li>Cheque Leaf</li>
                                            @endif
                                        </ol>
                                    </p>
                                </div>

                                <div class="input__container">
                                    <div>
                                        <div class="col-lg-12 col-md-12" id="drop">
                                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                            <header>Upload Required Files</header>
                                            {{-- <input id="files" name="files[]" width="5" height="5" multiple accept="png|jpg|pdf|docx|doc|jpeg|rtf" required type="file" /> --}}
                                            <input class="show-for-sr" type="file" id="upload_imgs"  name="upload_imgs[]" accept="png|jpg|pdf|docx|doc|jpeg|rtf" required multiple/>
                                            <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                            
                                        </div>

                                        <div wire:loading wire:target="nrcfiles" class="text-sm text-orange-500 italic">Uploading...</div>
                                        <div wire:loading wire:target="utilityfiles" class="text-sm text-orange-500 italic">Uploading...</div>
                                        <div wire:loading wire:target="letterfiles" class="text-sm text-orange-500 italic">Uploading...</div>
                                        <div wire:loading wire:target="payslipfiles" class="text-sm text-orange-500 italic">Uploading...</div>

                                    </div>


                                    <br>
                                    <div class="buttons">
                                        <a class="prev__btn" onclick="prevForm();">Back</a>
                                        <a class="nxt__btn" onclick="nextForm();">Next</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="active__form" id="form4">
                                <div class="sub__title__container">
                                    <p>Step 4/5</p>
                                    <h2>Please select your budget</h2>
                                    <p>Please let us know budget for your project so yes are great that we can give the right quote thanks</p>
                                </div>

                                <div class="input__container">

                                    <div class="forminator-row">
                                        <div id="currency-1" class="forminator-col forminator-col-12 ">
                                            <div class="forminator-field">
                                                    <label for="forminator-field-currency-1" class="forminator-label">Loan amount: <span class="forminator-required">*</span></label>
                                                <div class="forminator-input-with-suffix">
                                                    <input id="amount" id="forminator-field-currency-1" class="forminator-input forminator-currency">
                                                    <span class="forminator-suffix text-white">ZMK</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <a class="prev__btn" onclick="prevForm();">Back</a>
                                        <a class="nxt__btn" onclick="nextForm();">Next</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="active__form" id="form5">
                                <div class="sub__title__container">
                                    <p>Step 5/5</p>
                                    <h2>Complete Submission</h2>
                                    <p>Thanks for completing the form and for your time. 
                                        Please enter your email below and submit the form</p>
                                </div>
                                <input type="hidden" id="desc" value="{{ $desc }}" />
                                <div class="input__container">
                                    <label for="nrc">Enter your NRC/ Passport No</label>
                                    <input id="nrc" id="nrc" required type="text">
                                    <div class="buttons">
                                        <a class="prev__btn" onclick="prevForm();">Back</a>
                                        <button wire:click.prevent="submit" id="submitBtn">Submit</button>
                                        {{-- <button type="submit" id="submitBtn">Submit</button> --}}
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function (e) {

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#multi-file-upload-ajax').submit(function(e) {
        e.preventDefault();
        $("#exampleModalToggle").hide();
        $('#preloader').show();

        var formData = new FormData(this);
        let TotalFiles = $('#upload_imgs')[0].files.length; //Total files
        let files = $('#upload_imgs')[0];
        if (TotalFiles < 1) {
            $("#exampleModalToggle").modal('hide');
            $('#preloader').hide();
            viewId = 3;
            alert("Please upload the required documents");
            this.reset();
            return false;
        }
        for (let i = 0; i < TotalFiles; i++) {
            formData.append('files' + i, files.files[i]);
        }
        
        
        let desc = $('#desc').val();
        let api = '';
        if (desc == 'Invoice Discount') {
            api = "{{ route('apply-invoice-disc')}}";
        } else if(desc == 'Order Financing') {
            api = "{{ route('apply-order-fin')}}";
        } else if(desc == 'Regulatory Services') {
            api = "{{ route('apply-reg-serv')}}";
        } else if(desc == 'Financial Literacy') {
            api = "{{ route('apply-fin-lit')}}";
        }else{
            api = "{{ route('apply-personal')}}";
        }
    
        let fname = $('#fname').val();
        let lname = $('#lname').val();
        let cust_type = $('#cust_type').val();
        let email = $('#email').val();
        let nrc = $('#nrc').val();
        let phone = $('#phone').val();
        let amount  = $('#amount').val();
        let nxtdate = '2022-12-24';

    
        formData.append('name', fname+' '+lname);
        formData.append('nrc_no', nrc);
        formData.append('customer_type', cust_type);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('amount_balance', amount);
        formData.append('total_loan', amount);
        formData.append('next_date', nxtdate);
        formData.append('totalFiles', TotalFiles);

        $.ajax({
                type:'POST',
                url: api,
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                dataType: 'json',
            success: (data) => {
                this.reset();
                // alert('Files has been uploaded using jQuery ajax');
                window.location.href = "{{ route('success-page')}}";
            },
            error: function(data){
                $('#preloader').hide();
                $("#exampleModalToggle").modal('hide');
                alert(data.responseJSON.errors.files[0]);
                console.log(data.responseJSON.errors);
            }
        });
    });
});
</script>