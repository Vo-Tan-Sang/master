
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                <b>Cập Nhật Danh Mục Sản Phẩm</b>
                </header>
                <div class="panel-body">        
                    <?php $__currentLoopData = $edit_category_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$edit_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                    <div class="position-center">
                        <form action="<?php echo e(URL::to('/ad/updateDM/'.$edit_value->category_id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" value="<?php echo e($edit_value->category_name); ?>" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" ><?php echo e($edit_value->category_decs); ?></textarea>
                        </div>                     
                            <?php
                            $message = Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?>
                       
                        <button type="submit" name ="update_category_product"class="btn btn-info">Update Danh Mục</button>
                    </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
    </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\demo\resources\views/admin/edit_category_product.blade.php ENDPATH**/ ?>