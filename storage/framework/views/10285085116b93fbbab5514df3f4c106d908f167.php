<?php
    $app_content = getContent('app.content', true);
?>

<!-- Apps Section -->
<section class="apps-section pt-120 pb-120 position-relative overflow-hidden">
    <div class="shape"><?php echo e(__(@$app_content->data_values->stylish_text)); ?></div>
    <div class="container position-relativ text-center text-lg-start">
        <div class="row gy-5 flex-wrap-reverse justify-content-between align-items-center">
            <div class="col-lg-5 col-xl-4">
                <div class="app-thumb">
                    <img src="<?php echo e(getImage('assets/images/frontend/app/' . @$app_content->data_values->image, '1042x2114')); ?>" alt="app">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section__header">
                    <span class="section__category"><?php echo e(__(@$app_content->data_values->sub_heading)); ?></span>
                    <h2 class="section__title"><?php echo e(__(@$app_content->data_values->heading)); ?></h2>
                </div>
                <div class="mt-5">
                    <p><?php echo e(__(@$app_content->data_values->content)); ?></p>
                    <div class="btn__grp mt-5  justify-content-center justify-content-lg-start">
                        <a href="<?php echo e(@$app_content->data_values->app_store_link); ?>">
                            <img src="<?php echo e(asset($activeTemplateTrue.'images/app/app-store-btn.svg')); ?>" alt="app">
                        </a>
                        <a href="<?php echo e(@$app_content->data_values->google_play_link); ?>">
                            <img src="<?php echo e(asset($activeTemplateTrue.'images/app/google-play.svg')); ?>" alt="app">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Apps Section -->
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/sections/app.blade.php ENDPATH**/ ?>