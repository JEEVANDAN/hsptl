<?php echo $__env->make('headerAndFooter.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex flex-col h-screen">
        <div class="flex items-center justify-between bg-green-500 px-12 py-3">
            <div class="">
                <h1 class="text-white text-2xl flex gap-3 items-center justify-center  ">
                   <a href="#" class="text-white text-2xl flex gap-3 items-center justify-center  ">
                        <span class="material-symbols-outlined text-red-700">
                            local_hospital
                        </span>Rapti Life Care Hospital
                   </a>
                </h1>
            </div>
            <div class="flex relative flex-col items-center justify-center">
                    <span class="hello cursor-pointer material-symbols-outlined text-white">
                        account_circle
                    </span>
                    <div class="dropdown_admin  absolute     w-20 items-center justify-center h-20 rounded-sm">
                        <div class="  flex      items-center justify-center h-20 rounded-sm">
                            <ul>
                                <li class="hover:py-2 hover:bg-green-400 hover:px-2 hover:rounded-md transition duration-300 hover:text-white">
                                    <a href="<?php echo e(route('logging')); ?>" class=" ">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        <div class=" h-full">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
<?php echo $__env->make('headerAndFooter.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\FINAL SMS\SMS\resources\views/layout/adminPannelLayout.blade.php ENDPATH**/ ?>