<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('profil/components/head') ?>
</head>

<body>
    <!-- NavBar -->
    <?php $this->load->view('profil/components/navbar') ?>
    <!-- End NavBar -->

    <div class="untree_co-hero overlay" style="background-image: url('<?= base_url('assets/images/img-14.jpg') ?>');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Visi & Misi <br> <span style="color: #d4d400;">RA & MI Nurur Rahmah</span></h1>
                            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                                <p>Membentuk Generasi Qur'ani yang Unggul dan Berakhlak Mulia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                        <h2 class="line-bottom mb-4 text-center">Visi</h2>
                    </div>
                    <p data-aos="fade-up" style="color: #d8d8d8; font-size: .9em;" data-aos-delay="100">Mewujudkan generasi yang unggul dalam bidang A.P.I.K (Afektif, Psikomotorik, Ilmu Pengetahuan dan Teknologi, serta Keagamaan), berbudi pekerti luhur, berdaya saing, serta mampu beradaptasi dengan perkembangan global tanpa meninggalkan nilai-nilai keislaman sebagai landasan kehidupan.</p>
                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                        <h2 class="line-bottom mb-4 text-center">Misi</h2>
                    </div>
                    <ul class="ul-check list-unstyled mb-5 primary" style="color: #eaeaea;" data-aos="fade-up" data-aos-delay="200">
                        <li>Menyelenggarakan pembinaan akhlak mulia sejak usia dini hingga jenjang madrasah.</li>
                        <li>Memberikan pendidikan dasar yang berorientasi pada keimanan, keislaman, dan kecintaan terhadap ilmu agama.</li>
                        <li>Mengembangkan keterampilan siswa sesuai dengan potensi dan kompetensinya di setiap jenjang pendidikan.</li>
                        <li>Membimbing siswa dalam memahami dasar-dasar ilmu pengetahuan yang sesuai dengan tahap perkembangan mereka.</li>
                    </ul>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <figure class="img-wrap-2">
                        <img src="<?= base_url('assets/images/img-16.jpg'); ?>" alt="Image" class="img-fluid rounded shadow">
                        <div class="dotted"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php $this->load->view('profil/components/footer') ?>
    <!-- End Footer -->

    <!-- Script -->
    <?php $this->load->view('profil/components/script') ?>
    <!-- End Script -->
</body>

</html>