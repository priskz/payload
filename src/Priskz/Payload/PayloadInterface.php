<?php

namespace Priskz\Payload;

interface PayloadInterface
{
	const STATUS_VALID        = 'valid';
	const STATUS_INVALID      = 'invalid';
	const STATUS_CREATED      = 'created';
	const STATUS_UPDATED      = 'updated';
	const STATUS_DELETED      = 'deleted';
	const STATUS_FOUND        = 'found';
	const STATUS_NOT_FOUND    = 'not_found';
	const STATUS_EXCEPTION    = 'exception';
	const STATUS_UNAUTHORIZED = 'unauthorized';

	/**
	 *	Get Data
	 */
	public function getData();

	/**
	 *	Get Status
	 */
	public function getStatus();

	/**
	 * Check if Payload status is a specific status.
	 *
	 * @return boolean
	 */
	public function isStatus(string $status);
}