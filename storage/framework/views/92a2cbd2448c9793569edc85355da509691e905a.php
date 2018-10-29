<?php $__env->startSection('title','AdminLTE 2 | Timeline'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Timeline
            <small>example</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
            <li><a href="#">UI</a></li>
            <li class="active">Timeline</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fas fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fas fa-user bg-aqua"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fas fa-comments bg-yellow"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fas fa-video bg-maroon"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                            <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="timeline-footer">
                                <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                        <i class="far fa-clock bg-gray"></i>
                    </li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fas fa-code"></i> Timeline Markup</h3>
                    </div>
                    <div class="box-body">
                  <pre style="font-weight: 600;">
&lt;ul class="timeline">

    &lt;!-- timeline time label -->
    &lt;li class="time-label">
        &lt;span class="bg-red">
            10 Feb. 2014
        &lt;/span>
    &lt;/li>
    &lt;!-- /.timeline-label -->

    &lt;!-- timeline item -->
    &lt;li>
        &lt;!-- timeline icon -->
        &lt;i class="fas fa-envelope bg-blue">&lt;/i>
        &lt;div class="timeline-item">
            &lt;span class="time">&lt;i class="far fa-clock">&lt;/i> 12:05&lt;/span>

            &lt;h3 class="timeline-header">&lt;a href="#">Support Team&lt;/a> ...&lt;/h3>

            &lt;div class="timeline-body">
                ...
                Content goes here
            &lt;/div>

            &lt;div class="timeline-footer">
                &lt;a class="btn btn-primary btn-xs">...&lt;/a>
            &lt;/div>
        &lt;/div>
    &lt;/li>
    &lt;!-- END timeline item -->

    ...

&lt;/ul>
                  </pre>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fixed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>