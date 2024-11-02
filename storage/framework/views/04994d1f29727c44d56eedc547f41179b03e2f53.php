<?php
    $subscribe_content = getContent('subscribe.content', true);
    $footer_content = getContent('footer.content', true);
    $contact = getContent('contact.content', true);
    $social_icons = getContent('social_icon.element', false, null, true);
    $policy_pages = getContent('policy_pages.element', false, null, true);
?>
<!-- Footer Section -->
<footer class="footer-section" style="background-color:#918765">
    <div class="container-fluid">
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
        <div class="footer__top" style="background-color:#476847;">
            <div class="footer-wrapper">
                <div class="footer__widget widget__about">
                    <h4 class="widget__title"><?php echo app('translator')->get('About'); ?> <?php echo app('translator')->get($general->sitename); ?></h4>
                    <p><?php echo e(__(@$footer_content->data_values->content)); ?></p>
                    <ul class="social-icons">
                        <?php $__empty_1 = true; $__currentLoopData = $social_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li>
                                <a href="<?php echo e($item->data_values->url); ?>">
                                    <?php echo @$item->data_values->social_icon ?>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="footer__widget">
                    <h4 class="widget__title"><?php echo app('translator')->get('General Links'); ?></h4>
                    <ul class="widget__links">
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>

                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('vehicles')); ?>"><?php echo app('translator')->get('Vehicles'); ?></a></li>
                        <li><a href="<?php echo e(route('plans')); ?>"><?php echo app('translator')->get('Plan'); ?></a></li>
                        <li><a href="<?php echo e(route('blogs')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>
                    </ul>
                </div>
                <div class="footer__widget">
                    <h4 class="widget__title"><?php echo app('translator')->get('Policy Pages'); ?></h4>
                    <ul class="widget__links">

                        <?php $__empty_1 = true; $__currentLoopData = $policy_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li><a href="<?php echo e(route('policy.pages', [$policy->id, slug($policy->data_values->title)])); ?>"><?php echo e(__(@$policy->data_values->title)); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="footer__widget widget__contact">
                    <h4 class="widget__title"><?php echo app('translator')->get('Get In Touch'); ?></h4>
                    <ul class="footer__contact">
                        <li>
                            <div class="icon"><i class="las la-phone-volume"></i></div>
                            <div class="cont">
                                <span class="subtitle"><?php echo app('translator')->get('For Support'); ?></span>
                                <a href="Tel:<?php echo e($contact->data_values->phone); ?>" class="info"><?php echo e($contact->data_values->phone); ?></a>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="las la-headset"></i></div>
                            <div class="cont">
                                <span class="subtitle"><?php echo app('translator')->get('Send Us Email'); ?></span>
                                <a href="mailto:<?php echo e($contact->data_values->email); ?>" class="info"><?php echo e($contact->data_values->email); ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom py-3 text-center" style="color:yellow"><?php echo e(__(@$footer_content->data_values->copyright)); ?></div>
</footer>
<!-- Footer Section -->
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/partials/footer.blade.php ENDPATH**/ ?>