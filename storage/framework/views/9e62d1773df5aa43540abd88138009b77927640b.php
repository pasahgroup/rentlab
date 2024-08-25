<?php $__env->startSection('panel'); ?>
           <?php if(@json_decode($general->sys_version)->message): ?>
        <div class="row">
            <?php $__currentLoopData = json_decode($general->sys_version)->message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-12">
                  <div class="alert border border--primary" role="alert">
                      <div class="alert__icon bg--primary"><i class="far fa-bell"></i></div>
                      <p class="alert__message"><?php echo $msg; ?></p>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

            <div class="row mt-50 mb-none-30">      
        <div class="col-xl-12 mb-30">
            <div class="row mb-none-30">
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--success  box--shadow2">
                            <i class="la la-bank"></i>
                        </div>
                         <div class="widget-three__content">
                         <form  method="get"  action="<?php echo e(route('admin.deposit.pending')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="get">                       
                        <button type="submit" name="today" value="today"> <strong class="numbers"><?php echo e(showAmount($todayPendingInvoices->sum('amount'))); ?><?php echo e($general->cur_text); ?> (<?php echo e($todayPendingInvoices->count()); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('Today'); ?></p></button>
                            
                    </form>
                        </div>
                    </div><!-- widget-two end -->
                </div>

                <div class="col-lg-2 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--primary  box--shadow2">
                            <i class="las la-money-bill"></i>
                        </div>
                          <div class="widget-three__content">
                                  <form  method="get"  action="<?php echo e(route('admin.deposit.pending')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="get">                       
                        <button type="submit" name="tomorrow" value="tomorrow"> <strong class="numbers"><?php echo e(showAmount($tomorrowPendingInvoices->sum('amount'))); ?><?php echo e($general->cur_text); ?> (<?php echo e($tomorrowPendingInvoices->count()); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('Tomorrow2'); ?></p></button>
                            
                    </form>
                        </div>
                    </div><!-- widget-two end -->
                </div>

                <div class="col-lg-2 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--info  box--shadow2">
                            <i class="las la-credit-card"></i>
                        </div>
                          <div class="widget-three__content">
                                     <form  method="get"  action="<?php echo e(route('admin.deposit.pending')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="get">                       
                        <button type="submit" name="week" value="week">   <strong class="numbers"><?php echo e(showAmount($weekPendingInvoices->sum('amount'))); ?><?php echo e($general->cur_text); ?> (<?php echo e($weekPendingInvoices->count()); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('Week'); ?></p></button>
                            
                    </form>
                        </div>
                    </div><!-- widget-two end -->
                </div>

                   <div class="col-lg-2 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--info  box--shadow2">
                            <i class="las la-credit-card"></i>
                        </div>
                         <div class="widget-three__content">
                       
                                <form  method="get"  action="<?php echo e(route('admin.deposit.pending')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="get">                       
                        <button type="submit" name="month" value="month">  <strong class="numbers"><?php echo e(showAmount($monthPendingInvoices->sum('amount'))); ?><?php echo e($general->cur_text); ?> (<?php echo e($monthPendingInvoices->count()); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('Month'); ?></p></button>
                            
                    </form>
                        </div>
                    </div><!-- widget-two end -->
                </div>

                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--primary  box--shadow2">
                            <i class="las la-cloud-download-alt"></i>
                        </div>
                          <div class="widget-three__content">
                         <a href="<?php echo e(route('admin.deposit.pending')); ?>">
                             <strong class="numbers"><?php echo e(showAmount($payment['total_deposit_pending_sum'])); ?><?php echo e($general->cur_text); ?> (<?php echo e($payment['total_deposit_pending']); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('All'); ?></p>
                        </a>
                        </div>
                    </div><!-- widget-two end -->
                </div>
            </div>
        </div>
    </div><!-- row end -->

    <div class="row mt-50 mb-none-30">
     
        <div class="col-xl-12 mb-30">
              <strong class="numbers">Cancelled Invoices</strong> 
            <div class="row mb-none-30">
           
      <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--secondary box--shadow2">
                            <i class="la la-bank"></i>
                        </div>
                        <div class="widget-three__content">
                            <form  method="get"  action="<?php echo e(route('admin.deposit.rejected')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="get">                       
                        <button type="submit" name="weekcancellation" value="weekcancellation"> <strong class="numbers"><?php echo e(showAmount($weekCancelledInvoices->sum('amount'))); ?><?php echo e($general->cur_text); ?> (<?php echo e($weekCancelledInvoices->count()); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('This Week Cancelled invoices'); ?></p></button>
                            
                    </form>
                        </div>
                    </div><!-- widget-two end -->
                </div>
                        <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--secondary box--shadow2">
                            <i class="la la-bank"></i>
                        </div>
                        <div class="widget-three__content">
                            <form  method="get"  action="<?php echo e(route('admin.deposit.rejected')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="get">                       
                        <button type="submit" name="monthcancellation" value="monthcancellation"> <strong class="numbers"><?php echo e(showAmount($monthCancelledInvoices->sum('amount'))); ?><?php echo e($general->cur_text); ?> (<?php echo e($monthCancelledInvoices->count()); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('This Month Cancelled invoices'); ?></p></button>
                            
                    </form>
                        </div>
                    </div><!-- widget-two end -->
                </div>  

                 <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--secondary box--shadow2">
                            <i class="la la-bank"></i>
                        </div>
                        <div class="widget-three__content">
                         <a href="<?php echo e(route('admin.deposit.rejected')); ?>">
                             <strong class="numbers"><?php echo e(showAmount($payment['cancelledInvoicesDataSum'])); ?><?php echo e($general->cur_text); ?> (<?php echo e($payment['cancelledInvoicesData']); ?>)</strong>
                            <p class="text--small"><?php echo app('translator')->get('All Cancelled invoices'); ?></p>
                        </a>
                        </div>
                    </div><!-- widget-two end -->
                </div>                            
            </div>
        </div>
    </div><!-- row end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script src="<?php echo e(asset('assets/admin/js/vendor/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/vendor/chart.js.2.8.0.js')); ?>"></script>

    <script>
        "use strict";
        // apex-bar-chart js
        var options = {
            series: [{
                name: 'Total Payment',
                data: [
                  <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(getAmount(@$depositsMonth->where('months',$month)->first()->depositAmount)); ?>,
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            }],
            chart: {
                type: 'bar',
                height: 400,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: <?php echo json_encode($months, 15, 512) ?>,
            },
            yaxis: {
                title: {
                    text: "<?php echo e(__($general->cur_sym)); ?>",
                    style: {
                        color: '#7c97bb'
                    }
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "<?php echo e(__($general->cur_sym)); ?>" + val + " "
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();


        // apex-line chart
        var options = {
            chart: {
                height: 430,
                type: "area",
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08
                },
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 1000
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                },
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
        };

        chart.render();




         // apex-line chart
            var options = {
                chart: {
                    height: 430,
                    type: "area",
                    toolbar: {
                        show: false
                    },
                    dropShadow: {
                        enabled: true,
                        enabledSeries: [0],
                        top: -2,
                        left: 0,
                        blur: 10,
                        opacity: 0.08
                    },
                    animations: {
                        enabled: true,
                        easing: 'linear',
                        dynamicAnimation: {
                            speed: 1000
                        }
                    },
                },
                 colors: ['#00E396', '#0090FF'],
                dataLabels: {
                    enabled: false
                },
                series: [
                    {
                        name: "Series 1",
                        data: <?php echo json_encode($deposits['per_day_amount']->flatten(), 15, 512) ?>
                    }
                ],
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.9,
                        stops: [0, 90, 100]
                    }
                },
                xaxis: {
                    categories: <?php echo json_encode($deposits['per_day']->flatten(), 15, 512) ?>
                },
                grid: {
                    padding: {
                        left: 5,
                        right: 5
                    },
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#deposit-line"), options);

            chart.render();


        var ctx = document.getElementById('userBrowserChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_browser_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_browser_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                maintainAspectRatio: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });



        var ctx = document.getElementById('userOsChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_os_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_os_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 0.05)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            },
        });


        // Donut chart
        var ctx = document.getElementById('userCountryChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_country_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_country_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/customers/customer.blade.php ENDPATH**/ ?>