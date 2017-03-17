<?php

class OpenData
{
    /*
     * Tous les pays disponible à l'inscription
     * Use the ISO_3166-1 list (http://en.wikipedia.org/wiki/ISO_3166-1)
     */
    public static $phCountries = array( 
                                        "BE"=>"Belgique",
                                        "BR"=>"Brésil",
                                        "ES"=>"Espagne",
                                        "FR"=>"France",
                        				"GP"=>"Guadeloupe", //971
                      					"GF"=>"Guyanne Française", //973
                        				"MQ"=>"Martinique", //972
                        				"YT"=>"Mayotte", //976
                                        "MX"=>"Mexique",
                        				"NC"=>"Nouvelle-Calédonie", //988
                                        "PE"=>"Pérou",
                        				"RE"=>"Réunion", //9*74
                                        "PM"=>"St Pierre et Miquelon",
                                        "CH"=>"Suisse",//975
                                        ); 
    
    public static $elementTypes = array( "NGO" => "Association",
                                        "LocalBusiness" => "Entreprise",
                                        "Group" => "Groupe",
                                        "GovernmentOrganization" => "Organisation Gouvernementale",
                                        "competition" => "Compétition",
                                        "concert" => "Concert",
                                        "concours" => "Concours",
                                        "exposition" => "Exposition",
                                        "festival" => "Festival",
                                        "getTogether" => "Rencontre",
                                        "market" => "Marché",
                                        "meeting" => "Réunion"
                                        ); //975
    public static $categ = array(
                                array( "name" => "Divers", 
                                    "tags" => array("divers") ),
                                array( "name" => "Communs", 
                                    "icon" => "fa-thumbs-o-up",
                                    "tags" => array("commun") ),
                                array( "name" => "Agriculture | Alimentation", 
                                    "icon" => "fa-cutlery",
                                    "tags" => array("agriculture","alimentation") ),
                                array( "name" =>  "Santé",
                                    "icon" => "fa-heartbeat",
                                    "tags" => array("santé") ),
                                array( "name" =>  "Déchets",
                                    "icon" => "fa-trash-o ",
                                    "tags" => array("déchets") ),
                                array( "name" =>  "Aménagement, Transport, Construction",
                                    "icon" => "fa-bus",
                                    "tags" => array("aménagement","transport","construction") ),
                                array( "name" =>  "Éducation, Petite-enfance",
                                    "icon" => "fa-book",
                                    "tags" => array("éducation","petite Enfance") ),
                                array( "name" =>  "Citoyenneté",
                                    "icon" => "fa-user-circle-o",
                                    "tags" => array("citoyenneté") ),
                                array( "name" =>  "Economie",
                                    "icon" => "fa-money",
                                    "tags" => array( "ess","economie social solidaire" ) ),
                                array( "name" =>  "Energie-Climat",
                                    "icon" => "fa-sun-o",
                                    "tags" => array("energie" ,"climat") ),
                                array( "name" =>  "Culture | Animation ",
                                    "icon" => "fa-universal-access",
                                    "tags" => array("culture" ,"animation") ),
                                array( "name" =>  "Biodiversité ",
                                    "icon" => "fa-tree",
                                    "tags" => array("biodiversité") ),
                                array( "name" =>  "TIC | Numérique | Internet ",
                                    "icon" => "fa-laptop",
                                    "tags" => array("numérique","tic","internet") )  
                                );
    
