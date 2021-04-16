<?php if (isset($component)) { $__componentOriginale6c7d191faf19bdce3d263627f018a55525641a7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\EstLayout::class, []); ?>
<?php $component->withName('est-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>

            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                sadasd
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginale6c7d191faf19bdce3d263627f018a55525641a7)): ?>
<?php $component = $__componentOriginale6c7d191faf19bdce3d263627f018a55525641a7; ?>
<?php unset($__componentOriginale6c7d191faf19bdce3d263627f018a55525641a7); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\rubriline\resources\views/home.blade.php ENDPATH**/ ?>