<?php

use Illuminate\Database\Seeder;

class AssessorsOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assessorsoffices=[
            [
                'id'=>'1',
                'office'=>'Alcantara'
            ],
            [
                'id'=>'2',
                'office'=>'Alcoy'
            ],
            [
                'id'=>'3',
                'office'=>'Alegria'
            ],
            [
                'id'=>'4',
                'office'=>'Aloguinssan'
            ],
            [
                'id'=>'5',
                'office'=>'Argao'
            ],
            [
                'id'=>'6',
                'office'=>'Asturias'
            ],
            [
                'id'=>'7',
                'office'=>'Badian'
            ],
            [
                'id'=>'8',
                'office'=>'Balamban'
            ],
            [
                'id'=>'9',
                'office'=>'Bantayan'
            ],
            [
                'id'=>'10',
                'office'=>'Bogo City'
            ],
            [
                'id'=>'11',
                'office'=>'Boljoon'
            ],
            [
                'id'=>'12',
                'office'=>'Borbon'
            ],
            [
                'id'=>'13',
                'office'=>'Carcar City'
            ],
            [
                'id'=>'14',
                'office'=>'Carmen'
            ],
            [
                'id'=>'15',
                'office'=>'Catmon'
            ],
            [
                'id'=>'16',
                'office'=>'Cebu City'
            ],
            [
                'id'=>'17',
                'office'=>'Compostela'
            ],
            [
                'id'=>'18',
                'office'=>'Consolacion'
            ],
            [
                'id'=>'19',
                'office'=>'Cordova'
            ],
            [
                'id'=>'20',
                'office'=>'Daanbantayan'
            ],
            [
                'id'=>'21',
                'office'=>'Dalaguete'
            ],
            [
                'id'=>'22',
                'office'=>'Danao City'
            ],
            [
                'id'=>'23',
                'office'=>'Dumanjug'
            ],
            [
                'id'=>'24',
                'office'=>'Ginatilan'
            ],
            [
                'id'=>'25',
                'office'=>'Lapu-lapu City'
            ],
            [
                'id'=>'26',
                'office'=>'Liloan'
            ],
            [
                'id'=>'27',
                'office'=>'Madridejos'
            ],
            [
                'id'=>'28',
                'office'=>'Malabuyoc'
            ],
            [
                'id'=>'29',
                'office'=>'Mandaue City'
            ],
            [
                'id'=>'30',
                'office'=>'Medilin'
            ],
            [
                'id'=>'31',
                'office'=>'Minglanilla'
            ],
            [
                'id'=>'32',
                'office'=>'Moalboal'
            ],
            [
                'id'=>'33',
                'office'=>'Naga City'
            ],
            [
                'id'=>'34',
                'office'=>'Pilar'
            ],
            [
                'id'=>'35',
                'office'=>'Pinamungahan'
            ],
            [
                'id'=>'36',
                'office'=>'Poro'
            ],
            [
                'id'=>'37',
                'office'=>'Ronda'
            ],
            [
                'id'=>'38',
                'office'=>'Samboan'
            ],
            [
                'id'=>'39',
                'office'=>'San Fernando'
            ],
            [
                'id'=>'40',
                'office'=>'San Francisco'
            ],
            [
                'id'=>'41',
                'office'=>'San Remigio'
            ],
            [
                'id'=>'42',
                'office'=>'Santa Fe'
            ],
            [
                'id'=>'43',
                'office'=>'Santander'
            ],
            [
                'id'=>'44',
                'office'=>'Sibonga'
            ],
            [
                'id'=>'45',
                'office'=>'Sogod'
            ],
            [
                'id'=>'46',
                'office'=>'Tabogon'
            ],
            [
                'id'=>'47',
                'office'=>'Tabuelan'
            ],
            [
                'id'=>'48',
                'office'=>'Talisay City'
            ],
            [
                'id'=>'49',
                'office'=>'Toledo City'
            ],
            [
                'id'=>'50',
                'office'=>'Tuburan'
            ],
            [
                'id'=>'51',
                'office'=>'Tudela'
            ],
          
        ];
        DB::table('assessorsoffices')->insert($assessorsoffices);
    }
}