    /**
     * Classé par departement 
     * ce tableau fait le lien entre Code postal et nom de ville
     */
    public static $commune = array( '974'=>array(
                                            '97400'=> 'ST DENIS',
                                            '97410'=> 'ST PIERRE',
                                            '97411'=> 'BOIS DE NEFLES ST PAUL',
                                            '97412'=> 'BRAS PANON',
                                            '97413'=> 'CILAOS',
                                            '97414'=> 'ENTRE DEUX',
                                            '97416'=> 'LA CHALOUPE',
                                            '97417'=> 'LA MONTAGNE',
                                            '97418'=> 'LA PLAINE DES CAFRES',
                                            '97419'=> 'LA POSSESSION',
                                            '97420'=> 'LE PORT',
                                            '97421'=> 'LA RIVIERE',
                                            '97422'=> 'LA SALINE',
                                            '97423'=> 'LE GUILLAUME',
                                            '97424'=> 'LE PITON ST LEU',
                                            '97425'=> 'LES AVIRONS',
                                            '97426'=> 'LES TROIS BASSINS',
                                            '97427'=> 'L ETANG SALE',
                                            '97429'=> 'PETITE ILE',
                                            '97430'=> 'LE TAMPON',
                                            '97431'=> 'LA PLAINE DES PALMISTES',
                                            '97432'=> 'RAVINE DES CABRIS',
                                            '97433'=> 'SALAZIE',
                                            '97434'=> 'ST GILLES LES BAINS' ,
                                            '97435'=> 'ST GILLES LES HAUTS',
                                            '97436'=> 'ST LEU',
                                            '97437'=> 'STE ANNE',
                                            '97438'=> 'STE MARIE',
                                            '97439'=> 'STE ROSE',
                                            '97440'=> 'ST ANDRE',
                                            '97441'=> 'STE SUZANNE',
                                            '97442'=> 'ST PHILIPPE',
                                            '97450'=> 'ST LOUIS',
                                            '97460'=> 'ST PAUL',
                                            '97470'=> 'ST BENOIT',
                                            '97480'=> 'ST JOSEPH',
                                            '97490'=> 'STE CLOTILDE'
                                            )
                                    );
     public static $communeMap = array( '974'=>array(
                                            '97400'=> array(array( "codeinsee"=>'97411', "name"=>'ST DENIS', "news"=>"N")),
                                            '97410'=> array(array( "codeinsee"=>'97416', "name"=>'ST PIERRE', "news"=>"S")),
                                            '97411'=> array(array( "codeinsee"=>'97415', "name"=>'BOIS DE NEFLES ST PAUL', "news"=>"O")),
                                            '97412'=> array(array( "codeinsee"=>'97402', "name"=>'BRAS PANON', "news"=>"E")),
                                            '97413'=> array(array( "codeinsee"=>'97424', "name"=>'CILAOS', "news"=>"S")),
                                            '97414'=> array(array( "codeinsee"=>'97403', "name"=>'ENTRE DEUX', "news"=>"S")),
                                            '97416'=> array(array( "codeinsee"=>'97413', "name"=>'LA CHALOUPE', "news"=>"O")),
                                            '97417'=> array(array( "codeinsee"=>'97411', "name"=>'LA MONTAGNE', "news"=>"N")),
                                            '97418'=> array(array( "codeinsee"=>'97422', "name"=>'LA PLAINE DES CAFRES', "news"=>"S")),
                                            '97419'=> array(array( "codeinsee"=>'97408', "name"=>'LA POSSESSION', "news"=>"N")),
                                            '97420'=> array(array( "codeinsee"=>'97407', "name"=>'LE PORT', "news"=>"N")),
                                            '97421'=> array(array( "codeinsee"=>'97414', "name"=>'LA RIVIERE', "news"=>"S")),
                                            '97422'=> array(array( "codeinsee"=>'97415', "name"=>'LA SALINE', "news"=>"O")),
                                            '97423'=> array(array( "codeinsee"=>'97415', "name"=>'LE GUILLAUME', "news"=>"O")),
                                            '97424'=> array(array( "codeinsee"=>'97413', "name"=>'LE PITON ST LEU', "news"=>"O")),
                                            '97425'=> array(array( "codeinsee"=>'97401', "name"=>'LES AVIRONS', "news"=>"S")),
                                            '97426'=> array(array( "codeinsee"=>'97423', "name"=>'LES TROIS BASSINS', "news"=>"O")),
                                            '97427'=> array(array( "codeinsee"=>'97404', "name"=>'L ETANG SALE', "news"=>"S")),
                                            '97429'=> array(array( "codeinsee"=>'97405', "name"=>'PETITE ILE', "news"=>"S")),
                                            '97430'=> array(array( "codeinsee"=>'97422', "name"=>'LE TAMPON', "news"=>"S")),
                                            '97431'=> array(array( "codeinsee"=>'97406', "name"=>'LA PLAINE DES PALMISTES', "news"=>"E")),
                                            '97432'=> array(array( "codeinsee"=>'97416', "name"=>'RAVINE DES CABRIS', "news"=>"S")),
                                            '97433'=> array(array( "codeinsee"=>'97421', "name"=>'SALAZIE', "news"=>"E")),
                                            '97434'=> array(array( "codeinsee"=>'97415', "name"=>'ST GILLES LES BAINS', "news"=>"O")) ,
                                            '97435'=> array(array( "codeinsee"=>'97415', "name"=>'ST GILLES LES HAUTS', "news"=>"O")),
                                            '97436'=> array(array( "codeinsee"=>'97413', "name"=>'ST LEU', "news"=>"O")),
                                            '97437'=> array(array( "codeinsee"=>'97410', "name"=>'STE ANNE', "news"=>"E")),
                                            '97438'=> array(array( "codeinsee"=>'97418', "name"=>'STE MARIE', "news"=>"N")),
                                            '97439'=> array(array( "codeinsee"=>'97419', "name"=>'STE ROSE', "news"=>"E")),
                                            '97440'=> array(array( "codeinsee"=>'97409', "name"=>'ST ANDRE', "news"=>"E")),
                                            '97441'=> array(array( "codeinsee"=>'97420', "name"=>'STE SUZANNE', "news"=>"E")),
                                            '97442'=> array(array( "codeinsee"=>'97417', "name"=>'ST PHILIPPE', "news"=>"S")),
                                            '97450'=> array(array( "codeinsee"=>'97414', "name"=>'ST LOUIS', "news"=>"S")),
                                            '97460'=> array(array( "codeinsee"=>'97415', "name"=>'ST PAUL', "news"=>"O")),
                                            '97470'=> array(array( "codeinsee"=>'97410', "name"=>'ST BENOIT', "news"=>"E")),
                                            '97480'=> array(array( "codeinsee"=>'97412', "name"=>'ST JOSEPH', "news"=>"S")),
                                            '97490'=> array(array( "codeinsee"=>'97411', "name"=>'STE CLOTILDE', "news"=>"N"))
                                            )
                                    );

