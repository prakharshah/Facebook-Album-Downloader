<?php
require_once('simpletest/autorun.php');
require_once(dirname(__FILE__)."/../zipper.php");

class TestOfZipper extends UnitTestCase { //PHPUnit_Framework_TestCase {
	public $zipper;
	public function setUp() {
	$this->zipper = new zipper();
	}
	public function testget_zip( $album_download_directory = 'tmp_download' ) {
		$actual = $this->zipper->get_zip( $album_download_directory );
		$this->assertEqual( $actual, '<a href="zip/fb-album_'.date("Y-m-d").'_'.date("H-i-s"). '.zip" id="download-link" class="btn btn-success link-buttons-border-color" >Download Zip Folder</a>' );
	}
	public function tearDown() {
		unset($this->zipper);
	}

}
?>
