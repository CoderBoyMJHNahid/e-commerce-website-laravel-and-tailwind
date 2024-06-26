
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Update your Product'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Product
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Update your Product
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Update Product</h4>
                </div><!-- end card header -->
                <div class="card-body d-flex justify-content-center">
                    <div class="col-5">
                        <form enctype="multipart/form-data" action="<?php echo e(route("products.update",$data->id)); ?>" class="row" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("PUT"); ?>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Price</label>
                                    <input type="text" class="form-control" name="price" value="<?php echo e($data->price); ?>">
                                    <?php $__errorArgs = ["price"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0"><?php echo e($message); ?></p>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name" class="mt-4">Old Image</label> <br>
                                    <img src="<?php echo e($data->image); ?>" width="100px" class="mb-4" alt="product image"> <br>
                                    <label for="name">Image</label>
                                    <input type="file" class="form-control" name="p_image" accept="image/jpeg, image/png">
                                    <input type="hidden" name="old_image" value="<?php echo e($data->image); ?>"/>
                                    <?php $__errorArgs = ["p_image"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0"><?php echo e($message); ?></p>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learn_laravel\complete\e-commaerce\resources\views/dashboard/products/update.blade.php ENDPATH**/ ?>