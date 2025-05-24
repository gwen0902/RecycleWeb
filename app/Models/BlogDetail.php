<?php
/*namespace App\Models;
class BlogDetail{
    public static function all(){
        return [[
        'id' => 1,
        'title' => 'Dari Sampah ke Cuan — Kenapa Lo Harus Mulai Sekarang',
        'author' => 'Gweneth',
        'content' => 'Sampah udah jadi bagian dari hidup kita sehari-hari, 
        tapi sayangnya masih banyak yang nganggep itu cuma masalah — bukan 
        peluang. Padahal, di balik botol plastik bekas dan kardus bekas mie instan, ada nilai yang bisa lo ubah jadi uang. Literally.',
        'p' => 'Di era sekarang, di mana semua hal serba digital dan cepat, kita gak bisa terus-terusan buang sampah tanpa mikir. 
        Udah waktunya ubah mindset: sampah bukan akhir, tapi awal dari perubahan.',
        'c' => 'Kenapa Sampah Punya Nilai?',
        'a' => 'Setiap jenis sampah punya potensi buat diolah ulang. Mulai dari plastik, 
        kertas, hingga elektronik bekas. Tapi masalahnya, gak semua orang tau gimana cara 
        daur ulang yang benar, atau ke mana harus buang sampahnya supaya gak cuma numpuk di TPA. 
        Di sinilah peran Recycle App muncul — bantu lo buang sampah secara bijak, dan dapetin 
        insentif dari aksi kecil itu.',
        'q' => 'Gak Cuma Buat Lingkungan',
        'w' => 'Daur ulang bukan cuma soal nyelametin bumi (meskipun itu penting banget), tapi juga soal pemberdayaan ekonomi lokal. 
        Lo bantu para pengepul, driver, bahkan komunitas-komunitas kecil buat dapat penghasilan tambahan. Sekali buang sampah, 
        lo udah jadi bagian dari rantai sosial-ekonomi yang positif.',
        'image' => 'artikel1.png'

    ], [
        'id' => 2,
        'title' => 'Pilah Sampah Gak Ribet, Asal Tau Caranya',
        'author' => 'Ramadhan',
        'content' => 'Ngomongin daur ulang pasti ujung-ujungnya nyangkut ke satu hal penting: 
        milah sampah. Tapi kenyataannya, masih banyak yang mikir ini ribet, makan tempat, atau 
        malah gak penting. Padahal, kalau lo tau cara yang simpel, pilah sampah bisa jadi kebiasaan 
        yang gampang dan berdampak banget.',
        'p' => '-',
        'c' => 'Kenapa Harus Dipilah?',
        'a' => 'Sampah yang udah tercampur itu susah banget buat diolah ulang. Plastik yang kena sisa makanan? Susah. Kertas yang basah kena minyak? Gagal daur ulang. Makanya, pemilahan dari rumah itu penting banget — karena jadi filter pertama sebelum sampah masuk ke proses daur ulang lebih lanjut.',
        'q' => '3 Jenis Sampah yang Wajib Lo Tau',
        'w' => 'Organik
        Sisa makanan, kulit buah, daun-daunan. Ini bisa lo olah jadi kompos atau biarkan tim Recycle ambil dan olah secara ramah lingkungan.

        Anorganik Daur Ulang
        Botol plastik, kaleng, kardus, kaca. Kategori ini yang punya nilai ekonomis paling tinggi — dan yang bikin lo bisa dapet cuan lewat aplikasi Recycle.

        Residu
        Sampah yang gak bisa didaur ulang kayak popok, tisu bekas, atau styrofoam. Ini yang harus diminimalisir penggunaannya karena cuma nambah beban di TPA.',
        'image' => 'artikel2.jpg'
    ]
    , [
        'id' => 3,
        'title' => '5 Fakta Gila Tentang Sampah di Indonesia yang Harus Lo Tau',
        'author' => 'Gweneth',
        'content' => 'Kita buang sampah tiap hari, tapi tau gak sih seberapa 
        parah kondisi sampah di Indonesia sekarang? Nih gue kasih lima fakta 
        gila yang bakal bikin lo mikir dua kali sebelum asal buang:',
        'p' => '🤔',
        'c' => '1. Indonesia = Negara Penyumbang Sampah Plastik Terbesar Kedua di Dunia 🌊',
        'a' => 'Yap, kita cuma kalah dari China. Setiap tahun, jutaan ton sampah plastik kita berakhir di laut. Jadi, kalau lo pernah liat video penyu kena sedotan plastik — ya, itu bisa aja dari negara kita sendiri.',
        'q' => '2. 60% Sampah Domestik Gak Pernah Dikelola dengan Benar 🗑️',
        'w' => 'Artinya? Banyak yang dibakar sembarangan, dibuang ke sungai, atau numpuk di TPA sampai over capacity. Padahal sebagian besar dari itu bisa didaur ulang kalau lo pilah dari awal.',
        'image' => '1.jpg'
    ], [
        'id' => 4,
        'title' => 'Apa yang Terjadi Sama Sampah Setelah Dijemput?',
        'author' => 'Gweneth',
        'content' => 'Pernah gak sih lo mikir, “Sampah gue dibawa ke mana sih?”
        Well, Recycle gak cuma ambil terus hilang kayak sulap. Di balik satu penjemputan, 
        ada proses yang terstruktur, berdampak, dan pastinya gak asal buang.',
        'p' => 'Di era sekarang, di mana semua hal serba digital dan cepat, kita gak bisa terus-terusan buang sampah tanpa mikir. 
        Udah waktunya ubah mindset: sampah bukan akhir, tapi awal dari perubahan.',
        'c' => 'Kenapa Sampah Punya Nilai?',
        'a' => 'Setiap jenis sampah punya potensi buat diolah ulang. Mulai dari plastik, 
        kertas, hingga elektronik bekas. Tapi masalahnya, gak semua orang tau gimana cara 
        daur ulang yang benar, atau ke mana harus buang sampahnya supaya gak cuma numpuk di TPA. 
        Di sinilah peran Recycle App muncul — bantu lo buang sampah secara bijak, dan dapetin 
        insentif dari aksi kecil itu.',
        'q' => 'Gak Cuma Buat Lingkungan',
        'w' => 'Daur ulang bukan cuma soal nyelametin bumi (meskipun itu penting banget), tapi juga soal pemberdayaan ekonomi lokal. 
        Lo bantu para pengepul, driver, bahkan komunitas-komunitas kecil buat dapat penghasilan tambahan. Sekali buang sampah, 
        lo udah jadi bagian dari rantai sosial-ekonomi yang positif.',
        'image' => 'artikel4.webp'
        ]];
    }

   
}
?>