<?php $__env->startSection('title','AdminLTE 2 | General Form Elements'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            General Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <?php echo e(Form::open(['action'=>'FormController@general','role'=>'form','method'=>'post','files'=>true])); ?>

                        <div class="box-body">
                            <div class="form-group">
                                
                                <?php echo e(Form::label('exampleInputEmail1','Email address')); ?>

                                
                                <?php echo e(Form::text('exampleInputEmail1',null,['class'=>'form-control','placeholder'=>'Enter email'])); ?>

                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('exampleInputPassword1','Password')); ?>

                                
                                <?php echo e(Form::password('password',['class'=>'form-control','id'=>'exampleInputPassword1','placeholder'=>'Password'])); ?>

                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('exampleInputFile','File input')); ?>

                                
                                <?php echo e(Form::file('file',['id'=>'exampleInputFile'])); ?>


                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    
                                    <?php echo e(Form::checkbox('checkbox')); ?>

                                    Check me out
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            
                            <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

                        </div>
                        <?php echo e(Form::close()); ?>

                </div>
                <!-- /.box -->

                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Different Height</h3>
                    </div>
                    <div class="box-body">
                        
                        <?php echo e(Form::text('input-lg',null,['class'=>'form-control input-lg','placeholder'=>'.input-lg'])); ?>

                        <br>
                        
                        <?php echo e(Form::text('default-input',null,['class'=>'form-control','placeholder'=>'Default input'])); ?>

                        <br>
                        
                        <?php echo e(Form::text('input-sm',null,['class'=>'form-control input-sm','placeholder'=>'.input-sm'])); ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Different Width</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                
                                <?php echo e(Form::text('col-xs-3',null,['class'=>'form-control','placeholder'=>'.col-xs-3'])); ?>

                            </div>
                            <div class="col-xs-4">
                                
                                <?php echo e(Form::text('col-xs-4',null,['class'=>'form-control','placeholder'=>'.col-xs-4'])); ?>

                            </div>
                            <div class="col-xs-5">
                                
                                <?php echo e(Form::text('col-xs-5',null,['class'=>'form-control','placeholder'=>'.col-xs-5'])); ?>

                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- Input addon -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Input Addon</h3>
                    </div>
                    <div class="box-body">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            
                            <?php echo e(Form::text('username',null,['class'=>'form-control','placeholder'=>'Username'])); ?>

                        </div>
                        <br>

                        <div class="input-group">
                            
                            <?php echo e(Form::text('addon-example',null,['class'=>'form-control'])); ?>

                            <span class="input-group-addon">.00</span>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            
                            <?php echo e(Form::text('addon-example1',null,['class'=>'form-control'])); ?>

                            <span class="input-group-addon">.00</span>
                        </div>

                        <h4>With icons</h4>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            
                            <?php echo e(Form::text('eamil',null,['class'=>'form-control','placeholder'=>'Email'])); ?>

                        </div>
                        <br>

                        <div class="input-group">
                            
                            <?php echo e(Form::text('addon-example2',null,['class'=>'form-control'])); ?>

                            <span class="input-group-addon"><i class="fa fa-check"></i></span>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            
                            <?php echo e(Form::text('addon-example3',null,['class'=>'form-control'])); ?>

                            <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                        </div>

                        <h4>With checkbox and radio inputs</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                        <span class="input-group-addon">
                          
                            <?php echo e(Form::checkbox('checkbox1')); ?>


                        </span>
                                    
                                    <?php echo e(Form::text('addon-example4',null,['class'=>'form-control'])); ?>

                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                        <span class="input-group-addon">
                          
                            <?php echo e(Form::radio('radio')); ?>

                        </span>
                                    
                                    <?php echo e(Form::text('addon-example6',null,['class'=>'form-control'])); ?>

                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->

                        <h4>With buttons</h4>

                        <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                
                                    
                                <?php echo e(Form::button('Action<span class="fa fa-caret-down"></span>',['class'=>'btn btn-warning dropdown-toggle','data-toggle'=>'dropdown'])); ?>

                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            
                            <?php echo e(Form::text('group-btn-example',null,['class'=>'form-control'])); ?>

                        </div>
                        <!-- /input-group -->
                        <p class="margin">Normal</p>

                        <div class="input-group">
                            <div class="input-group-btn">
                                
                                <?php echo e(Form::button('Action',['class'=>'btn btn-danger'])); ?>

                            </div>
                            <!-- /btn-group -->
                            
                            <?php echo e(Form::text('group-btn-example1',null,['class'=>'form-control'])); ?>

                        </div>
                        <!-- /input-group -->
                        <p class="margin">Small <code>.input-group.input-group-sm</code></p>

                        <div class="input-group input-group-sm">
                            
                            <?php echo e(Form::text('input-group-example',null,['class'=>'form-control'])); ?>

                            <span class="input-group-btn">
                      
                                <?php echo e(Form::button('Go!',['class'=>'btn btn-info btn-flat'])); ?>

                    </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    
                        <?php echo e(Form::open(['class'=>'form-horizontal'])); ?>

                        <div class="box-body">
                            <div class="form-group">
                                
                                <?php echo e(Form::label('inputEmail3','Email',['class'=>'col-sm-2 control-label'])); ?>


                                <div class="col-sm-10">
                                    
                                    <?php echo e(Form::text('inputEmail3',null,['class'=>'form-control','id'=>'inputEmail3','placeholder'=>'Email'])); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('inputPassword3','Password',['class'=>'col-sm-2 control-label'])); ?>


                                <div class="col-sm-10">
                                    
                                    <?php echo e(Form::password('inputPassword3',['class'=>'form-control','id'=>'inputPassword3','placeholder'=>'Passowrd'])); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            
                                            <?php echo e(Form::checkbox('remember')); ?>

                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            
                            <?php echo e(Form::submit('Cancel',['class'=>'btn btn-default'])); ?>

                            
                            <?php echo e(Form::submit('Sign in',['class'=>'btn btn-info pull-right'])); ?>

                        </div>
                        <!-- /.box-footer -->
                    <?php echo e(Form::close()); ?>

                    
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">General Elements</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        
                            <?php echo e(Form::open(['role'=>'form'])); ?>

                            <!-- text input -->
                            <div class="form-group">
                                
                                <?php echo e(Form::label('text','Text')); ?>

                                
                                <?php echo e(Form::text('text',null,['class'=>'form-control','placeholder'=>'Enter ...'])); ?>

                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('disabled','Text Disabled')); ?>

                                
                                <?php echo e(Form::text('disabled',null,['class'=>'form-control','placeholder'=>'Enter ...','disabled'])); ?>

                            </div>

                            <!-- textarea -->
                            <div class="form-group">
                                
                                <?php echo e(Form::label('textarea','Texarea')); ?>

                                
                                <?php echo e(Form::textarea('textarea',null,['class'=>'form-control','placeholder'=>'Enter ...','rows'=>3])); ?>

                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('textareaDisabled','Textarea Disabled')); ?>

                                
                                <?php echo e(Form::textarea('texareaDisabled',null,['class'=>'form-control','rows'=>3,'placeholder'=>'Enter ...','disabled'])); ?>

                            </div>

                            <!-- input states -->
                            <div class="form-group has-success">
                                
                                <?php echo html_entity_decode(Form::label('inputSuccess','<i class="fa fa-check"></i> Input with success',['class'=>'control-label'])); ?>

                                
                                <?php echo e(Form::text('inputSuccess',null,['class'=>'form-control','id'=>'inputSuccess','placeholder'=>'Enter ...'])); ?>

                                <span class="help-block">Help block with success</span>
                            </div>
                            <div class="form-group has-warning">
                                
                                <?php echo html_entity_decode(Form::label('inputWarning','<i class="fa fa-bell-o"></i> Input with warning',['class'=>'control-label'])); ?>

                                
                                <?php echo e(Form::text('inputWarning',null,['class'=>'form-control','id'=>'inputWarning','placeholder'=>'Enter ...'])); ?>

                                <span class="help-block">Help block with warning</span>
                            </div>
                            <div class="form-group has-error">
                                
                                <?php echo html_entity_decode(Form::label('inputError','<i class="fa fa-times-circle-o"></i> Input with error',['class'=>'control-label'])); ?>

                                
                                <?php echo e(Form::text('inputError',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'Enter ...'])); ?>

                                <span class="help-block">Help block with error</span>
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        
                                        <?php echo e(Form::checkbox('checkbox1')); ?>

                                        Checkbox 1
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        
                                        <?php echo e(Form::checkbox('checkbox2')); ?>

                                        Checkbox 2
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        
                                        <?php echo e(Form::checkbox('checkbox3',1,null,['disabled'])); ?>

                                        Checkbox disabled
                                    </label>
                                </div>
                            </div>

                            <!-- radio -->
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        
                                        <?php echo e(Form::radio('optionsRadios','option1',true,['id'=>'optionRadios1'])); ?>

                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        
                                        <?php echo e(Form::radio('optionsRadios','option2',null,['id'=>'optionsRadios2'])); ?>

                                        Option two can be something else and selecting it will deselect option one
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        
                                        <?php echo e(Form::radio('optionsRadios','option3',null,['id'=>'optionsRadios3','disabled'])); ?>

                                        Option three is disabled
                                    </label>
                                </div>
                            </div>

                            <!-- select -->
                            <div class="form-group">
                                
                                <?php echo e(Form::label('Select')); ?>

                                <?php echo e(Form::select('select',$repository->options(),null,['class'=>'form-control'])); ?>

                                
                                    
                                    
                                    
                                    
                                    
                                
                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('Select Disabled')); ?>

                                <?php echo e(Form::select('select2',$repository->options(),null,['class'=>'form-control','disabled'])); ?>

                                
                                    
                                    
                                    
                                    
                                    
                                
                            </div>

                            <!-- Select multiple-->
                            <div class="form-group">
                                
                                <?php echo e(Form::label('Select Multiple')); ?>

                                <?php echo e(Form::select('selectMultiple',$repository->options(),null,['class'=>'form-control','multiple'])); ?>

                                
                                    
                                    
                                    
                                    
                                    
                                
                            </div>
                            <div class="form-group">
                                
                                <?php echo e(Form::label('Select Multiple Disabled')); ?>

                                <?php echo e(Form::select('selectMultipleDisabled',$repository->options(),null,['class'=>'form-control','disabled','multiple'])); ?>

                                
                                    
                                    
                                    
                                    
                                    
                                
                            </div>

                            <?php echo e(Form::close()); ?>

                        
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fixed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>