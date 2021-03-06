<?php

use Illuminate\Database\Seeder;
use App\Tool;
use App\Tool_detail;


class ToolDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tool = Tool::all();
        foreach ($tool as $key => $value) {
        	$tool_id = $value['id'];
        	$total_shoot= ceil(rand(0, 12049));
        	$trans_date = '2018-04-03';
        	$balance_shoot = $value['guarantee_shoot'] - $total_shoot;
        	// $guarantee_after_forecast = $balance_shoot

        	$detail = new Tool_detail;
        	$detail->tool_id = $tool_id;
        	$detail->total_shoot = $total_shoot;
        	$detail->trans_date = $trans_date;
        	$detail->balance_shoot = $balance_shoot;
        	$detail->save();

        }
    }
}
