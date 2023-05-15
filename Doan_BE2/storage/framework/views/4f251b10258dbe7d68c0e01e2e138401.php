
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h3>Danh sach User</h3>
                    </div>

                    <div class="col-3">
                        <a href="http://"></a>
                    </div>

                    <div class="col-3">
                        <a href=""></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Hinh anh</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>                      
                            <td><?php echo e($us->name); ?></td>
                            <td><?php echo e($us->email); ?></td>
                            <td><?php echo e($us->phone); ?></td>
                            <td><img src="/upload/<?php echo e($us->file); ?>" alt="" width = "50"></td>
                            <td><?php echo e($us->password); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\demo\resources\views/auth/listUser.blade.php ENDPATH**/ ?>