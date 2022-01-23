<?php

//coba 1
// cek pemesan
// $cekpemesan = $this->db->query("SELECT order_id FROM management_pemesanan where order_id='$order_id'")->num_rows();
$cekpemesan = $this->db->query("SELECT count(order_id) as id FROM management_pemesanan where order_id='$order_id'")->row()->id;
if ($cekpemesan > 0) {
    $idp = $this->db->query("select order_id from management_pemesanan where order_id='$order_id'")->row()->id_pemesanan;
    $simpan = $this->db->query("UPDATE management_pemesanan set nama_pemesan='$nama_pemesan', email='$email', no_telp='$no_telp', jenis_layanan='$jenis_layanan', jenis_reservasi='$jenis_reservasi', paket='$paket',  tanggal_kunjungan ='$tanggal_kunjungan', status_pembayaran='$status_pembayaran', total ='$total', nama_kontak_darurat ='$nama_kontak_darurat', no_kontak_darurat = '$no_kontak_darurat', waktu_pesan='$waktu_pesan', lokasi='$lokasi' where order_id='$order_id'");
} else {
    $idp = $this->db->query("SELECT max(id_pemesanan) as id FROM management_pemesanan")->row()->id + 1;
    $simpan = $this->db->query("INSERT INTO management_pemesanan  VALUES ('$idp', ' $order_id', '$nama_pemesan', '$email', '$no_telp', '$jenis_layanan', '$jenis_reservasi', '$paket', '$voucher', '$potongan','$tanggal_kunjungan', '$waktu_kunjungan', '$status_pembayaran', '$payment_type' ,'$keterangan_bank ', '$total', '$nama_kontak_darurat', '$no_kontak_darurat', '$waktu_pesan', NULL, '$lokasi');");
}

// cek pasien
// $cekpasien = $this->db->query("SELECT nama FROM master_data_pasien where id_pemesanan='$idp'")->num_rows();
$cekpasien = $this->db->query("select count(id_pemesanan) as jumlah from master_data_pasien where id_pemesanan='$idp'")->row()->jumlah;
if ($cekpasien > 0) {
    $simpan = $this->db->query("UPDATE master_data_pasien set no_telp='$no_telp_pasien', tanggal_lahir='$tanggal_lahir_pasien', jenis_kelamin='$jenis_kelamin_pasien', provinsi='$provinsi_pasien', kabupaten='$kabupaten_pasien',  kecamatan ='$kecamatan_pasien', kelurahan='$kelurahan_pasien', domisili ='$domisili_pasien', kebangsaan ='$kebangsaan_pasien', kartu_identitas = '$kartu_identitas_pasien', no_kartu='$no_kartu_pasien', where nama='$nama_pasien' and where id_pemesanan='$idp'");
} else {
    $simpan = $this->db->query("INSERT INTO master_data_pasien VALUES ('0', '$nama_pasien', '$no_telp_pasien', '', '$tanggal_lahir_pasien', '$jenis_kelamin_pasien', '$provinsi_pasien', '$kabupaten_pasien', '$kecamatan_pasien','$kelurahan_pasien', '$domisili_pasien', '$kebangsaan_pasien', '$kartu_identitas_pasien', '$no_kartu_pasien', '', '', '$idp', '', '', '', '', '', '', '', '', '', '', '', '');");
}

$order_id = 100;
$produkdata = $this->db->query("SELECT count(id_pemesanan) as id FROM management_pemesanan where order_id like '%$order_id%'")->row()->id;

