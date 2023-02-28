<!--single form panel-->
<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
    <h3 class="multisteps-form__title">FINISH</h3>
    <div class="multisteps-form__content">
        <div class="multisteps-form__content">

            <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">

                <div class="row pb-4">
                    <div id="feedback" class="feedback">
                        <div class="alert alert-success custom-success" role="alert" id="success-message">
                            This is a success alert—check it out!
                        </div>
                        <div class="alert alert-danger custom-fail" role="alert" id="fail-message">
                            Please go back to previous pages and make sure all fields are filled. <br>
                            No fields can be empty
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-lg-12">
                        <div id="UDHelp" class="form-text-born-again">
                            I, (Full Name)
                        </div>
                        <div class="form-check check-custom" id="">
                            <input type="text" name="declarationname" class="form-control form-control-why"
                                   id="declarationname"/>
                        </div>
                    </div>
                    <div id="UDHelp" class="form-text-born-again">
                        certify that the information given above is true and
                        correct to the best of my knowledge.
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-lg-12">
                        <input type="date" name="declarationdate" class="form-control required" placeholder="">
                    </div>
                </div>
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
                        <button class="btn btn-primary ml-auto js-btn-next toggle-disabled" type="submit"
                                title="Send">Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>