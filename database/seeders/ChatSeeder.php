<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Participant;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $current_user = User::factory()->create([
            'name' => 'Faysal Ahamed',
            'email' => 'devfaysal@gmail.com',
        ]);

        $users = User::whereNotIn('id', [$current_user->id])->get();
        foreach ($users as $user) {
            $room = Room::create([]);
            Participant::create([
                'user_id' => $current_user->id,
                'room_id' => $room->id,
            ]);
            Participant::create([
                'user_id' => $user->id,
                'room_id' => $room->id,
            ]);
            Message::create([
                'user_id' => $current_user->id,
                'room_id' => $room->id,
                'message' => fake()->sentence()
            ]);
            Message::create([
                'user_id' => $user->id,
                'room_id' => $room->id,
                'message' => fake()->sentence()
            ]);
            Message::create([
                'user_id' => $current_user->id,
                'room_id' => $room->id,
                'message' => fake()->sentence()
            ]);
            Message::create([
                'user_id' => $user->id,
                'room_id' => $room->id,
                'message' => fake()->sentence()
            ]);
        }
    }
}
