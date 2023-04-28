<?php

test('example', function () {
    expect(true)->toBeTrue();
});
it('can run the command successfully', function () {
    $this
        ->artisan(DataTransferObjectMakeCommand::class, ['name' => 'Test'])
        ->assertSuccessful();
});