 public static $dep = array( 
"AIN" => array("AIN","01"),
"AISNE" => array("AISNE","02"),
"HAUTE-SAVOIE" => array("HAUTE-SAVOIE","74"),
"JURA" => array("JURA","39"),
"ALLIER" => array("ALLIER","03"),
"ALPES-DE-HAUTE-PROVENCE" => array("ALPES-DE-HAUTE-PROVENCE","04"),
"HAUTES-ALPES" => array("HAUTES-ALPES","05"),
"DROME" => array("DROME","26"),
"ALPES-MARITIMES" => array("ALPES-MARITIMES","06"),
"ARDECHE" => array("ARDECHE","07"),
"ARDENNES" => array("ARDENNES","08"),
"ARIEGE" => array("ARIEGE","09"),
"AUBE" => array("AUBE","10"),
"AUDE" => array("AUDE","11"),
"AVEYRON" => array("AVEYRON","12"),
"BOUCHES-DU-RHONE" => array("BOUCHES-DU-RHONE","13"),
"VAR" => array("VAR","83"),
"CALVADOS" => array("CALVADOS","14"),
"CANTAL" => array("CANTAL","15"),
"CHARENTE" => array("CHARENTE","16"),
"CHARENTE-MARITIME" => array("CHARENTE-MARITIME","17"),
"CHER" => array("CHER","18"),
"CORREZE" => array("CORREZE","19"),
"CORSE-DU-SUD" => array("CORSE-DU-SUD","2A"),
"HAUTE-CORSE" => array("HAUTE-CORSE","2B"),
"COTE-D'OR" => array("COTE-D'OR","21"),
"SAONE-ET-LOIRE" => array("SAONE-ET-LOIRE","71"),
"COTES-D'ARMOR" => array("COTES-D'ARMOR","22"),
"CREUSE" => array("CREUSE","23"),
"DORDOGNE" => array("DORDOGNE","24"),
"DOUBS" => array("DOUBS","25"),
"EURE" => array("EURE","27"),
"EURE-ET-LOIR" => array("EURE-ET-LOIR","28"),
"FINISTERE" => array("FINISTERE","29"),
"GARD" => array("GARD","30"),
"HAUTE-GARONNE" => array("HAUTE-GARONNE","31"),
"GERS" => array("GERS","32"),
"GIRONDE" => array("GIRONDE","33"),
"HERAULT" => array("HERAULT","34"),
"ILLE-ET-VILAINE" => array("ILLE-ET-VILAINE","35"),
"INDRE" => array("INDRE","36"),
"INDRE-ET-LOIRE" => array("INDRE-ET-LOIRE","37"),
"VIENNE" => array("VIENNE","86"),
"ISERE" => array("ISERE","38"),
"LANDES" => array("LANDES","40"),
"LOIR-ET-CHER" => array("LOIR-ET-CHER","41"),
"LOIRE" => array("LOIRE","42"),
"RHONE" => array("RHONE","69"),
"HAUTE-LOIRE" => array("HAUTE-LOIRE","43"),
"LOIRE-ATLANTIQUE" => array("LOIRE-ATLANTIQUE","44"),
"LOIRET" => array("LOIRET","45"),
"LOT" => array("LOT","46"),
"LOT-ET-GARONNE" => array("LOT-ET-GARONNE","47"),
"LOZERE" => array("LOZERE","48"),
"MAINE-ET-LOIRE" => array("MAINE-ET-LOIRE","49"),
"MANCHE" => array("MANCHE","50"),
"MARNE" => array("MARNE","51"),
"HAUTE-MARNE" => array("HAUTE-MARNE","52"),
"MAYENNE" => array("MAYENNE","53"),
"MEURTHE-ET-MOSELLE" => array("MEURTHE-ET-MOSELLE","54"),
"MEUSE" => array("MEUSE","55"),
"MORBIHAN" => array("MORBIHAN","56"),
"MOSELLE" => array("MOSELLE","57"),
"NIEVRE" => array("NIEVRE","58"),
"NORD" => array("NORD","59"),
"OISE" => array("OISE","60"),
"ORNE" => array("ORNE","61"),
"PAS-DE-CALAIS" => array("PAS-DE-CALAIS","62"),
"SOMME" => array("SOMME","80"),
"PUY-DE-DOME" => array("PUY-DE-DOME","63"),
"PYRENEES-ATLANTIQUES" => array("PYRENEES-ATLANTIQUES","64"),
"HAUTES-PYRENEES" => array("HAUTES-PYRENEES","65"),
"PYRENEES-ORIENTALES" => array("PYRENEES-ORIENTALES","66"),
"BAS-RHIN" => array("BAS-RHIN","67"),
"HAUT-RHIN" => array("HAUT-RHIN","68"),
"HAUTE-SAONE" => array("HAUTE-SAONE","70"),
"SARTHE" => array("SARTHE","72"),
"SAVOIE" => array("SAVOIE","73"),
"PARIS" => array("PARIS","75"),
"SEINE-MARITIME" => array("SEINE-MARITIME","76"),
"SEINE-ET-MARNE" => array("SEINE-ET-MARNE","77"),
"YVELINES" => array("YVELINES","78"),
"DEUX-SEVRES" => array("DEUX-SEVRES","79"),
"TARN" => array("TARN","81"),
"TARN-ET-GARONNE" => array("TARN-ET-GARONNE","82"),
"VAUCLUSE" => array("VAUCLUSE","84"),
"VENDEE" => array("VENDEE","85"),
"HAUTE-VIENNE" => array("HAUTE-VIENNE","87"),
"VOSGES" => array("VOSGES","88"),
"YONNE" => array("YONNE","89"),
"TERRITOIRE DE BELFORT" => array("TERRITOIRE DE BELFORT","90"),
"ESSONNE" => array("ESSONNE","91"),
"HAUTS-DE-SEINE" => array("HAUTS-DE-SEINE","92"),
"SEINE-SAINT-DENIS" => array("SEINE-SAINT-DENIS","93"),
"VAL-DE-MARNE" => array("VAL-DE-MARNE","94"),
"VAL-D'OISE" => array("VAL-D'OISE","95"),
"GUADELOUPE" => array("GUADELOUPE","971"),
"MARTINIQUE" => array("MARTINIQUE","972"),
"GUYANE" => array("GUYANE","973"),
"REUNION" => array("REUNION","974"),
"MAYOTTE" => array("MAYOTTE" ,"976"),
"NOUVELLE-CALEDONIE" => array("NOUVELLE-CALEDONIE" ,"988"),
"POLYNESIE" => array("POLYNESIE" ,"987","986"),
//BEL
"Brussel-Hoofdstad" => array("Brussel-Hoofdstad","21*BE"),
"Leuven" => array("Leuven","24*BE"),
"Antwerpen" => array("Antwerpen","11*BE"),
"Eeklo" => array("Eeklo","43*BE"),
"Verviers" => array("Verviers","63*BE"),
"Namur" => array("Namur","92*BE"),
"Tournai" => array("Tournai","56*BE"),
"Mechelen" => array("Mechelen","12*BE"),
"Halle-Vilvoorde" => array("Halle-Vilvoorde","35*BE"),
"Nivelles 1" => array("Nivelles 1","25*BE"),
"Aalst" => array("Aalst","41*BE"),
"Kortrijk" => array("Kortrijk","34*BE"),
"Mons" => array("Mons","53*BE"),
"Ath" => array("Ath","51*BE"),
"Turnhout" => array("Turnhout","13*BE"),
"Bastogne" => array("Bastogne","82*BE"),
"Charleroi" => array("Charleroi","52*BE"),
"Virton" => array("Virton","85*BE"),
"Dinant" => array("Dinant","91*BE"),
"Liège" => array("Liège","62*BE"),
"Marche-en-Famenne" => array("Marche-en-Famenne","83*BE"),
"Neufchâteau" => array("Neufchâteau","84*BE"),
"Huy" => array("Huy","61*BE"),
"Veurne" => array("Veurne","38*BE"),
"Gent" => array("Gent","44*BE"),
"Hasselt" => array("Hasselt","71*BE"),
"Arlon" => array("Arlon","81*BE"),
"Sint-Niklaas" => array("Sint-Niklaas","46*BE"),
"Mouscron" => array("Mouscron","54*BE"),
"Soignies" => array("Soignies","55*BE"),
"Tongeren" => array("Tongeren","73*BE"),
"Maaseik" => array("Maaseik","72*BE"),
"Ieper" => array("Ieper","33*BE"),
"Brugge" => array("Brugge","31*BE"),
"Tielt" => array("Tielt","37*BE"),
"Oudenaarde" => array("Oudenaarde","45*BE"),
"Waremme" => array("Waremme","64*BE"),
"Roeselare" => array("Roeselare","36*BE"),
"Dendermonde" => array("Dendermonde","42*BE"),
"Diksmuide" => array("Diksmuide","32*BE"),
"Phillippeville" => array("Phillippeville","93*BE"), 
);

