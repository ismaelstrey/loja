<?php
use App\Cidade;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;


class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->truncate();
        foreach (range(1,100) as $i){
            Cidade::create([
                'nome'=>'cidade'.$i,
                'estado'=> rand(1,15)
            ]);
        }

    }
}
