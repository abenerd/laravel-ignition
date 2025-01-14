<?php

use Illuminate\Auth\AuthenticationException;
use Spatie\LaravelIgnition\Support\LaravelDocumentationLinkFinder;

beforeEach(function () {
    $this->finder = new LaravelDocumentationLinkFinder();
});

it('can find a link for a laravel exception', function () {
    $link = $this->finder->findLinkForThrowable(new AuthenticationException());

    expect($link)->toEqual('https://laravel.com/docs/8.x/authentication');
});
