<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Sejarah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-new-page">
    <h1><?= Html::encode($this->title) ?></h1><br><br>
    <style>
        .img-half-page {
            width: 80%; 
            height: 20%;
            display: block;
            margin: 0 auto;
        }
    </style>
    <?= Html::img('@web/logo/kampus.jpg', [
        'alt' => 'kampus', 'class' => 'img-half-page'])  ?> 
<h3>Pendiri dan Awal Mula</h3><br>
<p>Pada tahun 1980, sekelompok akademisi dan profesional yang berdedikasi
memutuskan untuk mendirikan sebuah institusi pendidikan tinggi yang bertujuan
untuk memberikan pendidikan berkualitas dan berkontribusi terhadap kemajuan
ilmu pengetahuan dan teknologi di Indonesia. Dengan visi tersebut,
berdirilah Universitas Tertutup Colomadu pada tanggal 1 September 1980.</p><br>
<h3>Perkembangan Awal</h3><br>
<p>Universitas Tertutup Colomadu memulai perjalanannya dengan hanya memiliki tiga fakultas,
yaitu Fakultas Teknik, Fakultas Ekonomi,dan Fakultas Sastra. Pada awalnya,
kampus ini menempati sebuah bangunan sederhana di pusat kota.
Meskipun dengan fasilitas yang terbatas, semangat dan dedikasi
para pendiri serta staf pengajar berhasil menarik minat banyak mahasiswa.</p><br>
<h3>Masa Depan yang Cerah</h3><br>
<p>Kini, Universitas Tertutup Colomadu dikenal sebagai salah satu universitas terkemuka di Indonesia,
    dengan reputasi yang diakui baik di tingkat nasional maupun internasional.
    Dengan terus berkomitmen pada inovasi, kualitas pendidikan, dan pengabdian kepada masyarakat,
    Universitas Cemerlang siap menghadapi tantangan dan peluang di masa depan,
    serta terus mencetak lulusan yang unggul dan berdaya saing global.</p>
</div>
