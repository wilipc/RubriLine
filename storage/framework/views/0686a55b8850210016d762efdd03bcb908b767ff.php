<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" href="<?php echo e(asset ('/img/logo.ico')); ?>">
        <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(mix('css/style.css')); ?>">

        <?php echo \Livewire\Livewire::styles(); ?>

        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo e(mix('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">

        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(mix('dist/css/adminlte.min.css')); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(mix('plugins/fontawesome-free/css/all.min.css')); ?>">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

        <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav bars-display">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars oragecol"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <img src="<?php echo e(asset('/img/logo02.png')); ?>" alt="" class="mr-3" style="width:150px;">
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar elevation-4 bluecol text-light">
                <!-- Sidebar -->
                <div class="sidebar bluecol">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel border-b1-orage mt-3 pb-3 mb-3" >
                        <div class="image border-1">
                            <img src="<?php echo e(Auth::user()->profile_photo_path); ?>" class="img-circle elevation-2" alt="<?php echo e(Auth::user()->name); ?> User Image" >
                            </div>
                        <div class="info" style="overflow:Initial !important;">
                            <a href="#" class="d-block text-light" data-toggle="modal" data-target="#modal-sm"><strong id="nomshort"></strong></a>
                            <span class="text-secondary">Docente</span>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column pl-2 " data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                            <li class="nav-header">OPCIONES</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link p-l5">
                                    <i class="nav-icon fas fa-copy text-light"></i>
                                    <p class="h5 text-light"><strong>Cursos</strong></p>
                                </a>
                            </li>
                            <hr class="border-b3-orage margin-rl">
                            <li class="nav-item">
                                <a href="#" class="nav-link p-l5">
                                    <i class="nav-icon fas fa-users text-light"></i>
                                    <p class="h5 text-light"><strong>Alumnos</strong></p>
                                </a>
                            </li>
                            <hr class="border-b3-orage margin-rl">
                            <li class="nav-item">
                                <a href="#" class="nav-link p-l5">
                                    <i class="nav-icon fas fa-edit text-light"></i>
                                    <p class="h5 text-light"><strong>Rubricas</strong></p>
                                </a>
                            </li>
                            <hr class="border-b3-orage margin-rl">
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <div class="modal fade " id="modal-sm">
                <div class="modal-dialog modal-sm ">
                    <div class="modal-content text-center bluecol oragecol">
                        <div class="modal-header ">
                            <h4 class="modal-title ">Cerrando Sesion</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Desea cerrar sesion&hellip;</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'btn-primary','href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'btn-primary','href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                    <?php echo e(__('Si')); ?>

                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>

                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="content-wrapper padding-rl bluec">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <script>

            var nameshort = "<?php echo e(Auth::user()->name); ?> ";
            var shot = nameshort.split(" ");
            document.getElementById("nomshort").innerHTML = shot[0];

        </script>
        <!-------------------- Scripts -------------------->
                <script src="<?php echo e(mix('js/app.js')); ?>"></script>
        <!-- jQuery -->
        <script src="<?php echo e(mix('plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(mix('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(mix('dist/js/adminlte.min.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\rubriline\resources\views/layouts/admdoc.blade.php ENDPATH**/ ?>