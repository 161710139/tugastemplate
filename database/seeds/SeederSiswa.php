<?php

use Illuminate\Database\Seeder;

class SeederSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u=[
        	['NIS'=>'123456789','nama'=>'Dono','tempat_lahir'=>'Biak','tanggal_lahir'=>'2001-01-24','alamat'=>'Curug Candung','citacita'=>'Presiden','hobi'=>'bermain catur','gambar'=>'9.jpg'],
            ['NIS'=>'12345671','nama'=>'Diego','tempat_lahir'=>'Jayapura','tanggal_lahir'=>'2001-09-22','alamat'=>'Dago','citacita'=>'Presiden PBB','hobi'=>'bermain gatrik','gambar'=>'10.jpg'],
            ['NIS'=>'12345629','nama'=>'Agung','tempat_lahir'=>'Bandung','tanggal_lahir'=>'2002-04-14','alamat'=>'Jl.Soekarno Hatta','citacita'=>'Menteri','hobi'=>'Basket','gambar'=>'f1.jpg'],
            ['NIS'=>'123452789','nama'=>'Poles','tempat_lahir'=>'Surabaya','tanggal_lahir'=>'2005-03-28','alamat'=>'Ciwidey','citacita'=>'Bupati','hobi'=>'Game','gambar'=>'f2.jpg'],
            ['NIS'=>'1236789','nama'=>'Yayang','tempat_lahir'=>'Malang','tanggal_lahir'=>'1991-11-22','alamat'=>'Cisarua','citacita'=>'Walikota','hobi'=>'Futsal','gambar'=>'f3.jpg']];
        DB::table('siswas')->insert($u);
    }
}