 public static $region = array(
"Auvergne-Rhône-Alpes" => array("Auvergne-Rhône-Alpes","84"),
"Nord-Pas-de-Calais-Picardie" => array("Nord-Pas-de-Calais-Picardie","32"),
"Bourgogne-Franche-Comté" => array("Bourgogne-Franche-Comté","27"),
"Provence-Alpes-Côte d'Azur" => array("Provence-Alpes-Côte d'Azur","93"),
"Alsace-Champagne-Ardenne-Lorraine" => array("Alsace-Champagne-Ardenne-Lorraine","44"),
"Languedoc-Roussillon-Midi-Pyrénées" => array("Languedoc-Roussillon-Midi-Pyrénées","76"),
"Normandie" => array("Normandie","28"),
"Aquitaine-Limousin-Poitou-Charentes" => array("Aquitaine-Limousin-Poitou-Charentes","75"),
"Centre-Val de Loire" => array("Centre-Val de Loire","24"),
"Corse" => array("Corse","94"),
"Bretagne" => array("Bretagne","53"),
"Pays de la Loire" => array("Pays de la Loire","52"),
"Île-de-France" => array("Île-de-France","11"),
"Guadeloupe" => array("Guadeloupe","01"),
"Martinique" => array("Martinique","02"),
"Guyane" => array("Guyane","03"),
"La Réunion" => array("La Réunion","04"),
"POLYNESIE" => array("POLYNESIE","07"),
"NOUVELLE-CALEDONIE" => array("NOUVELLE-CALEDONIE","08"),
"Mayotte" => array("Mayotte","06"),

//BEL
"Région Bruxelles-Capitale" => array("Région Bruxelles-Capitale","1B*BE"),
"Vlaams-Brabant" => array("Vlaams-Brabant","4F*BE"),
"Antwerpen" => array("Antwerpen","1F*BE"),
"Oost-Vlaanderen" => array("Oost-Vlaanderen","3F*BE"),
"Liège" => array("Liège","3W*BE"),
"Namur" => array("Namur","5W*BE"),
"Hainaut" => array("Hainaut","2W*BE"),
"Brabant Wallon" => array("Brabant Wallon","1W*BE"),
"West-Vlaanderen" => array("West-Vlaanderen","5F*BE"),
"Luxembourg" => array("Luxembourg","4W*BE"),
"Limburg" => array("Limburg","2F*BE"), 

/*"RHONE-ALPES" => array("RHONE-ALPES","82"),
"PICARDIE" => array("PICARDIE","22"),
"FRANCHE-COMTE" => array("FRANCHE-COMTE","43"),
"AUVERGNE" => array("AUVERGNE","83"),
"PROVENCE-ALPES-COTE D'AZUR" => array("PROVENCE-ALPES-COTE D'AZUR","93"),
"CHAMPAGNE-ARDENNE" => array("CHAMPAGNE-ARDENNE","21"),
"MIDI-PYRENEES" => array("MIDI-PYRENEES","73"),
"LANGUEDOC-ROUSSILLON" => array("LANGUEDOC-ROUSSILLON","91"),
"BASSE-NORMANDIE" => array("BASSE-NORMANDIE","25"),
"POITOU-CHARENTES" => array("POITOU-CHARENTES","54"),
"CENTRE" => array("CENTRE","24"),
"LIMOUSIN" => array("LIMOUSIN","74"),
"CORSE" => array("CORSE","94"),
"BOURGOGNE" => array("BOURGOGNE","26"),
"BRETAGNE" => array("BRETAGNE","53"),
"AQUITAINE" => array("AQUITAINE","72"),
"HAUTE-NORMANDIE" => array("HAUTE-NORMANDIE","23"),
"PAYS DE LA LOIRE" => array("PAYS DE LA LOIRE","52"),
"LORRAINE" => array("LORRAINE","41"),
"NORD-PAS-DE-CALAIS" => array("NORD-PAS-DE-CALAIS","31"),
"ALSACE" => array("ALSACE","42"),
"ILE-DE-FRANCE" => array("ILE-DE-FRANCE","11"),
"GUADELOUPE" => array("GUADELOUPE","01"),
"MARTINIQUE" => array("MARTINIQUE","02"),
"GUYANE" => array("GUYANE","03"),
"REUNION" => array("REUNION","04"),
"MAYOTTE" => array("MAYOTTE","06"),
"NOUVELLE-CALEDONIE" => array("NOUVELLE-CALEDONIE" ,"08"),
"POLYNESIE" => array("POLYNESIE" ,"07"),*/
  );




/* Code Postal to Insee 
 * le code insee est connecté à une commune
 * le code postale est connecté à une ville
 * */ 
  public static $codePostalToCodeInsee = array( '974'=>array(
                                            '97400'=> '97411',
                                            '97410'=> '97416',
                                            '97411'=> '97415',
                                            '97412'=> '97402',
                                            '97413'=> '97424',
                                            '97414'=> '97403',
                                            '97416'=> '97413',
                                            '97417'=> '97411',
                                            '97418'=> '97422',
                                            '97419'=> '97408',
                                            '97420'=> '97407',
                                            '97421'=> '97414',
                                            '97422'=> '97415',
                                            '97423'=> '97415',
                                            '97424'=> '97413',
                                            '97425'=> '97401',
                                            '97426'=> '97423',
                                            '97427'=> '97404',
                                            '97429'=> '97405',
                                            '97430'=> '97422',
                                            '97431'=> '97406',
                                            '97432'=> '97416',
                                            '97433'=> '97421',
                                            '97434'=> '97423',
                                            '97434'=> '97415',
                                            '97435'=> '97415',
                                            '97436'=> '97413',
                                            '97437'=> '97410',
                                            '97438'=> '97418',
                                            '97439'=> '97419',
                                            '97440'=> '97409',
                                            '97441'=> '97420',
                                            '97442'=> '97417',
                                            '97450'=> '97414',
                                            '97460'=> '97415',
                                            '97470'=> '97410',
                                            '97480'=> '97412',
                                            '97490'=> '97411'
  
                                            )
   
                                    );

    public static function getCountriesList() {
        $countries = array();
        foreach (OpenData::$phCountries as $key => $value) {
            array_push($countries, array("value" => $key, "text" => $value));
        }
        return $countries;
    }
                                   
}