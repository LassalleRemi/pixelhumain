
<?php HtmlHelper::registerCssAndScriptsFiles( array('/js/default/loginRegister.js') , $this->module->assetsUrl); ?>

<style>
    .no-display {
        display: none;
    }
    .help-block{
        color:red;
    }
</style>

<form class="portfolio-modal modal fade form-login box-login" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content padding-top-15">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="name font-blackoutM" >
                        <span class="letter letter-blue font-ZILAP letter-k">K</span>
                        <span class="letter letter-yellow">G</span>
                        <span class="letter letter-yellow font-ZILAP">O</span>
                        <span class="letter letter-yellow">U</span>
                        <span class="letter letter-green">G</span>
                        <span class="letter letter-green">L</span>
                        <span class="letter letter-green">E</span>
                    </span>
                    <h3 class="letter-red no-margin" style="margin-top:-15px!important;">se connecter</h3><br>
                </div>
                <div class="col-lg-12">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4 text-left">
                <label><i class="fa fa-envelope"></i> Un e-mail</label><br>
                <input class="form-control" name="email" id="email-login" type="text" placeholder="e-mail"><br>
                
                <label><i class="fa fa-key"></i> Un mot de passe</label><br>
                <input class="form-control" name="password" id="password-login" type="password" placeholder="mot de passe"><br>
                
                

                <label for="remember" class="checkbox-inline">
                    <input type="checkbox" id="remember" name="remember">
                    Se souvenir de moi
                </label>

                <button class="btn btn-success pull-right loginBtn" type="submit"><i class="fa fa-sign-in"></i> Se connecter</button><br><br>
  
                <div class="form-actions col-md-12 no-padding" style="margin-top:20px;">
                    <div class="errorHandler alert alert-danger no-display loginResult">
                        <i class="fa fa-remove-sign"></i> <?php echo Yii::t("login","Please verify your entries.") ?>
                    </div>
                    <div class="alert alert-danger no-display notValidatedEmailResult">
                        <i class="fa fa-remove-sign"></i><?php echo Yii::t("login","Your account is not validated : please check your mailbox to validate your email address.") ?>
                              <?php echo Yii::t("login","If you didn't receive it or lost it, click") ?>
                              <a class="validate" href="#" 
                              onclick="showPanel('box-email', 
                                function() {
                                    emailType = 'validateEmail';
                                    $('#email2').val($('#email-login').val());
                                    $('.forgotBtn .ladda-label').text(buttonLabel[emailType])});">
                              <?php echo Yii::t("login","here") ?></a> <?php echo Yii::t("login","to receive it again.") ?> 
                    </div>
                    <div class="alert alert-info no-display betaTestNotOpenResult">
                        <i class="fa fa-remove-sign"></i><?php echo Yii::t("login","Our developpers are fighting to open soon ! Check your mail that will happen soon !")?>
                    </div>
                    <div class="alert alert-success no-display emailValidated">
                        <i class="fa fa-check"></i> <?php echo Yii::t("login","Your account is now validated ! Please try to login.") ?>
                    </div>
                    <div class="alert alert-danger no-display custom-msg">
                        <i class="fa fa-remove-sign"></i> <?php echo Yii::t("login","You have some form errors. Please check below.") ?>
                    </div>
                    <div class="alert alert-danger no-display emailAndPassNotMatchResult">
                        <i class="fa fa-remove-sign"></i><?php echo Yii::t("login","Email or password does not match. Please try again !")?>
                    </div>
                    <div class="alert alert-danger no-display emailNotFoundResult">
                        <i class="fa fa-remove-sign"></i><?php echo Yii::t("login","Impossible to find an account for this username or password.")?>
                    </div>  
                </div>

                <div class="col-md-12 no-padding text-center">
                    <hr>
                    <button class="btn btn-xs bg-white">
                        <i class="fa fa-s"></i> J'ai perdu mon mot de passe
                    </button>
                    <br><br>
                    

                    <button class="btn btn-default" data-toggle="modal" data-target="#modalRegister">
                        <i class="fa fa-sign-in"></i> Je veux m'inscrire
                    </button>
                </div>

                <br><hr>

                <div class="col-md-12 text-center">
                    <br><hr>
                    <a href="javascript:" data-dismiss="modal"><i class="fa fa-times"></i> Retour</a>
                </div>

            </div>      
        </div>
    </div>
