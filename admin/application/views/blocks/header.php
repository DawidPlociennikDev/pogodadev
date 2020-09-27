<?php if(isset($_SESSION['global_alert_success'])): ?>
    <div class="alert alert-success alert-dismissible global_alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
        </button> 
        <?php echo $_SESSION['global_alert_success']; ?>
    </div>
<?php endif; ?> 
<?php if(isset($_SESSION['global_alert_error'])): ?>
    <div class="alert alert-danger alert-dismissible global_alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
        </button> 
        <?php echo $_SESSION['global_alert_error']; ?>
    </div>
<?php endif; ?> 
    <div class="header-top-area">
        <div class="container">
            <div class="row menu">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="<?= base_url(''); ?>" class="logo_url">
                            <img src="<?= assetsUrl(); ?>img/logo/logoPWSZ.png" alt="" />
                            <span class="ml-2">PWSZ Legnica</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <?php if($this->back_m->get_one('users', $_SESSION['id'])->avatar != ''){
                                        echo '<img src="'.base_url('uploads/'.$this->back_m->get_one('users', $_SESSION['id'])->avatar).'" class="img-fluid" width="24">';
                                    } ?>
                                    <small><?= $this->back_m->get_one('users', $_SESSION['id'])->first_name . ' ' . $this->back_m->get_one('users', $_SESSION['id'])->last_name; ?></small>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-message-info">
                                        <a href="<?= base_url('users/form/update/'.$_SESSION['id']); ?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Ustawienia konta</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="<?= base_url('home/logout'); ?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Wyloguj się</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="<?= base_url('synchronize'); ?>" class="nav-link dropdown-toggle" title="Synchronizuj bazę danych">
                                    <span><i class="fas fa-sync-alt"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" href="<?= base_url(); ?>">Home</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Parametry</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?= base_url('parametrs'); ?>" 
                                                <?php if($this->uri->segment(1) == 'parametrs' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                                <strong>Zobacz wszystkie</strong>
                                            </a>
                                        </li>
                                        <?php foreach ($parametrs as $v): ?>
                                        <li>
                                            <a href="<?= base_url('parametrs/form/update/'.$v->id); ?>" 
                                                <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'parametrs'){echo 'class="active_color"';} ?>>
                                                <?= $v->title; ?>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>

                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Blog</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?= base_url('articles'); ?>" 
                                                <?php if($this->uri->segment(1) == 'articles' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                                <strong>Zobacz wszystkie</strong>
                                            </a>
                                        </li>
                                        <?php foreach ($articles as $v): ?>
                                        <li>
                                            <a href="<?= base_url('articles/form/update/'.$v->id); ?>" 
                                                <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'articles'){echo 'class="active_color"';} ?>>
                                                <?= $v->title; ?>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Ciekawe linki</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?= base_url('links'); ?>" 
                                                <?php if($this->uri->segment(1) == 'links' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                                <strong>Zobacz wszystkie</strong>
                                            </a>
                                        </li>
                                        <?php foreach ($links as $v): ?>
                                        <li>
                                            <a href="<?= base_url('links/form/update/'.$v->id); ?>" 
                                                <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'links'){echo 'class="active_color"';} ?>>
                                                <?= $v->title; ?>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Statystyki</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('statistics'); ?>"
                                            <?php if($this->uri->segment(1) == 'statistics' && $this->uri->segment(2) == ''){echo 'class="active_color"';} ?>>
                                            <strong>Zobacz aktualne</strong>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('statistics/yesterday'); ?>" <?php if($this->uri->segment(2) == 'yesterday' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                                Z wczoraj
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('statistics/lastweek'); ?>" <?php if($this->uri->segment(2) == 'lastweek' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                                Z poprzedniego tygodnia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('statistics/lastmonth'); ?>" <?php if($this->uri->segment(2) == 'lastmonth' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                                Z poprzedniego miesiąca
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('statistics/owntime'); ?>" <?php if($this->uri->segment(2) == 'owntime' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                                Z własnego przedziału czasowego
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Ustawienia</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('settings/page/1'); ?>" <?php if($this->uri->segment(2) == 'page'){echo 'class="active_color"';} ?>>Strona</a>
                                        </li>
                                        <li><a href="<?= base_url('settings/seo/2'); ?>" <?php if($this->uri->segment(2) == 'seo'){echo 'class="active_color"';} ?>>SEO</a>
                                        </li>
                                        <li><a href="<?= base_url('settings/privace/3'); ?>" <?php if($this->uri->segment(2) == 'privace'){echo 'class="active_color"';} ?>>Polityka prywatności</a>
                                        </li>
                                        <li><a href="<?= base_url('settings/cookies/4'); ?>" <?php if($this->uri->segment(2) == 'cookies'){echo 'class="active_color"';} ?>>Informacja cookies</a>
                                        </li>
                                        <!-- <li><a href="<?= base_url('settings/google/5'); ?>" <?php if($this->uri->segment(2) == 'google'){echo 'class="active_color"';} ?>>Kody autoryzujące google</a>
                                        </li> -->
                                        <li><a href="<?= base_url('settings/code_head/6'); ?>" <?php if($this->uri->segment(2) == 'code_head'){echo 'class="active_color"';} ?>>Kody w sekcji HEAD</a>
                                        </li>
                                        <li><a href="<?= base_url('settings/code_footer/7'); ?>" <?php if($this->uri->segment(2) == 'code_footer'){echo 'class="active_color"';} ?>>Kody w sekcji FOOTER</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Konto</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?= base_url('users/form/update/'.$_SESSION['id']); ?>" <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(4) == $_SESSION['id']){echo 'class="active_color"';} ?>>
                                                <strong>Ustawienia konta</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('users'); ?>" <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(2) == ''){echo 'class="active_color"';} ?>>
                                                Wszystkie konta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('users/form/insert'); ?>" <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(3) == 'insert'){echo 'class="active_color"';} ?>>Dodaj nowe</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li <?php if($this->uri->segment(1) == 'admin'){echo 'class="active"';} ?>><a href="<?= base_url('admin'); ?>"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'parametrs'){echo 'class="active"';} ?>><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-app"></i> Parametry</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'articles'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Blog</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'links'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Links"><i class="notika-icon notika-paperclip"></i> Ciekawe linki</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'statistics'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Statystyki</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'settings'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-settings"></i> Ustawienia</a>
                        </li>
                        <li <?php if($this->uri->segment(1) == 'users'){echo 'class="active"';} ?>><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-support"></i> Konto</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'parametrs'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('parametrs'); ?>" 
                                        <?php if($this->uri->segment(1) == 'parametrs' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                        <strong>Zobacz wszystkie</strong>
                                    </a>
                                </li>
                                <?php foreach ($parametrs as $v): ?>
                                <li>
                                    <a href="<?= base_url('parametrs/form/update/'.$v->id); ?>" 
                                        <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'parametrs'){echo 'class="active_color"';} ?>>
                                        <?= $v->title; ?>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'articles'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('articles'); ?>" 
                                        <?php if($this->uri->segment(1) == 'articles' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                        <strong>Zobacz wszystkie</strong>
                                    </a>
                                </li>
                                <?php foreach ($articles as $v): ?>
                                <li>
                                    <a href="<?= base_url('articles/form/update/'.$v->id); ?>" 
                                        <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'articles'){echo 'class="active_color"';} ?>>
                                        <?= $v->title; ?>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div id="Links" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'links'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('links'); ?>" 
                                        <?php if($this->uri->segment(1) == 'links' && $this->uri->segment(3) == ''){echo 'class="active_color"';} ?>>
                                        <strong>Zobacz wszystkie</strong>
                                    </a>
                                </li>
                                <?php foreach ($links as $v): ?>
                                <li>
                                    <a href="<?= base_url('links/form/update/'.$v->id); ?>" 
                                        <?php if($this->uri->segment(4) == $v->id && $this->uri->segment(1) == 'links'){echo 'class="active_color"';} ?>>
                                        <?= $v->title; ?>
                                    </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'statistics'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('statistics'); ?>"
                                    <?php if($this->uri->segment(1) == 'statistics' && $this->uri->segment(2) == ''){echo 'class="active_color"';} ?>>
                                    <strong>Zobacz aktualne</strong>
                                </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/yesterday'); ?>" <?php if($this->uri->segment(2) == 'yesterday' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z wczoraj
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/lastweek'); ?>" <?php if($this->uri->segment(2) == 'lastweek' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z poprzedniego tygodnia
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/lastmonth'); ?>" <?php if($this->uri->segment(2) == 'lastmonth' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z poprzedniego miesiąca
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('statistics/owntime'); ?>" <?php if($this->uri->segment(2) == 'owntime' && $this->uri->segment(1) == 'statistics'){echo 'class="active_color"';} ?>>
                                        Z własnego przedziału czasowego
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'settings'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('settings/page/1'); ?>" <?php if($this->uri->segment(2) == 'page'){echo 'class="active_color"';} ?>>Strona</a>
                                </li>
                                <li><a href="<?= base_url('settings/seo/2'); ?>" <?php if($this->uri->segment(2) == 'seo'){echo 'class="active_color"';} ?>>SEO</a>
                                </li>
                                <li><a href="<?= base_url('settings/privace/3'); ?>" <?php if($this->uri->segment(2) == 'privace'){echo 'class="active_color"';} ?>>Polityka prywatności</a>
                                </li>
                                <li><a href="<?= base_url('settings/cookies/4'); ?>" <?php if($this->uri->segment(2) == 'cookies'){echo 'class="active_color"';} ?>>Informacja cookies</a>
                                </li>
                                <!-- <li><a href="<?= base_url('settings/google/5'); ?>" <?php if($this->uri->segment(2) == 'google'){echo 'class="active_color"';} ?>>Kody autoryzujące google</a>
                                </li> -->
                                <li><a href="<?= base_url('settings/code_head/6'); ?>" <?php if($this->uri->segment(2) == 'code_head'){echo 'class="active_color"';} ?>>Kody w sekcji HEAD</a>
                                </li>
                                <li><a href="<?= base_url('settings/code_footer/7'); ?>" <?php if($this->uri->segment(2) == 'code_footer'){echo 'class="active_color"';} ?>>Kody w sekcji FOOTER</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($this->uri->segment(1) == 'users'){echo 'active';} ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('users/form/update/'.$_SESSION['id']); ?>" <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(4) == $_SESSION['id']){echo 'class="active_color"';} ?>>
                                        <strong>Ustawienia konta</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('users'); ?>" <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(2) == ''){echo 'class="active_color"';} ?>>
                                        Wszystkie konta
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('users/form/insert'); ?>" <?php if($this->uri->segment(1) == 'users' && $this->uri->segment(3) == 'insert'){echo 'class="active_color"';} ?>>Dodaj nowe</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->