//coba 2
$cekpemesan = $this->db->select('order_id')->where('order_id', $order_id)->get('management_pemesanan')->num_rows();
        		                if ($cekpemesan > 0) {
                                    $idp = $this->db->select('id_pemesanan')->where('order_id', $order_id)->get('management_pemesanan')->row()->id_pemesanan;
                                    $simpan = $this->db->query("UPDATE management_pemesanan set nama_pemesan='$nama_pemesan', email='$email', no_telp='$no_telp', jenis_layanan='$jenis_layanan', jenis_reservasi='$jenis_reservasi', paket='$paket',  tanggal_kunjungan ='$tanggal_kunjungan', status_pembayaran='$status_pembayaran', total ='$total', nama_kontak_darurat ='$nama_kontak_darurat', no_kontak_darurat = '$no_kontak_darurat', waktu_pesan='$waktu_pesan', lokasi='$lokasi' where order_id='$order_id'");
                                } else {
                                    $idp = $this->db->query("SELECT max(id_pemesanan) as id FROM management_pemesanan")->row()->id + 1;
                                    $simpan = $this->db->query("INSERT INTO management_pemesanan  VALUES ('$idp', ' $order_id', '$nama_pemesan', '$email', '$no_telp', '$jenis_layanan', '$jenis_reservasi', '$paket', '$voucher', '$potongan','$tanggal_kunjungan', '$waktu_kunjungan', '$status_pembayaran', '$payment_type' ,'$keterangan_bank ', '$total', '$nama_kontak_darurat', '$no_kontak_darurat', '$waktu_pesan', NULL, '$lokasi');");
                                }
                                
                        //         // cek pasien
                                $cekpasien = $this->db->select('nama')->where(['id_pemesanan'=>$idp],'nama',$nama_pasien)->get('master_data_pasien')->num_rows();
                                if ($cekpasien > 0) {
                                    $simpan = $this->db->query("UPDATE master_data_pasien set no_telp='$no_telp_pasien', tanggal_lahir='$tanggal_lahir_pasien', jenis_kelamin='$jenis_kelamin_pasien', provinsi='$provinsi_pasien', kabupaten='$kabupaten_pasien',  kecamatan ='$kecamatan_pasien', kelurahan='$kelurahan_pasien', domisili ='$domisili_pasien', kebangsaan ='$kebangsaan_pasien', kartu_identitas = '$kartu_identitas_pasien', no_kartu='$no_kartu_pasien', where nama='$nama_pasien' and where id_pemesanan='$idp'");
                                } else {
                                    $simpan = $this->db->query("INSERT INTO master_data_pasien VALUES ('0', '$nama_pasien', '$no_telp_pasien', '', '$tanggal_lahir_pasien', '$jenis_kelamin_pasien', '$provinsi_pasien', '$kabupaten_pasien', '$kecamatan_pasien','$kelurahan_pasien', '$domisili_pasien', '$kebangsaan_pasien', '$kartu_identitas_pasien', '$no_kartu_pasien', '', '', '$idp', '', '', '', '', '', '', '', '', '', '', '', '');");
                                }




public function add_save()
{
    if (!$this->is_allowed('import_product_add', false)) {
        echo json_encode([
            'success' => false,
            'message' => cclang('sorry_you_do_not_have_permission_to_access')
            ]);
        exit;
    }

    $this->form_validation->set_rules('import_product_file_name', 'File', 'trim|required|max_length[255]');
    

    if ($this->form_validation->run()) {
        $import_product_file_uuid = $this->input->post('import_product_file_uuid');
        $import_product_file_name = $this->input->post('import_product_file_name');
    
        $save_data = [
            'created' => date('Y-m-d H:i:s'),
        ];

        if (!is_dir(FCPATH . '/uploads/import_product/')) {
            mkdir(FCPATH . '/uploads/import_product/');
        }

        if (!empty($import_product_file_name)) {
            $import_product_file_name_copy = date('Ymd') . '-' . $import_product_file_name;

            rename(FCPATH . 'uploads/tmp/' . $import_product_file_uuid . '/' . $import_product_file_name, 
                    FCPATH . 'uploads/import_product/' . $import_product_file_name_copy);

            if (!is_file(FCPATH . '/uploads/import_product/' . $import_product_file_name_copy)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Error uploading file'
                    ]);
                exit;
            }

            // $save_data['file'] = $import_product_file_name_copy;
        }
    
  
  
  
require_once 'excell/PHPExcel/PHPExcel.php';

$excelreader = new PHPExcel_Reader_Excel2007();
$lokasi= './uploads/import_product/'.$import_product_file_name_copy;


// 	$loadexcel = $excelreader->load($lokasi); 

// Load file excel yang tadi diupload ke folder tmp


$loadexcel = PHPExcel_IOFactory::load($lokasi); 


