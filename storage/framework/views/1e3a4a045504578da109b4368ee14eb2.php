<!-- footer start here -->



<!-- Main modal -->
<div id="cart-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cart
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="cart-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto relative">

                    <div class="hidden lg:grid grid-cols-2 py-6">
                        <div class="font-normal text-xl leading-8 text-gray-500">Product</div>
                        <p class="font-normal text-xl leading-8 text-gray-500 flex items-center justify-between">
                            <span class="w-full max-w-[260px] text-center">Quantity</span>
                            <span class="w-full max-w-[200px] text-center">Total</span>
                        </p>
                    </div>

                    <div id="cart_allProduct">
                      
                    </div>

                    
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="cart-modal" id="orderConfirm" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm Order</button>
                
            </div>
        </div>
    </div>
</div>


<!-- Include jQuery library -->
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php echo $__env->yieldContent('custom-script'); ?>

<!-- Javascript Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="<?php echo e(URL::asset('assets/js/data.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/function.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\learn_laravel\complete\e-commaerce\resources\views/home/layouts/footer.blade.php ENDPATH**/ ?>