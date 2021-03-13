<?php

namespace Tecnolaw\File\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
	use SoftDeletes;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'tecnolaw_files';

	protected $fillable = [
		'name',
		'name_original',
		'folder_path',
        'mime_type',
	];
	protected $appends = ['url'];

	protected $hidden = [
		'created_at',
		'updated_at'
	];
	public function getUrlAttribute()
    {
        return url($this->attributes['folder_path'].'/'.$this->attributes['name']);
    }
}