$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

 $numrow = 1;
foreach($sheet as $row){
    $code = $row['A']; 
    $deskripsi = str_replace("'", '"', $row['B']); 
    $stok = $row['C']; 
    $harga_per_satuan_beli = preg_replace("/[^0-9]/","",$row['D']);
    $harga_per_satuan_jual  = preg_replace("/[^0-9]/","",$row['E']); 
    $harga_reseller  = preg_replace("/[^0-9]/","",$row['F']); 
    $keterangan = str_replace("'", '"', $row['G']); 
    $berat = preg_replace("/[^0-9]/","",$row['H']);
    $kondisi = $row['I']; 
    $gambar_1 = $row['J']; 
    $gambar_2 = $row['K']; 
    $gambar_3 = $row['L']; 
    $url_video = $row['M']; 
    $marketplace = $row['N']; 
    $etc = $row['O']; 
    $nyawa = preg_replace("/[^0-9]/","",$row['P']);
    $supplier = $row['Q']; 
    $urutan = $row['R']; 





    if($numrow > 0){

          //cekada produk
          $q_cek=$this->db->query("SELECT count(id_product) as id FROM er_md_product where  code like '$code'")->row()->id;
          $codenya=$this->db->query("SELECT code FROM er_md_product where  code like '$code'")->row()->code;
          $market=$this->db->query("SELECT marketplace FROM er_md_product where code like '$code'")->row()->marketplace;
            
            
            // 	if($q_cek > 0){
                 if($codenya==$code){
                    
                    if($market !=''){
                        
                        $a=$market.",".$marketplace;
                         
                        $simpan= $this->db->query("UPDATE er_md_product SET marketplace='$a', deskripsi='$deskripsi', nama_supplier='$supplier', harga_per_satuan_beli='$harga_per_satuan_beli', harga_per_satuan_jual='$harga_per_satuan_jual', harga_reseller='$harga_reseller', stock='$stok', berat='$berat', kondisi='$kondisi', foto_1='$gambar_1', foto_2='$gambar_2', foto_3='$gambar_3', url_video='$url_video', eta='$etc',nyawa_produk ='$nyawa', urutan='$urutan'  where code='$code'");
                    }else{
                        
                        $simpan= $this->db->query("UPDATE er_md_product SET  marketplace='$marketplace', deskripsi='$deskripsi', nama_supplier='$supplier', harga_per_satuan_beli='$harga_per_satuan_beli', harga_per_satuan_jual='$harga_per_satuan_jual', harga_reseller='$harga_reseller', stock='$stok', berat='$berat', kondisi='$kondisi', foto_1='$gambar_1', foto_2='$gambar_2', foto_3='$gambar_3', url_video='$url_video', eta='$etc',nyawa_produk ='$nyawa', urutan='$urutan' where code='$code'");
                        
                        
                    }

                 
                    
                   //	$simpan= $this->db->query("INSERT INTO er_md_product VALUES	('0', '3', '$code', '$code', '$deskripsi', '3', '1', '3', '$supplier', '0', '$harga_per_satuan_beli', '$harga_per_satuan_jual', '$stok', '$harga_per_satuan_jual', '0', '0', '$keterangan', '1', '$code', '$code', '$berat', '$kondisi', '$gambar_1', '$gambar_2', '$gambar_3', '$url_video', '$marketplace', '','$etc', '$nyawa','','$urutan')");
                   
                }else{
                 
                 
                     $simpan= $this->db->query("INSERT INTO er_md_product VALUES	('0', '3', '$code', '$code', '$deskripsi', '3', '1', '3','$harga_reseller', '$supplier', '0', '$harga_per_satuan_beli', '$harga_per_satuan_jual', '$stok', '$harga_per_satuan_jual', '0', '0', '$keterangan', '1', '$code', '$code', '$berat', '$kondisi', '$gambar_1', '$gambar_2', '$gambar_3', '$url_video', '$marketplace', '','$etc', '$nyawa','','$urutan')");
                   
                   
                    
                }
    

            }
            
               $this->db->query("DELETE FROM er_md_product WHERE code='CODE'");
            
        }

  
        $save_import_product = $this->model_import_product->store($save_data);

        if ($save_import_product) {
            if ($this->input->post('save_type') == 'stay') {
                $this->data['success'] = true;
                $this->data['id'] 	   = $save_import_product;
                $this->data['message'] = cclang('success_save_data_stay', [
                    anchor('administrator/import_product/edit/' . $save_import_product, 'Edit Import Product'),
                    anchor('administrator/import_product', ' Go back to list')
                ]);
            } else {
                set_message(
                    cclang('success_save_data_redirect', [
                    anchor('administrator/import_product/edit/' . $save_import_product, 'Edit Import Product')
                ]), 'success');

                $this->data['success'] = true;
                $this->data['redirect'] = base_url('administrator/er_md_product');
            
            // 	$this->data['redirect'] = base_url('administrator/import_product/add');
                // $this->data['alert'] = 'berhasil';
            }
        } else {
            if ($this->input->post('save_type') == 'stay') {
                $this->data['success'] = false;
                $this->data['message'] = cclang('data_not_change');
            } else {
                $this->data['success'] = false;
                $this->data['message'] = cclang('data_not_change');
                $this->data['redirect'] = base_url('administrator/import_product');
            }
        }

    } else {
        $this->data['success'] = false;
        $this->data['message'] = validation_errors();
    }

    echo json_encode($this->data);
}

