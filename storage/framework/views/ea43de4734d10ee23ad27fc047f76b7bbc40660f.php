<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fas fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fas fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?php echo e(isActive(['dashboard*','/'])); ?>">
            <a href="#">
                <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('dashboard2')); ?>"><a href="<?php echo e(action('DashboardController@index2')); ?>"><i class="far fa-circle"></i> Dashboard v1</a></li>
                <li class="<?php echo e(isActive('/')); ?>"><a href="<?php echo e(action('DashboardController@index')); ?>"><i class="far fa-circle"></i> Dashboard v2</a></li>
            </ul>
        </li>
        <li class="treeview <?php echo e(isActive('layout*')); ?>">
            <a href="#">
                <i class="far fa-copy"></i>
                <span>Layout Options</span>
                <span class="pull-right-container">
              <span class="badge badge-info pull-right">4</span>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('layout/top-navigation')); ?>">
                    <a href="<?php echo e(action('LayoutController@topNav')); ?>"><i class="far fa-circle"></i> Top Navigation</a>
                </li>
                <li class="<?php echo e(isActive('layout/boxed')); ?>">
                    <a href="<?php echo e(action('LayoutController@boxed')); ?>"><i class="far fa-circle"></i> Boxed</a>
                </li>
                <li class="<?php echo e(isActive('layout/fixed')); ?>">
                    <a href="<?php echo e(action('LayoutController@fixed')); ?>"><i class="far fa-circle"></i> Fixed</a>
                </li>
                <li class="<?php echo e(isActive('layout/collapse-sidebar')); ?>">
                    <a href="<?php echo e(action('LayoutController@sidebarCollapse')); ?>"><i class="far fa-circle"></i> Collapsed Sidebar</a>
                </li>
            </ul>
        </li>
        <li class="<?php echo e(isActive('widgets')); ?>">
            <a href="<?php echo e(action('WidgetController@index')); ?>">
                <i class="fas fa-th"></i> <span>Widgets</span>
                <span class="pull-right-container">
              <small class="badge pull-right bg-green">new</small>
            </span>
            </a>
        </li>
        <li class="treeview <?php echo e(isActive('chart*')); ?>">
            <a href="#">
                <i class="fas fa-chart-pie"></i>
                <span>Charts</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('chart/chartjs')); ?>">
                    <a href="<?php echo e(action('ChartController@chartjs')); ?>"><i class="far fa-circle"></i> ChartJS</a>
                </li>
                <li class="<?php echo e(isActive('chart/morris')); ?>">
                    <a href="<?php echo e(action('ChartController@morris')); ?>"><i class="far fa-circle"></i> Morris</a>
                </li>
                <li class="<?php echo e(isActive('chart/flot')); ?>">
                    <a href="<?php echo e(action('ChartController@flot')); ?>"><i class="far fa-circle"></i> Flot</a>
                </li>
                <li class="<?php echo e(isActive('chart/inline-chart')); ?>">
                    <a href="<?php echo e(action('ChartController@inlineChart')); ?>"><i class="far fa-circle"></i> Inline charts</a>
                </li>
            </ul>
        </li>
        <li class="treeview <?php echo e(isActive('ui*')); ?>">
            <a href="#">
                <i class="fas fa-laptop"></i>
                <span>UI Elements</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('ui/general')); ?>"><a href="<?php echo e(action('UIElementsController@general')); ?>"><i class="far fa-circle"></i> General</a></li>
                <li class="<?php echo e(isActive('ui/icons')); ?>"><a href="<?php echo e(action('UIElementsController@icons')); ?>"><i class="far fa-circle"></i> Icons</a></li>
                <li class="<?php echo e(isActive('ui/buttons')); ?>"><a href="<?php echo e(action('UIElementsController@buttons')); ?>"><i class="far fa-circle"></i> Buttons</a></li>
                <li class="<?php echo e(isActive('ui/sliders')); ?>"><a href="<?php echo e(action('UIElementsController@sliders')); ?>"><i class="far fa-circle"></i> Sliders</a></li>
                <li class="<?php echo e(isActive('ui/timeline')); ?>"><a href="<?php echo e(action('UIElementsController@timeline')); ?>"><i class="far fa-circle"></i> Timeline</a></li>
                <li class="<?php echo e(isActive('ui/modals')); ?>"><a href="<?php echo e(action('UIElementsController@modals')); ?>"><i class="far fa-circle"></i> Modals</a></li>
            </ul>
        </li>
        <li class="treeview <?php echo e(isActive('form*')); ?>">
            <a href="#">
                <i class="fas fa-edit"></i> <span>Forms</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('form/general')); ?>"><a href="<?php echo e(action('FormController@general')); ?>"><i class="far fa-circle"></i> General Elements</a></li>
                <li class="<?php echo e(isActive('form/advance')); ?>"><a href="<?php echo e(action('FormController@advance')); ?>"><i class="far fa-circle"></i> Advanced Elements</a></li>
                <li class="<?php echo e(isActive('form/editor')); ?>"><a href="<?php echo e(action('FormController@editor')); ?>"><i class="far fa-circle"></i> Editors</a></li>
            </ul>
        </li>
        <li class="treeview <?php echo e(isActive('table*')); ?>">
            <a href="#">
                <i class="fas fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('table/simple')); ?>"><a href="<?php echo e(action('TableController@simple')); ?>"><i class="far fa-circle"></i> Simple tables</a></li>
                <li class="<?php echo e(isActive('table/data')); ?>"><a href="<?php echo e(action('TableController@data')); ?>"><i class="far fa-circle"></i> Data tables</a></li>
            </ul>
        </li>
        <li class="<?php echo e(isActive('calendar')); ?>">
            <a href="<?php echo e(action('CalendarController@index')); ?>">
                <i class="fas fa-calendar-alt"></i> <span>Calendar</span>
                <span class="pull-right-container">
              <small class="badge pull-right bg-red">3</small>
              <small class="badge pull-right bg-blue">17</small>
            </span>
            </a>
        </li>
        <li class="treeview <?php echo e(isActive('mail*')); ?>">
            <a href="<?php echo e(asset('MailBoxController@index')); ?>">
                <i class="fas fa-envelope"></i> <span>Mailbox</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('mail/inbox')); ?>">
                    <a href="<?php echo e(action('MailBoxController@inbox')); ?>">Inbox
                        <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
                    </a>
                </li>
                <li class="<?php echo e(isActive('mail/compose')); ?>"><a href="<?php echo e(action('MailBoxController@compose')); ?>">Compose</a></li>
                <li class="<?php echo e(isActive('mail/read')); ?>"><a href="<?php echo e(action('MailBoxController@read')); ?>">Read</a></li>
            </ul>
        </li>
        <li class="treeview <?php echo e(isActive('example*')); ?>">
            <a href="#">
                <i class="fas fa-folder"></i> <span>Examples</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo e(isActive('example/invoice')); ?>"><a href="<?php echo e(action('ExamplesController@invoice')); ?>"><i class="far fa-circle"></i> Invoice</a></li>
                <li class="<?php echo e(isActive('example/profile')); ?>"><a href="<?php echo e(action('ExamplesController@profile')); ?>"><i class="far fa-circle"></i> Profile</a></li>
                <li class="<?php echo e(isActive('example/login')); ?>"><a href="<?php echo e(action('ExamplesController@login')); ?>"><i class="far fa-circle"></i> Login</a></li>
                <li class="<?php echo e(isActive('example/register')); ?>"><a href="<?php echo e(action('ExamplesController@register')); ?>"><i class="far fa-circle"></i> Register</a></li>
                <li class="<?php echo e(isActive('example/reset')); ?>"><a href="<?php echo e(action('ExamplesController@reset')); ?>"><i class="far fa-circle"></i> Forget Password</a></li>
                <li class="<?php echo e(isActive('example/lockscreen')); ?>"><a href="<?php echo e(action('ExamplesController@lockscreen')); ?>"><i class="far fa-circle"></i> Lockscreen</a></li>
                <li class="<?php echo e(isActive('example/404')); ?>"><a href="<?php echo e(action('ExamplesController@error404')); ?>"><i class="far fa-circle"></i> 404 Error</a></li>
                <li class="<?php echo e(isActive('example/500')); ?>"><a href="<?php echo e(action('ExamplesController@error500')); ?>"><i class="far fa-circle"></i> 500 Error</a></li>
                <li class="<?php echo e(isActive('example/blank')); ?>"><a href="<?php echo e(action('ExamplesController@blank')); ?>"><i class="far fa-circle"></i> Blank Page</a></li>
                <li class="<?php echo e(isActive('example/pace')); ?>"><a href="<?php echo e(action('ExamplesController@pace')); ?>"><i class="far fa-circle"></i> Pace Page</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fas fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="far fa-circle"></i> Level One</a></li>
                <li class="treeview">
                    <a href="#"><i class="far fa-circle"></i> Level One
                        <span class="pull-right-container">
                  <i class="fas fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="far fa-circle"></i> Level Two</a></li>
                        <li class="treeview">
                            <a href="#"><i class="far fa-circle"></i> Level Two
                                <span class="pull-right-container">
                      <i class="fas fa-angle-left pull-right"></i>
                    </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="far fa-circle"></i> Level Three</a></li>
                                <li><a href="#"><i class="far fa-circle"></i> Level Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="far fa-circle"></i> Level One</a></li>
            </ul>
        </li>
        <li><a href="https://codecanyon.net/item/adminlte-laravel/20835218"><i class="fas fa-shopping-cart"></i> <span>Buy Now</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="far fa-circle text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="far fa-circle text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="far fa-circle text-aqua"></i> <span>Information</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->