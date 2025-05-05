<?php $__env->startSection('content'); ?>
    <!-- Reply Chat -->
    <div class="pt-60">
        <div class="message__chatbox bg--body">
            <div class="message__chatbox__header">
                <h5 class="title">
                    <?php if($my_ticket->status == 0): ?>
                        <span class="badge badge--success"><?php echo app('translator')->get('Open'); ?></span>
                    <?php elseif($my_ticket->status == 1): ?>
                        <span class="badge badge--primary"><?php echo app('translator')->get('Answered'); ?></span>
                    <?php elseif($my_ticket->status == 2): ?>
                        <span class="badge badge--warning"><?php echo app('translator')->get('Replied'); ?></span>
                    <?php elseif($my_ticket->status == 3): ?>
                        <span class="badge badge--dark"><?php echo app('translator')->get('Closed'); ?></span>
                    <?php endif; ?>
                    <span
                        class="text--base">[<?php echo app('translator')->get('Ticket'); ?>#<?php echo e($my_ticket->ticket); ?>] <?php echo e($my_ticket->subject); ?></span>
                </h5>
                <button class="cmn--btn btn--sm close-button" type="button" title="<?php echo app('translator')->get('Close Ticket'); ?>"
                        data-bs-toggle="modal" data-bs-target="#DelModal"><i
                        class="la la-lg la-times-circle"></i>
                </button>
            </div>
            <div class="message__chatbox__body">
                <?php if($my_ticket->status != 4): ?>
                    <form class="message__chatbox__form row g-4" method="post"
                          action="<?php echo e(route('ticket.reply', $my_ticket->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="replayTicket" value="1">

                        <div class="form--group col-sm-12">
                            <textarea name="message" class="form-control form--control" id="inputMessage"
                                      placeholder="<?php echo app('translator')->get('Your Reply'); ?>" rows="4" cols="10"></textarea>
                        </div>
                        <div class="form--group col-sm-12">
                            <div class="d-flex">
                                <div class="left-group col p-0">
                                    <label for="file" class="form--label"><?php echo app('translator')->get('Attachments'); ?></label>
                                    <input type="file" class="overflow-hidden form-control form--control mb-2"
                                           name="attachments[]" id="file">
                                    <div id="fileUploadsContainer"></div>
                                    <span class="info fs--14"><?php echo app('translator')->get('Allowed File Extensions'); ?>: .<?php echo app('translator')->get('jpg'); ?>, .<?php echo app('translator')->get('jpeg'); ?>, .<?php echo app('translator')->get('png'); ?>, .<?php echo app('translator')->get('pdf'); ?>, .<?php echo app('translator')->get('doc'); ?>, .<?php echo app('translator')->get('docx'); ?></span>
                                </div>
                                <div class="add-area">
                                    <label class="form--label d-block">&nbsp;</label>
                                    <button
                                        class="cmn--btn bg--primary justify-content-center py-3 ms-2 ms-md-4 addFile"
                                        type="button"><i class="las la-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form--group col-sm-12">
                            <button type="submit" class="cmn--btn"><i class="la la-reply"></i> <?php echo app('translator')->get('Reply'); ?>
                            </button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Reply Chat -->

    <!-- Chat Messages -->
    <div class="pb-60 pt-60">
        <div class="message__chatbox bg--body">
            <div class="message__chatbox__body">
                <ul class="reply-message-area">
                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($message->admin_id == 0): ?>
                            <li>
                                <div class="reply-item">
                                    <div class="name-area">
                                        <h5 class="title"><?php echo e($message->ticket->name); ?></h5>
                                    </div>
                                    <div class="content-area">
                                        <p class="meta-date">
                                            <?php echo app('translator')->get('Posted on'); ?> <?php echo e($message->created_at->format('l, dS F Y @ H:i')); ?></p>
                                        <p><?php echo e($message->message); ?></p>
                                        <?php if($message->attachments()->count() > 0): ?>
                                            <div class="mt-2">
                                                <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a href="<?php echo e(route('ticket.download',encrypt($image->id))); ?>"
                                                    class="text--base"><i
                                                            class="la la-file"></i> <?php echo app('translator')->get('Attachment'); ?> <?php echo e(++$k); ?> </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php else: ?>
                            <li>
                                <ul>
                                    <li>
                                        <div class="reply-item">
                                        <div class="name-area">
                                            <h5 class="title mb-3"><?php echo e($message->admin->name); ?></h5>
                                            <p class="lead text-muted"><?php echo app('translator')->get('Staff'); ?></p>
                                        </div>
                                        <div class="content-area">
                                            <p class="meta-date">
                                                <?php echo app('translator')->get('Posted on'); ?> <?php echo e($message->created_at->format('l, dS F Y @ H:i')); ?></p>
                                            <p><?php echo e($message->message); ?></p>
                                            <?php if($message->attachments()->count() > 0): ?>
                                                <div class="mt-2">
                                                    <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(route('ticket.download',encrypt($image->id))); ?>"
                                                        class="text--base"><i
                                                                class="la la-file"></i> <?php echo app('translator')->get('Attachment'); ?> <?php echo e(++$k); ?> </a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Chat Messages -->


    <div class="modal fade custom--modal" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?php echo e(route('ticket.reply', $my_ticket->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="replayTicket" value="2">
                    <div class="modal-header">
                        <h5 class="modal-title text--base"> <?php echo app('translator')->get('Confirmation'); ?>!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body">
                        <strong><?php echo app('translator')->get('Are you sure you want to close this support ticket'); ?>?</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn--sm" data-bs-dismiss="modal"><i
                                class="la la-times"></i>
                            <?php echo app('translator')->get('Close'); ?>
                        </button>
                        <button type="submit" class="btn btn--primary btn--sm"><i
                                class="la la-check"></i> <?php echo app('translator')->get("Confirm"); ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $('.delete-message').on('click', function (e) {
                $('.message_id').val($(this).data('id'));
            });
            $('.addFile').on('click', function () {
                $("#fileUploadsContainer").append(
                    `<input type="file" name="attachments[]" class="form-control form--control my-3" required />`
                )
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.admin_master_panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/support/view.blade.php ENDPATH**/ ?>