<?php

class IndexTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());

		$this->assertCount(1, $crawler->filter('title:contains("Laravel 4 Sample Site")'));
	}

}