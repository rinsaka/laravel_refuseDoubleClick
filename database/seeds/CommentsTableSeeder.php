<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('comments')->delete();

    DB::table('comments')->insert([
      'comment' => 'フォームのダブルクリックを拒否したい',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);

  }
}
