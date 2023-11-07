<!DOCTYPE html>
<html lang="id">
<head>
    {{-- @foreach ($undangan_pengaturan as $row) --}}
        @php
            // $kunci = $row->kunci;
            $kunci = 'mIjh78y8ge13b89d99c1a29132e57d2ca';
        @endphp
    {{-- @endforeach --}}

    @php
        // $musiknya = '/assets/music/' . $users_order_musik[0]->musik;
        // if (file_exists(public_path($musiknya))) {
        //     $musiknya = $musiknya;
        // } else {
            $musiknya = "/assets/music/AkadbyPayungTeduh.mp3";
        // }

        $kitaPNG = 'assets/users/' . $kunci . '/kita.png';
        $groomPNG = 'assets/users/' . $kunci . '/groom.png';
        $bridePNG = 'assets/users/' . $kunci . '/bride.png';

        if (file_exists(public_path($kitaPNG))) {
            $kitaPNG = asset($kitaPNG);
        } else {
            $kitaPNG = asset('assets/base/img/kita.png');
        }

        if (file_exists(public_path($groomPNG))) {
            $groomPNG = asset($groomPNG);
        } else {
            $groomPNG = asset('assets/base/img/groom.png');
        }

        if (file_exists(public_path($bridePNG))) {
            $bridePNG = asset($bridePNG);
        } else {
            $bridePNG = asset('assets/base/img/bride.png');
        }
    @endphp

    {{-- @foreach ($users_mempelai as $row) --}}
        {{-- <title>{{ $row->nama_panggilan_pria }} & {{ $row->nama_panggilan_wanita }}</title> --}}

        <title>Jhon & Maria</title>

        <!-- REQUIRED META AREA -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#f5f6fa">
        {{-- <meta property="og:title" content="The Wedding of {{ $row->nama_panggilan_pria }} & {{ $row->nama_panggilan_wanita }}"> --}}

        <meta property="og:title" content="The Wedding of jhon & maria">
        {{-- <meta property="og:description" content="Hello @if (isset($invite)){{ $invite }}@endif! Kamu Di Undang.."> --}}
        <meta property="og:description" content="Hello Jhon! Kamu Di Undang..">
        {{-- <meta property="og:url" content="{{ base_url(''.$domain.'/'.$tamu_undangan) }}"> --}}
        <meta property="og:image" itemprop="image" content="{{ $kitaPNG }}">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <meta property="og:type" content="website" />
    {{-- @endforeach --}}

    <!-- CSS STYLE AREA -->
    <link rel="icon" href="{{ asset('/assets/base/img/favicon.ico? '.date("Y-m-d").'') }}">
    <link href="/assets/themes/Balinese_WD1/css/bootstrap.min.css?" rel="stylesheet">
    <link href="/assets/themes/Balinese_WD1/css/jquery.fancybox.css?" rel="stylesheet">
    <link rel="stylesheet" href="/assets/themes/Balinese_WD1/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/themes/Balinese_WD1/css/style.css">
    {{-- @if ($cek_koneksi_internet == true)
        <script src="https://www.google.com/recaptcha/api.js"></script>
    @endif --}}
</head>

<body style="background: url({{ $theme->background }})">
<!-- ============== HALAMAN AWAL =============== -->
<div class="thebegining">
    <div class="content-thebegining fadeInUp">
        <div class="kotak_cover">
            <img src="{{ $kitaPNG }}" class="cover-foto"/>
            <!-- image border cover -->
            {{-- <img src="{{asset('assets/themes/Balinese_WD1/img/bg_flower.png')}}" class="cover-border spin" /><br> --}}
            <img src="{{$theme->cover_border}}" class="cover-border spin" /><br>
            <!-- image border cover -->
        </div>
    </div>

    <div class="salam fadeInUp">
        <span class="salam_the_wedding_of" style="font-weight: 700">
            The Wedding of
        </span>
        <br/>
        <span class="salam_mempelai" style="font-weight: 500">
            {{-- @foreach($users_mempelai as $mempelai)
                {{ $mempelai->nama_panggilan_pria }} & {{ $mempelai->nama_panggilan_wanita }}
            @endforeach --}}
            Jhon & Maria
        </span>

        @if(!empty($invite))
            <div class="salam_kotak">
                <img src="/assets/themes/Balinese_WD1/img/bg_kotak_nama_undangan.png" alt="Snow">
                <div class="salam_kotak_kepada">
                    <span>Kepada Yth:</span>
                </div>
                <div class="salam_kotak_nama_undangan">
                    {{-- {{ $invite }} --}} juana
                </div>
            </div>
        @else 
            <div class="salam_kotak_nama_undangan_notfound">
                Anda diundang ke pesta pernikahan kami &#128512;
            </div>
        @endif
    </div>
    <a class="link_klik_untuk_buka_undangan btn btn-info animate__heartBeat">Open Invitation</a>

    {{-- <div>

        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        
        <defs>
        
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        
        </defs>
        
        <g class="parallax">
        
        <use xlink:href="#gentle-wave" x="48" y="0" fill="#ffeeda" />
        
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        
        <use xlink:href="#gentle-wave" x="48" y="5" fill="#fff7da" />
        
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fbfaef" />
        
        </g>
        
        </svg>
        
        </div> --}}
