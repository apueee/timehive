<div class="box box-100">
    <div class="boxin">
        <div class="header">
            <h3><?php echo __('Administration');?></h3>
            <a class="button" href="<?php echo url_for('adminRole/new');?>"><?php echo __('New Role');?>&nbsp;»</a>
            <ul>
                <li><a href="<?php echo url_for('adminUser/list');?>"><?php echo __('User');?></a></li>
                <li><a href="#" class="active"><?php echo __('Roles');?></a></li>
                <li><a href="<?php echo url_for('adminProject/list');?>"><?php echo __('Projects');?></a></li>
                <li><a href="<?php echo url_for('adminTimeItemType/list');?>"><?php echo __('Time item types');?></a></li>
            </ul>
        </div>
        <?php include_partial('form', array('form' => $form, 'role'=>$role, 'credentials'=>$credentials)) ?>
    </div>
</div>