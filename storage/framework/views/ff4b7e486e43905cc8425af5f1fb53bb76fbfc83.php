<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<body>

<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });
    })(jQuery);
</script>

<?php echo $__env->yieldPushContent('script'); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/layouts/masterm.blade.php ENDPATH**/ ?>