<?php
    include 'Calculatrice.php';
    use PHPUnit\Framework\TestCase;

    final class test extends TestCase {

        public function testAddCalcul(): void {
            $this->assertEquals(
                10,
                Calculatrice::add()
            );
        }

        public function testSousCalcul(): void {
            $this->assertEquals(
                0,
                Calculatrice::sous()
            );
        }

        public function testMultiCalcul(): void {
            $this->assertEquals(
                25,
                Calculatrice::multi()
            );
        }

        public function testDivCalcul(): void {
            $this->assertEquals(
                1,
                Calculatrice::div()
            );
        }
    }

?>