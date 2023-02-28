<!--single form panel-->
<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
    <h4 class="multisteps-form__title">RECOMMENDED BY</h4>
    <div class="multisteps-form__content">
        <div id="demo-form" data-parsley-validate="" class="scrollpage1" style="height: 300px;">
            <div class="row pb-4">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select name="recommendedby" class="form-select"
                                id="recommendedby">
                            <option selected disabled>Select one</option>
                            <option value="Local Church Pastor">Local Church Pastor</option>
                            <option value="General Overseer">General Overseer</option>
                            <option value="Senior Associate Pastor">Senior Associate Pastor</option>
                            <option value="Bishop">Bishop</option>

                        </select>
                        <label for="recommendedby"
                               class="form-label-custom">Recommended By?</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input name="otherspecify" type="text" class="form-control" id="otherspecify"
                               placeholder="If yes, specify?">
                        <label for="otherspecify">Others, specify</label>
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