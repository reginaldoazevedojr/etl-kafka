<?php
declare(strict_types=1);

namespace App\Service;

/**
 * Class MessageGenerator
 * @package App\Service
 */
class MessageGenerator
{
    public function getHappyMessage()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}