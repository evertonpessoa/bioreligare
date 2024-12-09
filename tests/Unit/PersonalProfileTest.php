<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domain\User\Models\User;
use App\Domain\User\Models\Address;
use App\Domain\User\Models\PersonalProfile;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PersonalProfileTest extends TestCase
{
    use DatabaseTransactions;

    /*
    public function test_user_has_professional_profile()
    {
        $user = User::factory()->create();
        $profile = PersonalProfile::factory()->create([
            'user_id' => $user->id,
        ]);

        $this->assertTrue($user->personalProfile()->is($profile));
    }

    public function test_personal_profile_has_address()
    {
        $personal = PersonalProfile::factory()->create();

        $address = Address::factory()->create([
            'professional_profile_id' => null,
            'personal_profile_id' => $personal->id,
        ]);

        $this->assertTrue($personal->address()->is($address));
    }
    */
}
