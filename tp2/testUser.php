<?php
    include 'User.php';
    use PHPUnit\Framework\TestCase;

    class testUser extends TestCase {
        $user1 = new User("email@gmail.com","JOLLET","Alexander",22);

        public function testUserIsValid() {
            $this->assertTrue($this->$user1->isValid());
        }
    }