</form>


<div class="portfolio-modal modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="modal-content form-register box-register padding-top-15"  >
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="name font-blackoutM" >
                        <span class="letter letter-blue font-ZILAP letter-k">K</span>
                        <span class="letter letter-yellow">G</span>
                        <span class="letter letter-yellow font-ZILAP">O</span>
                        <span class="letter letter-yellow">U</span>
                        <span class="letter letter-green">G</span>
                        <span class="letter letter-green">L</span>
                        <span class="letter letter-green">E</span>
                    </span>
                    <h3 class="letter-red no-margin" style="margin-top:-15px!important;">Je m'inscris</h3><br>
                </div>
                <div class="col-lg-12">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4 text-left">
                
                <label class="letter-black hidden"><i class="fa fa-address-book-o"></i> Nom et prénom</label>
                <input class="form-control hidden" id="registerName" name="name" type="text" placeholder="Nom et prénom">
                
                <label class="letter-black"><i class="fa fa-user-circle-o"></i> Nom d'utilisateur</label><br>
                <input class="form-control" id="username" name="username" type="text" placeholder="Nom d'utilisateur"><br>
                
                <label class="letter-black"><i class="fa fa-envelope"></i> E-mail</label><br>
                <input class="form-control" id="email3" name="email3" type="text" placeholder="e-mail"><br>
                
                <label class="letter-black"><i class="fa fa-key"></i> Mot de passe</label><br>
                <input class="form-control" id="password3" name="password3" type="password" placeholder="mot de passe"><br>
                
                <label class="letter-black"><i class="fa fa-key"></i> Répétez le mot de passe</label><br>
                <input class="form-control" id="passwordAgain" name="passwordAgain" type="password" placeholder="mot de passe (confirmation)">
                
                <hr>

                <!-- <input class="pull-left margin-top-10 agree" id="agree" name="agree" type="checkbox"> -->
                <!-- <label class="padding-5 text-red">Je suis d'accord avec <a href="#k.CGC">les règles de confidentialité</a></label> -->
                <label for="agree" class="checkbox-inline letter-red">
                    <input type="checkbox" class="grey agree" id="agree" name="agree">
                    <?php echo Yii::t("login","I agree to the Terms of") ?> 
                    <a href="https://www.communecter.org/doc/Conditions Générales d'Utilisation.pdf" target="_blank" class="bootbox-spp text-dark">
                        <?php echo Yii::t("login","Service and Privacy Policy") ?>
                    </a>
                </label>

                <br><hr>

                <div class="pull-left form-actions no-margin" style="width:100%; padding:10px;">
                    <div class="errorHandler alert alert-danger no-display registerResult pull-left " style="width:100%;">
                        <i class="fa fa-remove-sign"></i> <?php echo Yii::t("login","Please verify your entries.") ?>
                    </div>
                    <div class="alert alert-success no-display pendingProcess" style="width:100%;">
                        <i class="fa fa-check"></i> <?php echo Yii::t("login","You've been invited : please resume the registration process in order to log in.") ?>
                    </div>
                </div>

                <a href="javascript:" class="pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Retour</a>
                <button class="btn bg-red text-white pull-right createBtn"><i class="fa fa-sign-in"></i> S'inscrire</button>
                
                
                <div class="col-md-12 margin-top-50 margin-bottom-50"></div>
            </div>      
        </div>
    </form>
    <div class="col-md-12 text-center margin-bottom-50">
        <button class="btn btn-default" data-toggle="modal" data-target="#modalRegisterSuccess">Success</button>
    </div>
