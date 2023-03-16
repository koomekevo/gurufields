<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            [
                'name' => 'Kenya',
                'children' => [
                    [
                        'name' => 'Nairobi',
                        'children' => [
                            ['name' => 'Dagoretti North'],
                            ['name' => 'Dagoretti South'],
                            ['name' => 'Langata'],
                            ['name' => 'Kibra'],
                            ['name' => 'Kasarani'],
                            ['name' => 'Roysambu'],
                            ['name' => 'Embakasi Central'],
                            ['name' => 'Embakasi East'],
                            ['name' => 'Embakasi North'],
                            ['name' => 'Embakasi South'],
                            ['name' => 'Embakasi West'],
                            ['name' => 'Kamukunji'],
                            ['name' => 'Makadara'],
                            ['name' => 'Mathare'],
                            ['name' => 'Starehe'],
                            ['name' => 'Westlands'],
                        ],
                    ],
                    [
                        'name' => 'Nyamira',
                        'children' => [
                            ['name' => 'West Mugirango'],
                            ['name' => 'Kitutu Masaba'],
                            ['name' => 'North Mugirango'],
                            ['name' => 'Borabu'],
                        ],
                    ],
                    [
                        'name' => 'Kisii',
                        'children' => [
                            ['name' => 'Bobasi'],
                            ['name' => 'Bonchari'],
                            ['name' => 'Bomachoge Borabu'],
                            ['name' => 'Bomachoge Chache'],
                            ['name' => 'Kitutu Chache North'],
                            ['name' => 'Kitutu Chache South'],
                            ['name' => 'Nyaribari Chache'],
                            ['name' => 'Nyaribari Masaba'],
                            ['name' => 'South Mugirango'],
                        ],
                    ],
                    [
                        'name' => 'Migori',
                        'children' => [
                            ['name' => 'Awendo'],
                            ['name' => 'Karungu'],
                            ['name' => 'Muhuru'],
                            ['name' => 'Nyatike'],
                            ['name' => 'Rongo'],
                            ['name' => 'Suba East'],
                            ['name' => 'Suba West'],
                            ['name' => 'Uriri'],
                        ],
                    ],
                    [
                        'name' => 'Homa Bay',
                        'children' => [
                            ['name' => 'Homa Bay'],
                            ['name' => 'Kabondo Kasipul'],
                            ['name' => 'Karachuonyo'],
                            ['name' => 'Kasipul'],
                            ['name' => 'Suba North'],
                            ['name' => 'Ndhiwa'],
                            ['name' => 'Rangwe'],
                            ['name' => 'Suba South'],
                        ],
                    ],
                    [
                        'name' => 'Kisumu',
                        'children' => [
                            ['name' => 'Kisumu East'],
                            ['name' => 'Kisumu West'],
                            ['name' => 'Kisumu Central'],
                            ['name' => 'Muhoroni'],
                            ['name' => 'Nyakach'],
                            ['name' => 'Nyando'],
                            ['name' => 'Seme'],
                        ],
                    ],
                    [
                        'name' => 'Siaya',
                        'children' => [
                            ['name' => 'Alego Usonga'],
                            ['name' => 'Bondo'],
                            ['name' => 'Gem'],
                            ['name' => 'Rarieda'],
                            ['name' => 'Ugenya'],
                            ['name' => 'Ugunja'],
                        ],
                    ],
                    [
                        'name' => 'Busia',
                        'children' => [
                            ['name' => 'Nambale'],
                            ['name' => 'Butula'],
                            ['name' => 'Funyula'],
                            ['name' => 'Budalangi'],
                            ['name' => 'Matayos'],
                            ['name' => 'Teso North'],
                            ['name' => 'Teso South'],
                        ],
                    ],
                    [
                        'name' => 'Bungoma',
                        'children' => [
                            ['name' => 'Kabuchai'],
                            ['name' => 'Kanduyi'],
                            ['name' => 'Sirisia'],
                            ['name' => 'Kimilili'],
                            ['name' => 'Bumula'],
                            ['name' => 'Tongaren'],
                            ['name' => 'Webuye East'],
                            ['name' => 'Webuye West'],
                            ['name' => 'Mt Elgon'],
                        ],
                    ],
                    [
                        'name' => 'Vihiga',
                        'children' => [
                            ['name' => 'Emuhaya'],
                            ['name' => 'Luanda'],
                            ['name' => 'Sabatia'],
                            ['name' => 'Tiriki East'],
                            ['name' => 'Tiriki West'],
                            ['name' => 'Vihiga'],
                        ],
                    ],
                    [
                        'name' => 'Kakamega',
                        'children' => [
                            ['name' => 'Lugari'],
                            ['name' => 'Likuyani'],
                            ['name' => 'Malava'],
                            ['name' => 'Lurambi'],
                            ['name' => 'Navakholo'],
                            ['name' => 'Mumias West'],
                            ['name' => 'Mumias East'],
                            ['name' => 'Matungu'],
                            ['name' => 'Butere'],
                            ['name' => 'Khwisero'],
                            ['name' => 'Shinyalu'],
                            ['name' => 'Ikolomani'],
                        ],
                    ],
                    [
                        'name' => 'Bomet',
                        'children' => [
                            ['name' => 'Bomet Central'],
                            ['name' => 'Bomet East'],
                            ['name' => 'Chepalungu'],
                            ['name' => 'Sotik'],
                            ['name' => 'Konoin'],
                        ],
                    ],
                    [
                        'name' => 'Kericho',
                        'children' => [
                            ['name' => 'Ainamoi'],
                            ['name' => 'Belgut'],
                            ['name' => 'Bureti'],
                            ['name' => 'Kipkelion East'],
                            ['name' => 'Kipkelion West'],
                            ['name' => 'Sigowet-Soin'],
                        ],
                    ],
                    [
                        'name' => 'Kajiado',
                        'children' => [
                            ['name' => 'Kajiado Central'],
                            ['name' => 'Kajiado North'],
                            ['name' => 'Kajiado South'],
                            ['name' => 'Kajiado East'],
                            ['name' => 'Kajiado West'],
                        ],
                    ],
                    [
                        'name' => 'Narok',
                        'children' => [
                            ['name' => 'Narok North'],
                            ['name' => 'Narok South'],
                            ['name' => 'Narok East'],
                            ['name' => 'Narok West'],
                            ['name' => 'Emurua Dikirr'],
                            ['name' => 'Kilgoris '],
                        ],
                    ],
                    [
                        'name' => 'Nakuru',
                        'children' => [
                            ['name' => 'Naivasha'],
                            ['name' => 'Nakuru Town West'],
                            ['name' => 'Nakuru Town East'],
                            ['name' => 'Kuresoi South'],
                            ['name' => 'Kuresoi North'],
                            ['name' => 'Molo'],
                            ['name' => 'Rongai'],
                            ['name' => 'Subukia'],
                            ['name' => 'Njoro'],
                            ['name' => 'Gilgil'],
                            ['name' => 'Bahati'],
                        ],
                    ],
                    [
                        'name' => 'Laikipia',
                        'children' => [
                            ['name' => 'Laikipia North'],
                            ['name' => 'Laikipia West'],
                            ['name' => 'Laikipia East'],
                        ],
                    ],
                    [
                        'name' => 'Baringo',
                        'children' => [
                            ['name' => 'Baringo Central'],
                            ['name' => 'Baringo South'],
                            ['name' => 'Baringo North'],
                            ['name' => 'Eldama Ravine'],
                            ['name' => 'Mogotio'],
                            ['name' => 'Tiaty'],
                        ],
                    ],
                    [
                        'name' => 'Nandi',
                        'children' => [
                            ['name' => 'Tinderet'],
                            ['name' => 'Aldai'],
                            ['name' => 'Nandi Hills'],
                            ['name' => 'Chesumei'],
                            ['name' => 'Emgwen'],
                            ['name' => 'Mosop'],
                        ],
                    ],
                    [
                        'name' => 'Elgeyo-Marakwet',
                        'children' => [
                            ['name' => 'Marakwet East'],
                            ['name' => 'Marakwet West'],
                            ['name' => 'Keiyo North'],
                            ['name' => 'Keiyo South'],
                        ],
                    ],
                    [
                        'name' => 'Uasin Gishu',
                        'children' => [
                            ['name' => 'Ainabkoi'],
                            ['name' => 'Kapseret'],
                            ['name' => 'Kesses'],
                            ['name' => 'Moiben'],
                            ['name' => 'Turbo'],
                        ],
                    ],
                    [
                        'name' => 'Trans-Nzoia',
                        'children' => [
                            ['name' => 'Cherangany'],
                            ['name' => 'Kwanza'],
                            ['name' => 'Saboti'],
                            ['name' => 'Endebess'],
                            ['name' => 'Kiminini'],
                        ],
                    ],
                    [
                        'name' => 'Samburu',
                        'children' => [
                            ['name' => 'Samburu East'],
                            ['name' => 'Samburu West'],
                            ['name' => 'Samburu North'],
                        ],
                    ],
                    [
                        'name' => 'West Pokot',
                        'children' => [
                            ['name' => 'Kapenguria'],
                            ['name' => 'Kacheliba'],
                            ['name' => 'Pokot South'],
                            ['name' => 'Sigor'],
                        ],
                    ],
                    [
                        'name' => 'Turkana',
                        'children' => [
                            ['name' => 'Loima'],
                            ['name' => 'Turkana Central'],
                            ['name' => 'Turkana East'],
                            ['name' => 'Turkana North'],
                            ['name' => 'Turkana South'],
                            ['name' => 'Turkana West'],
                        ],
                    ],
                    [
                        'name' => 'Kiambu',
                        'children' => [
                            ['name' => 'Gatundu North'],
                            ['name' => 'Gatundu South'],
                            ['name' => 'Githunguri'],
                            ['name' => 'Juja'],
                            ['name' => 'Kabete'],
                            ['name' => 'Kiambaa'],
                            ['name' => 'Kiambu'],
                            ['name' => 'Kikuyu'],
                            ['name' => 'Lari'],
                            ['name' => 'Limuru'],
                            ['name' => 'Ruiru'],
                            ['name' => 'Thika Town'],
                        ],
                    ],
                    [
                        'name' => 'Muranga',
                        'children' => [
                            ['name' => 'Kangema'],
                            ['name' => 'Kiharu'],
                            ['name' => 'Mathioya'],
                            ['name' => 'Kigumo'],
                            ['name' => 'Kandara'],
                            ['name' => 'Maragwa'],
                            ['name' => 'Gatanga'],
                        ],
                    ],
                    [
                        'name' => 'Kirinyaga',
                        'children' => [
                            ['name' => 'Mwea'],
                            ['name' => 'Gichugu'],
                            ['name' => 'Ndia'],
                            ['name' => 'Kirinyaga Central'],
                        ],
                    ],
                    [
                        'name' => 'Nyeri',
                        'children' => [
                            ['name' => 'Tetu'],
                            ['name' => 'Kieni'],
                            ['name' => 'Mathira'],
                            ['name' => 'Othaya'],
                            ['name' => 'Mukurweini'],
                            ['name' => 'Nyeri Town'],
                        ],
                    ],
                    [
                        'name' => 'Nyandarua',
                        'children' => [
                            ['name' => 'Kinangop'],
                            ['name' => 'Kipipiri'],
                            ['name' => 'Ol Kalou'],
                            ['name' => 'Ol Joro Orok'],
                            ['name' => 'Nyandarua '],
                        ],
                    ],
                    [
                        'name' => 'Makueni',
                        'children' => [
                            ['name' => 'Makueni'],
                            ['name' => 'Mbooni'],
                            ['name' => 'Kibwezi East'],
                            ['name' => 'Kibwezi West'],
                            ['name' => 'Kaiti'],
                            ['name' => 'Kilome'],
                        ],
                    ],
                    [
                        'name' => 'Machakos',
                        'children' => [
                            ['name' => 'Masinga'],
                            ['name' => 'Yatta'],
                            ['name' => 'Kangundo'],
                            ['name' => 'Matungulu'],
                            ['name' => 'Kathiani'],
                            ['name' => 'Mavoko'],
                            ['name' => 'Mwala'],
                        ],
                    ],
                    [
                        'name' => 'Kitui',
                        'children' => [
                            ['name' => 'Kitui Central'],
                            ['name' => 'Kitui East'],
                            ['name' => 'Kitui Rural'],
                            ['name' => 'Kitui South'],
                            ['name' => 'Kitui West'],
                            ['name' => 'Mwingi Central'],
                            ['name' => 'Mwingi North'],
                            ['name' => 'Mwingi West'],
                        ],
                    ],
                    [
                        'name' => 'Embu',
                        'children' => [
                            ['name' => 'Manyatta'],
                            ['name' => 'Runyenjes'],
                            ['name' => 'Mbeere North'],
                        ],
                    ],
                    [
                        'name' => 'Tharaka-Nithi',
                        'children' => [
                            ['name' => 'Maara'],
                            ['name' => 'Chuka'],
                            ['name' => 'Tharaka'],
                        ],
                    ],
                    [
                        'name' => 'Meru',
                        'children' => [
                            ['name' => 'Buuri'],
                            ['name' => 'Igembe North'],
                            ['name' => 'Igembe Central'],
                            ['name' => 'Igembe South'],
                            ['name' => 'North Imenti'],
                            ['name' => 'South Imenti'],
                            ['name' => 'Central Imenti'],
                            ['name' => 'Tigania East'],
                            ['name' => 'Tigania West'],
                        ],
                    ],
                    [
                        'name' => 'Isiolo',
                        'children' => [
                            ['name' => 'Isiolo North'],
                            ['name' => 'Isiolo South'],
                        ],
                    ],
                    [
                        'name' => 'Marsabit',
                        'children' => [
                            ['name' => 'Moyale'],
                            ['name' => 'North Horr'],
                            ['name' => 'Saku'],
                            ['name' => 'Laisamis'],
                        ],
                    ],
                    [
                        'name' => 'Mandera',
                        'children' => [
                            ['name' => 'Mandera West'],
                            ['name' => 'Banissa'],
                            ['name' => 'Mandera East'],
                            ['name' => 'Lafey'],
                            ['name' => 'Mandera South'],
                            ['name' => 'Mandera North'],
                        ],
                    ],
                    [
                        'name' => 'Wajir',
                        'children' => [
                            ['name' => 'Tarbaj'],
                            ['name' => 'Wajir North'],
                            ['name' => 'Wajir West'],
                            ['name' => 'Wajir East'],
                            ['name' => 'Wajir South'],
                        ],
                    ],
                    [
                        'name' => 'Garissa',
                        'children' => [
                            ['name' => 'Garissa Township'],
                            ['name' => 'Fafi'],
                            ['name' => 'Dadaab'],
                            ['name' => 'Lagdera'],
                            ['name' => 'Balambala'],
                            ['name' => 'Ijara'],
                        ],
                    ],
                    [
                        'name' => 'Taita-Taveta',
                        'children' => [
                            ['name' => 'Taveta'],
                            ['name' => 'Wundanyi'],
                            ['name' => 'Mwatate'],
                            ['name' => 'Voi'],
                        ],
                    ],
                    [
                        'name' => 'Lamu',
                        'children' => [
                            ['name' => 'Lamu East'],
                            ['name' => 'Lamu West'],
                        ],
                    ],
                    [
                        'name' => 'Tana River',
                        'children' => [
                            ['name' => 'Garsen'],
                            ['name' => 'Galole'],
                            ['name' => 'Bura'],
                        ],
                    ],
                    [
                        'name' => 'Kilifi',
                        'children' => [
                            ['name' => 'Kilifi North'],
                            ['name' => 'Kilifi South'],
                            ['name' => 'Kaloleni'],
                            ['name' => 'Rabai'],
                            ['name' => 'Ganze'],
                            ['name' => 'Malindi'],
                            ['name' => 'Magarini'],
                        ],
                    ],
                    [
                        'name' => 'Kwale',
                        'children' => [
                            ['name' => 'Msambweni'],
                            ['name' => 'Matuga'],
                            ['name' => 'Kinango'],
                            ['name' => 'Lunga Lunga'],
                        ],
                    ],
                    [
                        'name' => 'Mombasa',
                        'children' => [
                            ['name' => 'Changamwe'],
                            ['name' => 'Jomvu'],
                            ['name' => 'Kisauni'],
                            ['name' => 'Nyali'],
                            ['name' => 'Likoni'],
                            ['name' => 'Mvita'],
                        ],
                    ],
                ],
            ]
        ];
    }
}
