<?php

namespace Priskz\Payload;

class Payload implements PayloadInterface
{
	/**
	 *  @var mixed
	 */
	public $data;

	/**
	 *  @var string
	 */
	public $status;

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
	 * Check if Payload status is a specific status.
	 *
	 * @return boolean
	 */
	public function isStatus(string $status)
	{
		return ($this->status == $status);
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
