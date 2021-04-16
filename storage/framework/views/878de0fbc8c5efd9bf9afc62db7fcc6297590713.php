<?php $__env->startSection('title', 'Alumnos/Grupo'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item h3  item-max" style="font-family:'Corbel', sans-serif;"><strong>Alumnos</strong></li>
                            <li class="breadcrumb-item h4 " style="font-family:'Corbel', sans-serif;"><strong>Curso 01</strong></li>
                            <li class="breadcrumb-item h4  active" style="font-family:'Corbel', sans-serif;"><strong>Grupo 01</strong></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <hr class="border-b3-orage">
        </section>
    <!-- Main content -->
        <section class="content container-sm ">
            <div class="container-fluid ">
                <div class="row mb-2">
                    <div class="box-tools pull-right pl-4">
                        <div class="has-feedback">
                            <input type="text" class="form-control bg-plomo rounded-pill text-center input-sm " placeholder="Buscar Alumno...">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div><!-- /.box-tools -->
                    <div class="col justify-content-end">
                        <ol class="flex float-sm-right">
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['class' => 'border-b3-orage','style' => 'color:#3f4079!important;','href' => ''.e(route('home')).'','active' => request()->routeIs('home')]]); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'border-b3-orage','style' => 'color:#3f4079!important;','href' => ''.e(route('home')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home'))]); ?>
                                    <strong class="pb-2.5"> <?php echo e(__('Lista de Alumnos')); ?></strong>
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </div>
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['class' => 'border-b3-orage','style' => 'color:#3f4079!important;','href' => ''.e(route('home')).'','active' => request()->routeIs('home')]]); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'border-b3-orage','style' => 'color:#3f4079!important;','href' => ''.e(route('home')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home'))]); ?>
                                    <strong class="pb-2.5"> <?php echo e(__('Crear grupos')); ?></strong>
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </div>
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.nav-link','data' => ['class' => 'border-b3-orage','style' => 'color:#3f4079!important;','href' => ''.e(route('dashboard')).'','active' => request()->routeIs('dashboard')]]); ?>
<?php $component->withName('jet-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'border-b3-orage','style' => 'color:#3f4079!important;','href' => ''.e(route('dashboard')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
                                    <strong class="pb-2.5"> <?php echo e(__('Listado de grupos')); ?></strong>
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </div>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                        
                    <p id="short"></p>
                    <div></div>
                    <img src="<?php echo e(asset('/img/alcurgrup.png')); ?>" />
                </div>
            </div>
        </section>
    <!-- /.content -->
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admdoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rubriline\resources\views/dashboard.blade.php ENDPATH**/ ?>