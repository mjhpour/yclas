<?if (Core::config('general.sms_auth') == TRUE ):?>
<div class="pad_10tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12':'col-xs-12">
                <div class="page-header">
                    <h1><?=_e('Phone Register')?></h1>
                </div>
                <form class="auth" method="post" action="<?=Route::url('oc-panel',array('directory'=>'user','controller'=>'auth','action'=>'phoneregister'))?>">
                    <?=Form::errors()?>

                    <div class="form-group clearfix">
                        <label class="col-xs-12 control-label"><?=_e('Phone')?></label>
                        <div class="col-xs-12">
                            <?= FORM::input('phone', '', array('class'=>'form-control', 'id'=>'phone', 'type'=>'phone' ,'required','placeholder'=>__('Phone'), 'data-country' => core::config('general.country')))?>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <ul class="list-inline">
                                <li>
                                    <button type="submit" class="btn btn-primary"><?=_e('Register')?></button>
                                </li>
                                <li>
                                    <?=_e('Already Have an Account?')?>
                                    <a data-dismiss="modal" data-toggle="modal"  href="<?=Route::url('oc-panel',array('directory'=>'user','controller'=>'auth','action'=>'login'))?>#login-modal">
                                        <?=_e('Login')?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <?=Form::redirect()?>
                    <?=Form::CSRF('phoneregister')?>
                </form>
            </div>
        </div>
    </div>
<?endif?>
