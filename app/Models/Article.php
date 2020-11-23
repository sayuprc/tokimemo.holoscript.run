<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasFactory;

	public $values; 

	protected $primaryKey = 'article_id';

	protected $fillable = [
		'title', 'content', 'published_at'
	];

	public $columns = [
		'article_id',
		'user_id',
		'title',
		'content',
		'created_at',
		'updated_at',
		'is_published',
		'published_at',
	];

	public function getAll()
	{
		$data = self::all();

		$this->_convertAll($data);

		return $this->values;
	}

	public function select($id)
	{
		$data = self::find($id);

		$this->_convertSingle($data);

		return $this->values;
	}

	private function _decode()
	{

	}

	private function _convertSingle($data)
	{
		$this->values = null;

		foreach($this->columns as $col) {
			$this->values[$col] = $data->$col;
		}
	}

	private function _convertAll($data)
	{
		$this->values = null;

		foreach($data as $k => $v) {
			foreach($this->columns as $col) {
				$this->values[$k][$col] = $v->$col;
			}
		}
	}
}
