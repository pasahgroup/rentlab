<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h3 class="hero-title" data-value="<?php echo app('translator')->get($pageTitle); ?>"><?php echo app('translator')->get($pageTitle); ?></h3>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a>
                </li>
                <li>
                    <?php echo app('translator')->get($pageTitle); ?>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Hero Section -->
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/partials/breadcrumb.blade.php ENDPATH**/ ?>