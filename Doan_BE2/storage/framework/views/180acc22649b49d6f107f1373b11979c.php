
<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading"> 
       Liệt Kê Thương Hiệu & Sản Phẩm
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <?php
        $message = Session::get('message');
if($message){
    echo $message;
    Session::put('message',null);
}
?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên Thương Hiệu</th>
              <th>Hiển Thị</th>
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $all_brand_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><?php echo e($cate_pro->brand_name); ?></td>
              <td><span class="text-ellipsis">
                <?php
                if($cate_pro->brand_status == 0){
                  ?>
                  <a href="<?php echo e(URL::to('/ad/unactive-brand-product/'.$cate_pro->brand_id)); ?>"><span class ="fa-thumb-styling fa fa-thumbs-up" style="color: rgb(0, 255, 81)"></span></a>
                  <?php
                  }else{
                  ?>               
                  <a href="<?php echo e(URL::to('/ad/active-brand-product/'.$cate_pro->brand_id)); ?>"><span class ="fa-thumb-styling fa fa-thumbs-down" style="color: red"></span></a>
                  <?php
                }
                ?>
                </span></td>
              
              <td>
                <a href="<?php echo e(URL::to('/ad/edit_brand_product/'.$cate_pro->brand_id)); ?>" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Bạn Có Chắc Muốn Xóa Thương Hiệu Này Hay Không?')" href="<?php echo e(URL::to('/ad/delete_brand_product/'.$cate_pro->brand_id)); ?>" class="active" ui-toggle-class=""> <i class="fa fa-times text-danger text"></i></a>
                
              </td>
            </tr>     
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
          </tbody>                   
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\demo\resources\views/admin/all_brand_product.blade.php ENDPATH**/ ?>