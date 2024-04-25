

<?php $__env->startSection('content'); ?>
    <div class="flex items-center justify-center h-full">
        <div class="px-5 rounded-xl border border-black py-5 ">
                <form action="adminLogging" method="post" class="">
                    <?php echo csrf_field(); ?>
                    <h3 class=" text-center">Admin Logging</h3>
                    <?php if(session('error')): ?>
                        <div class="text-red-500 mt-5">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <div class=" mt-3 flex flex-col">
                        <input type="text" placeholder="Enter your user name" class=" border border-black focus:border-green-500 focus:border-2 px-2 rounded-md py-1 outline-none" name="userName">
                        <span class="text-red-500 text-sm">
                            <?php $__errorArgs = ['userName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?> 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    <div class=" mt-3 flex flex-col">
                        <input type="password" placeholder="Enter your password" class=" border border-black focus:border-green-500 focus:border-2 px-2 rounded-md py-1 outline-none" name="password">
                        <span class="text-red-500 text-sm">
                            <?php $__errorArgs = ['userName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?> 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    <div class=" mt-3 flex items-center justify-center">
                        <button class="bg-purple-600 text-white  w-full rounded-xl py-1">Log In</button>
                    </div>
                </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.loggingLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\FINAL SMS\SMS\resources\views/adminLogging.blade.php ENDPATH**/ ?>