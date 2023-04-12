<?php namespace App\Controllers;

class Page extends BaseController
{
	public function index()
	{
		$data['data'] = [
			'menu'		=> 'Database Kecamatan',
		];
		return view('view_pages', $data);
	}
	public function provinsi()
	{
		$data['data'] = [
			'menu'		=> 'Menu Provinsi',
			'title'		=> 'Provinsi',
			'content' 	=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. 
                    Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?',
		];
		return view('view_prov', $data);
	}
	public function kabkota()
	{
		echo "kabkota";
	}
	public function kecamatan()
	{
		echo "kecamatan";
	}	
}

