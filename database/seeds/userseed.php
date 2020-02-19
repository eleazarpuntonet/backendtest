<?php
use App\User;
use Illuminate\Database\Seeder;

class userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents("database/seeds/usuariosdata.json");
        $json_data = json_decode($json,true);

        foreach ($json_data as $userData) {
            $user                  = new App\User;
            $user->name            = ucwords(strtolower($userData['first_name']));
            $user->last_name       = ucwords(strtolower($userData['last_name']));
            $user->email        = $userData['email'];
            $user->gender        = $userData['gender'];
            $user->status        = $userData['status'];
            $user->password        = bcrypt('321321');
            $user->save();
        }
    }
}
