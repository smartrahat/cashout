<?php $__env->startSection('title','AdminLTE 2 | Advance Form Elements'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Advanced Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Select2</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Minimal')); ?>

                            <?php echo e(Form::select('minimal',$repository->states(),null,['class'=>'form-control select2','style'=>'width:100%'])); ?>

                            
                                
                                
                                
                                
                                
                                
                                
                            
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Disabled')); ?>

                            <?php echo e(Form::select('disabled',$repository->states(),null,['class'=>'form-control select2','style'=>'width:100%','disabled'])); ?>

                            
                                
                                
                                
                                
                                
                                
                                
                            
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Multiple')); ?>

                            <?php echo e(Form::select('multiple',$repository->states(),null,['class'=>'form-control select2','data-placeholder'=>'Select a State','style'=>'width:100%','multiple'])); ?>

                            
                                
                                
                                
                                
                                
                                
                                
                            
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Disabled Result')); ?>

                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                the plugin.
            </div>
        </div>
        <!-- /.box -->

        <div class="row">
            <div class="col-md-6">

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Input masks</h3>
                    </div>
                    <div class="box-body">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Date masks:')); ?>


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                
                                <?php echo e(Form::text('dataMask',null,['class'=>'form-control','data-inputmask'=>'"alias": "dd/mm/yyyy"','data-mask'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date mm/dd/yyyy -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                
                                <?php echo e(Form::text('dataMask1',null,['class'=>'form-control','data-inputmask'=>'"alias": "mm/dd/yyyy"','data-mask'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('US phone mask:')); ?>


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                
                                <?php echo e(Form::text('dataMask2',null,['class'=>'form-control','data-inputmask'=>'"mask": "(999) 999-9999"','data-mask'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Intl US phone mask:')); ?>


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                
                                <?php echo e(Form::text('dataMask3',null,['class'=>'form-control','data-inputmask'=>'"mask": ["999-999-9999 [x99999]", "+099 99 99 9999[9]-9999"]','data-mask'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- IP mask -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('IP mask:')); ?>


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                
                                <?php echo e(Form::text('dataMask4',null,['class'=>'form-control','data-inputmask'=>'"alias": "ip"','data-mask'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Color & Time Picker</h3>
                    </div>
                    <div class="box-body">
                        <!-- Color Picker -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Color picker:')); ?>

                            
                            <?php echo e(Form::text('colorPicker',null,['class'=>'form-control my-colorpicker1'])); ?>

                        </div>
                        <!-- /.form group -->

                        <!-- Color Picker -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Color picker with addon:')); ?>


                            <div class="input-group my-colorpicker2">
                                
                                <?php echo e(Form::text('colorPicker1',null,['class'=>'form-control'])); ?>


                                <div class="input-group-addon">
                                    <i></i>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- time Picker -->
                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                                
                                <?php echo e(Form::label('Time picker:')); ?>


                                <div class="input-group">
                                    
                                    <?php echo e(Form::text('timePicker',null,['class'=>'form-control timepicker'])); ?>


                                    <div class="input-group-addon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Date picker</h3>
                    </div>
                    <div class="box-body">
                        <!-- Date -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Date:')); ?>


                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                
                                <?php echo e(Form::text('datePicker',null,['class'=>'form-control pull-right','id'=>'datepicker'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date range -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Date range:')); ?>


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                
                                <?php echo e(Form::text('dateRange',null,['class'=>'form-control pull-right','id'=>'reservation'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date and time range -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Date and time range:')); ?>


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="far fa-clock"></i>
                                </div>
                                
                                <?php echo e(Form::text('dateTimeRange',null,['class'=>'form-control pull-right','id'=>'reservationtime'])); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date and time range -->
                        <div class="form-group">
                            
                            <?php echo e(Form::label('Date range button:')); ?>


                            <div class="input-group">
                                <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                                    <span><i class="fas fa-calendar-alt"></i> Date range picker</span>
                                    <i class="fas fa-caret-down"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- iCheck -->
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
                    </div>
                    <div class="box-body">
                        <!-- Minimal style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox1',1,true,['class'=>'minimal'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox2',1,null,['class'=>'minimal'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox3',1,null,['class'=>'minimal','disabled'])); ?>

                                Minimal skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                
                                <?php echo e(Form::radio('r1',1,true,['class'=>'minimal'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::radio('r1',1,null,['class'=>'minimal'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::radio('r1',1,null,['class'=>'minimal','disabled'])); ?>

                                Minimal skin radio
                            </label>
                        </div>

                        <!-- Minimal red style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox4',1,true,['class'=>'minimal-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox5',1,null,['class'=>'minimal-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox6',1,null,['class'=>'minimal-red','disabled'])); ?>

                                Minimal red skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                
                                <?php echo e(Form::radio('r2',1,true,['class'=>'minimal-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::radio('r2',1,null,['class'=>'minimal-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::radio('r2',1,null,['class'=>'minimal-red','disabled'])); ?>

                                Minimal red skin radio
                            </label>
                        </div>

                        <!-- Minimal red style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox7',1,true,['class'=>'flat-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox8',1,null,['class'=>'flat-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::checkbox('checkbox9',1,null,['class'=>'flat-red','disabled'])); ?>

                                Flat green skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                
                                <?php echo e(Form::radio('r3',1,true,['class'=>'flat-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::radio('r3',1,null,['class'=>'flat-red'])); ?>

                            </label>
                            <label>
                                
                                <?php echo e(Form::radio('r3',1,null,['class'=>'flat-red','disabled'])); ?>

                                Flat green skin radio
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/all.css')); ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')); ?>">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/select2/dist/css/select2.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- Select2 -->
    <script src="<?php echo e(asset('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
    <!-- InputMask -->
    <script src="<?php echo e(asset('plugins/input-mask/jquery.inputmask.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/input-mask/jquery.inputmask.date.extensions.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>
    <!-- date-range-picker -->
    <script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo e(asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>

    <!-- Page script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
            //Money Euro
            $('[data-mask]').inputmask();

            //Date range picker
            $('#reservation').daterangepicker();
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            );

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            });

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            });

            //Colorpicker
            $('.my-colorpicker1').colorpicker();
            //color picker with addon
            $('.my-colorpicker2').colorpicker();

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            })
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fixed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>