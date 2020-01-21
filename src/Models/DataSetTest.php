<?php
require 'dataSet.php';
use PHPUnit\Framework\TestCase;

class DataSetTest extends TestCase {
    public function testSearchSuccess() {
        $dataSet = new dataSet();
        $result = $dataSet->search("Manchester", 1);
        $this->assertIsArray($result);
    }

    public function testSearchFailure() {
        $dataSet = new dataSet();
        $result = $dataSet->search("Liverpool Town Hall", 1);
        $this->assertCount(0, $result);
    }
}