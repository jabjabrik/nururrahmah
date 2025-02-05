<!doctype html>
<html lang="en">

<head>
    <?php $this->load->view('profil/components/head') ?>
</head>

<body>
    <!-- NavBar -->
    <?php $this->load->view('profil/components/navbar') ?>
    <!-- End NavBar -->

    <div class="untree_co-hero overlay" style="background-image: url('<?= base_url('assets/images/img-12.jpg') ?>');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Tentang <br> <span style="color: #d4d400;">RA & MI Nurur Rahmah</span></h1>
                            <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                                <p>Lembaga pendidikan Islam yang berkomitmen untuk mencetak generasi muda yang cerdas, berakhlak mulia, dan berdaya saing tinggi.</p>
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
                        <h2 class="line-bottom mb-4">Tentang RA & MI Nurur Rahmah</h2>
                    </div>
                    <p data-aos="fade-up" style="color: #d8d8d8; font-size: .9em;" data-aos-delay="100">MI Nurur Rahma adalah lembaga pendidikan berbasis Islam yang menaungi dua jenjang, yaitu Raudlatul Athfal (RA) yang setara dengan Taman Kanak-Kanak (TK) dan Madrasah Ibtidaiyah (MI) sebagai jenjang pendidikan dasar. Berdiri sejak 4 Juli 2000, sekolah ini berkomitmen memberikan pendidikan yang berkualitas dengan menanamkan nilai-nilai keislaman serta membentuk karakter disiplin dan cerdas bagi setiap peserta didik.</p>
                    <p data-aos="fade-up" style="color: #d8d8d8; font-size: .9em;" data-aos-delay="100">RA Nurur Rahma berfokus pada pendidikan anak usia dini dengan metode pembelajaran yang menyenangkan, memperkenalkan dasar agama Islam, serta mengembangkan kemampuan motorik dan sosial anak. Sementara itu, MI Nurur Rahma menggabungkan kurikulum nasional dengan pendidikan agama untuk membentuk generasi yang berakhlak, berilmu, dan siap menghadapi jenjang pendidikan selanjutnya.</p>
                    <p data-aos="fade-up" style="color: #d8d8d8; font-size: .9em;" data-aos-delay="100">Dengan tenaga pendidik yang berpengalaman dan lingkungan belajar yang nyaman, MI dan RA Nurur Rahma terus berupaya memberikan pengalaman pendidikan terbaik bagi siswa agar mereka siap menghadapi masa depan dengan bekal ilmu dan nilai keislaman yang kuat.</p>
                    <div class="row count-numbers mb-5">
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <span class="counter d-block"><span data-number="45">0</span><span></span></span>
                            <span class="caption-2">Jumlah Siswa RA</span>
                        </div>
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <span class="counter d-block"><span data-number="65">0</span><span></span></span>
                            <span class="caption-2">Jumlah Siswa MI</span>
                        </div>
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <span class="counter d-block"><span data-number="12">0</span><span></span></span>
                            <span class="caption-2">Jumlah Guru</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <figure class="img-wrap-2">
                        <img src="<?= base_url('assets/images/img-13.jpg'); ?>" alt="Image" class="img-fluid rounded shadow">
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