<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo e($general->sitename(__($pageTitle))); ?></title>

    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/line-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/main.css')); ?>">

    <link rel="stylesheet"
          href="<?php echo e(asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/bootstrap-fileinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/custom.css')); ?>">

    <?php echo $__env->yieldPushContent('style-lib'); ?>

    <?php echo $__env->yieldPushContent('style'); ?>
</head>
<body>

<div class="overlay"></div>
<a href="#" class="scrollToTop"><i class="las la-angle-up"></i></a>

<!-- Preloader -->

<!-- Preloader -->

<!-- Header Section -->
<div class="header-top py-2">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between mx--10">
            <div class="header-top-item meta-list">
                <a href="Mailto:<?php echo e(getContent('contact.content', true)->data_values->email); ?>"><i
                        class="lar la-envelope"></i><?php echo e(getContent('contact.content', true)->data_values->email); ?></a>
            </div>
            <div class="d-flex flex-wrap meta-list">
                <?php if(auth()->guard()->check()): ?>
                    <div class="header-top-item ml-sm-auto">
                        <a href="<?php echo e(route('user.home')); ?>"><i class="las la-tachometer-alt"></i><?php echo app('translator')->get('Dashboard'); ?></a>
                    </div>
                    <div class="header-top-item">
                        <a href="<?php echo e(route('user.logout')); ?>"><i class="las la-sign-out-alt"></i><?php echo app('translator')->get('Logout'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="header-bottomx" style="background-color:#5e8059;">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>"
                                                   alt="logo"></a>
            </div>
            <ul class="menu">
                <?php if(auth()->guard()->check()): ?>
                    <li><a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a></li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Vehicle'); ?></a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo e(route('vehicles')); ?>"><?php echo app('translator')->get('All Vehicles'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.vehicle.booking.log')); ?>"><?php echo app('translator')->get('Booking Logs'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Plan'); ?></a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo e(route('plans')); ?>"><?php echo app('translator')->get('All Plans'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.plan.booking.log')); ?>"><?php echo app('translator')->get('Booking Logs'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Support'); ?></a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo e(route('ticket.open')); ?>"><?php echo app('translator')->get('Create New'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('ticket')); ?>"><?php echo app('translator')->get('My Ticket'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Account'); ?></a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo e(route('user.deposit.history')); ?>"><?php echo app('translator')->get('Payment History'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.change.password')); ?>"><?php echo app('translator')->get('Change Password'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.profile.setting')); ?>"><?php echo app('translator')->get('Profile Setting'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.twofactor')); ?>"><?php echo app('translator')->get('2FA Security'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="py-3">
                    <select class="langSel language-select ms-3">
                        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->code); ?>"
                                    <?php if(session('lang') == $item->code): ?> selected <?php endif; ?>><?php echo e(__($item->name)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </li>
            </ul>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- Header Section -->

<!-- Breadcrumb section start -->
<?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Breadcrumb section end -->

<!-- Dashboard Section Starts Here -->
<main class="dashboard-section bg--section pt-60 pb-60">
    <div class="container">
                <?php echo $__env->yieldContent('content'); ?>

    </div>
</main>
<!-- Dashboard Section Ends Here -->

<!-- footer section start -->
<?php echo $__env->make($activeTemplate.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer section end -->

<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/rafcounter.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/owl.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/main.js')); ?>"></script>

<script src="<?php echo e(asset($activeTemplateTrue.'js/bootstrap-fileinput.js')); ?>"></script>

<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery.validate.js')); ?>"></script>

<?php echo $__env->yieldPushContent('script-lib'); ?>



<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldPushContent('script'); ?>

<script>

    (function ($) {
        "use strict";
        $(".langSel").on("change", function () {
            window.location.href = "<?php echo e(route('home')); ?>/change/" + $(this).val();
        });

    })(jQuery);

</script>


<script>
    (function ($) {
        "use strict";

        $("form").validate();
        $('form').on('submit', function () {
            if ($(this).valid()) {
                $(':submit', this).attr('disabled', 'disabled');
            }
        });

    })(jQuery);

</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/layouts/master.blade.php ENDPATH**/ ?>