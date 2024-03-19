<!-- Footer -->
<footer class="sticky-footer pt-5 mt-5" style="background-color: #EAECF4;">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= date('Y'); ?> - FTIK Administrasi | Environment : <span class="badge badge-success"><?= ucwords(ENVIRONMENT); ?></span> | Halaman dimuat dalam <span class="badge badge-success">{elapsed_time}</span> detik.</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin akan keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Keluar" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- HelpDesk Modal-->
<div class="modal fade" id="helpDeskModal" tabindex="-1" role="dialog" aria-labelledby="helpModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="helpModal">Pusat Bantuan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Untuk bertanya terkait kendala apapun itu, dapat menghubungi pada <strong>Pusat Bantuan</strong> dibawah ini. <br>
                <img class="img-thumbnail border-0" src="<?= base_url('img/helpdesk.png') ?>" alt="HelpDesk Image">
                <a class="btn btn-danger btn-sm mt-2" href="mailto:juanasep59@gmail.com" target="_blank"><i class="bi bi-envelope-check"></i> Email</a>
                <a class="btn btn-success btn-sm mt-2" href="https://wa.me/message/B5PUVA44LCU7D1" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp</a>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="bi bi-arrow-left-circle"></i> Kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer Include -->
<?= $this->include('dashboard/templates/footer_include'); ?>
<!-- End Footer Include -->