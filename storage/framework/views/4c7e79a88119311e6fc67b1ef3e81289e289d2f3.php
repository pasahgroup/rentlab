
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.vehicles.update', $vehicle->id)); ?>" method="post"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name"><?php echo app('translator')->get('Name'); ?></label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="<?php echo e($vehicle->name); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Brand'); ?></label>
                                    <select class="form-control" id="category" name="brand" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select One'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($item->id); ?>" <?php echo e($vehicle->brand_id == $item->id ? 'selected' : ''); ?>><?php echo e(__(@$item->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Model'); ?></label>
                                    <select class="form-control" id="model" name="model" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select car model'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $modelbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                              <option
                                                value="<?php echo e($modelb->car_model); ?>" <?php echo e($vehicle->id == $modelb->id ? 'selected' : ''); ?>><?php echo e(__(@$modelb->car_model)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>


                                      <!--     <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($item->id); ?>" <?php echo e($vehicle->brand_id == $item->id ? 'selected' : ''); ?>><?php echo e(__(@$item->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?> -->
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Available cars'); ?></label>
                                    <input type="number" name="car_model_no" id="car_model_no" class="form-control" value="<?php echo e($vehicle->car_model_no); ?>">                                    
                                </div>
                            </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Car body type'); ?></label>
                                    <select class="form-control" id="car_body_type" name="car_body_type" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select One'); ?> --</option>

                                        <?php $__empty_1 = true; $__currentLoopData = $cartypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($cartype->id); ?>" <?php echo e($vehicle->car_body_type_id == $cartype->id ? 'selected' : ''); ?>><?php echo e(__(@$cartype->car_body_type)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                               <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Car Tag'); ?></label>
                                    <select class="form-control" id="tag" name="tag" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select One'); ?> --</option>

                                        <?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($tag->id); ?>" <?php echo e($vehicle->tag_id == $tag->id ? 'selected' : ''); ?>><?php echo e(__(@$tag->tag)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                               <div class="col-md-5">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Color'); ?></label>
                                    <select class="form-control" id="color" name="color" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select One'); ?> --</option>

                                        <?php $__empty_1 = true; $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($color->id); ?>" <?php echo e($vehicle->color_id == $color->id ? 'selected' : ''); ?>><?php echo e(__(@$color->color)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                               </div>

                           <div class="col-md-4">
                                <div class="form-group">
                                    <label for="seater"><?php echo app('translator')->get('Seat Type'); ?></label>
                                    <select class="form-control" id="seater" name="seater" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select One'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $seaters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($item->id); ?>" <?php echo e($vehicle->seater_id == $item->id ? 'selected' : ''); ?>><?php echo e(__(@$item->number)); ?> <?php echo app('translator')->get('Seater'); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="seater"><?php echo app('translator')->get('Location'); ?></label>
                                    <select class="form-control" id="location" name="location" required="">
                                        <option value="">-- <?php echo app('translator')->get('Select One'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option
                                                value="<?php echo e($location->id); ?>" <?php echo e($vehicle->location_id == $location->id ? 'selected' : ''); ?>><?php echo e(__(@$location->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                           <div class="col-md-5">
                                <div class="form-group">
                                    <label for="price"><?php echo app('translator')->get('Price Per Day'); ?></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price" name="price"
                                               value="<?php echo e(getAmount($vehicle->price)); ?>" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><?php echo e($general->cur_text); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nicEditor0"><?php echo app('translator')->get('Details'); ?></label>
                                    <textarea rows="10" name="details" class="form-control nicEdit"
                                              id="nicEditor0"><?php echo e($vehicle->details); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card border--dark mb-4">
                                    <div class="card-header bg--dark d-flex justify-content-between">
                                        <h5 class="text-white"><?php echo app('translator')->get('Images'); ?></h5>
                                        <button type="button" class="btn btn-sm btn-outline-light addBtn"><i
                                                class="fa fa-fw fa-plus"></i><?php echo app('translator')->get('Add New'); ?>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <p><small class="text-facebook"><?php echo app('translator')->get('Images will be resize into'); ?>
                                                <?php echo e(imagePath()['vehicles']['size']); ?>px</small></p>
                                        <div class="row element">

                                            <?php $__empty_1 = true; $__currentLoopData = $vehicle->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="col-md-2 imageItem" id="imageItem<?php echo e($loop->iteration); ?>">
                                                    <div class="payment-method-item">
                                                        <div class="payment-method-header d-flex flex-wrap">
                                                            <div class="thumb" style="position: relative;">
                                                                <div class="avatar-preview">
                                                                    <div class="profilePicPreview"
                                                                         style="background-image: url('<?php echo e(getImage(imagePath()["vehicles"]["path"] . "/" . $image)); ?>')">

                                                                    </div>
                                                                </div>

                                                                <div class="avatar-remove">
                                                                    <button class="bg-danger deleteOldImage"
                                                                            onclick="return false"
                                                                            data-removeindex="imageItem<?php echo e($loop->iteration); ?>"
                                                                            data-deletelink="<?php echo e(route('admin.vehicles.image.delete', [$vehicle->id, $image])); ?>">
                                                                        <i class="la la-close"></i></button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="doors"><?php echo app('translator')->get('No of Doors'); ?></label>
                                    <input type="text" id="doors" class="form-control" value="<?php echo e($vehicle->doors); ?>"
                                           autocomplete="off" name="doors" required>
                                </div>
                            </div>                          
                         
                           <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Transmission'); ?></label>
                                    <select class="form-control" id="transmission" name="transmission" required="">
                                                                               
                               <option
                                                value="<?php echo e($vehicle->transmission); ?>" <?php echo e($vehicle->transmission ? 'selected' : ''); ?>><?php echo e($vehicle->transmission); ?></option>
                                            <option value="AT"><?php echo app('translator')->get('AT'); ?></option>
                                            <option value="SAT"><?php echo app('translator')->get('SAT'); ?></option>
                                             <option value="Manual"><?php echo app('translator')->get('Manual'); ?></option>
                                                                        </select>
                                </div>
                            </div>


                         <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Fuel Type gg'); ?></label>
                                    <select class="form-control" id="fuel_type" name="fuel_type" required="">
                                                                     
                               <option
                                                value="<?php echo e($vehicle->fuel_type); ?>" <?php echo e($vehicle->fuel_type ? 'selected' : ''); ?>><?php echo e($vehicle->fuel_type); ?></option>
                                            <option value="Electric"><?php echo app('translator')->get('Electric'); ?></option>
                                            <option value="Diesel"><?php echo app('translator')->get('Diesel'); ?></option>
                                             <option value="Petrol"><?php echo app('translator')->get('Petrol'); ?></option>
                                                                        </select>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card border--dark">
                                    <h5 class="card-header bg--dark"><?php echo app('translator')->get('More Specifications'); ?>
                                        <button type="button"
                                                class="btn btn-sm btn-outline-light float-right" data-toggle="modal"
                                                data-target="#exampleModal">
                                            <i class="la la-fw la-plus"></i><?php echo app('translator')->get('Add New'); ?>
                                        </button>
                                    </h5>

                                    <div class="card-body">
                                        <div class="row addedField">

                                            <?php $__empty_1 = true; $__currentLoopData = $vehicle->specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="col-md-12 other-info-data">
                                                    <div class="form-group">
                                                        <div class="input-group mb-md-0 mb-4">
                                                            <div class="col-md-4">
                                                                <div class="input-group has_append">
                                                                    <input name="icon[]" type="text" class="form-control icon" value='<?php echo e($spec[0]); ?>' required>
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary iconPicker" data-icon="<?php echo e(explode('"',$spec[0])[1]); ?>" role="iconpicker"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input name="label[]" class="form-control" type="text"
                                                                       value="<?php echo e($spec[1]); ?>" required
                                                                       placeholder="<?php echo app('translator')->get('Label'); ?>">
                                                            </div>
                                                            <div class="col-md-3 mt-md-0 mt-2">
                                                                <input name="value[]" class="form-control"
                                                                       value="<?php echo e($spec[2]); ?>" type="text" required
                                                                       placeholder="<?php echo app('translator')->get('Value'); ?>">
                                                            </div>
                                                            <div class="col-md-1 mt-md-0 mt-2 text-right">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn--danger btn-lg removeInfoBtn w-100" type="button">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--primary w-100"><?php echo app('translator')->get('Update'); ?></button>
                    </div>
                </form>
            </div><!-- card end -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Add New Specification'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body specification">
                    <div class="form-group">
                        <label for="icon" class="font-weight-bold"><?php echo app('translator')->get('Select Icon'); ?></label>
                        <div class="input-group has_append">
                            <input type="text" class="form-control icon" id="icon" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary iconPicker" data-icon="las la-home" role="iconpicker"></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="label" class="font-weight-bold"><?php echo app('translator')->get('Label'); ?></label>
                        <input class="form-control" id="label" type="text" required placeholder="<?php echo app('translator')->get('Label'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="label" class="font-weight-bold"><?php echo app('translator')->get('Value'); ?></label>
                        <input class="form-control" id="value" type="text" required placeholder="<?php echo app('translator')->get('Value'); ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <button type="button" class="btn btn--primary addNewInformation"><?php echo app('translator')->get('Add'); ?></button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('admin.vehicles.index')); ?>" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i
            class="fa fa-fw fa-backward"></i><?php echo app('translator')->get('Go Back'); ?></a>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .avatar-remove {
            position: absolute;
            bottom: 180px;
            right: 0;
        }

        .avatar-remove label {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-size: 15px;
            cursor: pointer;
        }

        .avatar-remove button {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            text-align: center;
            line-height: 15px;
            font-size: 15px;
            cursor: pointer;
            padding-left: 6px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap-iconpicker.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script-lib'); ?>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";

            $(document).ready(function () {
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });

            //Delete Old Image
            $('.deleteOldImage').on('click', function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var url = $(this).data('deletelink');
                var removeindex = $(this).data('removeindex');

                $.ajax({
                    type: "POST",
                    url: url,
                    success: function (data) {
                        if (data.success) {
                            $('#' + removeindex).remove();
                            notify('success', data.message);
                        } else {
                            notify('error', 'Failed to delete the image!')
                        }
                    }
                });
            });

            var counter = 0;
            $('.addBtn').click(function () {
                counter++;
                $('.element').append(`<div class="col-md-2 imageItem"><div class="payment-method-item"><div class="payment-method-header d-flex flex-wrap"><div class="thumb" style="position: relative;"><div class="avatar-preview"><div class="profilePicPreview" style="background-image: url('<?php echo e(asset('assets/images/default.png')); ?>')"></div></div><div class="avatar-edit"><input type="file" name="images[]" class="profilePicUpload" required id="image${counter}" accept=".png, .jpg, .jpeg" /><label for="image${counter}" class="bg-primary"><i class="la la-pencil"></i></label></div>
                <div class="avatar-remove">
                    <label class="bg-danger removeBtn">
                        <i class="la la-close"></i>
                    </label>
                </div>
                </div></div></div></div>`);
                remove()
                upload()
            });

            function remove() {
                $('.removeBtn').on('click', function () {
                    $(this).parents('.imageItem').remove();
                });
            }

            function upload() {
                function proPicURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var preview = $(input).parents('.thumb').find('.profilePicPreview');
                            $(preview).css('background-image', 'url(' + e.target.result + ')');
                            $(preview).addClass('has-image');
                            $(preview).hide();
                            $(preview).fadeIn(65);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(".profilePicUpload").on('change', function () {
                    proPicURL(this);
                });
            }

            //----- Add Information fields-------//
            $('.addNewInformation').on('click', function () {
                var icon = $('#icon').val();
                var label = $('#label').val();
                var value = $('#value').val();

                var html = `
                <div class="col-md-12 other-info-data">
                    <div class="form-group">
                        <div class="input-group mb-md-0 mb-4">
                            <div class="col-md-4">
                                <div class="input-group has_append">
                                    <input type="text" name="icon[]" class="form-control icon" value='${icon}' required readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary iconPicker" data-icon="las la-home" role="iconpicker">${icon}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input name="label[]" class="form-control" type="text" value="${label}" required placeholder="<?php echo app('translator')->get('Label'); ?>" readonly>
                            </div>
                            <div class="col-md-3 mt-md-0 mt-2">
                                <input name="value[]" class="form-control" value="${value}" type="text" required placeholder="<?php echo app('translator')->get('Value'); ?>" readonly>
                            </div>
                            <div class="col-md-1 mt-md-0 mt-2 text-right">
                                <span class="input-group-btn">
                                    <button class="btn btn--danger btn-lg removeInfoBtn w-100" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;

                if (icon && label && value){
                    $('.addedField').append(html);

                    $('#icon').val('');
                    $('#label').val('');
                    $('#value').val('');
                }
            });

            $(document).on('click', '.removeInfoBtn', function () {
                $(this).closest('.other-info-data').remove();
            });

            function scrol() {
                var bottom = $(document).height() - $(window).height();
                $('html, body').animate({
                    scrollTop: bottom
                }, 200);
            }

            // Icon picker
            $('.iconPicker').iconpicker({
                align: 'center', // Only in div tag
                arrowClass: 'btn-danger',
                arrowPrevIconClass: 'fas fa-angle-left',
                arrowNextIconClass: 'fas fa-angle-right',
                cols: 10,
                footer: true,
                header: true,
                icon: 'fas fa-bomb',
                iconset: 'fontawesome5',
                labelHeader: '{0} of {1} pages',
                labelFooter: '{0} - {1} of {2} icons',
                placement: 'bottom', // Only in button tag
                rows: 5,
                search: false,
                searchText: 'Search icon',
                selectedClass: 'btn-success',
                unselectedClass: ''
            }).on('change', function (e) {
                $(this).parent().siblings('.icon').val(`<i class="${e.icon}"></i>`);
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/vehicle/edit.blade.php ENDPATH**/ ?>