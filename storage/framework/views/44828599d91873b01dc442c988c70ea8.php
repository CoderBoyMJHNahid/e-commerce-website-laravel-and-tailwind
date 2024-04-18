
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Update your Settings'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Settings
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Update your Settings
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Update Settings</h4>
                </div><!-- end card header -->
                <div class="card-body d-flex justify-content-center">
                    <div class="col-5">
                        <form action="<?php echo e(route("update.settings")); ?>" class="row" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Base URL (Mobile sentrix)</label>
                                    <input type="url" class="form-control" name="api_url_sentrix" value="<?php echo e($data?->api_url_sentrix); ?>">
                                    <?php $__errorArgs = ["api_url_sentrix"];
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
                                <div class="form-group mt-4">
                                    <label for="name">Graphql file url (Mobile Active)</label>
                                    <input type="url" class="form-control" name="api_url_active" value="<?php echo e($data?->api_url_active); ?>">
                                    <?php $__errorArgs = ["api_url_active"];
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
                                <div class="form-group mt-4">
                                    <label for="name">Twilio SID</label>
                                    <input type="text" class="form-control" name="sid" value="<?php echo e($data?->sid); ?>">
                                    <?php $__errorArgs = ["sid"];
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
                                <div class="form-group mt-4">
                                    <label for="name">Twilio Token</label>
                                    <input type="text" class="form-control" name="token" value="<?php echo e($data?->token); ?>">
                                    <?php $__errorArgs = ["token"];
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
                                <div class="form-group mt-4">
                                    <label for="name">Twilio What'sapp Number</label>
                                    <input type="text" class="form-control" name="twilio_number" value="<?php echo e($data?->twilio_number); ?>">
                                    <?php $__errorArgs = ["twilio_number"];
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
                                <div class="form-group mt-4">
                                    <label for="name">Mobile Active Order Message Receiver Number with Country Code</label>
                                    <input type="text" class="form-control" name="send_number" value="<?php echo e($data?->send_number); ?>">
                                    <?php $__errorArgs = ["send_number"];
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
                                <div class="form-group mt-4">
                                    <label for="name">Mobile Sentrix Order Message Receiver Number with Country Code</label>
                                    <input type="text" class="form-control" name="send_number2" value="<?php echo e($data?->send_number2); ?>">
                                    <?php $__errorArgs = ["send_number2"];
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learn_laravel\ecco\resources\views/dashboard/settings.blade.php ENDPATH**/ ?>