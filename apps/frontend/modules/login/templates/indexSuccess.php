<?php $sf_response->setTitle('TimeBoxx - '.__('Login'));?>

<div id="login">
<div class="box box-50 altbox">
    <div class="boxin">
        <div class="header">
            <h3><img src="<?php echo image_path('tb_logo_70.png');?>" alt="TimeBoxx" /></h3>
            <ul>
                <li><a href="#" class="active"><?php echo __('Login'); ?></a></li>
                <li><a href="#"><?php echo __('Lost password');?></a></li>
            </ul>
        </div>
        <form class="table" action="<?php echo url_for('login/login'); ?>" method="post">
            <div class="inner-form">
                <?php if ($sf_user->getFlash('login_failure', false) == true): ?>
                    <div class="msg msg-error">
                        <strong><?php echo __('Login failed!') ?></strong><br/>
                        <?php echo __('Either your password or username was wrong. Please try again!') ?>
                    </div>
                <?php endif; ?>
                <?php if ($sf_user->getFlash('login_failure.locked', false) == true): ?>
                    <div class="msg msg-error">
                        <strong><?php echo __('Login failed!') ?></strong><br/>
                        <?php echo __('Your user is locked, you can not use TimeBoxx anymore!') ?>
                    </div>
                <?php endif; ?>
                <table cellspacing="0">
                    <tr>
                        <th><label for="username"><?php echo __('Username') ?>:</label></th>
                        <td><input class="txt" type="text" id="username" name="username" /></td>
                    </tr>
                    <tr>
                        <th><label for="password"><?php echo __('Password') ?>:</label></th>
                        <td><input class="txt pwd" type="password" id="password" name="password" /></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td><label class="check"><input class="check" type="checkbox" id="autologin" name="autologin" value="1"/><?php echo __('Keep logged in');?></label></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td class="tr proceed">
                            <input class="button" type="submit" value="<?php echo __('Login'); ?> »" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
</div>