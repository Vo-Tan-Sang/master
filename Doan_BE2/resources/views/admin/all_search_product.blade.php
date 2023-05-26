@extends('admin.index')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading"> 
       Sản Phẩm Tìm Được
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
        
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên Sản Phẩm</th>
              <th>Giá</th>
              <th>Hình Ảnh</th>
              <th>Danh Mục</th>
              <th>Thương Hiệu</th>
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($search_product as $key =>$pro)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$pro->product_name}}</td>
              <td>{{$pro->product_price}}</td>
              <td><img src="/up/{{$pro->product_image}}" alt="" width="100"></td>
              <td>{{$pro->category_name}}</td>
              <td>{{$pro->brand_name}}</td>           
            </tr>     
            @endforeach   
          </tbody>                   
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
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
 @endsection