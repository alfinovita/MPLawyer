

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-10  text-center ftco-animate">
                <h2 class="pb-4 font-weight-bold">Detail Video Conference</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-3">
                <div class="card-body m-3">
                    <div class="col pb-3">
                        <div class="row">
                            <div class="col-sm p-5">
                                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/person_4.jpg" class="rounded-circle " style="height: 100px; width:100px;" alt="...">
                            </div>
                            <div class="col-sm-10  my-auto">
                                <div class="card-text">
                                    <h5 class="font-weight-bold m-0">Freza Ade</h5>
                                    <small class="text-muted">1 Agustus 2020 15.00 WIB</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-text">
                        <div class="col mb-2">
                            <h5 class="font-weight-bold mb-0">Detail Pengajuan</h5>
                        </div>
                        <div class="col mb-2">
                            <small class="row  font-weight-bold justify-content-end mx-auto " style="color: #FF2424;">#PNSF24356OP89JK</small>

                            <p class="my-auto">Bidang Hukum</p>
                            <h6 class="font-weight-bold mx-auto mb-3">
                                Personal Injury
                            </h6>

                        </div>
                        <div class="col mb-2">
                            <p class="my-auto"> Durasi</p>
                            <h6 class="font-weight-bold mx-auto  mb-3 ">
                                2 Jam
                            </h6>
                        </div>
                        <div class="col mb-2">
                            <p class="my-auto"> Tanggal dan Waktu Video Conference</p>
                            <h6 class="font-weight-bold mx-auto  mb-3 ">
                                Rabu, 5 Agustus 2020; 19:30 WIB
                            </h6>
                        </div>
                        <div class="col mb-2">
                            <p class="my-auto">Status</p>
                            <h6 class="font-weight-bold mx-auto">
                                Menunggu Lawyer
                            </h6>
                        </div>
                        
                        
                        
                       
                          <div class="col mt-4">
                            <div class="alert alert-danger " style="color: #FF2424; text-align: center;" role="alert">
                                Url Video Conference Selama 2 jam
                                <p class="text-danger" style="font-size: 2vw;"><strong>https://meet.google.com/roe-ohha-pam</strong></p>
                                <button class="btn btn-outline-danger">Salin URL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
    <!-- Modal setuju -->
    <div class="modal fade" id="modal-setuju" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document ">
            <div class="modal-content ">
                <div class="modal-body mx-3 ">
                    <div class="row justify-content-center ">
                        <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/setuju.png " style="width: 40%; ">
                    </div>
                    <div class="row justify-content-center ">
                        <p class="font-weight-bold my-3 ">Apakah Anda Bersedia Melakukan Video Conference?</p>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-sm ">
                            <button type="button " class="btn btn-outline-danger btn-block font-weight-bold my-2 " data-dismiss="modal">Batal</button>
                        </div>
                        <div class="col-sm ">
                            <button type="button " class="btn btn-primary btn-block font-weight-bold my-2 ">Setujui</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal tolak -->
    <div class="modal fade" id="modal-tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document ">
            <div class="modal-content ">
                <div class="modal-body mx-3 ">
                    <div class="row justify-content-center ">
                        <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/tolak.png " style="width: 40%; ">
                    </div>
                    <div class="row justify-content-center ">
                        <p class="font-weight-bold ">Apakah Anda Ingin Menolaknya?</p>
                    </div>
                    <div class="form-group ">
                        <label for="appointment_message " class="text-black ">ALASAN PENOLAKAN</label>
                        <textarea name=" " id="appointment_message " class="form-control " cols="30 " rows="5 "></textarea>
                    </div>
                    <div class=" form-group ">
                        <div class="row ">
                            <div class="col-sm ">
                                <button type="button " class="btn btn-outline-danger btn-block font-weight-bold my-2 " data-dismiss="modal">Batal</button>
                            </div>
                            <div class="col-sm ">
                                <button type="button " class="btn btn-primary btn-block font-weight-bold my-2 ">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/detail-video-conference.blade.php ENDPATH**/ ?>