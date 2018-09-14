<?php

namespace OTGS\PHPUnit\Tools;

use OTGS\PHPUnit\Tools\WP\Stubs;
use tad\FunctionMocker\FunctionMocker;

/**
 * @author OnTheGo Systems
 */
abstract class OTGS_TestCase extends \PHPUnit_Framework_TestCase {
	/** @var \OTGS\PHPUnit\Tools\WP\Stubs */
	protected $stubs;

	public static function setupBeforeClass() {
		$_GET  = array();
		$_POST = array();
	}

	function setUp() {
		parent::setUp();
		FunctionMocker::setUp();
		\WP_Mock::setUp();
		$this->stubs = new Stubs( $this );
	}

	function tearDown() {
		unset( $this->stubs );
		\WP_Mock::tearDown();
		\FunctionMocker::tearDown();
		\Mockery::close();
		parent::tearDown();
	}
}
