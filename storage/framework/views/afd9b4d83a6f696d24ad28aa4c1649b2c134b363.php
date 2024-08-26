<?php $__env->startSection('content'); ?>
<!-- Blog Section -->
<section class="blog-section pt-120 pb-120 bg--section">
    <div class="container">
        <div class="row gy-5 justify-content-center">
            <div class="col-lg-8">
                <div class="post__details">
                    <div class="post__thumb">
                        <img src="<?php echo e(getImage('assets/images/frontend/blog/' . @$blog->data_values->image, '900x600')); ?>" alt="blog">
                    </div>
                    <div class="post__header">
                        <h3 class="post__title">
                            <?php echo e(__(@$blog->data_values->title)); ?>

                        </h3>

                        <div class="mt-2">
                            <?php echo @$blog->data_values->description ?>
                        </div>
                    </div>

                    <div class="row gy-4 justify-content-center">
                        <div class="fb-comments" data-href="<?php echo e(route('blog.details',[$blog->id,slug($blog->data_values->title)])); ?>" data-numposts="5"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog-sidebar p-0 border-0 ps-xl-4">
                    <div class="widget widget__post__area">
                        <h5 class="widget__title"><?php echo app('translator')->get('Recent Post'); ?></h5>
                        <ul>

                            <?php $__empty_1 = true; $__currentLoopData = $recent_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li>
                                    <a href="<?php echo e(route('blog.details',[$item->id,slug($item->data_values->title)])); ?>" class="widget__post">
                                        <div class="widget__post__thumb">
                                            <img src="<?php echo e(getImage('assets/images/frontend/blog/' . @$item->data_values->image, '80x80')); ?>" alt="blog">
                                        </div>
                                        <div class="widget__post__content">
                                            <h6 class="widget__post__title">
                                                <?php echo e(__(@$item->data_values->title)); ?>

                                            </h6>
                                            <span><?php echo e(showDateTime($item->created_at)); ?></span>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('fbComment'); ?>
	<?php echo loadFbComment() ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/blogs/blog_details.blade.php ENDPATH**/ ?>