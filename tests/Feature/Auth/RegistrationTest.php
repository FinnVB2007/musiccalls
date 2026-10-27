<?php

use App\Models\User;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('new users cannot grant themselves administrator access during registration', function () {
    $this->post('/register', [
        'name' => 'Untrusted User',
        'email' => 'untrusted@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'is_admin' => true,
    ])->assertRedirect(route('dashboard', absolute: false));

    $user = User::query()->where('email', 'untrusted@example.com')->firstOrFail();

    expect($user->is_admin)->toBeFalse();
});
