<?php $__env->startSection('title','AdminLTE 2 | Inbox'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mailbox
            <small>13 new messages</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li class="active">Mailbox</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo e(action('MailBoxController@compose')); ?>" class="btn btn-primary btn-block margin-bottom">Compose</a>

                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Folders</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="<?php echo e(action('MailBoxController@inbox')); ?>"><i class="fas fa-inbox"></i> Inbox
                                    <span class="label label-primary pull-right">12</span></a></li>
                            <li><a href="#"><i class="far fa-envelope"></i> Sent</a></li>
                            <li><a href="#"><i class="far fa-file-alt"></i> Drafts</a></li>
                            <li><a href="#"><i class="fas fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                            </li>
                            <li><a href="#"><i class="far fa-trash-alt"></i> Trash</a></li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Labels</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><i class="far fa-circle text-red"></i> Important</a></li>
                            <li><a href="#"><i class="far fa-circle text-yellow"></i> Promotions</a></li>
                            <li><a href="#"><i class="far fa-circle text-light-blue"></i> Social</a></li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Inbox</h3>

                        <div class="box-tools pull-right">
                            <div class="has-feedback">
                                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                            <div class="pull-right">
                                1-50/200
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">5 mins ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">28 mins ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">11 hours ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">15 hours ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">Yesterday</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">2 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">2 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">2 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">2 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">2 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">4 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">12 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="far fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">12 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">14 days ago</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="<?php echo e(action('MailBoxController@read')); ?>">Alexander Pierce</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                    </td>
                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                    <td class="mailbox-date">15 days ago</td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                            <div class="pull-right">
                                1-50/200
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                    </div>
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- iCheck -->
    <script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
    <!-- Page Script -->
    <script>
        $(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            $(".mailbox-star").click(function (e) {
                e.preventDefault();
                //detect type
                var $this = $(this).find("a > i");
                var glyph = $this.hasClass("glyphicon");
                var fa = $this.hasClass("fa");

                //Switch states
                if (glyph) {
                    $this.toggleClass("glyphicon-star");
                    $this.toggleClass("glyphicon-star-empty");
                }

                if (fa) {
                    $this.toggleClass("fa-star");
                    $this.toggleClass("fa-star-o");
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fixed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>