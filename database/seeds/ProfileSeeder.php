<?php
namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Profile;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'リンゴ',
            'body' => 'こんにちは',
            'box' => '右打ち',
            'run' => '16',
            ]);
         Profile::create([
            'name' => 'ラミ',
            'body' => 'コンバンハ',
            'box' => '右打ち',
            'run' => '34',
            ]);
    }
}
