<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'Aleppo', 'Raqqa', 'As-Suwayda', 'Damascus', 'Daraa', 'Deir ez-Zor', 'Hama', 'Al-Hasakah', 'Homs', 'Idlib', 'Latakia', 'Quneitra', 'Rif Dimashq', 'Tartus',
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
