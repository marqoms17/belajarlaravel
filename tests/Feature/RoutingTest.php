<?php

test('example', function () {
    $response = $this->get('/home');

    $response->assertStatus(200);
});
