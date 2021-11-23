<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_kategori');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/kategori/content_kategori';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Data kategori';
		$isi['data'] 		= $this->db->get('tbl_kategori');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/kategori/tambah_kategori';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data kategori';
		$isi['kt']			= $this->Model_kategori->get_ktgori();
		$this->load->view('admin/index',$isi);
	}

	public function update($id)
	{
		$isi['content']		= 'admin/kategori/update_kategori';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data kategori';
		$where 				= array('id' => $id);
		$isi['kt']			= $this->Model_kategori->get_ktgori();
		$isi['kategori']	= $this->Model_kategori->edit_data($where,'tbl_kategori')->result();
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		$id						= $this->input->post('id');
		$nama					= $this->input->post('nama');
		$slug					= $this->input->post('slug');
		$created_at				= $this->input->post('created_at');
		$update_at				= $this->input->post('update_at');




		$data = array(
					'id'					=> $id,
					'nama'					=> $nama,
					'slug'					=> $slug,
					'created_at'			=> $created_at,
					'update_at'				=> $update_at,



			);
		$this->Model_kategori->input_data($data,'tbl_kategori');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data kategori berhasil."); window.location.href="<?php echo base_url();?>admin/kategori"</script> <?php
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->Model_kategori->hapus_data($where,'tbl_kategori');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data kategori berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/kategori"</script> <?php
	}

	public function edit()
	{
		$id						= $this->input->post('id');
		$nama					= $this->input->post('nama');
		$slug					= $this->input->post('slug');
		$created_at				= $this->input->post('created_at');

		$update_at				= $this->input->post('update_at');



		$data = array(
					'id'					=> $id,
					'nama'					=> $nama,
					'slug'					=> $slug,
					'created_at'			=> $created_at,

					'update_at'				=> $update_at,


			);
	$where = array(
		'id' => $id
	);

	$this->Model_kategori->update_data($where,$data,'tbl_kategori');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data kategori berhasil."); window.location.href="<?php echo base_url();?>/admin/kategori"</script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */