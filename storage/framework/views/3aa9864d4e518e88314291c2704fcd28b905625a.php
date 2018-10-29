<?php $__env->startSection('title','AdminLTE 2 | 404 Error'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            404 Error Page
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">404 error</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-yellow"></i> Oops! Page not found.</h3>

                <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="<?php echo e(action('DashboardController@index2')); ?>">return to dashboard</a> or try using the search form.
                </p>

                <form class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.input-group -->
                </form>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fixed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>