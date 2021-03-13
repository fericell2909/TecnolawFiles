<?php

namespace Tecnolaw\File\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Tecnolaw\Auth\Models\File;

class FileController extends BaseController
{
	protected $file=null;
	protected $rules=null;

	function __construct()
	{
		$this->file = new File;
		$this->rules = [
		];
	}
	public function create(Request $request)
	{

	}
	public function update(Request $request)
	{

	}
	public function delete(Request $request)
	{

	}
	public function list(Request $request)
	{

	}
}
