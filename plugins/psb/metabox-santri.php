<?php

/**
 * ============================================
 * --- Metabox Form
 * ============================================
 **/

add_filter('rwmb_meta_boxes', 'psb_input_santri_baru');
function psb_input_santri_baru($meta_boxes) {
	$prefix = 'sb_';
	$meta_boxes[] = array(
		'id' => 'personal',
		'title' => __('Personal Information', 'textdomain'),
		'post_types' => 'santri_baru',
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => $prefix . 'nama_panggilan',
				'name' => 'Nama Panggilan',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'kelamin',
				'name' => 'Gender',
				'type' => 'radio',
				'options' => array(
					'Laki-laki' => 'Laki-laki',
					'Perempuan' => 'Perempuan'),
			),
			array(
				'id' => $prefix . 'tempat_lahir',
				'name' => 'Tempat Lahir',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'tanggal_lahir',
				'name' => 'Tanggal Lahir',
				'type' => 'date',
				'js_options' => array(
					'appendText' => '&nbsp;&nbsp;Format <strong>tanggal-bulan-tahun</strong>',
					'yearRange' => '1994:2013',
					'autoSize' => true,
					'buttonText' => 'Pilih Tanggal',
					'dateFormat' => 'dd-mm-yy',
					'showButtonPanel' => true,
					'changeYear' => true,
					'changeMonth' => true,
				),
			),
			array(
				'id' => $prefix . 'field_set_saudara',
				'name' => __('Jumlah Saudara', $prefix . 'field_set_saudara'),
				'type' => 'fieldset_text',
				'rows' => 2,
				'options' => array(
					'name' => __('Anak ke', $prefix . 'anak-ke'),
					'address' => __('Dari', $prefix . 'jumlah-saudara'),
				),
			),
			array(
				'id' => $prefix . 'alamat_lengkap',
				'name' => 'Alamat Lengkap',
				'desc' => 'Nama jalan, Nomer Rumah, RT, RW, Kode Pos, alamat lengkap luar negri dan lain-lain..',
				'type' => 'textarea',
			),
			array(
				'id' => $prefix . 'provinsi',
				'name' => 'Provinsi',
				'desc' => 'Pilih WNA jika berasal dari luar negri',
				'type' => 'select',
				'options' => array(
					'WNA' => '-== WNA ==-',
					'ACEH' => 'ACEH',
					'SUMATERA UTARA' => 'SUMATERA UTARA',
					'SUMATERA BARAT' => 'SUMATERA BARAT',
					'RIAU' => 'RIAU',
					'JAMBI' => 'JAMBI',
					'SUMATERA SELATAN' => 'SUMATERA SELATAN',
					'BENGKULU' => 'BENGKULU',
					'LAMPUNG' => 'LAMPUNG',
					'KEPULAUAN BANGKA BELITUNG' => 'KEPULAUAN BANGKA BELITUNG',
					'KEPULAUAN RIAU' => 'KEPULAUAN RIAU',
					'DKI JAKARTA' => 'DKI JAKARTA',
					'JAWA BARAT' => 'JAWA BARAT',
					'JAWA TENGAH' => 'JAWA TENGAH',
					'DI YOGYAKARTA' => 'DI YOGYAKARTA',
					'JAWA TIMUR' => 'JAWA TIMUR',
					'BANTEN' => 'BANTEN',
					'BALI' => 'BALI',
					'NUSA TENGGARA BARAT' => 'NUSA TENGGARA BARAT',
					'NUSA TENGGARA TIMUR' => 'NUSA TENGGARA TIMUR',
					'KALIMANTAN BARAT' => 'KALIMANTAN BARAT',
					'KALIMANTAN TENGAH' => 'KALIMANTAN TENGAH',
					'KALIMANTAN SELATAN' => 'KALIMANTAN SELATAN',
					'KALIMANTAN TIMUR' => 'KALIMANTAN TIMUR',
					'KALIMANTAN UTARA' => 'KALIMANTAN UTARA',
					'SULAWESI UTARA' => 'SULAWESI UTARA',
					'SULAWESI TENGAH' => 'SULAWESI TENGAH',
					'SULAWESI SELATAN' => 'SULAWESI SELATAN',
					'SULAWESI TENGGARA' => 'SULAWESI TENGGARA',
					'GORONTALO' => 'GORONTALO',
					'SULAWESI BARAT' => 'SULAWESI BARAT',
					'MALUKU' => 'MALUKU',
					'MALUKU UTARA' => 'MALUKU UTARA',
					'PAPUA BARAT' => 'PAPUA BARAT',
					'PAPUA' => 'PAPUA',
				),
			),
			array(
				'id' => $prefix . 'kota_kabupaten',
				'name' => 'Kota / Kabupaten',
				'desc' => 'Pilih WNA jika berasal dari luar negri',
				'type' => 'select_advanced',
				'options' => array(
					'WNA' => '-== WNA ==-',
					'KABUPATEN SIMEULUE' => 'KABUPATEN SIMEULUE',
					'KABUPATEN ACEH SINGKIL' => 'KABUPATEN ACEH SINGKIL',
					'KABUPATEN ACEH SELATAN' => 'KABUPATEN ACEH SELATAN',
					'KABUPATEN ACEH TENGGARA' => 'KABUPATEN ACEH TENGGARA',
					'KABUPATEN ACEH TIMUR' => 'KABUPATEN ACEH TIMUR',
					'KABUPATEN ACEH TENGAH' => 'KABUPATEN ACEH TENGAH',
					'KABUPATEN ACEH BARAT' => 'KABUPATEN ACEH BARAT',
					'KABUPATEN ACEH BESAR' => 'KABUPATEN ACEH BESAR',
					'KABUPATEN PIDIE' => 'KABUPATEN PIDIE',
					'KABUPATEN BIREUEN' => 'KABUPATEN BIREUEN',
					'KABUPATEN ACEH UTARA' => 'KABUPATEN ACEH UTARA',
					'KABUPATEN ACEH BARAT DAYA' => 'KABUPATEN ACEH BARAT DAYA',
					'KABUPATEN GAYO LUES' => 'KABUPATEN GAYO LUES',
					'KABUPATEN ACEH TAMIANG' => 'KABUPATEN ACEH TAMIANG',
					'KABUPATEN NAGAN RAYA' => 'KABUPATEN NAGAN RAYA',
					'KABUPATEN ACEH JAYA' => 'KABUPATEN ACEH JAYA',
					'KABUPATEN BENER MERIAH' => 'KABUPATEN BENER MERIAH',
					'KABUPATEN PIDIE JAYA' => 'KABUPATEN PIDIE JAYA',
					'KOTA BANDA ACEH' => 'KOTA BANDA ACEH',
					'KOTA SABANG' => 'KOTA SABANG',
					'KOTA LANGSA' => 'KOTA LANGSA',
					'KOTA LHOKSEUMAWE' => 'KOTA LHOKSEUMAWE',
					'KOTA SUBULUSSALAM' => 'KOTA SUBULUSSALAM',
					'KABUPATEN NIAS' => 'KABUPATEN NIAS',
					'KABUPATEN MANDAILING NATAL' => 'KABUPATEN MANDAILING NATAL',
					'KABUPATEN TAPANULI SELATAN' => 'KABUPATEN TAPANULI SELATAN',
					'KABUPATEN TAPANULI TENGAH' => 'KABUPATEN TAPANULI TENGAH',
					'KABUPATEN TAPANULI UTARA' => 'KABUPATEN TAPANULI UTARA',
					'KABUPATEN TOBA SAMOSIR' => 'KABUPATEN TOBA SAMOSIR',
					'KABUPATEN LABUHAN BATU' => 'KABUPATEN LABUHAN BATU',
					'KABUPATEN ASAHAN' => 'KABUPATEN ASAHAN',
					'KABUPATEN SIMALUNGUN' => 'KABUPATEN SIMALUNGUN',
					'KABUPATEN DAIRI' => 'KABUPATEN DAIRI',
					'KABUPATEN KARO' => 'KABUPATEN KARO',
					'KABUPATEN DELI SERDANG' => 'KABUPATEN DELI SERDANG',
					'KABUPATEN LANGKAT' => 'KABUPATEN LANGKAT',
					'KABUPATEN NIAS SELATAN' => 'KABUPATEN NIAS SELATAN',
					'KABUPATEN HUMBANG HASUNDUTAN' => 'KABUPATEN HUMBANG HASUNDUTAN',
					'KABUPATEN PAKPAK BHARAT' => 'KABUPATEN PAKPAK BHARAT',
					'KABUPATEN SAMOSIR' => 'KABUPATEN SAMOSIR',
					'KABUPATEN SERDANG BEDAGAI' => 'KABUPATEN SERDANG BEDAGAI',
					'KABUPATEN BATU BARA' => 'KABUPATEN BATU BARA',
					'KABUPATEN PADANG LAWAS UTARA' => 'KABUPATEN PADANG LAWAS UTARA',
					'KABUPATEN PADANG LAWAS' => 'KABUPATEN PADANG LAWAS',
					'KABUPATEN LABUHAN BATU SELATAN' => 'KABUPATEN LABUHAN BATU SELATAN',
					'KABUPATEN LABUHAN BATU UTARA' => 'KABUPATEN LABUHAN BATU UTARA',
					'KABUPATEN NIAS UTARA' => 'KABUPATEN NIAS UTARA',
					'KABUPATEN NIAS BARAT' => 'KABUPATEN NIAS BARAT',
					'KOTA SIBOLGA' => 'KOTA SIBOLGA',
					'KOTA TANJUNG BALAI' => 'KOTA TANJUNG BALAI',
					'KOTA PEMATANG SIANTAR' => 'KOTA PEMATANG SIANTAR',
					'KOTA TEBING TINGGI' => 'KOTA TEBING TINGGI',
					'KOTA MEDAN' => 'KOTA MEDAN',
					'KOTA BINJAI' => 'KOTA BINJAI',
					'KOTA PADANGSIDIMPUAN' => 'KOTA PADANGSIDIMPUAN',
					'KOTA GUNUNGSITOLI' => 'KOTA GUNUNGSITOLI',
					'KABUPATEN KEPULAUAN MENTAWAI' => 'KABUPATEN KEPULAUAN MENTAWAI',
					'KABUPATEN PESISIR SELATAN' => 'KABUPATEN PESISIR SELATAN',
					'KABUPATEN SOLOK' => 'KABUPATEN SOLOK',
					'KABUPATEN SIJUNJUNG' => 'KABUPATEN SIJUNJUNG',
					'KABUPATEN TANAH DATAR' => 'KABUPATEN TANAH DATAR',
					'KABUPATEN PADANG PARIAMAN' => 'KABUPATEN PADANG PARIAMAN',
					'KABUPATEN AGAM' => 'KABUPATEN AGAM',
					'KABUPATEN LIMA PULUH KOTA' => 'KABUPATEN LIMA PULUH KOTA',
					'KABUPATEN PASAMAN' => 'KABUPATEN PASAMAN',
					'KABUPATEN SOLOK SELATAN' => 'KABUPATEN SOLOK SELATAN',
					'KABUPATEN DHARMASRAYA' => 'KABUPATEN DHARMASRAYA',
					'KABUPATEN PASAMAN BARAT' => 'KABUPATEN PASAMAN BARAT',
					'KOTA PADANG' => 'KOTA PADANG',
					'KOTA SOLOK' => 'KOTA SOLOK',
					'KOTA SAWAH LUNTO' => 'KOTA SAWAH LUNTO',
					'KOTA PADANG PANJANG' => 'KOTA PADANG PANJANG',
					'KOTA BUKITTINGGI' => 'KOTA BUKITTINGGI',
					'KOTA PAYAKUMBUH' => 'KOTA PAYAKUMBUH',
					'KOTA PARIAMAN' => 'KOTA PARIAMAN',
					'KABUPATEN KUANTAN SINGINGI' => 'KABUPATEN KUANTAN SINGINGI',
					'KABUPATEN INDRAGIRI HULU' => 'KABUPATEN INDRAGIRI HULU',
					'KABUPATEN INDRAGIRI HILIR' => 'KABUPATEN INDRAGIRI HILIR',
					'KABUPATEN PELALAWAN' => 'KABUPATEN PELALAWAN',
					'KABUPATEN S I A K' => 'KABUPATEN S I A K',
					'KABUPATEN KAMPAR' => 'KABUPATEN KAMPAR',
					'KABUPATEN ROKAN HULU' => 'KABUPATEN ROKAN HULU',
					'KABUPATEN BENGKALIS' => 'KABUPATEN BENGKALIS',
					'KABUPATEN ROKAN HILIR' => 'KABUPATEN ROKAN HILIR',
					'KABUPATEN KEPULAUAN MERANTI' => 'KABUPATEN KEPULAUAN MERANTI',
					'KOTA PEKANBARU' => 'KOTA PEKANBARU',
					'KOTA D U M A I' => 'KOTA D U M A I',
					'KABUPATEN KERINCI' => 'KABUPATEN KERINCI',
					'KABUPATEN MERANGIN' => 'KABUPATEN MERANGIN',
					'KABUPATEN SAROLANGUN' => 'KABUPATEN SAROLANGUN',
					'KABUPATEN BATANG HARI' => 'KABUPATEN BATANG HARI',
					'KABUPATEN MUARO JAMBI' => 'KABUPATEN MUARO JAMBI',
					'KABUPATEN TANJUNG JABUNG TIMUR' => 'KABUPATEN TANJUNG JABUNG TIMUR',
					'KABUPATEN TANJUNG JABUNG BARAT' => 'KABUPATEN TANJUNG JABUNG BARAT',
					'KABUPATEN TEBO' => 'KABUPATEN TEBO',
					'KABUPATEN BUNGO' => 'KABUPATEN BUNGO',
					'KOTA JAMBI' => 'KOTA JAMBI',
					'KOTA SUNGAI PENUH' => 'KOTA SUNGAI PENUH',
					'KABUPATEN OGAN KOMERING ULU' => 'KABUPATEN OGAN KOMERING ULU',
					'KABUPATEN OGAN KOMERING ILIR' => 'KABUPATEN OGAN KOMERING ILIR',
					'KABUPATEN MUARA ENIM' => 'KABUPATEN MUARA ENIM',
					'KABUPATEN LAHAT' => 'KABUPATEN LAHAT',
					'KABUPATEN MUSI RAWAS' => 'KABUPATEN MUSI RAWAS',
					'KABUPATEN MUSI BANYUASIN' => 'KABUPATEN MUSI BANYUASIN',
					'KABUPATEN BANYU ASIN' => 'KABUPATEN BANYU ASIN',
					'KAB OGAN KOMERING ULU SELATAN' => 'KAB OGAN KOMERING ULU SELATAN',
					'KABUPATEN OGAN KOMERING ULU TIMUR' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
					'KABUPATEN OGAN ILIR' => 'KABUPATEN OGAN ILIR',
					'KABUPATEN EMPAT LAWANG' => 'KABUPATEN EMPAT LAWANG',
					'KAB PENUKAL ABAB LEMATANG ILIR' => 'KAB PENUKAL ABAB LEMATANG ILIR',
					'KABUPATEN MUSI RAWAS UTARA' => 'KABUPATEN MUSI RAWAS UTARA',
					'KOTA PALEMBANG' => 'KOTA PALEMBANG',
					'KOTA PRABUMULIH' => 'KOTA PRABUMULIH',
					'KOTA PAGAR ALAM' => 'KOTA PAGAR ALAM',
					'KOTA LUBUKLINGGAU' => 'KOTA LUBUKLINGGAU',
					'KABUPATEN BENGKULU SELATAN' => 'KABUPATEN BENGKULU SELATAN',
					'KABUPATEN REJANG LEBONG' => 'KABUPATEN REJANG LEBONG',
					'KABUPATEN BENGKULU UTARA' => 'KABUPATEN BENGKULU UTARA',
					'KABUPATEN KAUR' => 'KABUPATEN KAUR',
					'KABUPATEN SELUMA' => 'KABUPATEN SELUMA',
					'KABUPATEN MUKOMUKO' => 'KABUPATEN MUKOMUKO',
					'KABUPATEN LEBONG' => 'KABUPATEN LEBONG',
					'KABUPATEN KEPAHIANG' => 'KABUPATEN KEPAHIANG',
					'KABUPATEN BENGKULU TENGAH' => 'KABUPATEN BENGKULU TENGAH',
					'KOTA BENGKULU' => 'KOTA BENGKULU',
					'KABUPATEN LAMPUNG BARAT' => 'KABUPATEN LAMPUNG BARAT',
					'KABUPATEN TANGGAMUS' => 'KABUPATEN TANGGAMUS',
					'KABUPATEN LAMPUNG SELATAN' => 'KABUPATEN LAMPUNG SELATAN',
					'KABUPATEN LAMPUNG TIMUR' => 'KABUPATEN LAMPUNG TIMUR',
					'KABUPATEN LAMPUNG TENGAH' => 'KABUPATEN LAMPUNG TENGAH',
					'KABUPATEN LAMPUNG UTARA' => 'KABUPATEN LAMPUNG UTARA',
					'KABUPATEN WAY KANAN' => 'KABUPATEN WAY KANAN',
					'KABUPATEN TULANGBAWANG' => 'KABUPATEN TULANGBAWANG',
					'KABUPATEN PESAWARAN' => 'KABUPATEN PESAWARAN',
					'KABUPATEN PRINGSEWU' => 'KABUPATEN PRINGSEWU',
					'KABUPATEN MESUJI' => 'KABUPATEN MESUJI',
					'KABUPATEN TULANG BAWANG BARAT' => 'KABUPATEN TULANG BAWANG BARAT',
					'KABUPATEN PESISIR BARAT' => 'KABUPATEN PESISIR BARAT',
					'KOTA BANDAR LAMPUNG' => 'KOTA BANDAR LAMPUNG',
					'KOTA METRO' => 'KOTA METRO',
					'KABUPATEN BANGKA' => 'KABUPATEN BANGKA',
					'KABUPATEN BELITUNG' => 'KABUPATEN BELITUNG',
					'KABUPATEN BANGKA BARAT' => 'KABUPATEN BANGKA BARAT',
					'KABUPATEN BANGKA TENGAH' => 'KABUPATEN BANGKA TENGAH',
					'KABUPATEN BANGKA SELATAN' => 'KABUPATEN BANGKA SELATAN',
					'KABUPATEN BELITUNG TIMUR' => 'KABUPATEN BELITUNG TIMUR',
					'KOTA PANGKAL PINANG' => 'KOTA PANGKAL PINANG',
					'KABUPATEN KARIMUN' => 'KABUPATEN KARIMUN',
					'KABUPATEN BINTAN' => 'KABUPATEN BINTAN',
					'KABUPATEN NATUNA' => 'KABUPATEN NATUNA',
					'KABUPATEN LINGGA' => 'KABUPATEN LINGGA',
					'KABUPATEN KEPULAUAN ANAMBAS' => 'KABUPATEN KEPULAUAN ANAMBAS',
					'KOTA B A T A M' => 'KOTA B A T A M',
					'KOTA TANJUNG PINANG' => 'KOTA TANJUNG PINANG',
					'KABUPATEN KEPULAUAN SERIBU' => 'KABUPATEN KEPULAUAN SERIBU',
					'KOTA JAKARTA SELATAN' => 'KOTA JAKARTA SELATAN',
					'KOTA JAKARTA TIMUR' => 'KOTA JAKARTA TIMUR',
					'KOTA JAKARTA PUSAT' => 'KOTA JAKARTA PUSAT',
					'KOTA JAKARTA BARAT' => 'KOTA JAKARTA BARAT',
					'KOTA JAKARTA UTARA' => 'KOTA JAKARTA UTARA',
					'KABUPATEN BOGOR' => 'KABUPATEN BOGOR',
					'KABUPATEN SUKABUMI' => 'KABUPATEN SUKABUMI',
					'KABUPATEN CIANJUR' => 'KABUPATEN CIANJUR',
					'KABUPATEN BANDUNG' => 'KABUPATEN BANDUNG',
					'KABUPATEN GARUT' => 'KABUPATEN GARUT',
					'KABUPATEN TASIKMALAYA' => 'KABUPATEN TASIKMALAYA',
					'KABUPATEN CIAMIS' => 'KABUPATEN CIAMIS',
					'KABUPATEN KUNINGAN' => 'KABUPATEN KUNINGAN',
					'KABUPATEN CIREBON' => 'KABUPATEN CIREBON',
					'KABUPATEN MAJALENGKA' => 'KABUPATEN MAJALENGKA',
					'KABUPATEN SUMEDANG' => 'KABUPATEN SUMEDANG',
					'KABUPATEN INDRAMAYU' => 'KABUPATEN INDRAMAYU',
					'KABUPATEN SUBANG' => 'KABUPATEN SUBANG',
					'KABUPATEN PURWAKARTA' => 'KABUPATEN PURWAKARTA',
					'KABUPATEN KARAWANG' => 'KABUPATEN KARAWANG',
					'KABUPATEN BEKASI' => 'KABUPATEN BEKASI',
					'KABUPATEN BANDUNG BARAT' => 'KABUPATEN BANDUNG BARAT',
					'KABUPATEN PANGANDARAN' => 'KABUPATEN PANGANDARAN',
					'KOTA BOGOR' => 'KOTA BOGOR',
					'KOTA SUKABUMI' => 'KOTA SUKABUMI',
					'KOTA BANDUNG' => 'KOTA BANDUNG',
					'KOTA CIREBON' => 'KOTA CIREBON',
					'KOTA BEKASI' => 'KOTA BEKASI',
					'KOTA DEPOK' => 'KOTA DEPOK',
					'KOTA CIMAHI' => 'KOTA CIMAHI',
					'KOTA TASIKMALAYA' => 'KOTA TASIKMALAYA',
					'KOTA BANJAR' => 'KOTA BANJAR',
					'KABUPATEN CILACAP' => 'KABUPATEN CILACAP',
					'KABUPATEN BANYUMAS' => 'KABUPATEN BANYUMAS',
					'KABUPATEN PURBALINGGA' => 'KABUPATEN PURBALINGGA',
					'KABUPATEN BANJARNEGARA' => 'KABUPATEN BANJARNEGARA',
					'KABUPATEN KEBUMEN' => 'KABUPATEN KEBUMEN',
					'KABUPATEN PURWOREJO' => 'KABUPATEN PURWOREJO',
					'KABUPATEN WONOSOBO' => 'KABUPATEN WONOSOBO',
					'KABUPATEN MAGELANG' => 'KABUPATEN MAGELANG',
					'KABUPATEN BOYOLALI' => 'KABUPATEN BOYOLALI',
					'KABUPATEN KLATEN' => 'KABUPATEN KLATEN',
					'KABUPATEN SUKOHARJO' => 'KABUPATEN SUKOHARJO',
					'KABUPATEN WONOGIRI' => 'KABUPATEN WONOGIRI',
					'KABUPATEN KARANGANYAR' => 'KABUPATEN KARANGANYAR',
					'KABUPATEN SRAGEN' => 'KABUPATEN SRAGEN',
					'KABUPATEN GROBOGAN' => 'KABUPATEN GROBOGAN',
					'KABUPATEN BLORA' => 'KABUPATEN BLORA',
					'KABUPATEN REMBANG' => 'KABUPATEN REMBANG',
					'KABUPATEN PATI' => 'KABUPATEN PATI',
					'KABUPATEN KUDUS' => 'KABUPATEN KUDUS',
					'KABUPATEN JEPARA' => 'KABUPATEN JEPARA',
					'KABUPATEN DEMAK' => 'KABUPATEN DEMAK',
					'KABUPATEN SEMARANG' => 'KABUPATEN SEMARANG',
					'KABUPATEN TEMANGGUNG' => 'KABUPATEN TEMANGGUNG',
					'KABUPATEN KENDAL' => 'KABUPATEN KENDAL',
					'KABUPATEN BATANG' => 'KABUPATEN BATANG',
					'KABUPATEN PEKALONGAN' => 'KABUPATEN PEKALONGAN',
					'KABUPATEN PEMALANG' => 'KABUPATEN PEMALANG',
					'KABUPATEN TEGAL' => 'KABUPATEN TEGAL',
					'KABUPATEN BREBES' => 'KABUPATEN BREBES',
					'KOTA MAGELANG' => 'KOTA MAGELANG',
					'KOTA SURAKARTA' => 'KOTA SURAKARTA',
					'KOTA SALATIGA' => 'KOTA SALATIGA',
					'KOTA SEMARANG' => 'KOTA SEMARANG',
					'KOTA PEKALONGAN' => 'KOTA PEKALONGAN',
					'KOTA TEGAL' => 'KOTA TEGAL',
					'KABUPATEN KULON PROGO' => 'KABUPATEN KULON PROGO',
					'KABUPATEN BANTUL' => 'KABUPATEN BANTUL',
					'KABUPATEN GUNUNG KIDUL' => 'KABUPATEN GUNUNG KIDUL',
					'KABUPATEN SLEMAN' => 'KABUPATEN SLEMAN',
					'KOTA YOGYAKARTA' => 'KOTA YOGYAKARTA',
					'KABUPATEN PACITAN' => 'KABUPATEN PACITAN',
					'KABUPATEN PONOROGO' => 'KABUPATEN PONOROGO',
					'KABUPATEN TRENGGALEK' => 'KABUPATEN TRENGGALEK',
					'KABUPATEN TULUNGAGUNG' => 'KABUPATEN TULUNGAGUNG',
					'KABUPATEN BLITAR' => 'KABUPATEN BLITAR',
					'KABUPATEN KEDIRI' => 'KABUPATEN KEDIRI',
					'KABUPATEN MALANG' => 'KABUPATEN MALANG',
					'KABUPATEN LUMAJANG' => 'KABUPATEN LUMAJANG',
					'KABUPATEN JEMBER' => 'KABUPATEN JEMBER',
					'KABUPATEN BANYUWANGI' => 'KABUPATEN BANYUWANGI',
					'KABUPATEN BONDOWOSO' => 'KABUPATEN BONDOWOSO',
					'KABUPATEN SITUBONDO' => 'KABUPATEN SITUBONDO',
					'KABUPATEN PROBOLINGGO' => 'KABUPATEN PROBOLINGGO',
					'KABUPATEN PASURUAN' => 'KABUPATEN PASURUAN',
					'KABUPATEN SIDOARJO' => 'KABUPATEN SIDOARJO',
					'KABUPATEN MOJOKERTO' => 'KABUPATEN MOJOKERTO',
					'KABUPATEN JOMBANG' => 'KABUPATEN JOMBANG',
					'KABUPATEN NGANJUK' => 'KABUPATEN NGANJUK',
					'KABUPATEN MADIUN' => 'KABUPATEN MADIUN',
					'KABUPATEN MAGETAN' => 'KABUPATEN MAGETAN',
					'KABUPATEN NGAWI' => 'KABUPATEN NGAWI',
					'KABUPATEN BOJONEGORO' => 'KABUPATEN BOJONEGORO',
					'KABUPATEN TUBAN' => 'KABUPATEN TUBAN',
					'KABUPATEN LAMONGAN' => 'KABUPATEN LAMONGAN',
					'KABUPATEN GRESIK' => 'KABUPATEN GRESIK',
					'KABUPATEN BANGKALAN' => 'KABUPATEN BANGKALAN',
					'KABUPATEN SAMPANG' => 'KABUPATEN SAMPANG',
					'KABUPATEN PAMEKASAN' => 'KABUPATEN PAMEKASAN',
					'KABUPATEN SUMENEP' => 'KABUPATEN SUMENEP',
					'KOTA KEDIRI' => 'KOTA KEDIRI',
					'KOTA BLITAR' => 'KOTA BLITAR',
					'KOTA MALANG' => 'KOTA MALANG',
					'KOTA PROBOLINGGO' => 'KOTA PROBOLINGGO',
					'KOTA PASURUAN' => 'KOTA PASURUAN',
					'KOTA MOJOKERTO' => 'KOTA MOJOKERTO',
					'KOTA MADIUN' => 'KOTA MADIUN',
					'KOTA SURABAYA' => 'KOTA SURABAYA',
					'KOTA BATU' => 'KOTA BATU',
					'KABUPATEN PANDEGLANG' => 'KABUPATEN PANDEGLANG',
					'KABUPATEN LEBAK' => 'KABUPATEN LEBAK',
					'KABUPATEN TANGERANG' => 'KABUPATEN TANGERANG',
					'KABUPATEN SERANG' => 'KABUPATEN SERANG',
					'KOTA TANGERANG' => 'KOTA TANGERANG',
					'KOTA CILEGON' => 'KOTA CILEGON',
					'KOTA SERANG' => 'KOTA SERANG',
					'KOTA TANGERANG SELATAN' => 'KOTA TANGERANG SELATAN',
					'KABUPATEN JEMBRANA' => 'KABUPATEN JEMBRANA',
					'KABUPATEN TABANAN' => 'KABUPATEN TABANAN',
					'KABUPATEN BADUNG' => 'KABUPATEN BADUNG',
					'KABUPATEN GIANYAR' => 'KABUPATEN GIANYAR',
					'KABUPATEN KLUNGKUNG' => 'KABUPATEN KLUNGKUNG',
					'KABUPATEN BANGLI' => 'KABUPATEN BANGLI',
					'KABUPATEN KARANG ASEM' => 'KABUPATEN KARANG ASEM',
					'KABUPATEN BULELENG' => 'KABUPATEN BULELENG',
					'KOTA DENPASAR' => 'KOTA DENPASAR',
					'KABUPATEN LOMBOK BARAT' => 'KABUPATEN LOMBOK BARAT',
					'KABUPATEN LOMBOK TENGAH' => 'KABUPATEN LOMBOK TENGAH',
					'KABUPATEN LOMBOK TIMUR' => 'KABUPATEN LOMBOK TIMUR',
					'KABUPATEN SUMBAWA' => 'KABUPATEN SUMBAWA',
					'KABUPATEN DOMPU' => 'KABUPATEN DOMPU',
					'KABUPATEN BIMA' => 'KABUPATEN BIMA',
					'KABUPATEN SUMBAWA BARAT' => 'KABUPATEN SUMBAWA BARAT',
					'KABUPATEN LOMBOK UTARA' => 'KABUPATEN LOMBOK UTARA',
					'KOTA MATARAM' => 'KOTA MATARAM',
					'KOTA BIMA' => 'KOTA BIMA',
					'KABUPATEN SUMBA BARAT' => 'KABUPATEN SUMBA BARAT',
					'KABUPATEN SUMBA TIMUR' => 'KABUPATEN SUMBA TIMUR',
					'KABUPATEN KUPANG' => 'KABUPATEN KUPANG',
					'KABUPATEN TIMOR TENGAH SELATAN' => 'KABUPATEN TIMOR TENGAH SELATAN',
					'KABUPATEN TIMOR TENGAH UTARA' => 'KABUPATEN TIMOR TENGAH UTARA',
					'KABUPATEN BELU' => 'KABUPATEN BELU',
					'KABUPATEN ALOR' => 'KABUPATEN ALOR',
					'KABUPATEN LEMBATA' => 'KABUPATEN LEMBATA',
					'KABUPATEN FLORES TIMUR' => 'KABUPATEN FLORES TIMUR',
					'KABUPATEN SIKKA' => 'KABUPATEN SIKKA',
					'KABUPATEN ENDE' => 'KABUPATEN ENDE',
					'KABUPATEN NGADA' => 'KABUPATEN NGADA',
					'KABUPATEN MANGGARAI' => 'KABUPATEN MANGGARAI',
					'KABUPATEN ROTE NDAO' => 'KABUPATEN ROTE NDAO',
					'KABUPATEN MANGGARAI BARAT' => 'KABUPATEN MANGGARAI BARAT',
					'KABUPATEN SUMBA TENGAH' => 'KABUPATEN SUMBA TENGAH',
					'KABUPATEN SUMBA BARAT DAYA' => 'KABUPATEN SUMBA BARAT DAYA',
					'KABUPATEN NAGEKEO' => 'KABUPATEN NAGEKEO',
					'KABUPATEN MANGGARAI TIMUR' => 'KABUPATEN MANGGARAI TIMUR',
					'KABUPATEN SABU RAIJUA' => 'KABUPATEN SABU RAIJUA',
					'KABUPATEN MALAKA' => 'KABUPATEN MALAKA',
					'KOTA KUPANG' => 'KOTA KUPANG',
					'KABUPATEN SAMBAS' => 'KABUPATEN SAMBAS',
					'KABUPATEN BENGKAYANG' => 'KABUPATEN BENGKAYANG',
					'KABUPATEN LANDAK' => 'KABUPATEN LANDAK',
					'KABUPATEN MEMPAWAH' => 'KABUPATEN MEMPAWAH',
					'KABUPATEN SANGGAU' => 'KABUPATEN SANGGAU',
					'KABUPATEN KETAPANG' => 'KABUPATEN KETAPANG',
					'KABUPATEN SINTANG' => 'KABUPATEN SINTANG',
					'KABUPATEN KAPUAS HULU' => 'KABUPATEN KAPUAS HULU',
					'KABUPATEN SEKADAU' => 'KABUPATEN SEKADAU',
					'KABUPATEN MELAWI' => 'KABUPATEN MELAWI',
					'KABUPATEN KAYONG UTARA' => 'KABUPATEN KAYONG UTARA',
					'KABUPATEN KUBU RAYA' => 'KABUPATEN KUBU RAYA',
					'KOTA PONTIANAK' => 'KOTA PONTIANAK',
					'KOTA SINGKAWANG' => 'KOTA SINGKAWANG',
					'KABUPATEN KOTAWARINGIN BARAT' => 'KABUPATEN KOTAWARINGIN BARAT',
					'KABUPATEN KOTAWARINGIN TIMUR' => 'KABUPATEN KOTAWARINGIN TIMUR',
					'KABUPATEN KAPUAS' => 'KABUPATEN KAPUAS',
					'KABUPATEN BARITO SELATAN' => 'KABUPATEN BARITO SELATAN',
					'KABUPATEN BARITO UTARA' => 'KABUPATEN BARITO UTARA',
					'KABUPATEN SUKAMARA' => 'KABUPATEN SUKAMARA',
					'KABUPATEN LAMANDAU' => 'KABUPATEN LAMANDAU',
					'KABUPATEN SERUYAN' => 'KABUPATEN SERUYAN',
					'KABUPATEN KATINGAN' => 'KABUPATEN KATINGAN',
					'KABUPATEN PULANG PISAU' => 'KABUPATEN PULANG PISAU',
					'KABUPATEN GUNUNG MAS' => 'KABUPATEN GUNUNG MAS',
					'KABUPATEN BARITO TIMUR' => 'KABUPATEN BARITO TIMUR',
					'KABUPATEN MURUNG RAYA' => 'KABUPATEN MURUNG RAYA',
					'KOTA PALANGKA RAYA' => 'KOTA PALANGKA RAYA',
					'KABUPATEN TANAH LAUT' => 'KABUPATEN TANAH LAUT',
					'KABUPATEN KOTA BARU' => 'KABUPATEN KOTA BARU',
					'KABUPATEN BANJAR' => 'KABUPATEN BANJAR',
					'KABUPATEN BARITO KUALA' => 'KABUPATEN BARITO KUALA',
					'KABUPATEN TAPIN' => 'KABUPATEN TAPIN',
					'KABUPATEN HULU SUNGAI SELATAN' => 'KABUPATEN HULU SUNGAI SELATAN',
					'KABUPATEN HULU SUNGAI TENGAH' => 'KABUPATEN HULU SUNGAI TENGAH',
					'KABUPATEN HULU SUNGAI UTARA' => 'KABUPATEN HULU SUNGAI UTARA',
					'KABUPATEN TABALONG' => 'KABUPATEN TABALONG',
					'KABUPATEN TANAH BUMBU' => 'KABUPATEN TANAH BUMBU',
					'KABUPATEN BALANGAN' => 'KABUPATEN BALANGAN',
					'KOTA BANJARMASIN' => 'KOTA BANJARMASIN',
					'KOTA BANJAR BARU' => 'KOTA BANJAR BARU',
					'KABUPATEN PASER' => 'KABUPATEN PASER',
					'KABUPATEN KUTAI BARAT' => 'KABUPATEN KUTAI BARAT',
					'KABUPATEN KUTAI KARTANEGARA' => 'KABUPATEN KUTAI KARTANEGARA',
					'KABUPATEN KUTAI TIMUR' => 'KABUPATEN KUTAI TIMUR',
					'KABUPATEN BERAU' => 'KABUPATEN BERAU',
					'KABUPATEN PENAJAM PASER UTARA' => 'KABUPATEN PENAJAM PASER UTARA',
					'KABUPATEN MAHAKAM HULU' => 'KABUPATEN MAHAKAM HULU',
					'KOTA BALIKPAPAN' => 'KOTA BALIKPAPAN',
					'KOTA SAMARINDA' => 'KOTA SAMARINDA',
					'KOTA BONTANG' => 'KOTA BONTANG',
					'KABUPATEN MALINAU' => 'KABUPATEN MALINAU',
					'KABUPATEN BULUNGAN' => 'KABUPATEN BULUNGAN',
					'KABUPATEN TANA TIDUNG' => 'KABUPATEN TANA TIDUNG',
					'KABUPATEN NUNUKAN' => 'KABUPATEN NUNUKAN',
					'KOTA TARAKAN' => 'KOTA TARAKAN',
					'KABUPATEN BOLAANG MONGONDOW' => 'KABUPATEN BOLAANG MONGONDOW',
					'KABUPATEN MINAHASA' => 'KABUPATEN MINAHASA',
					'KABUPATEN KEPULAUAN SANGIHE' => 'KABUPATEN KEPULAUAN SANGIHE',
					'KABUPATEN KEPULAUAN TALAUD' => 'KABUPATEN KEPULAUAN TALAUD',
					'KABUPATEN MINAHASA SELATAN' => 'KABUPATEN MINAHASA SELATAN',
					'KABUPATEN MINAHASA UTARA' => 'KABUPATEN MINAHASA UTARA',
					'KABUPATEN BOLAANG MONGONDOW UTARA' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
					'KABUPATEN SIAU TAGULANDANG BIARO' => 'KABUPATEN SIAU TAGULANDANG BIARO',
					'KABUPATEN MINAHASA TENGGARA' => 'KABUPATEN MINAHASA TENGGARA',
					'KABUPATEN BOLAANG MONGONDOW SELATAN' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
					'KABUPATEN BOLAANG MONGONDOW TIMUR' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
					'KOTA MANADO' => 'KOTA MANADO',
					'KOTA BITUNG' => 'KOTA BITUNG',
					'KOTA TOMOHON' => 'KOTA TOMOHON',
					'KOTA KOTAMOBAGU' => 'KOTA KOTAMOBAGU',
					'KABUPATEN BANGGAI KEPULAUAN' => 'KABUPATEN BANGGAI KEPULAUAN',
					'KABUPATEN BANGGAI' => 'KABUPATEN BANGGAI',
					'KABUPATEN MOROWALI' => 'KABUPATEN MOROWALI',
					'KABUPATEN POSO' => 'KABUPATEN POSO',
					'KABUPATEN DONGGALA' => 'KABUPATEN DONGGALA',
					'KABUPATEN TOLI-TOLI' => 'KABUPATEN TOLI-TOLI',
					'KABUPATEN BUOL' => 'KABUPATEN BUOL',
					'KABUPATEN PARIGI MOUTONG' => 'KABUPATEN PARIGI MOUTONG',
					'KABUPATEN TOJO UNA-UNA' => 'KABUPATEN TOJO UNA-UNA',
					'KABUPATEN SIGI' => 'KABUPATEN SIGI',
					'KABUPATEN BANGGAI LAUT' => 'KABUPATEN BANGGAI LAUT',
					'KABUPATEN MOROWALI UTARA' => 'KABUPATEN MOROWALI UTARA',
					'KOTA PALU' => 'KOTA PALU',
					'KABUPATEN KEPULAUAN SELAYAR' => 'KABUPATEN KEPULAUAN SELAYAR',
					'KABUPATEN BULUKUMBA' => 'KABUPATEN BULUKUMBA',
					'KABUPATEN BANTAENG' => 'KABUPATEN BANTAENG',
					'KABUPATEN JENEPONTO' => 'KABUPATEN JENEPONTO',
					'KABUPATEN TAKALAR' => 'KABUPATEN TAKALAR',
					'KABUPATEN GOWA' => 'KABUPATEN GOWA',
					'KABUPATEN SINJAI' => 'KABUPATEN SINJAI',
					'KABUPATEN MAROS' => 'KABUPATEN MAROS',
					'KABUPATEN PANGKAJENE DAN KEPULAUAN' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
					'KABUPATEN BARRU' => 'KABUPATEN BARRU',
					'KABUPATEN BONE' => 'KABUPATEN BONE',
					'KABUPATEN SOPPENG' => 'KABUPATEN SOPPENG',
					'KABUPATEN WAJO' => 'KABUPATEN WAJO',
					'KABUPATEN SIDENRENG RAPPANG' => 'KABUPATEN SIDENRENG RAPPANG',
					'KABUPATEN PINRANG' => 'KABUPATEN PINRANG',
					'KABUPATEN ENREKANG' => 'KABUPATEN ENREKANG',
					'KABUPATEN LUWU' => 'KABUPATEN LUWU',
					'KABUPATEN TANA TORAJA' => 'KABUPATEN TANA TORAJA',
					'KABUPATEN LUWU UTARA' => 'KABUPATEN LUWU UTARA',
					'KABUPATEN LUWU TIMUR' => 'KABUPATEN LUWU TIMUR',
					'KABUPATEN TORAJA UTARA' => 'KABUPATEN TORAJA UTARA',
					'KOTA MAKASSAR' => 'KOTA MAKASSAR',
					'KOTA PAREPARE' => 'KOTA PAREPARE',
					'KOTA PALOPO' => 'KOTA PALOPO',
					'KABUPATEN BUTON' => 'KABUPATEN BUTON',
					'KABUPATEN MUNA' => 'KABUPATEN MUNA',
					'KABUPATEN KONAWE' => 'KABUPATEN KONAWE',
					'KABUPATEN KOLAKA' => 'KABUPATEN KOLAKA',
					'KABUPATEN KONAWE SELATAN' => 'KABUPATEN KONAWE SELATAN',
					'KABUPATEN BOMBANA' => 'KABUPATEN BOMBANA',
					'KABUPATEN WAKATOBI' => 'KABUPATEN WAKATOBI',
					'KABUPATEN KOLAKA UTARA' => 'KABUPATEN KOLAKA UTARA',
					'KABUPATEN BUTON UTARA' => 'KABUPATEN BUTON UTARA',
					'KABUPATEN KONAWE UTARA' => 'KABUPATEN KONAWE UTARA',
					'KABUPATEN KOLAKA TIMUR' => 'KABUPATEN KOLAKA TIMUR',
					'KABUPATEN KONAWE KEPULAUAN' => 'KABUPATEN KONAWE KEPULAUAN',
					'KABUPATEN MUNA BARAT' => 'KABUPATEN MUNA BARAT',
					'KABUPATEN BUTON TENGAH' => 'KABUPATEN BUTON TENGAH',
					'KABUPATEN BUTON SELATAN' => 'KABUPATEN BUTON SELATAN',
					'KOTA KENDARI' => 'KOTA KENDARI',
					'KOTA BAUBAU' => 'KOTA BAUBAU',
					'KABUPATEN BOALEMO' => 'KABUPATEN BOALEMO',
					'KABUPATEN GORONTALO' => 'KABUPATEN GORONTALO',
					'KABUPATEN POHUWATO' => 'KABUPATEN POHUWATO',
					'KABUPATEN BONE BOLANGO' => 'KABUPATEN BONE BOLANGO',
					'KABUPATEN GORONTALO UTARA' => 'KABUPATEN GORONTALO UTARA',
					'KOTA GORONTALO' => 'KOTA GORONTALO',
					'KABUPATEN MAJENE' => 'KABUPATEN MAJENE',
					'KABUPATEN POLEWALI MANDAR' => 'KABUPATEN POLEWALI MANDAR',
					'KABUPATEN MAMASA' => 'KABUPATEN MAMASA',
					'KABUPATEN MAMUJU' => 'KABUPATEN MAMUJU',
					'KABUPATEN MAMUJU UTARA' => 'KABUPATEN MAMUJU UTARA',
					'KABUPATEN MAMUJU TENGAH' => 'KABUPATEN MAMUJU TENGAH',
					'KABUPATEN MALUKU TENGGARA BARAT' => 'KABUPATEN MALUKU TENGGARA BARAT',
					'KABUPATEN MALUKU TENGGARA' => 'KABUPATEN MALUKU TENGGARA',
					'KABUPATEN MALUKU TENGAH' => 'KABUPATEN MALUKU TENGAH',
					'KABUPATEN BURU' => 'KABUPATEN BURU',
					'KABUPATEN KEPULAUAN ARU' => 'KABUPATEN KEPULAUAN ARU',
					'KABUPATEN SERAM BAGIAN BARAT' => 'KABUPATEN SERAM BAGIAN BARAT',
					'KABUPATEN SERAM BAGIAN TIMUR' => 'KABUPATEN SERAM BAGIAN TIMUR',
					'KABUPATEN MALUKU BARAT DAYA' => 'KABUPATEN MALUKU BARAT DAYA',
					'KABUPATEN BURU SELATAN' => 'KABUPATEN BURU SELATAN',
					'KOTA AMBON' => 'KOTA AMBON',
					'KOTA TUAL' => 'KOTA TUAL',
					'KABUPATEN HALMAHERA BARAT' => 'KABUPATEN HALMAHERA BARAT',
					'KABUPATEN HALMAHERA TENGAH' => 'KABUPATEN HALMAHERA TENGAH',
					'KABUPATEN KEPULAUAN SULA' => 'KABUPATEN KEPULAUAN SULA',
					'KABUPATEN HALMAHERA SELATAN' => 'KABUPATEN HALMAHERA SELATAN',
					'KABUPATEN HALMAHERA UTARA' => 'KABUPATEN HALMAHERA UTARA',
					'KABUPATEN HALMAHERA TIMUR' => 'KABUPATEN HALMAHERA TIMUR',
					'KABUPATEN PULAU MOROTAI' => 'KABUPATEN PULAU MOROTAI',
					'KABUPATEN PULAU TALIABU' => 'KABUPATEN PULAU TALIABU',
					'KOTA TERNATE' => 'KOTA TERNATE',
					'KOTA TIDORE KEPULAUAN' => 'KOTA TIDORE KEPULAUAN',
					'KABUPATEN FAKFAK' => 'KABUPATEN FAKFAK',
					'KABUPATEN KAIMANA' => 'KABUPATEN KAIMANA',
					'KABUPATEN TELUK WONDAMA' => 'KABUPATEN TELUK WONDAMA',
					'KABUPATEN TELUK BINTUNI' => 'KABUPATEN TELUK BINTUNI',
					'KABUPATEN MANOKWARI' => 'KABUPATEN MANOKWARI',
					'KABUPATEN SORONG SELATAN' => 'KABUPATEN SORONG SELATAN',
					'KABUPATEN SORONG' => 'KABUPATEN SORONG',
					'KABUPATEN RAJA AMPAT' => 'KABUPATEN RAJA AMPAT',
					'KABUPATEN TAMBRAUW' => 'KABUPATEN TAMBRAUW',
					'KABUPATEN MAYBRAT' => 'KABUPATEN MAYBRAT',
					'KABUPATEN MANOKWARI SELATAN' => 'KABUPATEN MANOKWARI SELATAN',
					'KABUPATEN PEGUNUNGAN ARFAK' => 'KABUPATEN PEGUNUNGAN ARFAK',
					'KOTA SORONG' => 'KOTA SORONG',
					'KABUPATEN MERAUKE' => 'KABUPATEN MERAUKE',
					'KABUPATEN JAYAWIJAYA' => 'KABUPATEN JAYAWIJAYA',
					'KABUPATEN JAYAPURA' => 'KABUPATEN JAYAPURA',
					'KABUPATEN NABIRE' => 'KABUPATEN NABIRE',
					'KABUPATEN KEPULAUAN YAPEN' => 'KABUPATEN KEPULAUAN YAPEN',
					'KABUPATEN BIAK NUMFOR' => 'KABUPATEN BIAK NUMFOR',
					'KABUPATEN PANIAI' => 'KABUPATEN PANIAI',
					'KABUPATEN PUNCAK JAYA' => 'KABUPATEN PUNCAK JAYA',
					'KABUPATEN MIMIKA' => 'KABUPATEN MIMIKA',
					'KABUPATEN BOVEN DIGOEL' => 'KABUPATEN BOVEN DIGOEL',
					'KABUPATEN MAPPI' => 'KABUPATEN MAPPI',
					'KABUPATEN ASMAT' => 'KABUPATEN ASMAT',
					'KABUPATEN YAHUKIMO' => 'KABUPATEN YAHUKIMO',
					'KABUPATEN PEGUNUNGAN BINTANG' => 'KABUPATEN PEGUNUNGAN BINTANG',
					'KABUPATEN TOLIKARA' => 'KABUPATEN TOLIKARA',
					'KABUPATEN SARMI' => 'KABUPATEN SARMI',
					'KABUPATEN KEEROM' => 'KABUPATEN KEEROM',
					'KABUPATEN WAROPEN' => 'KABUPATEN WAROPEN',
					'KABUPATEN SUPIORI' => 'KABUPATEN SUPIORI',
					'KABUPATEN MAMBERAMO RAYA' => 'KABUPATEN MAMBERAMO RAYA',
					'KABUPATEN NDUGA' => 'KABUPATEN NDUGA',
					'KABUPATEN LANNY JAYA' => 'KABUPATEN LANNY JAYA',
					'KABUPATEN MAMBERAMO TENGAH' => 'KABUPATEN MAMBERAMO TENGAH',
					'KABUPATEN YALIMO' => 'KABUPATEN YALIMO',
					'KABUPATEN PUNCAK' => 'KABUPATEN PUNCAK',
					'KABUPATEN DOGIYAI' => 'KABUPATEN DOGIYAI',
					'KABUPATEN INTAN JAYA' => 'KABUPATEN INTAN JAYA',
					'KABUPATEN DEIYAI' => 'KABUPATEN DEIYAI',
					'KOTA JAYAPURA' => 'KOTA JAYAPURA',
				),
			),
			array(
				'id' => $prefix . 'masuk_pondok',
				'name' => 'Tanggal Mendaftar di PIP',
				'type' => 'date',
				'js_options' => array(
					'appendText' => '&nbsp;&nbsp;Format <strong>tanggal-bulan-tahun</strong>',
					'autoSize' => true,
					'buttonText' => 'Pilih Tanggal',
					'dateFormat' => 'dd-mm-yy',
					'showButtonPanel' => true,
					'changeMonth' => true,
				),
			),
			array(
				'type' => 'divider',
			),
			array(
				'type' => 'custom_html',
				'std' => '<h1>Orang Tua</h1><br><h3>Data Ayah</h3>',
			),
			array(
				'id' => $prefix . 'ayah',
				'name' => 'Nama Ayah',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'pekerjaan_ayah',
				'name' => 'Pekerjaan Ayah',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'hp_ayah',
				'name' => 'No HP Ayah',
				'type' => 'text',
			),
			array(
				'type' => 'custom_html',
				'std' => '<h3>Data Ibu</h3>',
			),
			array(
				'id' => $prefix . 'ibu',
				'name' => 'Nama Ibu',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'pekerjaan_ibu',
				'name' => 'Pekerjaan Ayah',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'hp_ibu',
				'name' => 'No HP IBU',
				'type' => 'text',
			),
			array(
				'id' => $prefix . 'alamat_wali_santri',
				'name' => 'Alamat Wali Santri',
				'desc' => 'Jika berbeda dengan alamat santri',
				'type' => 'textarea',
			),
			array(
				'type' => 'divider',
			),
			array(
				'id' => $prefix . 'brand',
				'name' => 'Brand',
				'desc' => 'Pick Your Favourite Brand',
				'type' => 'select',
				'options' => array(
					'Apple' => 'Apple',
					'Google' => 'Google',
					'Microsoft' => 'Microsoft',
				),
			),

			array(
				'id' => $prefix . 'apple_products',
				'name' => 'Which Apple product that you love?',
				'type' => 'radio',
				'options' => array(
					'iPhone' => 'iPhone',
					'iPad' => 'iPad',
					'Macbook' => 'Macbook',
					'iWatch' => 'iWatch',
				),
			),

			array(
				'name' => __('Full name', 'textdomain'),
				'desc' => 'Format: First Last',
				'id' => $prefix . 'fname',
				'type' => 'text',
				'std' => 'Anh Tran',
				'class' => 'custom-class',
				'clone' => true,
			),
			array(
				'name' => __('Text', 'your-prefix'),
				'id' => 'text',
				'desc' => __('Text description', 'your-prefix'),
				'type' => 'text',
				// Default value (optional)
				'std' => __('Default text value', 'your-prefix'),
				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				'clone' => true,
				// Placeholder
				'placeholder' => __('Enter something here', 'your-prefix'),
				// Input size
				'size' => 30,
				// Datalist
				'datalist' => array(
					// Unique ID for datalist
					'id' => 'text_datalist',
					// List of predefined options
					'options' => array(
						__('What', 'your-prefix'),
						__('When', 'your-prefix'),
						__('Where', 'your-prefix'),
						__('Why', 'your-prefix'),
						__('Who', 'your-prefix'),
					),
				),
			),

		),
	);
	// 2nd meta box
	$meta_boxes[] = array(
		'title' => __('Media', 'textdomain'),
		'post_types' => 'santri_baru',
		'fields' => array(
			array(
				'name' => __('URL', 'textdomain'),
				'id' => $prefix . 'url',
				'type' => 'text',
			),
		),
	);
	return $meta_boxes;
}