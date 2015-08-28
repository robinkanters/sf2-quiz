<?php

namespace AppBundle\Tests\Entity;

use AppBundle\Entity\Quiz;
use AppBundle\Tests\TestUtility;

class QuizTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $quiz = new Quiz();
        $quizName = "some name";

        $returnedFromSetName = $quiz->setName($quizName);

        $this->assertEquals(TestUtility::getProperty($quiz, 'name'), $quizName);
        $this->assertEquals($returnedFromSetName, $quiz);
    }

    public function testGetName()
    {
        $quiz = new Quiz();
        $quizName = "some name";
        TestUtility::setProperty($quiz, "name", $quizName);

        $getQuizName = $quiz->getName();

        $this->assertEquals($getQuizName, $quizName);
    }

    public function testGetId()
    {
        $quiz = new Quiz();
        $quizId = 1;
        TestUtility::setProperty($quiz, "id", $quizId);

        $quizGetId = $quiz->getId();

        $this->assertEquals($quizGetId, $quizId);
    }
}
