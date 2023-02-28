<!--single form panel general part 1-->
<div id="personal-data" class="multisteps-form__panel shadow p-4 rounded bg-white "
     data-animation="scaleIn">
    <h3 class="multisteps-form__title">PERSONAL DATA</h3>
    <br>
    <div class="multisteps-form__content">
        <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="lastname" type="text" class="form-control" id="lastname"
                               placeholder="Your last name here">
                        <label for="lastname">Surname</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="firstname" type="text" class="form-control" id="firstname"
                               placeholder="Your first name here">
                        <label for="firstname">First Name</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="dateofbirth" type="date" class="form-control"
                               id="dateofbirth"
                               placeholder="Your date of birth">
                        <label for="dateofbirth">Date of birth</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                               id="gender1" value="Male">
                        <label class="form-check-label" for="gender1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                               id="gender2" value="Female">
                        <label class="form-check-label" for="gender2">
                            Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="maritalstatus" class="form-select"
                                id="maritalstatus">
                            <option selected disabled>Select one</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>

                        </select>
                        <label for="maritalstatus"
                               class="form-label-custom">Marital status</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="profession" type="text" class="form-control" id="profession"
                               placeholder="Profession">
                        <label for="profession"
                               class="form-label-custom">Profession</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div id="UDHelp" class="form-text-born-again">
                        Residential Address
                    </div>
                    <div class="form-floating">
                     <textarea name="residentialaddress" type="text" class="form-control"
                               id="residentialaddress">
                     </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                     <textarea name="postaladdress" type="text" class="form-control"
                               id="postaladdress"
                               placeholder="Postal Address">
                     </textarea>
                        <label for="postaladdress"
                               class="form-label-custom">Postal Address
                        </label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <!--                    country of origin-->
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="countryoforigin" class="form-select"
                                id="nationalityatbirth">
                            <option selected disabled>Select one</option>
                        </select>
                        <label for="nationalityatbirth"
                               class="form-label-custom">Country of Origin</label>
                    </div>
                </div>
                <!--                contact number-->
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="contact" type="tel" class="form-control"
                               id="contact"
                               placeholder="Contact Number">
                        <label for="contact"
                               class="form-label-custom">Contact Number</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <!--                email address-->
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="email" type="text" class="form-control"
                               id="email"
                               placeholder="Email Address">
                        <label for="email"
                               class="form-label-custom">Email Address</label>
                    </div>
                </div>
                <!--                next of kin-->
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="nextofkin" type="text" class="form-control"
                               id="nextofkin"
                               placeholder="Next Of Kin">
                        <label for="nextofkin"
                               class="form-label-custom">Next Of Kin</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <!--                number of next of kin-->
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="nextofkinnumber" type="text" class="form-control"
                               id="nextofkinnumber"
                               placeholder="Next Of Kin Contact Number">
                        <label for="nextofkinnumber"
                               class="form-label-custom">Next Of Kin Contact Number</label>
                    </div>
                </div>
            </div>
