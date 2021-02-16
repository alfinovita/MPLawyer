
<?php $__env->startSection('title'); ?>
Konsultasi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Konsultasi</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Konsultasi</h6>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalKonsultasi">
        Tambah Konsultasi
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Lawyer ID</th>
            <th>Client ID</th>
            <th>Status</th>
            <th>Service ID</th>
            <th>Alasan Tolak</th>
            <th>Rating</th>
            <th>Review</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $verifikasiClient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->lawyer_id); ?></td>
            <td><?php echo e($m->client_id); ?></td>
            <td>
              <?php if($m->status == true): ?>
              AKTIF
              <?php else: ?>
              TIDAK AKTIF
              <?php endif; ?>
            </td>
            <td><?php echo e($m->service_id); ?></td>
            <td><?php echo e($m->alasan_tolak); ?></td>
            <td><?php echo e($m->rating); ?></td>
            <td><?php echo e($m->review); ?></td>
            <td>
                <a href="#" name="<?php echo e(request()->is('pendampingan-client*')?'pendampingan-client/status/':'pendampingan-lawyer/status/'); ?>" style="color:white" class="activation badge bg-<?php echo e(($m->status == true)?'success':'danger'); ?>" id="<?php echo e($m->id); ?>"><?php echo e(($m->status == true)?'Aktif':'Tidak A ktif'); ?></a>
                <a href="#" name="konsultasi" style="color:white" class="badge bg-info editKonsultasi" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalKonsultasiEdit">Edit</a>
                <a href="#" name="konsultasi" class="delete badge btn btn-danger" style="color:white" id="<?php echo e($m->id); ?>" >Hapus</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<!-- Modal Konsultasi-->
<div class="modal fade" id="modalKonsultasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Konsultasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('konsultasi')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Lawyer ID</label>
            <input type="nama" class="form-control form-control-konsultasi" name="lawyer_id" id="lawyer_id" placeholder="Lawyer ID" required>
        </div>
        <div class="form-group">
            <label>Client ID</label>
            <input type="nama" class="form-control form-control-konsultasi" name="client_id" id="client_id" placeholder="Client Id" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-konsultasi" name="status" id="status" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Service ID</label>
            <input type="nama" class="form-control form-control-konsultasi" name="service_id" id="service_id" placeholder="Service Id" required>
        </div>
        <div class="form-group">
            <label>Alasan Tolak</label>
            <input type="nama" class="form-control form-control-konsultasi" name="alasan_tolak" id="alasan_tolak" placeholder="Alasan Tolak" required>
        </div>
        <div class="form-group">
            <label>Rating</label>
            <input type="nama" class="form-control form-control-konsultasi" name="rating" id="rating" placeholder="Rating" required>
        </div>
        <div class="form-group">
            <label>Review</label>
            <input type="nama" class="form-control form-control-konsultasi" name="review" id="review" placeholder="Review" required>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
</div>
</div>

<!-- Modal Konsultasi Edit-->
<div class="modal fade" id="modalKonsultasiEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Konsultasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('konsultasi')); ?>" method="post" enctype="multipart/form-data" class='form-konsultasi'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Lawyer ID</label>
            <input type="nama" class="form-control form-control-konsultasi" name="lawyer_id" id="lawyer_id" placeholder="Lawyer ID" required>
        </div>
        <div class="form-group">
            <label>Client ID</label>
            <input type="nama" class="form-control form-control-konsultasi" name="client_id" id="client_id" placeholder="Client Id" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-konsultasi" name="status" id="status" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Service ID</label>
            <input type="nama" class="form-control form-control-konsultasi" name="service_id" id="service_id" placeholder="Service Id" required>
        </div>
        <div class="form-group">
            <label>Alasan Tolak</label>
            <input type="nama" class="form-control form-control-konsultasi" name="alasan_tolak" id="alasan_tolak" placeholder="Alasan Tolak" required>
        </div>
        <div class="form-group">
            <label>Rating</label>
            <input type="nama" class="form-control form-control-konsultasi" name="rating" id="rating" placeholder="Rating" required>
        </div>
        <div class="form-group">
            <label>Review</label>
            <input type="nama" class="form-control form-control-konsultasi" name="review" id="review" placeholder="Review" required>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  // $('.editKonsultasi').on('click', function(){
    $('table tbody').on( 'click', '.editKonsultasi', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('konsultasi')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/konsultasi/" + id + "/edit",
            success:function(data){
              $('.form-konsultasi').attr( 'action', url)
              $('.form-konsultasi #client_id').val(data.client_id)
              $('.form-konsultasi #konsultasi_id').val(data.konsultasi_id)
              $('.form-konsultasi #lawyer_id').val(data.lawyer_id)
              $('.form-konsultasi #rating').val(data.rating)
              $('.form-konsultasi #review').val(data.review)
              $('.form-konsultasi #status').val(data.status)
              $('.form-konsultasi #alasan_tolak').val(data.alasan_tolak);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/verifikasiClient/index.blade.php ENDPATH**/ ?>