
<?php $__env->startSection('panel'); ?>
<!--   <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>
<script type="text/javascript" src="../js/jquery321.min.js"></script>
 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.offer.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="card-body">
                        <div class="row">
                                                         
                               <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Model'); ?></label>
                                    <select class="form-control" id="model" name="model" required="">
                                      <option value="">-- <?php echo app('translator')->get('Select car model'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $modelbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($modelb->car_model); ?>"><?php echo e(__(@$modelb->car_model)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="percent"><?php echo app('translator')->get('Percent'); ?></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="percent" name="percent"
                                               value="<?php echo e(old('price')); ?>" min=0 max=100 required>
                                                                           </div>
                                </div>
                            </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="start_date"><?php echo app('translator')->get('Start Date'); ?></label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                               value="<?php echo e(old('start_date')); ?>" required>
                                                                           </div>
                                </div>
                            </div>
                  
                              
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="end_date"><?php echo app('translator')->get('End Date'); ?></label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                               value="<?php echo e(old('end_date')); ?>" required>
                                                                           </div>
                                </div>
                            </div>                          

                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-11">
                      </div>

                       <div class="col-md-1">
                                                    
                            <button class="btn btn--primary w-100"><?php echo app('translator')->get('Save'); ?></button>

                            </div>
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
    <a href="<?php echo e(route('admin.offer.index')); ?>" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i
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

            function scrol() {
                var bottom = $(document).height() - $(window).height();
                $('html, body').animate({
                    scrollTop: bottom
                }, 200);
            }

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

                $(".remove-image").on('click', function () {
                    $(this).parents(".profilePicPreview").css('background-image', 'none');
                    $(this).parents(".profilePicPreview").removeClass('has-image');
                    $(this).parents(".thumb").find('input[type=file]').val('');
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


            $('select[name=brand]').val('<?php echo e(old('brand')); ?>');
            $('select[name=seater]').val('<?php echo e(old('seater')); ?>');

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


      <script type="text/javascript">
       $(document).ready(function(){
      // Department Change
      $('#brand').change(function(){
         // ward

  //alert('changed');

         var v = $(this).val();
             // alert(v);
           // Empty the dropdown
         // $('#model').find('option').not(':first').remove();
            // document.getElementById("classgf").value =v;
         // $('#village').find('option').not(':first').remove();
         // $('#project_name').find('option').not(':first').remove();
         // $('#project_activities').find('option').not(':first').remove();


         // AJAX request

         $.ajax({
          url: 'getA/'+v,            
           type: 'get',
           dataType: 'json',
           success: function(response){
      //alet('fffff');

             var len = 0;
            
             if(response['dataA'] != null){
               len = response['dataA'].length;
             }
         //alet(len);

                       if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataA'][i].id;
                 var name = response['dataA'][i].car_model;
                 var option = "<option value='"+id+"'>"+name+"</option>";
                 $("#model").append(option);
               }
             }
             //DAta are here

           }
        });
      });
    });
     </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/offer/add.blade.php ENDPATH**/ ?>