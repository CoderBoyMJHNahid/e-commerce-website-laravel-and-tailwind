

<?php $__env->startSection('title'); ?>
    Home Pgae
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="flex gap-10 my-16 container mx-auto">
        <div> <img src="<?php echo e(URL::asset('assets/media/png/RightBanner_1-compressed.png')); ?>" alt=""></div>
        <div> <img src="<?php echo e(URL::asset('assets/media/png/LeftBanner_1-compressed.png')); ?>" alt=""></div>

    </div>

    <!-- product section start here -->
    

    <div class="bg-[#ff8469] my-8">
        <img src="assets/media/png/Frame-427323564.png" alt="" class="w-fit container mx-auto">
    </div>

    <!-- product section start here -->
    <section>

        <div class="grid mt-8 container mx-auto gap-4 max-sm:grid-cols-1 max-sm:justify-center">
            <!-- left side -->
            <div class="col-span-12">
                <div class="mb-6 flex container mx-auto gap-2 items-center border-b border-gray-200">
                    <img src="assets/media/png/list.png" alt="">
                    <h1 class="font-bold">NEW PRODUCTS</h1>
                </div>
                <div class="lg:flex gap-6">
                    <div class="hidden lg:block xl:block px-7 lg:w-6/12  xl:w-3/12">
                        <div class=" relative  border-[1px] border-gray-200 max-sm:border-none">
                            <img src="<?php echo e(URL::asset('assets/media/png/sub-1.png')); ?>" alt=""
                                class="w-28 max-sm:w-16 absolute top-[-12px] left-[-52px] max-sm:top-[-26px] max-sm:left-[52px]">
                            <img src="<?php echo e($lastedProduct['image']); ?>" alt="" class="w-86 max-sm:w-36 max-sm:mx-auto">

                        </div>
                        <a href="<?php echo e(route('singleProduct', $lastedProduct['id'])); ?>"
                            class="text-sm text-[#18a6ef] mt-2 max-sm:text-center"><?php echo e($lastedProduct['title']); ?></a>
                        <p class="text-sm text-[#e62337] mt-2">

                            <?php if(auth()->check()): ?>
                                <?php echo e($lastedProduct['price']); ?>

                            <?php else: ?>
                                <a href="<?php echo e(route('user.login')); ?>">Login to see the price</a>
                            <?php endif; ?>

                        </p>
                        <div class="flex mt-2 items-center  w-[80%]  justify-between gap-4 ">
                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                <button class="decreaseBtn" data-pid="<?php echo e($lastedProduct['id']); ?>"
                                    class="border-r-2 text-lg text-[#848484]">-</button>
                                <input type="number" readonly data-pid="<?php echo e($lastedProduct['id']); ?>" value="0"
                                    maxlength="12" name="qty"
                                    class="focus:none text-center text-lg text-[#848484] py-[4px] " id="qty_feature_88021">
                                <button class="increaseBtn" data-pid="<?php echo e($lastedProduct['id']); ?>"
                                    class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                            </div>
                            <?php if(auth()->check()): ?>
                                <form class="cart_form" data-pid="<?php echo e($lastedProduct['id']); ?>">
                                    <input type="hidden" class="qty_product<?php echo e($lastedProduct['id']); ?>">
                                    <button class="cart_btn" type="submit">
                                        <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                    </button>
                                </form>
                            <?php else: ?>
                                <a href="<?php echo e(route('user.login')); ?>">
                                    <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                        class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class=" lg:w-8/12 xl:w-9/12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 px-10">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="grid grid-cols-4 gap-4 ">
                                    <div class=" relative  border-[1px] border-gray-200 col-span-1 h-fit">
                                        <img src="assets/media/png/AFTERMARKET.png" alt=""
                                            class="w-12  absolute top-[-12px] left-[-16px]">
                                        <img src="<?php echo e($item['image']); ?>" alt="" class="w-28 py-6">

                                    </div>
                                    <div class="col-span-3">
                                        <a href="<?php echo e(route('singleProduct', $item['id'])); ?>"
                                            class="text-sm text-[#18a6ef] "><?php echo e($item['title']); ?></a>
                                        <p class="text-sm text-[#e62337] mt-2">

                                            <?php if(auth()->check()): ?>
                                                $<?php echo e($item['price'] . ' ' . $item['currencyCode']); ?>

                                            <?php else: ?>
                                                <a href="" class="text-red-400">Login to see the price</a>
                                            <?php endif; ?>

                                        </p>
                                        <div class="flex mt-2 items-center  w-[60%] max-sm:w-[100%] justify-between gap-4 ">
                                            <div class="border-2 border-[#dedede]  rounded-md grid grid-cols-3 ">
                                                <button class="decreaseBtn" data-pid="<?php echo e($item['id']); ?>"
                                                    class="border-r-2 text-lg text-[#848484]">-</button>
                                                <input type="number" readonly data-pid="<?php echo e($item['id']); ?>"
                                                    value="0" maxlength="12" name="qty"
                                                    class="focus:none text-center text-lg text-[#848484] py-[4px] "
                                                    id="qty_feature_88021">
                                                <button class="increaseBtn" data-pid="<?php echo e($item['id']); ?>"
                                                    class="border-l-2 text-lg text-[#848484] increaseBtn">+</button>
                                            </div>
                                            <?php if(auth()->check()): ?>
                                                <form class="cart_form" data-pid="<?php echo e($item['id']); ?>">
                                                    <input type="hidden" class="qty_product<?php echo e($item['id']); ?>">
                                                    <button class="cart_btn" type="submit">
                                                        <img src="assets/media/svg/cart-check-svgrepo-com.svg"
                                                            alt=""
                                                            class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('user.login')); ?>">
                                                    <img src="assets/media/svg/cart-check-svgrepo-com.svg" alt=""
                                                        class="hover:bg-[#ff0004] rounded-md bg-black  cursor-pointer transition-all duration-300 p-2 w-[145px]">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="w-full mt-20">
                            <?php echo e($products->links()); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product section end here -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\laragon\www\eccomerce-laravel-mobile-active\resources\views/home/index.blade.php ENDPATH**/ ?>