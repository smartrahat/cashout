@extends('layouts.fixed')

@section('title','AdminLTE 2 | Buttons')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Buttons
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">UI</a></li>
            <li class="active">Buttons</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fas fa-edit"></i>

                        <h3 class="box-title">Buttons</h3>
                    </div>
                    <div class="box-body pad table-responsive">
                        <p>Various types of buttons. Using the base class <code>.btn</code></p>
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Normal</th>
                                <th>Large <code>.btn-lg</code></th>
                                <th>Small <code>.btn-sm</code></th>
                                <th>X-Small <code>.btn-xs</code></th>
                                <th>Flat <code>.btn-flat</code></th>
                                <th>Disabled <code>.disabled</code></th>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::button('Default',['class'=>'btn btn-block btn-default']) }}
                                </td>
                                <td>
                                    {{ Form::button('Default',['class'=>'btn btn-block btn-default btn-lg']) }}
                                </td>
                                <td>
                                    {{ Form::button('Default',['class'=>'btn btn-block btn-default btn-sm']) }}
                                </td>
                                <td>
                                    {{ Form::button('Default',['class'=>'btn btn-block btn-default btn-xs']) }}
                                </td>
                                <td>
                                    {{ Form::button('Default',['class'=>'btn btn-block btn-default btn-flat']) }}
                                </td>
                                <td>
                                    {{ Form::button('Default',['class'=>'btn btn-block btn-default disabled']) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::button('Primary',['class'=>'btn btn-block btn-primary']) }}
                                </td>
                                <td>
                                    {{ Form::button('Primary',['class'=>'btn btn-block btn-primary btn-lg']) }}
                                </td>
                                <td>
                                    {{ Form::button('Primary',['class'=>'btn btn-block btn-primary btn-sm']) }}
                                </td>
                                <td>
                                    {{ Form::button('Primary',['class'=>'btn btn-block btn-primary btn-xs']) }}
                                </td>
                                <td>
                                    {{ Form::button('Primary',['class'=>'btn btn-block btn-primary btn-flat']) }}
                                </td>
                                <td>
                                    {{ Form::button('Primary',['class'=>'btn btn-block btn-primary disabled']) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::button('Success',['class'=>'btn btn-block btn-success']) }}
                                </td>
                                <td>
                                    {{ Form::button('Success',['class'=>'btn btn-block btn-success btn-lg']) }}
                                </td>
                                <td>
                                    {{ Form::button('Success',['class'=>'btn btn-block btn-success btn-sm']) }}
                                </td>
                                <td>
                                    {{ Form::button('Success',['class'=>'btn btn-block btn-success btn-xs']) }}
                                </td>
                                <td>
                                    {{ Form::button('Success',['class'=>'btn btn-block btn-success btn-flat']) }}
                                </td>
                                <td>
                                    {{ Form::button('Success',['class'=>'btn btn-block btn-success disabled']) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::button('Info',['class'=>'btn btn-block btn-info']) }}
                                </td>
                                <td>
                                    {{ Form::button('Info',['class'=>'btn btn-block btn-info btn-lg']) }}
                                </td>
                                <td>
                                    {{ Form::button('Info',['class'=>'btn btn-block btn-info btn-sm']) }}
                                </td>
                                <td>
                                    {{ Form::button('Info',['class'=>'btn btn-block btn-info btn-xs']) }}
                                </td>
                                <td>
                                    {{ Form::button('Info',['class'=>'btn btn-block btn-info btn-flat']) }}
                                </td>
                                <td>
                                    {{ Form::button('Info',['class'=>'btn btn-block btn-info disabled']) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::button('Danger',['class'=>'btn btn-block btn-danger']) }}
                                </td>
                                <td>
                                    {{ Form::button('Danger',['class'=>'btn btn-block btn-danger btn-lg']) }}
                                </td>
                                <td>
                                    {{ Form::button('Danger',['class'=>'btn btn-block btn-danger btn-sm']) }}
                                </td>
                                <td>
                                    {{ Form::button('Danger',['class'=>'btn btn-block btn-danger btn-xs']) }}
                                </td>
                                <td>
                                    {{ Form::button('Danger',['class'=>'btn btn-block btn-danger btn-flat']) }}
                                </td>
                                <td>
                                    {{ Form::button('Danger',['class'=>'btn btn-block btn-danger disabled']) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::button('Warning',['class'=>'btn btn-block btn-warning']) }}
                                </td>
                                <td>
                                    {{ Form::button('Warning',['class'=>'btn btn-block btn-warning btn-lg']) }}
                                </td>
                                <td>
                                    {{ Form::button('Warning',['class'=>'btn btn-block btn-warning btn-sm']) }}
                                </td>
                                <td>
                                    {{ Form::button('Warning',['class'=>'btn btn-block btn-warning btn-xs']) }}
                                </td>
                                <td>
                                    {{ Form::button('Warning',['class'=>'btn btn-block btn-warning btn-flat']) }}
                                </td>
                                <td>
                                    {{ Form::button('Warning',['class'=>'btn btn-block btn-warning disabled']) }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- ./row -->
        <div class="row">
            <div class="col-md-6">
                <!-- Block buttons -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Block Buttons</h3>
                    </div>
                    <div class="box-body">
                        {{ Form::button('.btn-block',['class'=>'btn btn-default btn-block']) }}
                        {{ Form::button('.btn-block .btn-flat',['class'=>'btn btn-default btn-block btn-flat']) }}
                        {{ Form::button('.btn-block .btn-sm',['class'=>'btn btn-default btn-block btn-sm']) }}
                    </div>
                </div>
                <!-- /.box -->

                <!-- Horizontal grouping -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Horizontal Button Group</h3>
                    </div>
                    <div class="box-body table-responsive pad">
                        <p>
                            Horizontal button groups are easy to create with bootstrap. Just add your buttons
                            inside <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code>
                        </p>

                        <table class="table table-bordered">
                            <tr>
                                <th>Button</th>
                                <th>Icons</th>
                                <th>Flat</th>
                                <th>Dropdown</th>
                            </tr>
                            <!-- Default -->
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('Left',['class'=>'btn btn-default']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-default']) }}
                                        {{ Form::button('Right',['class'=>'btn btn-default']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {!! Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-default']) !!}
                                        {!! Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-default']) !!}
                                        {!! Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-default']) !!}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-default btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-default btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-default btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button(1,['class'=>'btn btn-default']) }}
                                        {{ Form::button(2,['class'=>'btn btn-default']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-default dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ./default -->
                            <!-- Info -->
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('Left',['class'=>'btn btn-info']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-info']) }}
                                        {{ Form::button('Right',['class'=>'btn btn-info']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-info']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-info']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-info']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-info btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-info btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-info btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button(1,['class'=>'btn btn-info']) }}
                                        {{ Form::button(2,['class'=>'btn btn-info']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-info dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /. info -->
                            <!-- /.danger -->
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('Left',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('Right',['class'=>'btn btn-danger']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('1',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('2',['class'=>'btn btn-danger']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-danger dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.danger -->
                            <!-- warning -->
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('Left',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('Right',['class'=>'btn btn-warning']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-warning']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-warning btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-warning btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-warning btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button(1,['class'=>'btn btn-warning']) }}
                                        {{ Form::button(2,['class'=>'btn btn-warning']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-warning dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.warning -->
                            <!-- success -->
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('Left',['class'=>'btn btn-success']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-success']) }}
                                        {{ Form::button('Right',['class'=>'btn btn-success']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-success']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-success']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-success']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-success btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-success btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-success btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::button(1,['class'=>'btn btn-success']) }}
                                        {{ Form::button(2,['class'=>'btn btn-success']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-success dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.success -->
                        </table>
                    </div>
                </div>
                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Button Addon</h3>
                    </div>
                    <div class="box-body">
                        <p>With dropdown</p>

                        <div class="input-group margin">
                            <div class="input-group-btn">
                                {{ Form::button('Action <span class="fas fa-caret-down"></span>',['class'=>'btn btn-default dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            {{ Form::text('',null,['class'=>'form-control']) }}
                        </div>
                        <!-- /input-group -->
                        <p>Normal</p>

                        <div class="input-group margin">
                            <div class="input-group-btn">
                                {{ Form::button('Action',['class'=>'btn btn-danger']) }}
                            </div>
                            <!-- /btn-group -->
                            {{ Form::text('',null,['class'=>'form-control']) }}
                        </div>
                        <!-- /input-group -->
                        <p>Flat</p>

                        <div class="input-group margin">
                            {{ Form::text('',null,['class'=>'form-control']) }}
                            <span class="input-group-btn">
                                {{ Form::button('Go!',['class'=>'btn btn-info btn-flat']) }}
                    </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- split buttons box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Split buttons</h3>
                    </div>
                    <div class="box-body">
                        <!-- Split button -->
                        <p>Normal split buttons:</p>

                        <div class="margin">
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-default']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-default dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-info']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-info dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-danger']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-danger dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-success']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-success dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-warning']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-warning dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- flat split buttons -->
                        <p>Flat split buttons:</p>

                        <div class="margin">
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-default btn-flat']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-default btn-flat dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-info btn-flat']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-info btn-flat dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-danger btn-flat']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-danger btn-flat dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-success btn-flat']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-success btn-flat dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                {{ Form::button('Action',['class'=>'btn btn-warning btn-flat']) }}
                                {{ Form::button('<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>',['class'=>'btn btn-warning btn-flat dropdown-toggle','data-toggle'=>'dropdown']) }}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- end split buttons box -->

                <!-- social buttons -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Social Buttons (By <a href="https://github.com/lipis/bootstrap-social">Lipis</a>)
                        </h3>
                    </div>
                    <div class="box-body">
                        <a class="btn btn-block btn-social btn-bitbucket">
                            <i class="fab fa-bitbucket"></i> Sign in with Bitbucket
                        </a>
                        <a class="btn btn-block btn-social btn-dropbox">
                            <i class="fab fa-dropbox"></i> Sign in with Dropbox
                        </a>
                        <a class="btn btn-block btn-social btn-facebook">
                            <i class="fab fa-facebook"></i> Sign in with Facebook
                        </a>
                        <a class="btn btn-block btn-social btn-flickr">
                            <i class="fab fa-flickr"></i> Sign in with Flickr
                        </a>
                        <a class="btn btn-block btn-social btn-foursquare">
                            <i class="fab fa-foursquare"></i> Sign in with Foursquare
                        </a>
                        <a class="btn btn-block btn-social btn-github">
                            <i class="fab fa-github"></i> Sign in with GitHub
                        </a>
                        <a class="btn btn-block btn-social btn-google">
                            <i class="fab fa-google-plus"></i> Sign in with Google
                        </a>
                        <a class="btn btn-block btn-social btn-instagram">
                            <i class="fab fa-instagram"></i> Sign in with Instagram
                        </a>
                        <a class="btn btn-block btn-social btn-linkedin">
                            <i class="fab fa-linkedin"></i> Sign in with LinkedIn
                        </a>
                        <a class="btn btn-block btn-social btn-tumblr">
                            <i class="fab fa-tumblr"></i> Sign in with Tumblr
                        </a>
                        <a class="btn btn-block btn-social btn-twitter">
                            <i class="fab fa-twitter"></i> Sign in with Twitter
                        </a>
                        <a class="btn btn-block btn-social btn-vk">
                            <i class="fab fa-vk"></i> Sign in with VK
                        </a>
                        <br>

                        <div class="text-center">
                            <a class="btn btn-social-icon btn-bitbucket"><i class="fab fa-bitbucket"></i></a>
                            <a class="btn btn-social-icon btn-dropbox"><i class="fab fa-dropbox"></i></a>
                            <a class="btn btn-social-icon btn-facebook"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-flickr"><i class="fab fa-flickr"></i></a>
                            <a class="btn btn-social-icon btn-foursquare"><i class="fab fa-foursquare"></i></a>
                            <a class="btn btn-social-icon btn-github"><i class="fab fa-github"></i></a>
                            <a class="btn btn-social-icon btn-google"><i class="fab fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-instagram"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-social-icon btn-linkedin"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-social-icon btn-tumblr"><i class="fab fa-tumblr"></i></a>
                            <a class="btn btn-social-icon btn-twitter"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-vk"><i class="fab fa-vk"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <!-- Application buttons -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Application Buttons</h3>
                    </div>
                    <div class="box-body">
                        <p>Add the classes <code>.btn.btn-app</code> to an <code>&lt;a></code> tag to achieve the following:</p>
                        <a class="btn btn-app">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a class="btn btn-app">
                            <i class="fas fa-play"></i> Play
                        </a>
                        <a class="btn btn-app">
                            <i class="fas fa-repeat"></i> Repeat
                        </a>
                        <a class="btn btn-app">
                            <i class="fas fa-pause"></i> Pause
                        </a>
                        <a class="btn btn-app">
                            <i class="fas fa-save"></i> Save
                        </a>
                        <a class="btn btn-app">
                            <span class="badge bg-yellow">3</span>
                            <i class="fas fa-bullhorn"></i> Notifications
                        </a>
                        <a class="btn btn-app">
                            <span class="badge bg-green">300</span>
                            <i class="fas fa-barcode"></i> Products
                        </a>
                        <a class="btn btn-app">
                            <span class="badge bg-purple">891</span>
                            <i class="fas fa-users"></i> Users
                        </a>
                        <a class="btn btn-app">
                            <span class="badge bg-teal">67</span>
                            <i class="fas fa-inbox"></i> Orders
                        </a>
                        <a class="btn btn-app">
                            <span class="badge bg-aqua">12</span>
                            <i class="fas fa-envelope"></i> Inbox
                        </a>
                        <a class="btn btn-app">
                            <span class="badge bg-red">531</span>
                            <i class="far fa-heart"></i> Likes
                        </a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- Various colors -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Different colors</h3>
                    </div>
                    <div class="box-body">
                        <p>Mix and match with various background colors. Use base class <code>.btn</code> and add any available
                            <code>.bg-*</code> class</p>
                        <!-- You may notice a .margin class added
                        here but that's only to make the content
                        display correctly without having to use a table-->
                        <p>
                            {{ Form::button('.btn.bg-maroon.btn-flat',['class'=>'btn bg-maroon btn-flat margin']) }}
                            {{ Form::button('.btn.bg-purple.btn-flat',['class'=>'btn bg-purple btn-flat margin']) }}
                            {{ Form::button('.btn.bg-navy.btn-flat',['class'=>'btn bg-navy btn-flat margin']) }}
                            {{ Form::button('.btn.bg-orange.btn-flat',['class'=>'btn bg-orange btn-flat margin']) }}
                            {{ Form::button('.btn.bg-olive.btn-flat',['class'=>'btn bg-olive btn-flat margin']) }}
                        </p>

                        <p>
                            {{ Form::button('.btn.bg-maroon',['class'=>'btn bg-maroon margin']) }}
                            {{ Form::button('.btn.bg-purple',['class'=>'btn bg-purple margin']) }}
                            {{ Form::button('.btn.bg-navy',['class'=>'btn bg-navy margin']) }}
                            {{ Form::button('.btn.bg-orange',['class'=>'btn bg-orange margin']) }}
                            {{ Form::button('.btn.bg-olive',['class'=>'btn bg-olive margin']) }}
                        </p>
                    </div>
                </div>
                <!-- /.box -->

                <!-- Vertical grouping -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Vertical Button Group</h3>
                    </div>
                    <div class="box-body table-responsive pad">

                        <p>
                            Vertical button groups are easy to create with bootstrap. Just add your buttons
                            inside <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code>
                        </p>

                        <table class="table table-bordered">
                            <tr>
                                <th>Button</th>
                                <th>Icons</th>
                                <th>Flat</th>
                                <th>Dropdown</th>
                            </tr>
                            <!-- Default -->
                            <tr>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('Top',['class'=>'btn btn-default']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-default']) }}
                                        {{ Form::button('Bottom',['class'=>'btn btn-default']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-default']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-default']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-default']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-default btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-default btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-default btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button(1,['class'=>'btn btn-default']) }}
                                        {{ Form::button(2,['class'=>'btn btn-default']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-default dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ./default -->
                            <!-- Info -->
                            <tr>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('Top',['class'=>'btn btn-info']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-info']) }}
                                        {{ Form::button('Bottom',['class'=>'btn btn-info']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-info']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-info']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-info']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-info btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-info btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-info btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button(1,['class'=>'btn btn-info']) }}
                                        {{ Form::button(2,['class'=>'btn btn-info']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-info dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /. info -->
                            <!-- /.danger -->
                            <tr>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('Top',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('Bottom',['class'=>'btn btn-danger']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-danger']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-danger']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-danger btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button(1,['class'=>'btn btn-danger']) }}
                                        {{ Form::button(2,['class'=>'btn btn-danger']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-danger dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.danger -->
                            <!-- warning -->
                            <tr>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('Top',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('Bottom',['class'=>'btn btn-warning']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-warning']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-warning']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-warning btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-warning btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-warning btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button(1,['class'=>'btn btn-warning']) }}
                                        {{ Form::button(2,['class'=>'btn btn-warning']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-warning dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.warning -->
                            <!-- success -->
                            <tr>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('Top',['class'=>'btn btn-success']) }}
                                        {{ Form::button('Middle',['class'=>'btn btn-success']) }}
                                        {{ Form::button('Bottom',['class'=>'btn btn-success']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-success']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-success']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-success']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button('<i class="fas fa-align-left"></i>',['class'=>'btn btn-success btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-center"></i>',['class'=>'btn btn-success btn-flat']) }}
                                        {{ Form::button('<i class="fas fa-align-right"></i>',['class'=>'btn btn-success btn-flat']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group-vertical">
                                        {{ Form::button(1,['class'=>'btn btn-success']) }}
                                        {{ Form::button(2,['class'=>'btn btn-success']) }}

                                        <div class="btn-group">
                                            {{ Form::button('<span class="caret"></span>',['class'=>'btn btn-success dropdown-toggle','data-toggle'=>'dropdown']) }}
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.success -->
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /. row -->
    </section>
    <!-- /.content -->

@stop