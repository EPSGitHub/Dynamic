<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = $user =factory(App\Models\User::class)->make();
        $user->save();
        $question = factory(App\Models\Question::class)->make();
        $question->user()->associate($user);
        $this->assertTrue($question->save());
    }
}
