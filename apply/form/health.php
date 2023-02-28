<!--single form panel-->
<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
    <h3 class="multisteps-form__title">HEALTH STATUS</h3>
    <div class="multisteps-form__content">
        <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="seriousmedicalcondition" class="form-select"
                                id="seriousmedicalcondition">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="seriousmedicalcondition"
                               class="form-label-custom">Do you have any serious medical condition?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="specifymedicalcondition" type="text" class="form-control" id="specifymedicalcondition"
                               placeholder="What church do you fellowship with?">
                        <label for="specifymedicalcondition">If yes, specify</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="regularmedication" class="form-select"
                                id="regularmedication">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="regularmedication"
                               class="form-label-custom">Are You On Any Regular Medication?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="regularmedicationspecify" type="text" class="form-control" id="regularmedicationspecify"
                               placeholder="If yes, specify">
                        <label for="regularmedicationspecify">If yes, specify</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="majorsurgery" class="form-select"
                                id="majorsurgery">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="majorsurgery"
                               class="form-label-custom">Do you have any serious medical condition?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="majorsurgeryspecify" type="text" class="form-control" id="majorsurgeryspecify"
                               placeholder="If yes, specify">
                        <label for="majorsurgeryspecify">If yes, specify</label>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="allergy" class="form-select"
                                id="allergy">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="allergy"
                               class="form-label-custom">Do you have any Allergies?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="allergyspecify" type="text" class="form-control" id="allergyspecify"
                               placeholder="If yes, Specify?">
                        <label for="allergyspecify">If yes, specify</label>
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