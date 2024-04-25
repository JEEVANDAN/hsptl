<?php echo $__env->make('headerAndFooter.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex flex-col h-screen">
        <div class="flex items-start gap-8 bg-green-500 px-8 py-3">
            <li class=" list-none px-1 cursor-pointer"><a class="text-white text-lg hover:text-blue-100" href="/">Admin</a></li>
            <li class=" list-none px-1 cursor-pointer"><a class="text-white text-lg hover:text-blue-100" href="/teacher">Teacher</a></li>
            <li class=" list-none px-1 cursor-pointer"><a class="text-white text-lg hover:text-blue-100" href="/user">User</a></li>
        </div>
        <div class=" h-full">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
<?php echo $__env->make('headerAndFooter.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\FINAL SMS\SMS\resources\views/Layout/loggingLayout.blade.php ENDPATH**/ ?>