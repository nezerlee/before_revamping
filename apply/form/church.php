<!--single form panel-->
<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
    <h3 class="multisteps-form__title">CHURCH BACKGROUND</h3>
    <div class="multisteps-form__content">
        <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="bornagain" class="form-select"
                                id="bornagain">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="bornagain"
                               class="form-label-custom">Are you born again?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="called" class="form-select"
                                id="called">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="called"
                               class="form-label-custom">Do you beleive you are called?</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="fellowship_with" type="text" class="form-control" id="fellowship_with"
                               placeholder="What church do you fellowship with?">
                        <label for="fellowship_with">What church do you fellowship with?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="roleinchurch" type="text" class="form-control" id="roleinchurch"
                               placeholder="Which Role Do You Play In Your Church?">
                        <label for="roleinchurch">Which Role Do You Play In Your Church?</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="pastorforhowlong" type="text" class="form-control" id="pastorforhowlong"
                               placeholder="What church do you fellowship with?">
                        <label for="pastorforhowlong">If You Are A Pastor, Please Indicate How Long You Have Been
                            Pastoring?</label>
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
                        <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                title="Next">Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>