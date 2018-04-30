<?php
/**
 * Created by PhpStorm.
 * User: Gusli
 * Date: 4/30/2018
 * Time: 8:27 AM
 */

class Vehicle {

	protected  $licensePlate;

	/**
	 * @return mixed
	 */
	public function getLicensePlate() {
		return $this->licensePlate;
	}

	/**
	 * @param mixed $licensePlate
	 */
	public function setLicensePlate($licensePlate) {
		$this->licensePlate = $licensePlate;
	}
	public function __construct() {
//	catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
//			$exceptionType = get_class($exception);
//			throw(new $exceptionType($exception->getMessage(), 0, $exception));

		echo "try and catch error/exception statements"
}
}

class NissanAltima extends Vehicle {
	protected $belongsToMarlon;

	public
}

class HorseAndBuggy extends Vehicle {
	protected numHorses;
}

