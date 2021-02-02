<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alam Tehnik - HVAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <h4>Alam Tehnik - News</h4>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo e(route('news.add')); ?>" class="btn btn-icon icon-left btn-primary" ><i class="far fa-edit"></i> Add</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">Description</th>
                            <th scope="col">status</th>
                        </tr>
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($news->firstItem()+$no); ?></td>
                            <td><?php echo e($data->news_title); ?></td>
                            <td><?php echo e($data->news_description); ?></td>
                            <td><?php echo e($data->status); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>  
        </div>
    </div>       
</body>
</html><?php /**PATH D:\ridho\Project\laravel 7\AdminAts\resources\views/news/index.blade.php ENDPATH**/ ?>