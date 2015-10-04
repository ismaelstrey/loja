<?php
use App\Produto;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->truncate();
        foreach (range(7,100) as $i){
            Produto::create([
                'name'       =>'Produto'.$i,
                'description' =>'Lorem ipsum Laboris labore in ad in Ut ut et do id cillum anim non est ad.'.$i ,
                'cat_id'   =>$i            
            ]);
        }

    }
}
