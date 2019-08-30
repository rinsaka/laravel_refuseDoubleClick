<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('memos')->delete();

    DB::table('memos')->insert([
      'memo' => '複数のフォームでも効率的に拒否したい',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
