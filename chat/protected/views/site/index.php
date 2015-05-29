<?php if (Yii::app()->user->isGuest):?>
<div class="hero-unit">
    <h1>We greet you!</h1>
    <p>To create a chat room you must go through a simple registration. You can register by specifying your email or use an account in social networks. The registration process does not take long.</p>
    <p><a class="btn btn-primary btn-large" href="/registration">join &raquo;</a></p>
</div>

<div class="row">
    <div class="span6">
        <h1 class="">Login with email</h1>
        <form action="<?php echo Yii::app()->createUrl('user/loginpost') ?>" method="post" id="login-form">
            <?php if (Yii::app()->user->hasFlash('login-error')):?>
                <div class="alert alert-error">Invalid username and / or password</div>
            <?php endif ?>
            <label>E-mail / Nick</label>
            <input type="text" name="login[login]" id="login-login" class="span3" placeholder="Enter your Email-Address or Nickname" value="<?php if (Yii::app()->user->hasFlash('login')) echo Yii::app()->user->getFlash('login') ?>">
            <label>Password</label>
            <input type="password" name="login[password]" id="login-password" class="span3" placeholder="Enter your password">
            <label class="checkbox">
                <input type="checkbox" id="login-remember" name="login[remember]"> remember
            </label>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    <div class="span6">
        <h1>Login via social network</h1>
        <a href="<?php echo Yii::app()->createUrl('/user/service/service/twitter') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tw_login.png" alt="Twitter login"></a>
    </div>
</div>


<?php endif ?>
