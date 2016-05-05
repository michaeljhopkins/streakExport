<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends \Sexport\Utilities\ForeignKey\Migration
{
	protected $presets = [
		'created_by' => [
			'column' => 'created_by',
			'references' => 'id',
			'on'=>'users'
		],
		'updated_by' => [
			'column' => 'updated_by',
			'references' => 'id',
			'on'=>'users'
		],
		'deleted_by' => [
			'column' => 'deleted_by',
			'references' => 'id',
			'on'=>'users'
		],
		'company_id' => [
			'column' => 'company_id'
		],
	];
	protected $keys = [];

	public function getKeys()
	{
		$keys = [
			'boxes' => [
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'assignments' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'attachments' => [
				['column' => 'box_id'],
				['column' => 'thread_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'calls' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'links' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'meetings' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'notes' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'participants' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'pdfs' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			],
			'threads' => [
				['column' => 'box_id'],
				$this->presets['created_by'],
				//$this->presets['updated_by'],
				//$this->presets['deleted_by'],
				$this->presets['company_id'],
			]
		];
		return $keys;
	}
}
