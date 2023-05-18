
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Student View</div>
  <div class="card-body"> 
 <table class="table table-striped table-dark">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo e($students->name); ?></td>
      <td><?php echo e($students->address); ?></td>
      <td><?php echo e($students->mobile); ?></td>
    </tr>
  </tbody>
</table>
  </div>
      
    </hr>
  
  </div>
</div>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\demo\resources\views/students/show.blade.php ENDPATH**/ ?>