</div>

<div class="modal fade" role="dialog" id="modalRegisterSuccess">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-green text-white">
                <h4 class="modal-title"><i class="fa fa-check"></i> <?php echo Yii::t("login","Account Created!!") ?></h4>
            </div>
            <div class="modal-body center text-dark hidden" id="modalRegisterSuccessContent"></div>
            <div class="modal-body center text-dark">
                
                <h4 class="letter-green no-margin"><i class="fa fa-check-circle"></i> Confirmez votre addresse e-mail</h4>
                <h4 class="no-margin">
                    <small>afin d'accéder à votre compte</small>
                </h4>
                <small class="no-margin">
                    <i class="fa fa-lock"></i> Pour des raisons de sécurité, vous devez confirmer votre addresse e-mail avant de pouvoir vous connecter.
                </small>
                <br><br>
                <h5><i class="fa fa-angle-down"></i> Comment faire ?</h5>
                <i class="fa fa-envelope-open" style="width:20px;"></i> <b>Vérifiez votre boîte e-mails</b><br>
                <i class="fa fa-hand-o-up" style="width:20px;"></i> <b>Cliquez sur le lien d'activation</b> que nous vous avons envoyé.</br>
                <hr>
                <i class="fa fa-unlock" style="width:20px;"></i> Vous serez <b class="letter-green">connecté automatiquement</b> et redirigé vers votre page perso.
                    
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default letter-green" data-dismiss="modal"><i class="fa fa-check"></i> J'ai compris</button>
            </div>
        </div>
    </div>
</div>

<script>
    

var email = '<?php echo @$_GET["email"]; ?>';
var userValidated = '<?php echo @$_GET["userValidated"]; ?>';
var pendingUserId = '<?php echo @$_GET["pendingUserId"]; ?>';
var name = '<?php echo @$_GET["name"]; ?>';
var error = '<?php echo @$_GET["error"]; ?>';
var invitor = "<?php echo @$_GET["invitor"]?>";

var msgError = {
    "accountAlreadyExists" : "<?php echo Yii::t("login","Your account already exists on the plateform : please try to login.") ?>",
    "unknwonInvitor" : "<?php echo Yii::t("login","Something went wrong ! Impossible to retrieve your invitor.") ?>",
    "somethingWrong" : "<?php echo Yii::t("login","Something went wrong !") ?>",
};

var buttonLabel = {
    "password" : '<?php echo Yii::t("login","Get my password") ?>',
    "validateEmail" : "<?php echo Yii::t("login","Send me validation email") ?>"
};

var timeout;
var emailType;


var requestedUrl = "<?php echo (isset(Yii::app()->session["requestedUrl"])) ? Yii::app()->session["requestedUrl"] : null; ?>";
var REGISTER_MODE_TWO_STEPS = "<?php echo Person::REGISTER_MODE_TWO_STEPS ?>";

jQuery(document).ready(function() {

    //$('#email3').filter_input({regex:'/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/'});
    //$('#registerName').filter_input({regex:'[^@#&\'\"\`\\\\]'});
    //$('#username').filter_input({regex:'[^@#&\'\"\`\\\\]'});


    //Remove parameters from URLs in case of invitation without reloading the page
    removeParametersWithoutReloading();
    
    //$(".box").hide();
    Login.init();


    $('.form-register #username').keyup(function(e) { 
        validateUserName();
    });

    if(email != ''){
        $('#email-login').val(email);
        $('#email-login').prop('disabled', true);
        $('#email3').val(email);
        $('#email3').prop('disabled', true);
    }

    //Validation of the user (invitation or validation)
    userValidatedActions();

    if (error != "") {
        $(".custom-msg").show();
        $(".custom-msg").text(msgError[error]);
    }

    $("#username").change(function(){
        $("#registerName").val($(this).val());
    });

});


</script>