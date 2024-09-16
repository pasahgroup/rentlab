<!DOCTYPE html>
<html>
<head>
    <title>Auto populate Dropdown with jQuery AJAX in Laravel 9</title>
</head>
<body>

    <!-- Department Dropdown -->
    Department : <select id='sel_depart' name='sel_depart'>
        <option value='0'>-- Select department --</option>

        <!-- Read Departments -->
        <?php $__currentLoopData = $departments['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value='<?php echo e($department->id); ?>'><?php echo e($department->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>

    <br><br>
    <!-- Department Employees Dropdown -->
    Employee : <select id='sel_emp' name='sel_emp'>
        <option value='0'>-- Select Employee --</option>
    </select>



        Employee2 : <select id='sel_emp2' name='sel_emp2'>
        <option value='0'>-- Select Employee --</option>
    </select>


    <!-- Script -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

     <script type="text/javascript" src="../js/jquery360.min.js"></script>
    
    <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#sel_depart').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#sel_emp').find('option').not(':first').remove();
//alert(id);
             // AJAX request 
             $.ajax({
                 url: 'getEmployees/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                 alert(len);

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#sel_emp").append(option); 
                          }
                     }

                 }
             });
        });
    });


     $(document).ready(function(){

        // Department Change
        $('#sel_emp').change(function(){

             // Department id
             var id = $(this).val();

//alert(id);
             // Empty the dropdown
             $('#sel_emp').find('option').not(':first').remove();

             // AJAX request 
             $.ajax({
                 url: 'getEmp/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

//alert(len);

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#sel_emp2").append(option); 
                          }
                     }

                 }
             });
        });
    });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/index.blade.php ENDPATH**/ ?>