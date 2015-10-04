<?php
use App\Categoria;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->truncate();
        foreach (range(1,100) as $i){
            Categoria::create([
                'name'=>'Categoria'.$i                
            ]);
        }

    }
}
