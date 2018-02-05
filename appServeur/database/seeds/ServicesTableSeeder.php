<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'place_id' => 3,
                'category_id' => 1,
                'name' => 'Reykjavik Campsite',
                'level_price' => NULL,
                'slug' => 'reykjavik-campsite',
            'introduction' => '<p>Du centre, suivre <strong>Borgart&uacute;n</strong> sur env 2 km ; le camping est sur la droite. Bus n&deg; 14 (arr&eacute;t: Laugardaslaug). Ouv de mi-mai &agrave; mi-sept. Env 1800-2 100 /SK/ pers (selon nombre de nuit&eacute;es), douche comprise. Cabanes (2-3 pers) 14 000 ISK.</p>',
            'details' => '<p>Camping de ville pelous&eacute; sans grand charme mais pratique et bien &eacute;quip&eacute; : vaste cuisine,barbecue, location de v&eacute;los, consigne et possibilit&eacute; d\'utiliser le cybercaf&eacute; et les lave-linge de l\'AJ attenante. C\'est une vraie usine, mais l\'accueil y est agr&eacute;able et les prestations de qualit&eacute;. Quelques modestes petits chalets cabins) avec lits superpos&eacute;s, 1 table et des chaises. Juste &agrave; c&ocirc;t&eacute;, la belle piscine de Laugardalslaug.</p>',
            'route' => 'Sundlaugavegur',
            'street_number' => '34',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '8 568-69-44',
            'lat' => '64.1467344000',
            'lng' => '-21.8827057000',
            'created_at' => '2018-01-30 15:35:07',
            'updated_at' => '2018-02-02 08:54:29',
        ),
        1 => 
        array (
            'id' => 2,
            'place_id' => 3,
            'category_id' => 1,
            'name' => 'Reykjavik City Hostel',
            'level_price' => NULL,
            'slug' => 'reykjavik-city-hostel',
        'introduction' => '<p><span id="docs-internal-guid-53a6f4ed-4b73-3bdb-9f9c-0d2b2b70f374"><span style="font-size: 11pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Juste &agrave; c&ocirc;t&eacute; du camping . Ouv tte l\'ann&eacute;e. R&eacute;ception 8h-minuit. R&eacute;sa conseill&eacute;e bien &agrave; l\'avance. Lits en dortoir (4-6 lits) avec ou sans sdb 3 800-6500 ISK/pers; doubles 12 80015 300 ISK. R&eacute;duc avec la carte HI. Parking gratuit.</span></span></p>',
            'details' => '<p>&nbsp;</p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 5pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Une AJ moderne et agr&eacute;able, qui plus est d&eacute;tentrice du Nordic Ecolabel. Belles installations, notamment la salle commune avec livres et jeux, et nombreuses activit&eacute;s propos&eacute;es aux h&ocirc;tes (films, soir&eacute;es &agrave; theme, etc.). Possibilit&eacute; de r&eacute;server des excursions. Et, bien s&ucirc;r, tout l\'&eacute;quipement qu\'on peut attendre de ce genre d\'AJ:3 cuisines &eacute;quip&eacute;es, machines &agrave; laver, t&eacute;l&eacute;phones, consignes &agrave; bagages, location de v&eacute;los, etc.</span></p>',
            'route' => 'Sundlaugavegur',
            'street_number' => '34',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '8 553-81-10',
            'lat' => '64.1467344000',
            'lng' => '-21.8827057000',
            'created_at' => '2018-01-31 09:02:24',
            'updated_at' => '2018-02-02 08:55:59',
        ),
        2 => 
        array (
            'id' => 3,
            'place_id' => 3,
            'category_id' => 1,
            'name' => 'Kex Hotel',
            'level_price' => NULL,
            'slug' => 'kex-hotel',
            'introduction' => '<p>Dortoirs 4-16 its <strong>4 900-8 900 ISK</strong>/ pers selon capacit&eacute; et saison.</p>
<p>Doubles (quelques-unes avec sdb) <strong>25 500 - 40 000 ISK</strong>.<br />D&eacute;licieux petit d&eacute;j-buffet, en sus.</p>',
        'details' => '<p><span id="docs-internal-guid-5c9b03da-4b77-5814-38ce-62aba8cdb065"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">A deux pas du centre. Install&eacute; dans une ancienne biscuiterie, avec d\'impressionnants volumes int&eacute;rieurs et une s&eacute;duisante organisation de l\'espace. Excellente literie et chambres assez spacieuses. Mobilier de r&eacute;cup. plein de clins d\'aeil au voyage dans un d&eacute;cor un poil d&eacute;jant&eacute;, coin salon-biblioth&egrave;que, bar sympa et grande terrasse au soleil. D&eacute;co des couloirs rigolote (pancartes lumineuses de bingo) et 2 cuisines &eacute;quip&eacute;es fort color&eacute;es. Immense caf&eacute;t&eacute;ria avec vue privil&eacute;gi&eacute;e sur la baie. On y sert une bonne petite restauration &agrave; prix mod&eacute;r&eacute;s. Personnel particuli&egrave;rement bienveillant. Vous nous avez compris, dans sa cat&eacute;gorie, c\'est notre adresse pr&eacute;f&eacute;r&eacute;e !</span></span></p>',
            'route' => 'Skúlagata',
            'street_number' => '28',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '561-60-60',
            'lat' => '64.1454786000',
            'lng' => '-21.9192661000',
            'created_at' => '2018-01-31 09:06:23',
            'updated_at' => '2018-02-02 08:58:16',
        ),
        3 => 
        array (
            'id' => 4,
            'place_id' => 3,
            'category_id' => 1,
            'name' => 'Salvation Army Guesthouse',
            'level_price' => NULL,
            'slug' => 'salvation-army-guesthouse',
        'introduction' => '<p><span id="docs-internal-guid-5c9b03da-4b78-3795-2e24-601584ed4c19"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Ouv juin-ao&ucirc;t sit. Attention, h&eacute;bergement limit&eacute; &agrave; 1 nuit. Env 4 500 ISK/pers en dortoirs (non mixtes) avec sac de couchage et double sans sdb 15 500 ISK. Chambres priv&eacute;es 3-6 pers aussi.</span></span></p>',
            'details' => '<p>&nbsp;</p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 5pt;"><span style="font-size: 12pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Cette grande batisse cr&egrave;me de l\'Arm&eacute;e du Salut, qui servait autrefois de logement pour les marins, est aujourd\'hui une r&eacute;sidence universitaire pendant l\'ann&eacute;e scolaire. Ce n\'est peut-&ecirc;tre pas l\'adresse la plus chaleureuse qui soit, mais elle a le m&eacute;rite d\'&ecirc;tre tr&egrave;s centrale, nette, et dispose de chambres convenables avec l\'acc&egrave;s &agrave; une cuisine &eacute;quip&eacute;e. C\'est l\'adresse la plus &eacute;conomique du centre de Reykjavik. Et messe a 10h30 ! </span></p>',
            'route' => 'Kirkjustræti',
            'street_number' => '2',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '56132-03',
            'lat' => '64.1471122000',
            'lng' => '-21.9415126000',
            'created_at' => '2018-01-31 09:08:01',
            'updated_at' => '2018-02-02 09:00:19',
        ),
        4 => 
        array (
            'id' => 5,
            'place_id' => 3,
            'category_id' => 1,
            'name' => 'Reykjavik Downtown Hostel',
            'level_price' => NULL,
            'slug' => 'reykjavik-downtown-hostel',
        'introduction' => '<p><span id="docs-internal-guid-5c9b03da-4b79-9424-7577-b031fe85238d"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Ferme 3 jours &agrave; Noel. Dortoirs (4 ou 10 pers)</span></span></p>
<p><span id="docs-internal-guid-5c9b03da-4b79-9424-7577-b031fe85238d"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">6450-9 100 /SK/pers; <br />Doubles avec ou sans sdb 23 80027 800 ISK: petit d&eacute;j en sus. Reduc avec la carte HI. V </span></span></p>',
        'details' => '<p><span id="docs-internal-guid-5c9b03da-4b79-f624-f01f-a92a4538a703"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Une AJ confortable, impeccable et plut&ocirc;t coquette (meubles et parquet en bois clair). Agr&eacute;able caf&eacute; au rez-de-chauss&eacute;e et, dans une petite maison &agrave; l\'arri&egrave;re, une belle cuisine et des espaces communs de poche sous les toits. Machine &agrave; laver &agrave; dispo, consigne &agrave; bagages,</span></span><span style="background-color: transparent; font-family: Arial; font-size: 12pt; white-space: pre-wrap;">lockers, location de v&eacute;los. Le seul (gros) bemol : les prix qui, pour les doubles, se rapprochent de ceux d\'un hotel (reconnaissons, cependant, que le confort est &agrave; la hauteur).</span></p>',
            'route' => 'Vesturgata',
            'street_number' => '17',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '553-81-20',
            'lat' => '64.1496519000',
            'lng' => '-21.9439200000',
            'created_at' => '2018-01-31 09:10:12',
            'updated_at' => '2018-02-02 09:01:09',
        ),
        5 => 
        array (
            'id' => 6,
            'place_id' => 3,
            'category_id' => 1,
            'name' => 'Loft',
            'level_price' => NULL,
            'slug' => 'loft',
        'introduction' => '<p><span id="docs-internal-guid-09ebb468-4b7b-8d20-f3d6-c37635a8a46c"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Reception 24h/24, tte l\'ann&eacute;e. Dortoirs (6-8 lits, avec sdb) 4 400-8 700 ISK/pers selon saison. Doubles avec sdb env 17 000 ISK. Petit d&eacute;j en sus. Reduc avec la carte HIV</span></span></p>',
        'details' => '<p><span id="docs-internal-guid-09ebb468-4b7b-a67f-416c-bc26ef64fe28"><span style="font-size: 12pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Une AJ install&eacute;e au beau milieu de la rue la plus commer&ccedil;ante de la ville (o&ugrave; les caf&eacute;s font un peu de bruit en fin de semaine...). Jolie deco dans l\'air du temps pour le bar, au der nier &eacute;tage, avec terrasse donnant sur les toits. Chambres doubles et dortoirs simples mais nickel.</span></span></p>',
            'route' => 'Bankastræti',
            'street_number' => '7a',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '553-81-40',
            'lat' => '64.1468440000',
            'lng' => '-21.9338339000',
            'created_at' => '2018-01-31 09:11:07',
            'updated_at' => '2018-02-02 09:01:53',
        ),
        6 => 
        array (
            'id' => 7,
            'place_id' => 3,
            'category_id' => 1,
            'name' => 'Snorri\'s Guesthouse',
            'level_price' => NULL,
            'slug' => 'snorris-guesthouse',
            'introduction' => '<p><span style="font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;">Doubles sans ou avec sdb 18 600-24 500 ISK</span></p>',
            'details' => '<p><span style="font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;">De l\'ext&eacute;rieur, assez banal. Pourtant, l\'int&eacute;rieur est nickel, frais et accueillant, certes au bord d\'une avenue passante, mais somme toute assez calme. Les 4 chambres d\'une jolie blancheur immacul&eacute;e, confortables, avec salle de bains et frigo, occupent la maison principale. Celles avec salles de bains communes, plus basiques mais toujours agr&eacute;ables, sont dans la maison voisine. Belle cuisine &eacute;quip&eacute;e &agrave; disposition, jardin reposant. Excellent accueil.</span></p>',
            'route' => 'Snorrabraut',
            'street_number' => '61',
            'locality' => 'Reykjavík',
            'country' => 'Islande',
            'phone' => '552-05-98',
            'lat' => '64.1394354000',
            'lng' => '-21.9199387000',
            'created_at' => '2018-01-31 09:16:50',
            'updated_at' => '2018-02-02 09:02:24',
        ),
        7 => 
        array (
            'id' => 8,
            'place_id' => 3,
            'category_id' => 2,
            'name' => 'Brattagata Guesthouse',
            'level_price' => NULL,
            'slug' => 'brattagata-guesthouse',
            'introduction' => '<p><span style="font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;"> Doubles 15 00020 000 I&Scaron;K selon saison. Parking gratuit.</span></p>',
            'details' => '<p><span style="font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;">Presque id&eacute;alement situ&eacute;e dans une petite rue tranquille de la vieille ville et dans une maison pimpante aux murs en t&ocirc;le rouge, typique du quartier. Chambres vraiment mignonnes avec meubles anciens. Cuisine et buanderie &agrave; dispo. Joli petit d&eacute;j et accueil aux petits soins.</span></p>',
            'route' => 'Brattagata',
            'street_number' => NULL,
            'locality' => 'Borgarnes',
            'country' => 'Islande',
            'phone' => '612-98-00',
            'lat' => '65.0000000000',
            'lng' => '-22.0000000000',
            'created_at' => '2018-01-31 09:19:00',
            'updated_at' => '2018-02-02 09:43:29',
        ),
    ));
        
        
    }
}