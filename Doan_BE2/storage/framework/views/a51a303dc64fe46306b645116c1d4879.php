
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                <b>Thêm Danh Mục Sản Phẩm</b>
                </header>
                <div class="panel-body">               
                    <div class="position-center">
                        <form action="<?php echo e(URL::to('/ad/saveDM')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô Tả Danh Mục"></textarea>
                        </div>                     
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Hiển Thị</b></label>
                            <select name="category_product_status" class="form-control input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển Thị</option>
                                                                
                            </select>
                            <?php
                            $message = Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?>
                        </div>
                        <button type="submit" name ="add_category_product"class="btn btn-info">Thêm Danh Mục</button>
                    </form>
                    </div>

                </div>
            </section>
    </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\demo\resources\views/admin/add_category_product.blade.php ENDPATH**/ ?>