<?php
    $subscribe_content = getContent('subscribe.content', true);
    $footer_content = getContent('footer.content', true);
    $contact = getContent('contact.content', true);
    $social_icons = getContent('social_icon.element', false, null, true);
    $policy_pages = getContent('policy_pages.element', false, null, true);
?>

 <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                            <h4 class="widget__title"><?php echo app('translator')->get('About'); ?> <?php echo app('translator')->get($general->sitename); ?></h4>
                    <p><?php echo e(__(@$footer_content->data_values->content)); ?></p>

                            </div>
                        </div>
                    </div>


                      <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Quick Links</h4>
                              <li class="fas fa-angle-right me-2"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="fas fa-angle-right me-2"><a href="<?php echo e(route('pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="fas fa-angle-right me-2"><a href="<?php echo e(route('vehicles')); ?>"><?php echo app('translator')->get('Vehicles'); ?></a></li>
                        <li class="fas fa-angle-right me-2"><a href="<?php echo e(route('plans')); ?>"><?php echo app('translator')->get('Plan'); ?></a></li>
                        <li class="fas fa-angle-right me-2"><a href="<?php echo e(route('blogs')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"><?php echo app('translator')->get('Policy Pages'); ?></h4>

                               <?php $__empty_1 = true; $__currentLoopData = $policy_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="fas fa-angle-right me-2"><a href="<?php echo e(route('policy.pages', [$policy->id, slug($policy->data_values->title)])); ?>"><?php echo e(__(@$policy->data_values->title)); ?></a></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex">
                <?php $__empty_1 = true; $__currentLoopData = $social_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <a href="<?php echo e($item->data_values->url); ?>" class="btn btn-secondary btn-md-square rounded-circle me-3">
                                    <?php echo @$item->data_values->social_icon ?>
                                </a>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">

 <div class="newsletter-section">
            <div class="newsletter-wrapper">
                <div class="footer-logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="logo">
                    </a>
                </div>
                <div class="newsletter-title">
                    <div class="section__header border-0">
                        <h4 class="section__title mb-0"><?php echo app('translator')->get('Newsletter'); ?> <span class="text--base"><?php echo app('translator')->get('Subscription'); ?></span></h4>
                        <p><?php echo e(__(@$subscribe_content->data_values->content)); ?></p>
                    </div>
                </div>
                <div class="newsletter-form">
                    <form action="<?php echo e(route('subscribe')); ?>" id="subscribeForm" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input name="email" type="email" class="form-control form--control subscribe_email" placeholder="<?php echo app('translator')->get('Enter your email address'); ?>"/>
                            <button type="submit" class="input-group-text cmn--btn"><?php echo app('translator')->get('Subscribe'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

            </div>
        </div>

              <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/partials/footer_new.blade.php ENDPATH**/ ?>