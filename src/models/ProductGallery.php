<?php

namespace Tecnolaw\File\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
	use SoftDeletes;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'tecnolaw_product_gallery';

	protected $fillable = [
		'id',
		'product_id',
		'file_id',
		'order',
		'main',
	];

	protected $hidden = [
		'created_at',
		'updated_at'
	];
	public function file()
    {
    	$className='\Tecnolaw\File\Models\File';
    	return $this->hasOne($className,'id','file_id');
    }
}
