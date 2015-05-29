<?php /** @var User $user */ ?>
<div class="row content-block">
    <div class="span6">
    <?php if (isset($errors) && !empty($errors)):?>
        <div class="alert alert-error">
        <?php foreach ($errors as $message): ?>
            <p><?php echo $message ?></p>
        <?php endforeach ?>
        </div>
    <?php endif ?>
    <form action="<?php echo ('add' == $type) ? Yii::app()->createUrl('/user/addpost') : Yii::app()->createUrl('/user/editpost') ?>" method="post" id="user-form">
        <?php if (Yii::app()->user->hasFlash('settings-info')):?>
            <div class="alert alert-info"><?php echo Yii::app()->user->getFlash('settings-info')?></div>
        <?php endif ?>
        <?php if (Yii::app()->user->hasFlash('settings-success')):?>
            <div class="alert alert-success"><?php echo Yii::app()->user->getFlash('settings-success')?></div>
        <?php endif ?>
        <?php if (Yii::app()->user->hasFlash('settings-error')):?>
            <div class="alert alert-error"><?php echo Yii::app()->user->getFlash('settings-success')?></div>
        <?php endif ?>
        <h2><?php echo $this->pageTitle ?></h2>
        <div class="control-group<?php if (!$user->validate(array('name'))):?> error<?php endif ?>">
            <label>Nick</label>
            <input type="text" class="span3" placeholder="Enter your nickname" name="user[name]" id="user-name" value="<?php echo $user->name ?>">
        </div>

        <div class="control-group<?php if (!$user->validate(array('email'))):?> error<?php endif ?>">
            <label>E-mail</label>
            <input type="text" class="span3" placeholder="Enter your Email-Address" name="user[email]" id="user-email" value="<?php echo $user->email ?>">
        </div>

        <div class="control-group<?php if (!$user->validate(array('password_new'))):?> error<?php endif ?>">
            <label>password</label>
            <input type="password" class="span3" placeholder="Enter your password" name="user[password_new]" id="user-password-new" value="<?php echo $user->password_new ?>">
        </div>

        <div class="control-group<?php if (!$user->validate(array('password_new_repeat'))):?> error<?php endif ?>">
            <label>Repeat password</label>
            <input type="password" class="span3" placeholder="Enter your password again" name="user[password_new_repeat]" id="user-password-new-repeat" value="<?php echo $user->password_new_repeat ?>">
        </div>

        <div class="control-group">
            <button type="submit" class="btn"><?php if ('add' == $type):?>Sign up<?php else:?>retain<?php endif ?></button>
            <a href="<?php echo Yii::app()->createUrl('/user/service/service/twitter') ?>"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/tw_login_28.png" alt="Twitter login" class="twitter-login"></a>
        </div>
    </form>
    </div>

    <div class="span6">
        <?php if ('add' == $type):?>
        <ul> 
            <h2>After registering, you will be able to:</h2>
            <ul>
                <li>To communicate with people in real time</li>
                <li>Create your own chats</li>
                <li>We invite you to chat unlimited amount of people</li>
                <li>View message history chats</li>
            </ul>
        </ul>
        <?php elseif($user->email && !$user->photo): ?>
            <div class="row"><img src="<?php echo $user->getPhotoPath(256)?>" alt="user photos"></div>
            <div class="row"><a href="http://ru.gravatar.com/emails" target="_blank">Edit photos <i class="icon-share"></i></a></div>
        <?php endif ?>
    </div>
</div>
