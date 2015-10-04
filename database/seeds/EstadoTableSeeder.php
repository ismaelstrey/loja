<?php
use App\Estado;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->truncate();
        foreach (range(1,100) as $i){
            Estado::create([
                'nome'=>'Estado'.$i                
            ]);
        }

    }
}