</div>
<div class="dekorasi-all fadeInUp">
    {{-- GAMBAR DEKORASI TENGAH --}}
    
    @if($theme->tengah_atas != 0)
        <img id="" src="{{ $theme->tengah_atas }}" class="imgatas">
    @endif

    {{-- GAMBAR DEKORASI KIRI --}}
    @if($theme->kiri_atas != 0)
          <img src="{{ $theme->kiri_atas }}" class="imgatas-kiri">
    @endif
  
    {{-- GAMBAR DEKORASI KANAN --}}
    @if($theme->kanan_atas != 0)
        <img src="{{ $theme->kanan_atas }}" class="imgatas-kanan"/>
    @endif
</div>

<div class="dekorasi-sampul fadeInUp">
    {{-- GAMBAR DEKORASI TENGAH --}}
    {{-- <img id="" src="{{ asset('assets/themes/Balinese_WD1/img/top_flower.png') }}" class="imgatas"> --}}

    {{-- GAMBAR DEKORASI KIRI --}}
    @if($theme->kiri_atas != 0)
          <img src="{{ $theme->kiri_atas }}" class="imgatas-kiri">
    @endif
    {{-- GAMBAR DEKORASI KANAN --}}
    @if($theme->kanan_atas != 0)
        <img src="{{ $theme->kanan_atas }}" class="imgatas-kanan"/>
    @endif
</div>

