<div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
    <div class="slide-content bg-2">
    </div>
</div>
<div class="col-12 col-md-8 h-100 bg-white">
    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
        <form id="form-data" class="account-create">
            <h3 class="mr-auto">Forgot Password</h3>
            <p class="mb-5 mr-auto">Enter your details below.</p>
            <input type="hidden" name="id_reset" id="id">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input class="form-control input-lg" type="email" name="email" id="email"
                        placeholder="Email ( Cth : example@email.com )" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn">Reset Password</button>
            </div>
            <div class="wrapper mt-5 text-gray">
                <p class="footer-text"><?= APP_COPYRIGHT ?></p>
            </div>
        </form>
    </div>
</div>