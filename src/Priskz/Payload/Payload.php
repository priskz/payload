<?php

namespace Priskz\Payload;

class Payload implements PayloadInterface
{
	/**
	 *  @var mixed
	 */
	protected $data;

	/**
	 *  @var string
	 */
	protected $status;

	/**
	 *	Constructor
	 */
	public function __construct($data, $status)
	{
		$this->data   = $data;
		$this->status = $status;
	}

	/**
	 * Get Data
	 *
	 * @return mixed
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * Get Status
	 *
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * To String Helper
	 *
	 * @return string
	 */
	public function __toString()
	{
		return json_encode(['data' => $this->data, 'status' => $this->status]);
	}
}
