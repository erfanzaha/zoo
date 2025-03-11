<div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
    <div class="slide-content bg-2">
    </div>
</div>
<div class="col-12 col-md-8 h-100 bg-white">
    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
        <div class="nav-get-started">
            <p>Don't have an account?</p>
            <a class="btn get-started-btn" href="<?= base_url('register') ?>">REGISTER</a>
        </div>
        <form action="" id="form-tambah">
            <h3 class="mr-auto">Hello! let's get started</h3>
            <p class="mb-5 mr-auto">Enter your details below.</p>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <a href="<?= base_url('forgot-password') ?>">Forgot Password?</a>
                    </div>
                    
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn">LOGIN</button>
            </div>
            <div class="wrapper mt-5 text-gray">
                <p class="footer-text"><?= APP_COPYRIGHT ?></p>
            </div>
        </form>
    </div>
</div>