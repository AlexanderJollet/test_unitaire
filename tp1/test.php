<?php
    include 'Calculatrice.php';
    use PHPUnit\Framework\TestCase;

    class test extends TestCase {

        {
            public function testAdd()
            {
                $this->assertEquals(4, Calculatrice::add(1, 3));
            }
        
            public function testSub()
            {        
                $this->assertEquals(3, Calculatrice::sub(10, 7));
            }
        
            public function testMul()
            {        
                $this->assertEquals(25, Calculatrice::mul(5, 5));
            }
        
            public function testDiv()
            {        
                $this->assertEquals(2, Calculatrice::div(16, 8));
            }
        }