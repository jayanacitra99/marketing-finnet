<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('excel_export_model');
		$this->load->library('PHPExcel','PHPExcel/PHPExcel_IOFactory');
	}

	public function index()
	{
		$data["customer_care"] = $this->excel_export_model->fetch_data_ccare();
		$data["event"] = $this->excel_export_model->fetch_data_event();
		$this->load->view('excel_export_view',$data);
	}

	public function action_ccare()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("No. ", "Id Customer Care", "Tanggal", "Agenda", "Pic", "Divisi", "Jam", "Penjelasan Produk Sekilas", "Tempat Sosialisasi", "Nama Tools Pengecekan");

		$column = 0;

		foreach ($table_columns as $field) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$customer_care = $this->excel_export_model->fetch_data_ccare();

		$excel_row = 2;
		$no = 1;
		foreach ($customer_care as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->id_ccare);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->tanggal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->agenda);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->pic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->divisi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->jam);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->p_produk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->tempat);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->nm_tools);
			$excel_row++;
			$no++;

			//Add the image to the cell
	        // $objDrawing = new PHPExcel_Worksheet_Drawing();
	        // $objDrawing->setName('Logo ' . $excel_row);
	        // $objDrawing->setDescription('Logo ' . $excel_row);
	        // $objDrawing->setPath($logo);
	        // $objDrawing->setResizeProportional(true);
	        // $objDrawing->setWidth(40);
	        // $objDrawing->setCoordinates(3 . $excel_row);
	        // $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Customer Care.xls"');
		$object_writer->save('php://output');
	}

	public function action_event()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0)->mergeCells('A1:A3');
		$object->setActiveSheetIndex(0)->mergeCells('B1:G1');
		$object->setActiveSheetIndex(0)->mergeCells('H1:L1');
		$object->setActiveSheetIndex(0)->mergeCells('M1:M3');
		$object->setActiveSheetIndex(0)->mergeCells('N1:V1');
		$object->setActiveSheetIndex(0)->mergeCells('W1:Z1');
		$object->setActiveSheetIndex(0)->mergeCells('AA1:AC1');
		$object->setActiveSheetIndex(0)->mergeCells('AD1:AD3');
		$object->setActiveSheetIndex(0)->mergeCells('AE1:AE3');
		$object->setActiveSheetIndex(0)->mergeCells('B2:B3');
		$object->setActiveSheetIndex(0)->mergeCells('C2:C3');
		$object->setActiveSheetIndex(0)->mergeCells('D2:D3');
		$object->setActiveSheetIndex(0)->mergeCells('E2:E3');
		$object->setActiveSheetIndex(0)->mergeCells('F2:G2');
		$object->setActiveSheetIndex(0)->mergeCells('H2:H3');
		$object->setActiveSheetIndex(0)->mergeCells('I2:I3');
		$object->setActiveSheetIndex(0)->mergeCells('J2:J3');
		$object->setActiveSheetIndex(0)->mergeCells('K2:K3');
		$object->setActiveSheetIndex(0)->mergeCells('L2:L3');
		$object->setActiveSheetIndex(0)->mergeCells('N2:N3');
		$object->setActiveSheetIndex(0)->mergeCells('O2:O3');
		$object->setActiveSheetIndex(0)->mergeCells('P2:P3');
		$object->setActiveSheetIndex(0)->mergeCells('Q2:R2');
		$object->setActiveSheetIndex(0)->mergeCells('S2:T2');
		$object->setActiveSheetIndex(0)->mergeCells('U2:V2');
		$object->setActiveSheetIndex(0)->mergeCells('W2:X2');
		$object->setActiveSheetIndex(0)->mergeCells('Y2:Z2');
		$object->setActiveSheetIndex(0)->mergeCells('AA2:AA3');
		$object->setActiveSheetIndex(0)->mergeCells('AB2:AB3');
		$object->setActiveSheetIndex(0)->mergeCells('AC2:AC3');
		$object->setActiveSheetIndex(0)->mergeCells('AD1:AD3');


		$table_columns1 = array("No.", "Dasar Permintaan","","","","","", "Nama Partner","","","","", "Jenis", "Target Pelaksanaan Event/Sponsorship","","","","","","","","", "Status Pelaksanaan Event/Sponsorship","","","", "Status Pembayaran","","", "Status", "Note","Id Event");

		$table_columns2 = array("tanggal", "No.Surat", "Perihal", "Info Detil", "Catatan Disposisi Mgt/Deal dgn Partner","", "Institusi", "Nama PIC", "Telp PIC", "No.Rek", "Bank","", "Tanggal", "Biaya", "Lokasi", "Audiens","", "Produk","", "Marketing Kits","", "Batal","", "Dilaksanakan","", "Jml Dibayar", "Tanggal Document ke Finance", "Tgl Transfer");

		$table_columns3 = array("Nama", "Catatan","","","","","","","","","", "Jumlah", "Kategori", "Nama", "Konsep", "Nama", "Jumlah", "Tanggal", "Alasan", "Tanggal", "Bentuk kegiatan");

		$column1 = 0;
		$column2 = 1;
		$column3 = 5;

		foreach ($table_columns1 as $field) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column1, 1, $field);
			$column1++;
		}

		foreach ($table_columns2 as $field2) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column2, 2, $field2);
			$column2++;
		}

		foreach ($table_columns3 as $field3) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column3, 3, $field3);
			$column3++;
		}

		$event = $this->excel_export_model->fetch_data_event();

		$excel_row = 4;
		$no = 1;

		foreach ($event as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->tgl);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->no_surat);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->perihal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->info_detil);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->nama_cd);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->catatan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->institusi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->nama_pic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->telp_pic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->no_rek);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->bank);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->jenis);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->tgl_pelaksanaan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->biaya);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->lokasi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->jml_audiens);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->kategori);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->nama_produk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->konsep);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->jenis_mk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->jumlah_mk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->tgl_batal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->alasan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->tgl_dilaksanakan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->btk_kegiatan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->jml_dibayar);
			$object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->doc2finance);
			$object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->transfer);
			$object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->status);
			$object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->note);
			$object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->id_event);
			$excel_row++;
			$no++;

			//Add the image to the cell
	        // $objDrawing = new PHPExcel_Worksheet_Drawing();
	        // $objDrawing->setName('Logo ' . $excel_row);
	        // $objDrawing->setDescription('Logo ' . $excel_row);
	        // $objDrawing->setPath($logo);
	        // $objDrawing->setResizeProportional(true);
	        // $objDrawing->setWidth(40);
	        // $objDrawing->setCoordinates(3 . $excel_row);
	        // $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Event.xls"');
		$object_writer->save('php://output');
	}

	public function action_sponsorship()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0)->mergeCells('A1:A3');
		$object->setActiveSheetIndex(0)->mergeCells('B1:G1');
		$object->setActiveSheetIndex(0)->mergeCells('H1:L1');
		$object->setActiveSheetIndex(0)->mergeCells('M1:M3');
		$object->setActiveSheetIndex(0)->mergeCells('N1:V1');
		$object->setActiveSheetIndex(0)->mergeCells('W1:Z1');
		$object->setActiveSheetIndex(0)->mergeCells('AA1:AC1');
		$object->setActiveSheetIndex(0)->mergeCells('AD1:AD3');
		$object->setActiveSheetIndex(0)->mergeCells('AE1:AE3');
		$object->setActiveSheetIndex(0)->mergeCells('B2:B3');
		$object->setActiveSheetIndex(0)->mergeCells('C2:C3');
		$object->setActiveSheetIndex(0)->mergeCells('D2:D3');
		$object->setActiveSheetIndex(0)->mergeCells('E2:E3');
		$object->setActiveSheetIndex(0)->mergeCells('F2:G2');
		$object->setActiveSheetIndex(0)->mergeCells('H2:H3');
		$object->setActiveSheetIndex(0)->mergeCells('I2:I3');
		$object->setActiveSheetIndex(0)->mergeCells('J2:J3');
		$object->setActiveSheetIndex(0)->mergeCells('K2:K3');
		$object->setActiveSheetIndex(0)->mergeCells('L2:L3');
		$object->setActiveSheetIndex(0)->mergeCells('N2:N3');
		$object->setActiveSheetIndex(0)->mergeCells('O2:O3');
		$object->setActiveSheetIndex(0)->mergeCells('P2:P3');
		$object->setActiveSheetIndex(0)->mergeCells('Q2:R2');
		$object->setActiveSheetIndex(0)->mergeCells('S2:T2');
		$object->setActiveSheetIndex(0)->mergeCells('U2:V2');
		$object->setActiveSheetIndex(0)->mergeCells('W2:X2');
		$object->setActiveSheetIndex(0)->mergeCells('Y2:Z2');
		$object->setActiveSheetIndex(0)->mergeCells('AA2:AA3');
		$object->setActiveSheetIndex(0)->mergeCells('AB2:AB3');
		$object->setActiveSheetIndex(0)->mergeCells('AC2:AC3');
		$object->setActiveSheetIndex(0)->mergeCells('AD1:AD3');


		$table_columns1 = array("No.", "Dasar Permintaan","","","","","", "Nama Partner","","","","", "Jenis", "Target Pelaksanaan Event/Sponsorship","","","","","","","","", "Status Pelaksanaan Event/Sponsorship","","","", "Status Pembayaran","","", "Status", "Note","Id Sponsorship");

		$table_columns2 = array("tanggal", "No.Surat", "Perihal", "Info Detil", "Catatan Disposisi Mgt/Deal dgn Partner","", "Institusi", "Nama PIC", "Telp PIC", "No.Rek", "Bank","", "Tanggal", "Biaya", "Lokasi", "Audiens","", "Produk","", "Marketing Kits","", "Batal","", "Dilaksanakan","", "Jml Dibayar", "Tanggal Document ke Finance", "Tgl Transfer");

		$table_columns3 = array("Nama", "Catatan","","","","","","","","","", "Jumlah", "Kategori", "Nama", "Konsep", "Nama", "Jumlah", "Tanggal", "Alasan", "Tanggal", "Bentuk kegiatan");

		$column1 = 0;
		$column2 = 1;
		$column3 = 5;

		foreach ($table_columns1 as $field) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column1, 1, $field);
			$column1++;
		}

		foreach ($table_columns2 as $field2) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column2, 2, $field2);
			$column2++;
		}

		foreach ($table_columns3 as $field3) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column3, 3, $field3);
			$column3++;
		}

		$sponsorship = $this->excel_export_model->fetch_data_sponsorship();

		$excel_row = 4;
		$no = 1;
		foreach ($sponsorship as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->tgl);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->no_surat);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->perihal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->info_detil);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->nama_cd);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->catatan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->institusi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->nama_pic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->telp_pic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->no_rek);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->bank);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->jenis);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->tgl_pelaksanaan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->biaya);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->lokasi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->jml_audiens);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->kategori);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->nama_produk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->konsep);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->jenis_mk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->jumlah_mk);
			$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->tgl_batal);
			$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->alasan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->tgl_dilaksanakan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->btk_kegiatan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->jml_dibayar);
			$object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->doc2finance);
			$object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->transfer);
			$object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->status);
			$object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->note);
			$object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->id_sponsorship);
			$excel_row++;
			$no++;

			//Add the image to the cell
	        // $objDrawing = new PHPExcel_Worksheet_Drawing();
	        // $objDrawing->setName('Logo ' . $excel_row);
	        // $objDrawing->setDescription('Logo ' . $excel_row);
	        // $objDrawing->setPath($logo);
	        // $objDrawing->setResizeProportional(true);
	        // $objDrawing->setWidth(40);
	        // $objDrawing->setCoordinates(3 . $excel_row);
	        // $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Sponsorship.xls"');
		$object_writer->save('php://output');
	}

	public function action_mkits()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("No.", "Id Marketing Kits","Nama","NIK","Nama Program","Tanggal","Kebutuhan", "Deskripsi","Jumlah","Timeline","Status","Note");

		$column = 0;

		foreach ($table_columns as $field) 
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$mkits = $this->excel_export_model->fetch_data_mkits();

		$excel_row = 2;
		$no = 1;

		foreach ($mkits as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->id_mkits);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nama);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->nik);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->nm_program);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->tgl);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->kebutuhan);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->deskripsi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->jumlah);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->timeline);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->status);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->note);
			$excel_row++;
			$no++;

			//Add the image to the cell
	        // $objDrawing = new PHPExcel_Worksheet_Drawing();
	        // $objDrawing->setName('Logo ' . $excel_row);
	        // $objDrawing->setDescription('Logo ' . $excel_row);
	        // $objDrawing->setPath($logo);
	        // $objDrawing->setResizeProportional(true);
	        // $objDrawing->setWidth(40);
	        // $objDrawing->setCoordinates(3 . $excel_row);
	        // $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Marketing Kits.xls"');
		$object_writer->save('php://output');
	}

	public function upload_ccare(){
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './assets/'.$media['file_name'];
         
        try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    'id_ccare'	=> NULL,
					'tanggal'	=> $rowData[0][1],
					'agenda'	=> $rowData[0][2],
					'pic'		=> $rowData[0][3],
					'divisi'	=> $rowData[0][4],
					'jam'		=> $rowData[0][5],
					'p_produk'	=> $rowData[0][6],
					'tempat'	=> $rowData[0][7],
					'nm_tools'	=> $rowData[0][8],
                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("customer_care",$data);
                delete_files($media['file_path']);
                     
            }
        redirect('main/customer_care');
    }

}

/* End of file excel_export.php */
/* Location: ./application/controllers/excel_export.php */