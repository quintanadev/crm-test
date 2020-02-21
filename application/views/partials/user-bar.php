<!--begin: User Bar -->
<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Olá,</span>
            <span class="kt-header__topbar-username kt-hidden-mobile">Rodrigo Quintana</span>
            <img alt="Pic" class="kt-radius-100" src="<?= base_url('assets/media/users/default.jpg'); ?>" />

            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->

            <!--<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>-->
        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

        <?php //$this->load->view('partials/user-bar-head'); ?>

        <!--begin: Navigation -->
        <div class="kt-notification">
            <a href="<?= base_url('user/profile'); ?>" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        Meu Perfil
                    </div>
                    <div class="kt-notification__item-time">
                        Dados e configurações pessoais
                    </div>
                </div>
            </a>
            <div class="kt-notification__custom kt-space-between">
                <a href="<?= base_url('user/logout'); ?>" class="btn btn-label btn-label-brand btn-sm btn-bold">Sair</a>
                <a href="<?= base_url('user/lock-screen'); ?>" class="btn btn-clean btn-sm btn-bold">Bloquear</a>
            </div>
        </div>

        <!--end: Navigation -->
    </div>
</div>

<!--end: User Bar -->