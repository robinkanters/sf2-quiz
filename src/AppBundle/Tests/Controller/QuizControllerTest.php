<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QuizControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/quiz/list');

        $block = $crawler->text();

        $this->assertEquals("dummy", $block);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