SELECT * FROM management_pemesanan where nama_pemesan = 'pemesan 998' AND no_telp = '085747968958'

public function add_save()
	{
		if (!$this->is_allowed('file_pemesanan_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('file_pemesanan_file_name', 'File', 'trim|required|max_length[255]');
		

		if ($this->form_validation->run()) {
			$file_pemesanan_file_uuid = $this->input->post('file_pemesanan_file_uuid');
			$file_pemesanan_file_name = $this->input->post('file_pemesanan_file_name');
		
			$save_data = [
			];

			if (!is_dir(FCPATH . '/uploads/file_pemesanan/')) {
				mkdir(FCPATH . '/uploads/file_pemesanan/');
			}

			if (!empty($file_pemesanan_file_name)) {
				$file_pemesanan_file_name_copy = date('YmdHis') . '-' . $file_pemesanan_file_name;

				rename(FCPATH . 'uploads/tmp/' . $file_pemesanan_file_uuid . '/' . $file_pemesanan_file_name, 
						FCPATH . 'uploads/file_pemesanan/' . $file_pemesanan_file_name_copy);

				if (!is_file(FCPATH . '/uploads/file_pemesanan/' . $file_pemesanan_file_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['file'] = $file_pemesanan_file_name_copy;
			}
		        require_once 'excell/PHPExcel/PHPExcel.php';
                        
            	$excelreader = new PHPExcel_Reader_Excel2007();
            	$lokasi= './uploads/file_pemesanan/'.$file_pemesanan_file_name_copy;

            	$loadexcel = PHPExcel_IOFactory::load($lokasi); 
            	
            	
            	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            
            	$numrow = 1;
            	$idp=$this->db->query("SELECT max(id_pemesanan) as id FROM management_pemesanan")->row()->id+1;
        		                  
            	foreach($sheet as $row){
            
                              			             
                            
                            $order_id = $row['A']; 
                            $nama_pemesan = $row['B']; 
                            $email= $row['C']; 
                            $no_telp= $row['D']; 
                            //pasien
                            $nama_pasien= $row['E']; 
                            $tanggal_lahir_pasien= date("Y-m-d", strtotime($row['F'])); 
                            $jenis_kelamin_pasien= $row['G']; 
                            $no_telp_pasien= $row['H']; 
                            $kebangsaan_pasien = $row['I']; 
                            $kartu_identitas_pasien = $row['J']; 
                            $no_kartu_pasien = $row['K']; 
                            $domisili_pasien = str_replace("'", '"',$row['L']); 
                            $provinsi_pasien = $row['M']; 
                            $kabupaten_pasien = $row['N']; 
                            $kecamatan_pasien = $row['O']; 
                            $kelurahan_pasien = $row['P']; 
                            //end pasien
                            $jenis_layanan= $row['Q']; 
                            $jenis_reservasi= $row['R']; 
                            $paket = $row['S']; 
                            $total_t = $row['T'];
                            $total_u = $row['U'];
                            $total_v = $row['V'];
                            $total_w = $row['W'];
                            $tanggal_kunjungan= date("Y-m-d", strtotime($row['X']));
                            $waktu_pesan= date('Y-m-d H:i:s');
                            // $waktu_pesan= $row['Y'];
                            $voucher= $row['Z'];
                            $total = $row['AA'];
                            $status_pembayaran = $row['AD'];
                            $nama_kontak_darurat= $row['AE'];
                            $no_kontak_darurat = $row['AF'];
                            $lokasi = $row['AI'];
                            

            
            	    	if($numrow > 0){
            	    	    
            	    	  
                    			  //cekada pemesanan
                    			  $produkdata=$this->db->query("SELECT count(id_pemesanan) as id FROM management_pemesanan where order_id='$order_id'")->row()->id;
            		          
            
            		        
        		                    if($produkdata > 0){
        		                        
        		                      $simpan= $this->db->query("UPDATE management_pemesanan  set nama_pemesan='$nama_pemesan', email='$email', no_telp='$no_telp', jenis_layanan='$jenis_layanan', jenis_reservasi='$jenis_reservasi', paket='$paket',  tanggal_kunjungan ='$tanggal_kunjungan', status_pembayaran='$status_pembayaran', total ='$total', nama_kontak_darurat ='$nama_kontak_darurat', no_kontak_darurat = '$no_kontak_darurat', waktu_pesan='$waktu_pesan', lokasi='$lokasi' where order_id='$order_id'");  
        		                    }else{
        		             
                                     $simpan= $this->db->query("INSERT INTO management_pemesanan  VALUES ('$idp', ' $order_id', '$nama_pemesan', '$email', '$no_telp', '$jenis_layanan', '$jenis_reservasi', '$paket', '$voucher', '$potongan','$tanggal_kunjungan', '$waktu_kunjungan', '$status_pembayaran', '$payment_type' ,'$keterangan_bank ', '$total', '$nama_kontak_darurat', '$no_kontak_darurat', '$waktu_pesan', NULL, '$lokasi');");
        
        		                    }
        		                    
        		                    //cek pasien
     
        		               
                                   $simpan= $this->db->query("INSERT INTO master_data_pasien VALUES ('0', '$nama_pasien', '$no_telp_pasien', '', '$tanggal_lahir_pasien', '$jenis_kelamin_pasien', '$provinsi_pasien', '$kabupaten_pasien', '$kecamatan_pasien','$kelurahan_pasien', '$domisili_pasien', '$kebangsaan_pasien', '$kartu_identitas_pasien', '$no_kartu_pasien', '', '', '$idp', '', '', '', '', '', '', '', '', '', '', '', '');");
         
                                    // echo  "INSERT INTO master_data_pasien VALUES ('0', '$nama_pasien', '$no_telp_pasien', '', '$tanggal_lahir_pasien', '$jenis_kelamin_pasien', '$provinsi_pasien', '$kabupaten_pasien', '$kecamatan_pasien','$kelurahan_pasien', '$domisili_pasien', '$kebangsaan_pasien', '$kartu_identitas_pasien', '$no_kartu_pasien', '', '', '$idp', '', '', '', '', '', '', '', '', '', '', '', '')";    
            			    }
            			  
            			   	$this->db->query("DELETE FROM management_pemesanan WHERE order_id like '%Order Id%'");
            			   	$this->db->query("DELETE FROM master_data_pasien WHERE nama like '%Nama Pasien%'");
            			    
            	}
                        	
			
			$save_file_pemesanan = $this->model_file_pemesanan->store($save_data);
            

			if ($save_file_pemesanan) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_file_pemesanan;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/file_pemesanan/edit/' . $save_file_pemesanan, 'Edit File Pemesanan'),
						anchor('administrator/management_pemesanan', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/file_pemesanan/edit/' . $save_file_pemesanan, 'Edit File Pemesanan')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/management_pemesanan');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/management_pemesanan');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
	

		    
		    
		}

		echo json_encode($this->data);
	}