<div id="konten" style="z-index: 1;">

	<!-- ============== MUSIK =============== -->
	<audio loop src="{{ $musiknya }}" id="audio" ></audio>
	<?php
	//BUKA:::SAMPUL dan  users_MEMPELAI
	// foreach ($users_mempelai->getResult() as $row_users_mempelai){
         ?>
	<!-- ============== SAMPUL =============== -->

	<div id="sampul-konten" class="konten" style="background: url({{ $theme->background }})">
      	<table style="width: 100%;margin-top:-50px"> <!-- tambahkan margin-top:-XX jika kurang ketas -->
      		<tbody>
      		 <tr>
                <th style="text-align: center;">
                    <span class="the-wedding fadeInUp">- We Are Getting Married -</span>
                </th>
            </tr>
      		<tr>
      			<th style="text-align: center;">
                    {{-- <span class="nama-mempelai"><?php //echo $row_users_mempelai->nama_panggilan_pria; ?> & <?php //echo $row_users_mempelai->nama_panggilan_wanita; ?></span><br> --}}

                    <span class="nama-mempelai fadeInUp">jhon & Maria</span><br>
                    <span class="tanggal-weddingnya"></span>
                </th>
      		</tr>
      		<tr>
      			<th style="text-align: center;width: 40%;padding: 20px;">

                </th>
      		</tr>
            <tr>
                <th style="position: relative;text-align: center;">
					<img src="{{ $kitaPNG }} " class="cover-foto fadeInUp"/>

					<!-- image border cover -->
                    <img src="{{$theme->cover_border}}" class="cover-border spin" /><br>
					<!-- image border cover -->

                </th>
            </tr>
      		</tbody>
      	</table>
    </div>

	<!-- ============== users_MEMPELAI =============== -->
    <div id="users_mempelai-konten" class="konten" style="display: none;">
		<img src="{{ asset('assets/base/img/o-swastyastu-1.png') }}" class="mempelai-salam-pembuka fadeInUp"/><br>
		<br/>

		<?php
		//Load Sepatah kata di users_Mempelai
		// foreach ($undangan_sepatah_kata->getResult() as $row_undangan_sepatah_kata){
		// 	if ($row_undangan_sepatah_kata->sepatah_kata_halaman == "mempelai"){
		// 		//Simpan
		// 		$kata2_mempelai = $row_undangan_sepatah_kata->sepatah_kata_isi;
		// 	}
		// }
		?>
		{{-- <p class="mempelai-intermezzo" ><?php //echo $kata2_mempelai; ?></p> --}}
        <p class="mempelai-intermezzo fadeInUp" >kata kata dari mempelai</p>


		<img src="{{ asset($groomPNG) }}" class="mempelai-img fadeInUp" />

		<h1 class="mempelai-pria-nama fadeInUp">jhon</h1>
		<p class="mempelai-pria-ortu fadeInUp">Putra dari Bpk agus dan Ibu ayu<?php //echo "Putra dari Bpk. ".$row_users_mempelai->nama_ayah_pria . " dan Ibu " .$row_users_mempelai->nama_ibu_pria  ?></p>
		<h1 class="dengan fadeInUp">dengan</h1>

		<img src="{{asset($bridePNG) }} " class="mempelai-img fadeInUp"/>

		<h1 class="mempelai-wanita-nama fadeInUp"> maria<?php //echo $row_users_mempelai->nama_wanita; ?></h1>
		<p class="mempelai-wanita-ortu fadeInUp">Putri dari Bpk. albert dan ibu melisa<?php //echo "Putri dari Bpk. ".$row_users_mempelai->nama_ayah_wanita . " dan Ibu " .$row_users_mempelai->nama_ibu_wanita  ?></p>

		</div>
		<?php
		//TUTUP:::SAMPUL dan  users_MEMPELAI
		// }
        ?>

<!-- ============== users_ACARA =============== -->
{{-- @foreach($users_acara as $row_users_acara) --}}
    @php
        $tanggal_akad = now();
        $tanggal_resepsi = now();
    @endphp

    <div id="users_acara-konten" style="display: none;" class="konten">

        <div class="section-title fadeInUp">
            <h2> Acara </h2>

            {{-- Load Sepatah kata di Acara --}}
            {{-- @foreach($undangan_sepatah_kata as $row_undangan_sepatah_kata_acara1)
                @if($row_undangan_sepatah_kata_acara1->sepatah_kata_halaman == "acara")
                    @if($row_undangan_sepatah_kata_acara1->sepatah_kata_urutan == "1") --}}
                        {{-- Simpan --}}
                        {{-- @php
                            $kata2_acara_1 = $row_undangan_sepatah_kata_acara1->sepatah_kata_isi;
                        @endphp
                    @endif
                @endif
            @endforeach --}}
            sepatah_kata_isi

            {{-- {{ $kata2_acara_1 }} --}}
        </div>

        <div class="acaranya row-acara">
            <div class="col-acara">
                <div class="card fadeInUp">
                    <div class="card-body">
                        <table class="tb-acara fadeInUp">
                            <thead>
                                <th colspan="4" class="acara-title">- AKAD NIKAH -</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></i></th>
                                    <th class="tb-ket-acara"> Tanggal</th>
                                    <th class="tb-anu-acara">:</th>
                                    <th class="tb-isi-acara" id="tanggal-acara-akad">{{ $tanggal_akad }}</th>
                                </tr>
            
                                <tr>
                                    <th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></i></th>
                                    <th class="tb-ket-acara"> Jam</th>
                                    <th class="tb-anu-acara">:</th>
                                    <th class="tb-isi-acara">{{ now() }}</th>
                                </tr>
            
                                <tr>
                                    <th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></i></th>
                                    <th class="tb-ket-acara"> Tempat</th>
                                    <th class="tb-anu-acara">:</th>
                                    {{-- <th class="tb-isi-acara">{{ $row_users_acara->tempat_akad }}<br>{{ $row_users_acara->alamat_akad }}</th> --}}
                                    <th class="tb-isi-acara">
                                        gedung wp <br>
                                        jl.chanima
                                    </th>
                                </tr>
                            </tbody>
                        </table>
            
                    </div>
                </div>
            </div>
            <div class="col-acara">
                <div class="card fadeInUp">
                    <div class="card-body">
                        <table class="tb-acara fadeInUp">
                            <thead>
                                <th colspan="4" class="acara-title fadeInUp">- RESEPSI -</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></i></th>
                                    <th class="tb-ket-acara fadeInUp"> Tanggal</th>
                                    <th class="tb-anu-acara">:</th>
                                    <th class="tb-isi-acara fadeInUp" id="tanggal-acara-resepsi">{{ $tanggal_resepsi }}</th>
                                </tr>
            
                                <tr>
                                    <th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></i></th>
                                    <th class="tb-ket-acara fadeInUp"> Jam</th>
                                    <th class="tb-anu-acara fadeInUp">:</th>
                                    <th class="tb-isi-acara fadeInUp">{{ now() }}</th>
                                </tr>
            
                                <tr>
                                    <th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></i></th>
                                    <th class="tb-ket-acara fadeInUp"> Tempat</th>
                                    <th class="tb-anu-acara fadeInUp">: tess</th>
                                    {{-- <th class="tb-isi-acara">{{ $row_users_acara->tempat_resepsi }}<br>{{ $row_users_acara->alamat_resepsi }}</th> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
        </div>

        {{-- Load Sepatah kata di users_Mempelai --}}
        {{-- @foreach($undangan_sepatah_kata as $row_undangan_sepatah_kata_acara2)
            @if($row_undangan_sepatah_kata_acara2->sepatah_kata_halaman == "acara")
                @if($row_undangan_sepatah_kata_acara2->sepatah_kata_urutan == "2") --}}
                    {{-- Simpan --}}
                    {{-- @php
                        $kata2_acara_2 = $row_undangan_sepatah_kata_acara2->sepatah_kata_isi;
                    @endphp
                @endif
            @endif
        @endforeach --}}
        <p class="fadeInUp">sepatah_kata_isi2</p>
        {{-- {{ $kata2_acara_2 }} --}}
    </div>
{{-- @endforeach --}}
<!-- ============== users_ALBUM =============== -->
<div id="users_album-konten" style="display: none;">
    <section class="gallery-section section-padding" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title fadeInUp">
                        <h2>Album Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="gallery-grids">

                        {{-- @foreach($users_album as $key => $datausers_album)
                            <div class="grid">
                                <a href="/assets/users/{{ $kunci }}/{{ $datausers_album['album'] }}.png" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="/assets/users/{{ $kunci }}/{{ $datausers_album['album'] }}.png" alt>
                                </a>
                            </div>
                        @endforeach --}}

                    </div>
                </div>

                @php
                    // ALBUM VIDEO
                    // $youtube = $users_album_video[0]->video;
                @endphp

                {{-- @if($youtube != "")
                    @php
                        $embed = str_replace("youtu.be", "www.youtube.com/embed", $youtube);
                        $unik = str_replace("https://youtu.be", "", $youtube);
                        $unikfinal = str_replace("/", "", $unik);
                    @endphp

                    <div class="col col-xs-12">
                        <div class="youtube">
                            <a href="{{ $embed }}" data-type="iframe" class="video-play-btn">
                                <img src="https://img.youtube.com/vi/{{ $unikfinal }}/maxresdefault.jpg" alt class="img img-responsive">
                                <i class="mdi mdi-play"></i>
                            </a>
                        </div>
                    </div>
                @endif --}}
            </div>
        </div>
    </section>
</div>


<!-- ============== DOA DAN UCAPAN =============== -->
<div id="ucapan-konten" style="display: none;" class="konten">
    <div class="col-12 ucapan-field">
        <div class="section-title fadeInUp">
            <h2>Do'a dan Ucapan</h2>
        </div>
        <div class="row fadeInUp">
            <div class="col-12">
                <div class="form-group">
                    <input id="doa_dan_ucapan_nama_pengunjung" type="text" class="form-control mt-2" placeholder="Nama Anda" value="" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <select id="kehadiran" class="form-control mt-2">
                        <option value="hadir">Hadir</option>
                        <option value="tidak hadir">Tidak Hadir</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input id="jumlah" type="number" class="form-control mt-2" placeholder="Jumlah orang">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea id="doa_dan_ucapan_isi" class="form-control" id="exampleFormControlTextarea1" placeholder="Pesan anda.." rows="3" required></textarea>
                </div>
            </div>
            <div class="col-12">
                {{-- @if ($website_umum[19]->website_isi == "Aktif")
                    <div class="g-recaptcha" data-sitekey="{{ $website_umum[20]->website_isi }}" data-callback="ENABLEDsubmit_doa_dan_ucapan"></div>
                    <br>
                @endif --}}
                <button id="submit_doa_dan_ucapan fadeInUp" class="btn tombol_tema btn-block">Kirim</button>
                <img src="/assets/base/img/loadinga.svg" height="30px" style="display:none;" id="loading_">
            </div>
        </div>
    </div>
    <div class="komen-netizen fadeInUp">
        <div class="layout-komen">
            {{-- @foreach($users_doa_dan_ucapan as $key => $data)
                <div class="komen">
                    <div class="col-12 doa_dan_ucapan_nama_pengunjung">
                        {{ \esc($data['doa_dan_ucapan_nama_pengunjung']) }}
                    </div>
                    <div class="col-12 doa_dan_ucapan_isi">
                        {{ \esc($data['doa_dan_ucapan_isi']) }}
                    </div>
                </div>
            @endforeach --}}
        </div>
        <a href="#" id="loadMore" class="btn btn-primary btn-block fadeInUp" role="button">Lebih Banyak.</a>
    </div>
</div>

<!-- ============== CERITA =============== -->
<div id="cerita-konten" style="display: none;" class="konten">
    <section class="cerita section-padding" id="cerita">
        <div class="container">
            <div class="section-title fadeInUp">
                <h2> Cerita Kita </h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        {{-- <?php
                        // $no = 0;
                        // foreach ($users_cerita as $key => $data) {
                        //     $no++;
                        //     if ($no % 2 == 0) {
                        ?>
                            <div class="timeline">
                                <div class="timeline-icon"></div>
                                <div class="timeline-content">
                                    <span class="date">{{ $data['tanggal_cerita'] }}</span>
                                    <h4 class="title">{{ $data['judul_cerita'] }}</h4>
                                    <p class="description">
                                        {{ $data['isi_cerita'] }}
                                    </p>
                                </div>
                            </div>
                            <?php //} else { ?>
                            <div class="timeline">
                                <div class="timeline-icon"></div>
                                <div class="timeline-content right">
                                    <span class="date">{{ $data['tanggal_cerita'] }}</span>
                                    <h4 class="title">{{ $data['judul_cerita'] }}</h4>
                                    <p class="description">
                                        {{ $data['isi_cerita'] }}
                                    </p>
                                </div>
                            </div>
                        <?php //} ?>
                        <?php //} ?> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- ============== LOKASI =============== -->
<div id="lokasi-konten" style="display: none;" class="konten">
    {{-- @foreach ($users_acara as $row_users_acara) --}}
        <?php
        // $dicari = "iframe";
        // $kalimat_akad = $row_users_acara->gmap_akad;
        // $kalimat_resepsi = $row_users_acara->gmap_resepsi;

        // // Cek Apakah maps Akad dan Resepsi sama
        // if ($row_users_acara->gmap_akad == $row_users_acara->gmap_resepsi) {
        //     // Cek di AKAD betul iframe Gmap atau tidak
        //     if (preg_match("/$dicari/i", $kalimat_akad)) {
        ?>
        <div class="col-12">
            <div class="section-title fadeInUp">
                <h2>Denah Lokasi<br />Akad & Resepsi </h2>
            </div>
            <div class="col-12 maps fadeInUp">
                {{-- {!! $kalimat_akad !!} --}}
            </div>
        </div>
        <?php
        //     }
        // } else {
        //     if (preg_match("/$dicari/i", $kalimat_akad) && preg_match("/$dicari/i", $kalimat_resepsi)) {
        ?>
        <div class="section-title fadeInUp">
            <h2>Denah Lokasi</h2>
        </div>
        <div class="col-12">
            <div class="col-6">
                <div class="section-title fadeInUp">
                    <h2>Akad Nikah</h2>
                </div>
                <div class="maps">
                    {{-- {!! $kalimat_akad !!} --}}
                </div>
            </div>
            <div class="col-6 ">
                <div class="section-title fadeInUp">
                    <h2>Resepsi Pernikahan </h2>
                </div>
                <div class="maps fadeInUp">
                    {{-- {!! $kalimat_resepsi !!} --}}
                </div>
            </div>
        </div>
        <?php
            // } else {
            //     if (preg_match("/$dicari/i", $kalimat_akad)) {
            //         // GMAP sebenarnya
            //         $gmap_sebenarnya = $kalimat_akad;
            //     } elseif (preg_match("/$dicari/i", $kalimat_resepsi)) {
            //         // GMAP sebenarnya
            //         $gmap_sebenarnya = $kalimat_resepsi;
            //     }
            //     // TAMPILKAN MAP
        ?>
        <div class="col-12">
            <div class="section-title fadeInUp">
                <h2>Denah Lokasi<br />Akad & Resepsi </h2>
            </div>
            <div class="col-12 maps fadeInUp">bingkisan-konten
                {{-- {!! $gmap_sebenarnya !!} --}}
            </div>
        </div>
        @php
        //     }
        // }
        @endphp
    {{-- @endforeach --}}
</div>



	<!-- ============== BINGKISAN =============== -->
<div id="bingkisan-konten" style="display: none;" class="konten">
    <div class="section-title fadeInUp">
        <h2>Berikan Bingkisan</h2>
    </div>
    <div class="d-flex justify-content-center text-center">
        <div class="col-md-4 col-sm-12">
            <p class="description fadeInUp">Bagi yang ingin memberikan Kado Pernikahan untuk pernikahan kami, bisa melalui E-Money / Rekening Bank berikut:</p>
            <div class="card fadeInUp">
                <script src="{{ asset('assets/base/js/clipboard.min.js') }}"></script>
                <ul class="list-group list-group-flush">
                    @php
                    // $a = 0;
                    @endphp
                    {{-- @foreach ($daftar_bank_pengguna as $row_daftar_bank_pengguna)
                        <li class="list-group-item">
                            <b>{{ $row_daftar_bank_pengguna->bank_nama }}</b><br>
                            <span id="bank_nomor_rekening_{{ $a }}">{{ $row_daftar_bank_pengguna->bank_nomor_rekening }}</span>
                            <button class="bank_nomor_rekening_{{ $a }}" data-clipboard-action="copy" data-clipboard-target="#bank_nomor_rekening_{{ $a }}">
                                <i class="mdi mdi-clipboard"></i>
                            </button>
                            @if ($row_daftar_bank_pengguna->bank_kode != "")
                                <br>
                                <code>Kode Bank: {{ $row_daftar_bank_pengguna->bank_kode }}</code>
                            @endif
                            <br>
                            An. {{ $row_daftar_bank_pengguna->bank_nama_pemilik }}
                        </li>
                        <script>
                            var Clipboard = new ClipboardJS('.bank_nomor_rekening_{{ $a }}');
                        </script>
                        @php
                        $a++;
                        @endphp
                    @endforeach --}}
                </ul>
            </div>
        </div>
    </div>
</div>

	<a id="bingkisan" href="#bingkisan-konten" style="cursor:pointer;" class="tombol-bingkisan">
		<i class="mdi mdi-gift fadeInUp"> Beri Bingkisan</i>
	</a>
	<!-- TUTUP BINGKISAN -->

</div>


<!-- ============== BOTTOM NAVIGATION =============== -->
<nav class="mobile-bottom-nav2" id="nav">

	<div class="container-fluid px-0">
	    <div class="row no-gutters">
			<div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;" id="hehe">

				<div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
					<div class="mobile-bottom-nav__item-content">
						<i class="navbar-icon mdi mdi-home"></i>
						Sampul
					</div>
				</div>

				<div class="mobile-bottom-nav__item" id="users_mempelai">
					<div class="mobile-bottom-nav__item-content" >
						<i class="navbar-icon mdi mdi-heart"></i>
						Mempelai
					</div>
				</div>

				<div class="mobile-bottom-nav__item" id="users_acara">
					<div class="mobile-bottom-nav__item-content" >
						<i class="navbar-icon mdi mdi-calendar-text"></i>
						Acara
					</div>
				</div>
				<div class="mobile-bottom-nav__item" id="lain">
					<div class="mobile-bottom-nav__item-content" >
						<i class="navbar-icon mdi mdi-more" id="lain"></i>
						Lain
					</div>
				</div>


			</div>
		</div>
	</div>
</nav>
<nav class="mobile-bottom-nav2" id="nav2" style="display: none;">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-12" style="display: flex; margin-bottom: 5px; margin-top: 5px;" id="hehe">
                <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-home"></i>
                        Sampul
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="users_mempelai">
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-heart"></i>
                        Mempelai
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="users_acara">
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-calendar-text"></i>
                        Acara
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="ucapan">
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-message-bulleted"></i>
                        Ucapan
                    </div>
                </div>

                {{-- @foreach ($undangan_fitur as $row)
                <div class="mobile-bottom-nav__item" id="ucapan" @if($row->komen != 1) style="display:none;" @endif>
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-message-bulleted"></i>
                        Ucapan
                    </div>
                </div>
                @endforeach --}}
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-12" style="display: flex; margin-bottom: 5px; margin-top: 5px;">
                <div class="mobile-bottom-nav__item" id="users_album" >
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-image"></i>
                        Album
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="cerita" >
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-chart-bubble"></i>
                        Cerita Kita
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="lokasi">
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-map-marker"></i>
                        Lokasi
                    </div>
                </div>
                {{-- @foreach ($undangan_fitur as $row)
                <div class="mobile-bottom-nav__item" id="users_album" @if($row->gallery != 1) style="display:none;" @endif>
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-image"></i>
                        Album
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="cerita" @if($row->cerita != 1) style="display:none;" @endif>
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-chart-bubble"></i>
                        Cerita Kita
                    </div>
                </div>

                <div class="mobile-bottom-nav__item" id="lokasi" @if($row->lokasi != 1) style="display:none;" @endif>
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-map-marker"></i>
                        Lokasi
                    </div>
                </div>
                @endforeach --}}

                {{-- <div class="mobile-bottom-nav__item">
                    <div class="mobile-bottom-nav__item-content icons">
                        <i class="navbar-icon mdi mdi-close-circle" style="color:red;" id="tutup"></i>
                        Tutup
                    </div>
                </div> --}}
            </div>
            </div>
        </div>
    </div>
</nav>



</body>

<div class="dekorasi-all dekorasi-all-bawah">
    <!-- GAMBAR DEKORASI TENGAH -->
    @if($theme->tengah_bawah != 0)
    <img class="imgbawah fadeInUp" src="{{$theme->tengah_bawah}}">
    @endif
    <!-- GAMBAR DEKORASI KIRI -->
    @if($theme->kanan_bawah != 0)
    <img class="imgbawah-kanan fadeInUp" src="{{ $theme->kanan_bawah }}">
    @endif
    <!-- GAMBAR DEKORASI KIRI -->
    @if($theme->kiri_bawah != 0)
     <img class="imgbawah-kiri fadeInUp" src="{{ $theme->kiri_bawah }}">
     @endif
</div>

<div class="dekorasi-sampul dekorasi-sampul-bawah">
    <!-- GAMBAR DEKORASI TENGAH -->
   
    @if($theme->tengah_bawah != 0)
    <img class="imgbawah" src="{{$theme->tengah_bawah}}">
    @endif

    <!-- GAMBAR DEKORASI KIRI -->
    @if($theme->kanan_bawah != 0)
    <img class="imgbawah-kanan fadeInUp" src="{{ $theme->kanan_bawah }}"> 
    @endif
    <!-- GAMBAR DEKORASI KIRI -->
    @if($theme->kiri_bawah != 0)
    <img class="imgbawah-kiri fadeInUp" src="{{ $theme->kiri_bawah }}"> 
    @endif
</div>

<!-- mengirimkan data PHP ke JavaScript -->
<script>var base_url = "{{ asset('') }}";</script>
<script>var tanggal_akad = '{{ $tanggal_akad }}';</script>
<script>var tanggal_resepsi = '{{ $tanggal_resepsi }}';</script>
<!-- mengirimkan data PHP ke JavaScript -->

<!-- JS AREA -->
<script src="{{ asset('assets/themes/Balinese_WD1/js/moment-with-locales.js') }}"></script>
<script src="{{ asset('assets/themes/Balinese_WD1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/themes/Balinese_WD1/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/themes/Balinese_WD1/js/jquery-plugin-collection.js') }}"></script>
<script src="{{ asset('assets/themes/Balinese_WD1/js/script.js') }}"></script>
</html>
