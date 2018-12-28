<style>
    .page-sidebar-menu-closed span.main_logo{
        display: none;
    }
    .page-sidebar-menu i.small_logo {
        display: none;
    }
    .page-sidebar-menu-closed i.small_logo {
        display: block;
    }
</style>
<div class="page-sidebar navbar-collapse collapse">
    <?php
        $data = getCurrentControllerAction();
        $explode_data = explode("||", $data);
        $curr_controller = $explode_data[0];
        $curr_action = $explode_data[1];
        
    ?>
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="sidebar-toggler-wrapper" >
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler" ng-click="toggleState()">
            </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <li class="sidebar-search-wrapper">
            <form class="sidebar-search sidebar-search-bordered" action="" method="POST">
                <a href="javascript:;" class="remove"><i class="icon-close"></i></a>
            </form>
        </li>
        <li class="<?= $curr_controller == "Authenticate" && $curr_action == "dashboard" ? 'active' : null ?>">
            <a href="<?php echo e(action('Admin\AuthenticateController@dashboard')); ?>" data-container="body" data-placement="bottom" data-html="true" >
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="<?= $curr_controller == "Authenticate" && $curr_action == "dashboard" ? 'selected' : null ?>"></span>
            </a>
        </li>
        <li class="<?= $curr_controller == "AdminUser" ? 'active' : null ?>">
            <a href="<?php echo e(action('Admin\AdminUserController@getIndex')); ?>" data-container="body" data-placement="bottom" data-html="true" >
                <i class="fa fa-users"></i>
                <span class="title">User</span>
            </a>
        </li>
        
        <li class="<?= $curr_controller == "Reseller" ? 'active' : null ?>">
            <a href="<?php echo e(action('Admin\ResellerController@getIndex')); ?>" data-container="body" data-placement="bottom" data-html="true" >
                <i class="fa fa-users"></i>
                <span class="title">Reseller</span>
            </a>
        </li>

        <li class="<?= $curr_controller == "File" ? 'active' : null ?>">
            <a href="<?php echo e(action('Admin\FileController@getIndex')); ?>" data-container="body" data-placement="bottom" data-html="true" >
                <i class="fa fa-file"></i>
                <span class="title">Files</span>
            </a>
        </li>

        <li class="<?= $curr_controller == "Authenticate" && $curr_action == "my_profile" ? 'active' : null ?> setting">
            <a href="<?php echo e(action('Admin\AuthenticateController@my_profile')); ?>">
                <i class="icon-user"></i>
                <span class="title">My Profile</span>
                <span class="<?= $curr_controller == "Authenticate" && $curr_action == "my_profile" ? 'selected' : null ?>"></span>
            </a>
        </li>
    </ul>
</div>