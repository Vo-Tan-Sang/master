
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                <b>Update Sản Phẩm</b>
                </header>
                <div class="panel-body"> 
                    <?php
                    $message = Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
            ?>              
                    <div class="position-center">
                        <?php $__currentLoopData = $edit_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(URL::to('/ad/updateSP/'.$pro->product_id)); ?>" method="post" enctype="mutipart/form-data">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value ="<?php echo e($pro->product_name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value ="<?php echo e($pro->product_price); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                            <textarea style="resize: none" rows="3" class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mô Tả Sản Phẩm"><?php echo e($pro->product_decs); ?></textarea>
                        </div>  
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                            <textarea style="resize: none" rows="3" class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Nội Dung Sản Phẩm"><?php echo e($pro->product_content); ?></textarea>
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Danh Mục Sản Phẩm</b></label>
                            <select name="product_cate" class="form-control input-lg m-bot15">
                            <?php $__currentLoopData = $cate_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($cate->category_id == $pro->category_id): ?>
                                <option selected value="<?php echo e($cate->category_id); ?>"><?php echo e($cate->category_name); ?></option>   
                                <?php else: ?>   
                                <option value="<?php echo e($cate->category_id); ?>"><?php echo e($cate->category_name); ?></option>   
                                <?php endif; ?>   
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                               
                            </select>
                        </div>      
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Thương Hiệu</b></label>
                            <select name="product_brand" class="form-control input-lg m-bot15">
                                <?php $__currentLoopData = $brand_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($cate->category_id == $pro->category_id): ?>
                                <option selected value="<?php echo e($brand->brand_id); ?>"><?php echo e($brand->brand_name); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($brand->brand_id); ?>"><?php echo e($brand->brand_name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                 
                            </select>
                        </div>                
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Hiển Thị</b></label>
                            <select name="product_status" class="form-control input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển Thị</option>
                                                                
                            </select>
                        </div>
                        <button type="submit" name ="update_product"class="btn btn-info">Update</button>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </section>
    </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\demo\resources\views/admin/edit_product.blade.php ENDPATH**/ ?>