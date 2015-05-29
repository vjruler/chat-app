<?php /** @var User $user */ ?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <a class="brand" href="<?php echo Yii::app()->baseUrl ?>/"><?php echo CHtml::encode(Yii::app()->name); ?></a>
            <div class="nav-collapse">
                <ul class="nav">
                    <?php if (Yii::app()->user->isGuest):?>
                        <li<?php if (Yii::app()->request->getPathInfo() == ''):?> class="active"<?php endif ?>><a href="<?php echo Yii::app()->baseUrl ?>/">main</a></li>
                    <?php else :?>
                        <li class="<?php if (in_array(Yii::app()->request->getPathInfo(), array('chats', 'chat/add'))):?>active <?php endif ?>dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chats <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <a href="/chats">list</a>
                                <a href="/chat/add">Add</a>
                            </ul>
                        </li>
                    <?php endif ?>
                    <li<?php if (Yii::app()->request->getPathInfo() == 'about'):?> class="active"<?php endif ?>><a href="/about">about the project</a></li>
                </ul>
                <ul class="nav">
                    <?php if (Yii::app()->user->isGuest):?>
                    <li<?php if (Yii::app()->request->getPathInfo() == 'registration'):?> class="active"<?php endif ?>><a href="/registration">registration</a></li>
                    <?php else:?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="nav-user-name">
                            <img src="img/avatar-default-24.jpg" width="24" height="24">
                            <?php echo $user->name ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <a href="/settings">settings</a>
                            <a href="/logout">Logout</a>
                        </ul>
                    </li>
                    <?php endif ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
