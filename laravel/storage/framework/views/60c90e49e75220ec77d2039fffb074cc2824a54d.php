<?php $__env->startSection('content'); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        友情链接管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">友情链接管理</a></li>
        <li class="active">添加</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">快速添加</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="/admin/links/insert" method="post" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <div class="box-body">
			

			<?php if(session('info')): ?>
			
			<div class="alert alert-danger">
				<?php echo e(session('info')); ?>	
			</div>
	
			<?php endif; ?>

			<?php if(count($errors) > 0): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
			<?php endif; ?>
                <div class="form-group">
                  <label for="exampleInputName">链接名称</label>
                  <input type="text" class="form-control" id="exampleInputName" name="webname" value="" placeholder="请输入链接名称">
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputUrl">链接地址</label>
                  <input type="text" class="form-control" id="exampleInputUrl" value="" name="weburl" placeholder="请输入链接地址">
                </div>
               
                <div class="form-group">
                  <label for="exampleInputFile">链接logo</label>
                  <input type="file" id="exampleInputLogo" name="logo">
                </div>
                <div class="form-group">
                  <label for="exampleInputStauts">链接状态</label><br>
                 <select class="form-group" name="status">
                   <option value="1">开启</option>
                   <option value="0">关闭</option>
                 </select>
                </div>

               <!--  <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>