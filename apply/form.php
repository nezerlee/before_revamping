<form class="multisteps-form__form" id="backgroundForm" name="applicantform"
      action="toPDF/process.php"
      method="POST">
    <!--single form panel-->
    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
         data-animation="scaleIn" disabled>
        <h3 class="multisteps-form__title"></h3>
        <div class="multisteps-form__content">
            <div class="scrollpage1" style="height: 300px;">
                <div class="relative input-wrap is-required">
                    <h5 for="exampleTextarea1">Starting Your Application</h5>
                    <div class="container">
                        <h6>Please Note When Completing The Application:</h6>
                        <br>
                        <ul class="list-group">
                            <li class="list-group-item" style="color: black; font-style: italic;">
                                SCROLL DOWN TO THE BOTTOM OF EVERY PAGE AND MAKE SURE YOU FILL IN
                                EVERY FIELD AVAILABLE
                            </li>
                            <li class="list-group-item" style="color: black; font-style: italic;">IF
                                THERE IS A FIELD THAT DOES NOT APPLY TO YOU PLEASE WRITE NOT
                                APPLICABLE
                            </li>
                            <li class="list-group-item" style="color: black; font-style: italic;">
                                AVOID USING SYMBOLS SUCH AS '+-' (DO NOT USE APOSTROPHE'S)
                            </li>
                            <li class="list-group-item" style="color: black; font-style: italic;">
                                USE THE LATEST UPDATED INTERNET BROWSER
                            </li>
                            <li class="list-group-item" style="color: black; font-style: italic;">
                                CLEAR CACHE (GOOGLE INSTRUCTIONS ON HOW TO CLEAR CACHE)
                            </li>
                        </ul>
                    </div>
                    <p></p>
                </div>

            </div>
            <div class="card for-btn">
                <div class="card-body">
                    <div class="content">
                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                    title="Next">Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "form/background.php"; ?>
    <?php include "form/church.php"; ?>
    <?php include "form/health.php"; ?>
    <?php include "form/criminal.php"; ?>
    <?php include "form/recommendation.php"; ?>
    <?php include "form/church_life.php"; ?>
    <?php include "form/social.php"; ?>
    <?php include "form/documents.php"; ?>
    <?php include "form/declaration.php"; ?>

</form>