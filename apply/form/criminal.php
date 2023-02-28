<!--single form panel-->
<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
    <h3 class="multisteps-form__title">CRIMINAL RECORD</h3>
    <div class="multisteps-form__content">
        <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="problemswithlaw" class="form-select"
                                id="problemswithlaw">
                            <option selected disabled>Select one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                        <label for="problemswithlaw"
                               class="form-label-custom">Have you had any problem with the law?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="problemswithlawspecify" type="text" class="form-control" id="problemswithlawspecify"
                               placeholder="If yes, specify?">
                        <label for="problemswithlawspecify">If yes, specify</label>
                    </div>
                </div>
            </div>
        </div><div class="card for-btn">
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