<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('places')->delete();
        
        \DB::table('places')->insert(array (
            0 => 
            array (
                'id' => 3,
                'guide_id' => 1,
                'name' => 'Reykjavik',
                'slug' => 'reykjavik',
                'route' => NULL,
                'street_number' => NULL,
                'locality' => 'Reykjavik',
                'country' => 'Islande',
                'lat' => '64.1265206000',
                'lng' => '-21.8174392000',
            'introduction' => '<p>C\'est sur cette p&eacute;ninsule qu\'on atterrit &agrave; l\'arriv&eacute;e en Islande. Le Reykjanes est coup&eacute; en deux par le rift o&ugrave; les plaques am&eacute;ricaine et eurasiatique se s&eacute;parent. On pourrait &eacute;crire que c\'est lslande en miniature : champs de lave, falaises tombant dans la mer, nombreux oiseaux, solfatares et sources d\'eau chaude sont comme concentr&eacute;s sur cette bande de terre. La route se faufile comme elle peut sur ce chaos volcanique couvert de mousse, o&ugrave; aucune culture n\'est possible, o&ugrave; aucune rivi&egrave;re ne peut y couler tant le sol est poreux. Au nord de cette p&eacute;ninsule, l\'agglom&eacute;ration de Reykjavik (incluant Hafnarfjordur, K&oacute;pavogur et Mosfellb&aelig;r), concentre plus de 60 % de la modeste population islandaise. Une ville tr&egrave;s, tr&egrave;s loin de l\'enfer urbain de bien d\'autres capitales du monde !</p>
<p>REYKJAV&Iacute;K 122 100 hab. (207 200 pour l\'agglom&eacute;ration totale).</p>',
            'histoire' => '<p>Selon le Landn&aacute;mab&oacute;k (Livre de la colonisation), Reykjavik, qui signifie &laquo; baie des Fum&eacute;esen islandais, doit son nom aux vapeurs provenant de sources chaudes qui impressionn&egrave;rent les premiers colons au IX&deg; s. D\'ailleurs, la capitale est toujours aliment&eacute;e en eau chaude par une centrale g&eacute;othermique. En 1786, l\'autorit&eacute; danoise accorda a Reykjavik le statut de ville et de fait, dans cette minuscule colonie de moins de 200 habitants, devint capitale islandaise.</p>',
                'arriver_quitter' => NULL,
                'created_at' => '2018-01-30 12:48:48',
                'updated_at' => '2018-02-01 13:00:15',
            ),
            1 => 
            array (
                'id' => 4,
                'guide_id' => 1,
                'name' => 'Keflavik',
                'slug' => 'keflavik',
                'route' => NULL,
                'street_number' => NULL,
                'locality' => 'Keflavik',
                'country' => 'Islande',
                'lat' => '65.5015109000',
                'lng' => '-24.1826589000',
                'introduction' => '<p>14 800 hab.<br /> Ville sans int&eacute;r&ecirc;t autre que d\'&ecirc;tre pos&eacute;e &agrave; 2 km de l\'a&eacute;roport international. Y logeront donc ceux qui ont un avion &agrave; prendre tot le matin... Ou qui arrivent tard le soir en Islande. Jusqu\'en septembre 2006, elle h&eacute;bergeait une base militaire am&eacute;ricaine transform&eacute;e aujourd\'hui en campus universitaire priv&eacute; pour former les pilotes et personnels de bord. D&eacute;but juillet, l\'ancienne base accueille l\'int&eacute;ressant festival de musiques actuelles&nbsp; All Tomorrow\'s Parties.</p>',
                'histoire' => NULL,
            'arriver_quitter' => '<p>Reykjav&iacute;k et l\'a&eacute;roport internationale changement avec la ligne n&deg; 1 &agrave; Fjordur en bus:<br /> Ligne urbaine (banlieue sud de Reykjavik). no 55: depuis l\'a&eacute;roport, dessert Keflavik Reykjavik, en voiture: facile, par au passage (parcourt la rue Hringbraut). la route 41. 12 bus/). 7h42-22h55. <br />Trajet : 10 mn de - Le taxi de l\'a&eacute;roport au centre de l\'a&eacute;roport &aacute; Keflavik, 1h15 de Keflavik &aacute; Keflavik co&ucirc;te env 3 500 ISK. 421Reykjavik. 5 de ces bus n&eacute;cessitent un 15-15, 422-22-22 ou 561-00-00.</p>',
                'created_at' => '2018-02-01 12:56:14',
                'updated_at' => '2018-02-01 12:56:14',
            ),
            2 => 
            array (
                'id' => 5,
                'guide_id' => 1,
                'name' => 'Thingvellir',
                'slug' => 'thingvellir',
                'route' => NULL,
                'street_number' => NULL,
                'locality' => 'Thingvellir',
                'country' => 'Islande',
                'lat' => '64.2572710000',
                'lng' => '-21.1442909000',
            'introduction' => '<p>PINGVELLIR O Le &THORN;ingvellir (plaine du parlement en fran&ccedil;ais) est un parc national depuis 1930 et le site de &laquo; lh&eacute;micycle &raquo; est class&eacute; au Patrimoine mondial de l\'Unesco depuis 2004. Un lieu qui vaut autant pour sa beaut&eacute; que pour son importance historique. G&eacute;ographiquement, vous &ecirc;tes ici &agrave; cheval entre le Nouveau Monde et l\'Ancien, dans un foss&eacute; d\'effondrement caus&eacute; par la d&eacute;rive des continents. D\'un c&ocirc;t&eacute;, la plaque nord-am&eacute;ricaine, de l\'autre la plaque eurasienne, qui s\'&eacute;cartent de 5 mm par an ! Mais, contrairement &agrave; ce&nbsp;que l\'on pourrait croire, les paysages sont assez reposants. Le lac Pingval, avec ses 84 km, est le plus grand lac naturel d\'Islande et le terrain de jeu pr&eacute;f&eacute;r&eacute; d\'oies et de canards sauvages. De nombreuses r&eacute;sidences secondaires (de petits chalets plus ou moins luxueux) peuplent ses rives, tres pris&eacute;es par les habitants de Reykjavik.</p>',
                'histoire' => '<p>A partir du X\'s, les chefs de clans se sont retrouv&eacute;s une fois par an, dans l\'h&eacute;micycle &raquo;, un champ de lave prot&eacute;g&eacute; par deux grandes falaises paralleles. Cette sorte de session parlementaire durait 15 jours et s\'accompagnait de f&ecirc;tes et de concours sportifs. Ce fut le premier v&eacute;ritable parlement d\'Europe, en islandais Alping. La cinquantaine de chefs r&eacute;unis cherchaient des consensus pour r&eacute;gler les conflits et, surtout, edictaient des lois. Une grande le&ccedil;on de d&eacute;mocratie donn&eacute;e par ces Vikings, alors que sur le continent r&eacute;gnaient les intrigues et complots sanglants de l\'&eacute;poque f&eacute;odale L\'Al&thorn;ing, fond&eacute; en 930, fonctionna comme parlement jusqu\'en 1262, puis perdit peu &agrave; peu son pouvoir l&eacute;gislatif quand le pays passa sous souverainet&eacute; norv&eacute;gienne, puis danoise, et devint alors surtout une cour de justice, jusqu\'&agrave; ce que les assembl&eacute;es soient supprim&eacute;es &agrave; la fin du XVII&deg; s. C\'est &agrave; &THORN;ingvellir que les Islandais d&eacute;cid&egrave;rent de se convertir au christianisme en l\'an 1000 et, pour la force du symbole, c\'est aussi &agrave; &THORN;ingvellir que fut proclam&eacute;e, le 17 juin 1944, l\'ind&eacute;pendance du pays. Le &THORN;ingvellir et sa r&eacute;gion reviennent souvent dans la litt&eacute;rature islandaise. L\'endroit est au cour du r&eacute;cit de La Cloche d\'Islande de Halld&oacute;r Laxness ou, plus r&eacute;cemment, du roman policier Hypothermie d\'Arnaldur Indri&eth;ason.</p>',
                'arriver_quitter' => NULL,
                'created_at' => '2018-02-01 12:59:38',
                'updated_at' => '2018-02-01 12:59:38',
            ),
        ));
        
        
    }
}