<!--            next page starts here-->
            <!--
            <div class="row pb-4">

                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="profession" type="text" class="form-control"
                               id="profession"
                               placeholder="Profession">
                        <label for="profession"
                               class="form-label-custom">Profession</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="currentwork" type="text" class="form-control"
                               id="currentwork"
                               placeholder="What work are you currently doing?">
                        <label for="currentwork"
                               class="form-label-custom">What work are you currently
                            doing?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="nameoffather" type="text" class="form-control"
                               id="nameoffather"
                               placeholder="Name of father">
                        <label for="nameoffather"
                               class="form-label-custom">Name of father</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="professionoffather" type="text" class="form-control"
                               id="professionoffather"
                               placeholder="Profession of father">
                        <label for="professionoffather"
                               class="form-label-custom">Profession of father</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="nameofmother" type="text" class="form-control"
                               id="nameofmother"
                               placeholder="Name of mother">
                        <label for="nameofmother"
                               class="form-label-custom">Name of mother</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="professionofmother" type="text" class="form-control"
                               id="professionofmother"
                               placeholder="Profession of mother">
                        <label for="professionofmother"
                               class="form-label-custom">Profession of mother</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="nameofguardian" type="text" class="form-control"
                               id="nameofguardian"
                               placeholder="Name of guardian">
                        <label for="nameofguardian"
                               class="form-label-custom">Name of guardian</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="professionofguardian" type="text" class="form-control"
                               id="professionofguardian"
                               placeholder="Profession of guardian">
                        <label for="professionofguardian"
                               class="form-label-custom">Profession of guardian</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="wheredoyoulive" class="form-select"
                                id="wheredoyoulive">
                            <option selected disabled>Select one</option>
                            <option value="City">City</option>
                            <option value="Town">Town</option>
                            <option value="Village">Village</option>
                            <option value="Slum">Slum</option>

                        </select>
                        <label for="wheredoyoulive"
                               class="form-label-custom">Where do you live?</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="parentsownahouse" class="form-select"
                                id="parentsownahouse">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="parentsownahouse"
                               class="form-label-custom">
                            Do Your Parents/Guardian Own A House?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="parentsrentahouse" class="form-select"
                                id="parentsrentahouse">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="parentsrentahouse"
                               class="form-label-custom">
                            Are Your Parents/Guardian Renting A House?
                        </label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="parentsownacar" class="form-select"
                                id="parentsownacar">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="parentsownacar"
                               class="form-label-custom">
                            Do Your Parents/Guardian Own A Car?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="parentsrentabusiness" class="form-select"
                                id="parentsrentabusiness">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="parentsrentabusiness"
                               class="form-label-custom">
                            Do Your Parents/Guardian Own A Business?</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="course" class="form-select"
                                id="course">
                            <option selected disabled>Select one</option>
                            <option value="9 - Month Certificate in Ministry">9 - Month
                                Certificate in Ministry
                            </option>
                            <option value="18 - Month General Certificate in Ministry">18 -
                                Month General Certificate in Ministry
                            </option>
                            <option value="36 - Month Diploma in Ministry">36 - Month Diploma in
                                Ministry
                            </option>
                        </select>
                        <label for="course"
                               class="form-label-custom">
                            Select Course You Would Like To Do?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="whentostart" class="form-select"
                                id="whentostart">
                            <option selected disabled>Select one</option>
                            <option value="Yes">June 2022</option>
                            <option value="Yes">October 2022</option>
                            <option value="Yes">February 2023</option>
                            <option value="Yes">June 202</option>
                            <option value="Yes">October 2023</option>
                        </select>
                        <label for="whentostart"
                               class="form-label-custom">
                            What Month Would You Like To Start Bible School?</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="howdidyouhearaboutbibleschool" class="form-select"
                                id="howdidyouhearaboutbibleschool">
                            <option selected disabled>Select one</option>
                            <option value="Ghana Healing Jesus Campaign">
                                Ghana Healing Jesus Campaign
                            </option>
                            <option value="Other Healing Jesus Campaign">
                                Other Healing Jesus Campaign
                            </option>
                            <option value="Mountain of the Lord">
                                Mountain of the Lord
                            </option>
                            <option value="Hamattan Bible Seminar">
                                Hamattan Bible Seminar
                            </option>
                            <option value="Other Conference">
                                Other Conference
                            </option>
                            <option value="Bible School Website">
                                Bible School Website
                            </option>
                            <option value="TV">TV</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Radio">Radio</option>
                            <option value="UD-OLGC Church">UD-OLGC Church</option>
                            <option value="UO-FLC190">UO-FLC190 Church</option>
                            <option value="Other Church">Other Church</option>
                        </select>
                        <label for="howdidyouhearaboutbibleschool"
                               class="form-label-custom">
                            How did you hear about bible school?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input name="nameofsponsor" type="text" class="form-control"
                               id="nameofsponsor"
                               placeholder="Name of sponsor">
                        <label for="nameofsponsor"
                               class="form-label-custom">Name of sponsor</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">


            </div>-->
        </div>
    </div>
    <div class="card for-btn">
        <div class="card-body">
            <div class="content">
                <div class="button-row d-flex mt-4">
                    <!-- <button class="btn">
                    <div class="btn">Here is my clickable div</div>
                 </button> -->
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">
                        Prev
                    </button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button"
                            title="Next">Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>