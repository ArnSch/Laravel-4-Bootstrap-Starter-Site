<?php

class UserControllerTest extends BaseControllerTestCase {

    public function test_should_login()
    {
        $this->requestAction('GET', 'UserController@getLogin');
        $this->assertRequestOk();
    }

    // Try login

    // Try login knowing it will fail

    // Test redirect logged in user on login page redirect to dashboard

}