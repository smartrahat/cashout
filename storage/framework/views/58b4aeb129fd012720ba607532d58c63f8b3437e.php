<?php $__env->startSection('title','AdminLTE 2 | Editors'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Text Editors
            <small>Advanced form element</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">CK Editor
                            <small>Advanced and full of features</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <?php echo e(Form::open()); ?>

                        <?php echo e(Form::textarea('editor1','This is my textarea to be replaced with CKEditor.',['id'=>'editor1','rows'=>10,'cols'=>80])); ?>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Bootstrap WYSIHTML5
                            <small>Simple and fast</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <?php echo e(Form::open()); ?>

                        <?php echo e(Form::textarea('editor2',null,['class'=>'textarea','placeholder'=>'Place some text here','style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'])); ?>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- CK Editor -->
    <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fixed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>