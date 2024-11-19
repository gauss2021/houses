<?php

it('it belong to a Owner', function () {
    // expect(true)->toBeTrue();

    $owner= App\Models\Owner::factory()->create();
    $house= App\Models\House::factory()->create(
        ["owner_id"=>$owner]
    );

    expect($house->owner->is($owner))->toBeTrue();
});
