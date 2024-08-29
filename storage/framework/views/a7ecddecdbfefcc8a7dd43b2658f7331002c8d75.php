<?php
    $how_content = getContent('how_work.content', true);
    $how_elements = getContent('how_work.element', false, null, true);
?>

<!-- How To Section -->
<section class="how-section position-relative overflow-hidden">
    <div class="shape z-index-1"><?php echo e(__(@$how_content->data_values->stylish_text)); ?></div>
    <div class="container">
        <div class="custom-tab">
            <div class="position-relative row g-0 flex-wrap-reverse">
                <div class="col-lg-6 bg--section d-flex flex-wrap align-items-center">
                    <div class="how-area pt-120 pb-120 pt-max-lg-40">
                        <div class="custom-tab-menu">
                            <ul class="tab-menu">

                                <?php $__empty_1 = true; $__currentLoopData = $how_elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li class="<?php echo e($loop->first ? 'active' : ''); ?>">
                                        <div class="tab-menu-icon">
                                            <span>0<?php echo e($loop->iteration); ?></span>
                                        </div>
                                        <div class="tab-menu-content">
                                            <h5 class="title"><?php echo e(__(@$item->data_values->title)); ?> nmmmm</h5>
                                            <p><?php echo e(__(@$item->data_values->content)); ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tab-area how--thumb">

                        <?php $__empty_1 = true; $__currentLoopData = $how_elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="tab-item">
                                <img src="<?php echo e(getImage('assets/images/frontend/how_work/' . @$item->data_values->image, '588x698')); ?>" alt="how">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How To Section -->
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/sections/how_work.blade.php ENDPATH**/ ?>