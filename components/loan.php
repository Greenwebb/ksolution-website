<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div style="height: auto;" class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content">
            <div class="form__container">
                <div class="title__container">
                    <h1>Loan requistion form</h1>
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
                    <form id="upload" method="post" action="loans/upload.php" enctype="multipart/form-data">
                        <div class="right__container">
                            <fieldset id="form1">
                                <div class="sub__title__container ">
                                    <p>Step 1/5</p>
                                    <h2>Let's start with your name credentials</h2>
                                    <p>Please fill the details below so that we can we can get in contacat with you about our product</p>
                                </div>

                                <div class="input__container">
                                    <div class="row">
                                        <div class="col-6"><label for="name">Enter your first name</label>
                                            <input name="fname" required type="text">
                                        </div>
                                        <div class="col-6"><label for="name">Enter your last name</label>
                                            <input name="lname" required type="text">
                                        </div>
                                    </div>

                                    <label for="phone">Phone Number</label>
                                    <input name="phone" id="phone" required type="tel">
                                    <label for="email">Email Address</label>
                                    <input name="email" id="email" required type="email">
                                </div>
                                <div class="input__container">

                                    <a class="nxt__btn" onclick="nextForm();"> Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="active__form" id="form2">
                                <div class="sub__title__container">
                                    <p>Step 2/5</p>
                                    <h2>What best describes you ?</h2>
                                    <p>Please let us know is this your first time applying for a loan with us.</p>
                                </div>

                                <div class="input__container">

                                    <label for="new_customer">
                                        <div id="newB" class="nav-item selection newB">
                                            <div class="imoji">
                                                <ion-icon name="person-add-outline"></ion-icon>

                                            </div>
                                            <div class="descriptionTitle">

                                                <h3>New Customer</h3>

                                                <input required="required" type="radio" id="new_customer" name="customer_type" value="existing_customer">
                                                <p>This is my first time applying for a loan</p>
                                            </div>
                                        </div>
                                    </label>

                                    <label for="existing_customer">
                                        <div id="exitB" class="nav-item selection exitB">
                                            <div class="imoji">
                                                <ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="descriptionTitle">

                                                <h3>Existing Customer</h3>
                                                <input type="radio" id="existing_customer" name="customer_type" value="new_customer">
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
                                        <li>NRC</li>
                                        <li>Passport photo</li>
                                        <li>Letter of undertaking from empployer</li>
                                        <li>3 months latest payslip</li>
                                        <li>Utility bill</li>
                                        <li>3months latest bank statement</li>
                                    </ol>
                                    </p>
                                </div>

                                <div class="input__container">
                                    <div>
                                        <div id="drop">
                                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                            <header>Drag & Drop to Upload File</header>
                                            <span>OR</span><br>

                                           
                                            <input class="multi maxsize-10000" id="fileUploader" accept="png|jpg|pdf|docx|doc|jpeg|rtf"  required type="file" name="files[]" multiple="" />
                                        </div>

                                        <ul class="list-group" id="uploaded_files">
                                            <!-- The file uploads will be shown here -->
                                        </ul>

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


                                    <input name="amount" id="amount" step="50" required type="range" min="10000" max="1000000" value="250000" class="slider">
                                    <div class="output__value">

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
                                    <p>Thanks for completing the form and for your time.Plss enter your email below and submit the form</p>
                                </div>

                                <div class="input__container">
                                    <label for="nrc">Enter your NRC/ Passport No</label>
                                    <input id="nrc" name="nrc" required type="text">
                                    <div class="buttons">
                                        <a class="prev__btn" onclick="prevForm();">Back</a>
                                        <button name="submit" type="submit" id="submitBtn">Submit</button>
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