<section>
    <a href="<?php echo route('logout') ?>" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-inline-flex" data-toggle="tooltip" data-placement="right" title="Go back">
        <span class="btn-inner--icon">
            <i data-feather="arrow-left"></i>
        </span>
    </a>
    <div class="container-fluid d-flex flex-column">
        <div class="row align-items-center justify-content-center justify-content-lg-start min-vh-100">
            <div class="col-12 py-12 py-md-0">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-5 col-xl-3">
                        <div class="mt-5">
                            <?php message() ?>
                            <span class="clearfix"></span>
                            <form method="post" action="<?php echo route('verify.phone.auth') ?>">                                
                                <div class="form-group">
                                    <label class="form-control-label"><?php ee('verify code sent to '.$phone) ?></label>
                                    <label class="form-control-label"><?php ee('code is '.$code) ?></label>

                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control form-control-prepend" id="input-phone" name="phone" placeholder="09123456789" value="<?php echo $phone; ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="phone"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group mb-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <label class="form-control-label"><?php ee('Verify Code') ?></label>
                                        </div>                                        
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="code" class="form-control form-control-prepend form-control-append" id="input-code" name="code" placeholder="_ _ _ _ _ _">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="key"></i></span>
                                        </div>                                        
                                    </div>

                                </div>                                
                            
                                <div class="mt-4">
                                    <?php echo \Helpers\Captcha::display('login') ?>
                                    <?php echo csrf() ?>
                                    <button type="submit" class="btn btn-block btn-primary"><?php ee('Check') ?></button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">&copy; <?php echo date("Y") ?> <a href="<?php echo config('url') ?>" class="font-weight-bold"><?php echo config('title') ?></a>. <?php ee('All Rights Reserved') ?></p>
            </div>            
        </div>
    </div>
</section>