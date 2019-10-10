<?php
$skaicius1 = 4;
$skaicius2 = 8;

$suma = $skaicius1 + $skaicius2;
$sumasprendimas = "$skaicius1 + $skaicius2 = $suma ";
$dalyba = $skaicius1 / $skaicius2;
$dalybasprendimas = "$skaicius1 / $skaicius2 = $dalyba";
$saknis = sqrt ( $skaicius2 );
$saknissprendimas = "$skaicius2 = $saknis";
$laipsnis = $skaicius1 ** $skaicius2;
$laipsnissprendimas = "$skaicius1 ^ $skaicius2 = $laipsnis";
$spalva1 = rand(0, 255) . ", " .rand(0, 255) . ", " .rand(0,255);
$spalva2 = rand(0, 255) . ", " .rand(0, 255) . ", " .rand(0,255);
$spalva3 = rand(0, 255) . ", " .rand(0, 255) . ", " .rand(0,255);
$spalva4 = rand(0, 255) . ", " .rand(0, 255) . ", " .rand(0,255);



$auto = [
  "Audi" =>[
    [
    "model" => "A1",
    "fuel" => "Petrol",
  ],
  [
    "model" => "Q3",
    "fuel" => "Diesel",
  ],
],
"BMW" =>[
  [
  "model" => "530",
  "fuel" => "Petrol",
],
[
  "model" => "420",
  "fuel" => "Diesel",
],
],
];

foreach ($auto["Audi"] as $brand => $model) {
  print $brand;
  // code...
}

$mokyklos = ["Mokykla1", "Mokykla2", "Mokykla3", "Mokykla4", "Mokykla5",];
print $mokyklos[2];


$mokymoIstaigos = [
  "kolegijos" => [
    [
    "name" => "Kolegija1",
    "address" => "Adresas1",
  ],
  [
  "name" => "Kolegija2",
  "address" => "Adresas2",
],
  ],
  "universitetai" => [
    [
    "name" => "Universitetas1",
    "address" => "Adresas1",
  ],
  [
  "name" => "Universitetas2",
  "address" => "Adresas2",
],
  ],

];
foreach ($mokymoIstaigos["kolegijos"] as $key => $value) {
  print $value["name"];
}


$amzius = 36;
if ($amzius >= 16 && $amzius <= 25){
    $tekstas = "Tavo amzius $amzius. Minimalus laikas 13min 27s";
}elseif ($amzius >= 26 && $amzius <= 32){
    $tekstas = "Tavo amzius $amzius. Minimalus laikas 15min 10s";
}else{
    $tekstas = "Tavo amzius $amzius. Minimalus laikas 17min 00s";
}

$alkoholiai = [
  "Tekila" => [
    [
    "pavadinimas" => "Patron",
    "turis" => 0.5,
    "kaina" => 34.99,
    "kilmes salis" => "Meksika",
    "laipsniai" => 38,
    "IMG" => "https://www.enotekapremier.rs/media/catalog/product/cache/3/thumbnail/600x600/9df78eab33525d08d6e5fb8d27136e95/p/a/patron-silver.png",
  ],
  [
  "pavadinimas" => "Jose Cuervo",
  "turis" => 0.7,
  "kaina" => 39.99,
  "kilmes salis" => "Meksika",
  "laipsniai" => 38,
  "IMG" => "https://manila-wine.com/media/catalog/product/cache/1/image/700x700/9df78eab33525d08d6e5fb8d27136e95/j/o/jose-cuervo-gold-1.75l.jpg",
],
[
"pavadinimas" => "Kah Agave",
"turis" => 1,
"kaina" => 49.99,
"kilmes salis" => "Meksika",
"laipsniai" => 38,
"IMG" => "https://www.buteliukas.lt/899-large_default/tekila-kah-agave-tequila-blanco-07-l.jpgl",
],
  ],

  "Degtine" => [
    [
    "pavadinimas" => "Beluga",
    "turis" => 1.5,
    "kaina" => 79.99,
    "kilmes salis" => "Rusija",
    "laipsniai" => 40,
    "IMG" => "https://www.vynoteka.lt/uploads/photos/883c07159244affbe2e12cbb3c6ad9a55d14c8be.jpeg",
  ],
  [
  "pavadinimas" => "Belveder",
  "turis" => 0.7,
  "kaina" => 59.99,
  "kilmes salis" => "Lenkija",
  "laipsniai" => 40,
  "IMG" => "https://www.vynoguru.lt/media/catalog/product/cache/2/image/800x600/9df78eab33525d08d6e5fb8d27136e95/p/o/polmos_zyrardow_moet-hennessy_belvedere_vodka__58000_i0.jpg",
  ],
  [
  "pavadinimas" => "Absolut",
  "turis" => 1,
  "kaina" => 49.99,
  "kilmes salis" => "Svedija",
  "laipsniai" => 40,
  "IMG" => "https://www.barbora.lt/api/Images/GetInventoryImage?id=12686254-5127-4e87-94ae-fe7be9b12885",
  ],
  ],
  "Alus" => [
    [ "Sviesus" => [
        "pavadinimas" => "Leffe",
    "turis" => 0.5,
    "kaina" => 4.99,
    "kilmes salis" => "Belgija",
    "laipsniai" => 5.6,
    "IMG" => "https://cdn.webshopapp.com/shops/65337/files/89670620/mc-fles-leffe-blond.jpg",
  ],
],
  [ "Tamsus" =>
  [
    "pavadinimas" => "Kentucky Burbon",
    "turis" => 1,
    "kaina" => 4.99,
    "kilmes salis" => "JAV",
    "laipsniai" => 4,8,
    "IMG" => "https://ages.alko.fi/images/cs_srgb,f_auto,t_large/cdn/778086/kalnapilis-original.jpg",
],
],

  ],
  "Sidras" => [
    [
    "pavadinimas" => "Somersby",
    "turis" => 0.5,
    "kaina" => 3.99,
    "kilmes salis" => "JAV",
    "laipsniai" => 3.8,
    "IMG" => "data:image/jpeg;base64,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",
  ],
  [
  "pavadinimas" => "Cornish",
  "turis" => 0.7,
  "kaina" => 9.99,
  "kilmes salis" => "JAV",
  "laipsniai" => 4.8,
  "IMG" => "https://www.cornishorchards.co.uk/images/products/large/81.jpg",
],

  ],
  "Vynas" => [
    [
    "pavadinimas" => "Amarone",
    "turis" => 0.75,
    "kaina" => 34.99,
    "kilmes salis" => "Italija",
    "laipsniai" => 17,
    "IMG" => "https://www.wineconnection.com.sg/media/catalog/product/cache/5/thumbnail/530x650/9df78eab33525d08d6e5fb8d27136e95/r/e/red-wine-biscardo-amarone-storica.jpg",
  ],
  [
  "pavadinimas" => "Primitivo",
  "turis" => 0.7,
  "kaina" => 39.99,
  "kilmes salis" => "Italija",
  "laipsniai" => 18,
  "IMG" => "https://cdn.webshopapp.com/shops/73649/files/214974848/mabis-srl-italien-2017-primitivo-salento-igt-casat.jpg",
],
  ],
]

$jayParsedAry = [
        [
    	         "name" => "Belarus",
	         "dial_code" => "+375",
         "code" => "BY"
     ],
     [
         "name" => "Belgium",
         "dial_code" => "+32",
         "code" => "BE"
     ],
     [
         "name" => "Belize",
         "dial_code" => "+501",
         "code" => "BZ"
     ],
     [
         "name" => "Benin",
         "dial_code" => "+229",
         "code" => "BJ"
     ],
     [
         "name" => "Bermuda",
         "dial_code" => "+1 441",
         "code" => "BM"
     ],
     [
         "name" => "Bhutan",
         "dial_code" => "+975",
         "code" => "BT"
     ],
     [
         "name" => "Bosnia and Herzegovina",
         "dial_code" => "+387",
         "code" => "BA"
     ],
     [
         "name" => "Botswana",
         "dial_code" => "+267",
         "code" => "BW"
     ],
     [
         "name" => "Brazil",
         "dial_code" => "+55",
         "code" => "BR"
     ],
     [
         "name" => "British Indian Ocean Territory",
         "dial_code" => "+246",
         "code" => "IO"
     ],
     [
         "name" => "Bulgaria",
         "dial_code" => "+359",
         "code" => "BG"
     ],
     [
         "name" => "Burkina Faso",
         "dial_code" => "+226",
         "code" => "BF"
     ],
     [
         "name" => "Burundi",
         "dial_code" => "+257",
         "code" => "BI"
     ],
     [
         "name" => "Cambodia",
         "dial_code" => "+855",
         "code" => "KH"
     ],
     [
         "name" => "Cameroon",
         "dial_code" => "+237",
         "code" => "CM"
     ],
     [
         "name" => "Canada",
         "dial_code" => "+1",
         "code" => "CA"
     ],
     [
         "name" => "Cape Verde",
         "dial_code" => "+238",
         "code" => "CV"
     ],
     [
         "name" => "Cayman Islands",
         "dial_code" => "+ 345",
         "code" => "KY"
     ],
     [
         "name" => "Central African Republic",
         "dial_code" => "+236",
         "code" => "CF"
     ],
     [
         "name" => "Chad",
         "dial_code" => "+235",
         "code" => "TD"
     ],
     [
         "name" => "Chile",
         "dial_code" => "+56",
         "code" => "CL"
     ],
     [
         "name" => "China",
         "dial_code" => "+86",
         "code" => "CN"
     ],
     [
         "name" => "Christmas Island",
         "dial_code" => "+61",
         "code" => "CX"
     ],
     [
         "name" => "Colombia",
         "dial_code" => "+57",
         "code" => "CO"
     ],
     [
         "name" => "Comoros",
         "dial_code" => "+269",
         "code" => "KM"
     ],
     [
         "name" => "Congo",
         "dial_code" => "+242",
         "code" => "CG"
     ],
     [
         "name" => "Cook Islands",
         "dial_code" => "+682",
         "code" => "CK"
     ],
     [
         "name" => "Costa Rica",
         "dial_code" => "+506",
         "code" => "CR"
     ],
     [
         "name" => "Croatia",
         "dial_code" => "+385",
         "code" => "HR"
     ],
     [
         "name" => "Cuba",
         "dial_code" => "+53",
         "code" => "CU"
     ],
     [
         "name" => "Cyprus",
         "dial_code" => "+537",
         "code" => "CY"
     ],
     [
         "name" => "Czech Republic",
         "dial_code" => "+420",
         "code" => "CZ"
     ],
     [
         "name" => "Denmark",
         "dial_code" => "+45",
         "code" => "DK"
     ],
     [
         "name" => "Djibouti",
         "dial_code" => "+253",
         "code" => "DJ"
     ],
     [
         "name" => "Dominica",
         "dial_code" => "+1 767",
         "code" => "DM"
     ],
     [
         "name" => "Dominican Republic",
         "dial_code" => "+1 849",
         "code" => "DO"
     ],
     [
         "name" => "Ecuador",
         "dial_code" => "+593",
         "code" => "EC"
     ],
     [
         "name" => "Egypt",
         "dial_code" => "+20",
         "code" => "EG"
     ],
     [
         "name" => "El Salvador",
         "dial_code" => "+503",
         "code" => "SV"
     ],
     [
         "name" => "Equatorial Guinea",
         "dial_code" => "+240",
         "code" => "GQ"
     ],
     [
         "name" => "Eritrea",
         "dial_code" => "+291",
         "code" => "ER"
     ],
     [
         "name" => "Estonia",
         "dial_code" => "+372",
         "code" => "EE"
     ],
     [
         "name" => "Ethiopia",
         "dial_code" => "+251",
         "code" => "ET"
     ],
     [
         "name" => "Faroe Islands",
         "dial_code" => "+298",
         "code" => "FO"
     ],
     [
         "name" => "Fiji",
         "dial_code" => "+679",
         "code" => "FJ"
     ],
     [
         "name" => "Finland",
         "dial_code" => "+358",
         "code" => "FI"
     ],
     [
         "name" => "France",
         "dial_code" => "+33",
         "code" => "FR"
     ],
     [
         "name" => "French Guiana",
         "dial_code" => "+594",
         "code" => "GF"
     ],
     [
         "name" => "French Polynesia",
         "dial_code" => "+689",
         "code" => "PF"
     ],
     [
         "name" => "Gabon",
         "dial_code" => "+241",
         "code" => "GA"
     ],
     [
         "name" => "Gambia",
         "dial_code" => "+220",
         "code" => "GM"
     ],
     [
         "name" => "Georgia",
         "dial_code" => "+995",
         "code" => "GE"
     ],
     [
         "name" => "Germany",
         "dial_code" => "+49",
         "code" => "DE"
     ],
     [
         "name" => "Ghana",
         "dial_code" => "+233",
         "code" => "GH"
     ],
     [
         "name" => "Gibraltar",
         "dial_code" => "+350",
         "code" => "GI"
     ],
     [
         "name" => "Greece",
         "dial_code" => "+30",
         "code" => "GR"
     ],
     [
         "name" => "Greenland",
         "dial_code" => "+299",
         "code" => "GL"
     ],
     [
         "name" => "Grenada",
         "dial_code" => "+1 473",
         "code" => "GD"
     ],
     [
         "name" => "Guadeloupe",
         "dial_code" => "+590",
         "code" => "GP"
     ],
     [
         "name" => "Guam",
         "dial_code" => "+1 671",
         "code" => "GU"
     ],
     [
         "name" => "Guatemala",
         "dial_code" => "+502",
         "code" => "GT"
     ],
     [
         "name" => "Guinea",
         "dial_code" => "+224",
         "code" => "GN"
     ],
     [
         "name" => "Guinea-Bissau",
         "dial_code" => "+245",
         "code" => "GW"
     ],
     [
         "name" => "Guyana",
         "dial_code" => "+595",
         "code" => "GY"
     ],
     [
         "name" => "Haiti",
         "dial_code" => "+509",
         "code" => "HT"
     ],
     [
         "name" => "Honduras",
         "dial_code" => "+504",
         "code" => "HN"
     ],
     [
         "name" => "Hungary",
         "dial_code" => "+36",
         "code" => "HU"
     ],
     [
         "name" => "Iceland",
         "dial_code" => "+354",
         "code" => "IS"
     ],
     [
         "name" => "India",
         "dial_code" => "+91",
         "code" => "IN"
     ],
     [
         "name" => "Indonesia",
         "dial_code" => "+62",
         "code" => "ID"
     ],
     [
         "name" => "Iraq",
         "dial_code" => "+964",
         "code" => "IQ"
     ],
     [
         "name" => "Ireland",
         "dial_code" => "+353",
         "code" => "IE"
     ],
     [
         "name" => "Israel",
         "dial_code" => "+972",
         "code" => "IL"
     ],
     [
         "name" => "Italy",
         "dial_code" => "+39",
         "code" => "IT"
     ],
     [
         "name" => "Jamaica",
         "dial_code" => "+1 876",
         "code" => "JM"
     ],
     [
         "name" => "Japan",
         "dial_code" => "+81",
         "code" => "JP"
     ],
     [
         "name" => "Jordan",
         "dial_code" => "+962",
         "code" => "JO"
     ],
     [
         "name" => "Kazakhstan",
         "dial_code" => "+7 7",
         "code" => "KZ"
     ],
     [
         "name" => "Kenya",
         "dial_code" => "+254",
         "code" => "KE"
     ],
     [
         "name" => "Kiribati",
         "dial_code" => "+686",
         "code" => "KI"
     ],
     [
         "name" => "Kuwait",
         "dial_code" => "+965",
         "code" => "KW"
     ],
     [
         "name" => "Kyrgyzstan",
         "dial_code" => "+996",
         "code" => "KG"
     ],
     [
         "name" => "Latvia",
         "dial_code" => "+371",
         "code" => "LV"
     ],
     [
         "name" => "Lebanon",
         "dial_code" => "+961",
         "code" => "LB"
     ],
     [
         "name" => "Lesotho",
         "dial_code" => "+266",
         "code" => "LS"
     ],
     [
         "name" => "Liberia",
         "dial_code" => "+231",
         "code" => "LR"
     ],
     [
         "name" => "Liechtenstein",
         "dial_code" => "+423",
         "code" => "LI"
     ],
     [
         "name" => "Lithuania",
         "dial_code" => "+370",
         "code" => "LT"
     ],
     [
         "name" => "Luxembourg",
         "dial_code" => "+352",
         "code" => "LU"
     ],
     [
         "name" => "Madagascar",
         "dial_code" => "+261",
         "code" => "MG"
     ],
     [
         "name" => "Malawi",
         "dial_code" => "+265",
         "code" => "MW"
     ],
     [
         "name" => "Malaysia",
         "dial_code" => "+60",
         "code" => "MY"
     ],
     [
         "name" => "Maldives",
         "dial_code" => "+960",
         "code" => "MV"
     ],
     [
         "name" => "Mali",
         "dial_code" => "+223",
         "code" => "ML"
     ],
     [
         "name" => "Malta",
         "dial_code" => "+356",
         "code" => "MT"
     ],
     [
         "name" => "Marshall Islands",
         "dial_code" => "+692",
         "code" => "MH"
     ],
     [
         "name" => "Martinique",
         "dial_code" => "+596",
         "code" => "MQ"
     ],
     [
         "name" => "Mauritania",
         "dial_code" => "+222",
         "code" => "MR"
     ],
     [
         "name" => "Mauritius",
         "dial_code" => "+230",
         "code" => "MU"
     ],
     [
         "name" => "Mayotte",
         "dial_code" => "+262",
         "code" => "YT"
     ],
     [
         "name" => "Mexico",
         "dial_code" => "+52",
         "code" => "MX"
     ],
     [
         "name" => "Monaco",
         "dial_code" => "+377",
         "code" => "MC"
     ],
     [
         "name" => "Mongolia",
         "dial_code" => "+976",
         "code" => "MN"
     ],
     [
         "name" => "Montenegro",
         "dial_code" => "+382",
         "code" => "ME"
     ],
     [
         "name" => "Montserrat",
         "dial_code" => "+1664",
         "code" => "MS"
     ],
     [
         "name" => "Morocco",
         "dial_code" => "+212",
         "code" => "MA"
     ],
     [
         "name" => "Myanmar",
         "dial_code" => "+95",
         "code" => "MM"
     ],
     [
         "name" => "Namibia",
         "dial_code" => "+264",
         "code" => "NA"
     ],
     [
         "name" => "Nauru",
         "dial_code" => "+674",
         "code" => "NR"
     ],
     [
         "name" => "Nepal",
         "dial_code" => "+977",
         "code" => "NP"
     ],
     [
         "name" => "Netherlands",
         "dial_code" => "+31",
         "code" => "NL"
     ],
     [
         "name" => "Netherlands Antilles",
         "dial_code" => "+599",
         "code" => "AN"
     ],
     [
         "name" => "New Caledonia",
         "dial_code" => "+687",
         "code" => "NC"
     ],
     [
         "name" => "New Zealand",
         "dial_code" => "+64",
         "code" => "NZ"
     ],
     [
         "name" => "Nicaragua",
         "dial_code" => "+505",
         "code" => "NI"
     ],
     [
         "name" => "Niger",
         "dial_code" => "+227",
         "code" => "NE"
     ],
     [
         "name" => "Nigeria",
         "dial_code" => "+234",
         "code" => "NG"
     ],
     [
         "name" => "Niue",
         "dial_code" => "+683",
         "code" => "NU"
     ],
     [
         "name" => "Norfolk Island",
         "dial_code" => "+672",
         "code" => "NF"
     ],
     [
         "name" => "Northern Mariana Islands",
         "dial_code" => "+1 670",
         "code" => "MP"
     ],
     [
         "name" => "Norway",
         "dial_code" => "+47",
         "code" => "NO"
     ],
     [
         "name" => "Oman",
         "dial_code" => "+968",
         "code" => "OM"
     ],
     [
         "name" => "Pakistan",
         "dial_code" => "+92",
         "code" => "PK"
     ],
     [
         "name" => "Palau",
         "dial_code" => "+680",
         "code" => "PW"
     ],
     [
         "name" => "Panama",
         "dial_code" => "+507",
         "code" => "PA"
     ],
     [
         "name" => "Papua New Guinea",
         "dial_code" => "+675",
         "code" => "PG"
     ],
     [
         "name" => "Paraguay",
         "dial_code" => "+595",
         "code" => "PY"
     ],
     [
         "name" => "Peru",
         "dial_code" => "+51",
         "code" => "PE"
     ],
     [
         "name" => "Philippines",
         "dial_code" => "+63",
         "code" => "PH"
     ],
     [
         "name" => "Poland",
         "dial_code" => "+48",
         "code" => "PL"
     ],
     [
         "name" => "Portugal",
         "dial_code" => "+351",
         "code" => "PT"
     ],
     [
         "name" => "Puerto Rico",
         "dial_code" => "+1 939",
         "code" => "PR"
     ],
     [
         "name" => "Qatar",
         "dial_code" => "+974",
         "code" => "QA"
     ],
     [
         "name" => "Romania",
         "dial_code" => "+40",
         "code" => "RO"
     ],
     [
         "name" => "Rwanda",
         "dial_code" => "+250",
         "code" => "RW"
     ],
     [
         "name" => "Samoa",
         "dial_code" => "+685",
         "code" => "WS"
     ],
     [
         "name" => "San Marino",
         "dial_code" => "+378",
         "code" => "SM"
     ],
     [
         "name" => "Saudi Arabia",
         "dial_code" => "+966",
         "code" => "SA"
     ],
     [
         "name" => "Senegal",
         "dial_code" => "+221",
         "code" => "SN"
     ],
     [
         "name" => "Serbia",
         "dial_code" => "+381",
         "code" => "RS"
     ],
     [
         "name" => "Seychelles",
         "dial_code" => "+248",
         "code" => "SC"
     ],
     [
         "name" => "Sierra Leone",
         "dial_code" => "+232",
         "code" => "SL"
     ],
     [
         "name" => "Singapore",
         "dial_code" => "+65",
         "code" => "SG"
     ],
     [
         "name" => "Slovakia",
         "dial_code" => "+421",
         "code" => "SK"
     ],
     [
         "name" => "Slovenia",
         "dial_code" => "+386",
         "code" => "SI"
     ],
     [
         "name" => "Solomon Islands",
         "dial_code" => "+677",
         "code" => "SB"
     ],
     [
         "name" => "South Africa",
         "dial_code" => "+27",
         "code" => "ZA"
     ],
     [
         "name" => "South Georgia and the South Sandwich Islands",
         "dial_code" => "+500",
         "code" => "GS"
     ],
     [
         "name" => "Spain",
         "dial_code" => "+34",
         "code" => "ES"
     ],
     [
         "name" => "Sri Lanka",
         "dial_code" => "+94",
         "code" => "LK"
     ],
     [
         "name" => "Sudan",
         "dial_code" => "+249",
         "code" => "SD"
     ],
     [
         "name" => "Suriname",
         "dial_code" => "+597",
         "code" => "SR"
     ],
     [
         "name" => "Swaziland",
         "dial_code" => "+268",
         "code" => "SZ"
     ],
     [
         "name" => "Sweden",
         "dial_code" => "+46",
         "code" => "SE"
     ],
     [
         "name" => "Switzerland",
         "dial_code" => "+41",
         "code" => "CH"
     ],
     [
         "name" => "Tajikistan",
         "dial_code" => "+992",
         "code" => "TJ"
     ],
     [
         "name" => "Thailand",
         "dial_code" => "+66",
         "code" => "TH"
     ],
     [
         "name" => "Togo",
         "dial_code" => "+228",
         "code" => "TG"
     ],
     [
         "name" => "Tokelau",
         "dial_code" => "+690",
         "code" => "TK"
     ],
     [
         "name" => "Tonga",
         "dial_code" => "+676",
         "code" => "TO"
     ],
     [
         "name" => "Trinidad and Tobago",
         "dial_code" => "+1 868",
         "code" => "TT"
     ],
     [
         "name" => "Tunisia",
         "dial_code" => "+216",
         "code" => "TN"
     ],
     [
         "name" => "Turkey",
         "dial_code" => "+90",
         "code" => "TR"
     ],
     [
         "name" => "Turkmenistan",
         "dial_code" => "+993",
         "code" => "TM"
     ],
     [
         "name" => "Turks and Caicos Islands",
         "dial_code" => "+1 649",
         "code" => "TC"
     ],
     [
         "name" => "Tuvalu",
         "dial_code" => "+688",
         "code" => "TV"
     ],
     [
         "name" => "Uganda",
         "dial_code" => "+256",
         "code" => "UG"
     ],
     [
         "name" => "Ukraine",
         "dial_code" => "+380",
         "code" => "UA"
     ],
     [
         "name" => "United Arab Emirates",
         "dial_code" => "+971",
         "code" => "AE"
     ],
     [
         "name" => "United Kingdom",
         "dial_code" => "+44",
         "code" => "GB"
     ],
     [
         "name" => "United States",
         "dial_code" => "+1",
         "code" => "US"
     ],
     [
         "name" => "Uruguay",
         "dial_code" => "+598",
         "code" => "UY"
     ],
     [
         "name" => "Uzbekistan",
         "dial_code" => "+998",
         "code" => "UZ"
     ],
     [
         "name" => "Vanuatu",
         "dial_code" => "+678",
         "code" => "VU"
     ],
     [
         "name" => "Wallis and Futuna",
         "dial_code" => "+681",
         "code" => "WF"
     ],
     [
         "name" => "Yemen",
         "dial_code" => "+967",
         "code" => "YE"
     ],
     [
         "name" => "Zambia",
         "dial_code" => "+260",
         "code" => "ZM"
     ],
     [
         "name" => "Zimbabwe",
         "dial_code" => "+263",
         "code" => "ZW"
     ],
     [
         "name" => "land Islands",
         "dial_code" => "",
         "code" => "AX"
     ],
     [
         "name" => "Antarctica",
         "dial_code" => null,
         "code" => "AQ"
     ],
     [
         "name" => "Bolivia, Plurinational State of",
         "dial_code" => "+591",
         "code" => "BO"
     ],
     [
         "name" => "Brunei Darussalam",
         "dial_code" => "+673",
         "code" => "BN"
     ],
     [
         "name" => "Cocos (Keeling) Islands",
         "dial_code" => "+61",
         "code" => "CC"
     ],
     [
         "name" => "Congo, The Democratic Republic of the",
         "dial_code" => "+243",
         "code" => "CD"
     ],
     [
         "name" => "Cote d'Ivoire",
         "dial_code" => "+225",
         "code" => "CI"
     ],
     [
         "name" => "Falkland Islands (Malvinas)",
         "dial_code" => "+500",
         "code" => "FK"
     ],
     [
         "name" => "Guernsey",
         "dial_code" => "+44",
         "code" => "GG"
     ],
     [
         "name" => "Holy See (Vatican City State)",
         "dial_code" => "+379",
         "code" => "VA"
     ],
     [
         "name" => "Hong Kong",
         "dial_code" => "+852",
         "code" => "HK"
     ],
     [
         "name" => "Iran, Islamic Republic of",
         "dial_code" => "+98",
         "code" => "IR"
     ],
     [
         "name" => "Isle of Man",
         "dial_code" => "+44",
         "code" => "IM"
     ],
     [
         "name" => "Jersey",
         "dial_code" => "+44",
         "code" => "JE"
     ],
     [
         "name" => "Korea, Democratic People's Republic of",
         "dial_code" => "+850",
         "code" => "KP"
     ],
     [
         "name" => "Korea, Republic of",
         "dial_code" => "+82",
         "code" => "KR"
     ],
     [
         "name" => "Lao People's Democratic Republic",
         "dial_code" => "+856",
         "code" => "LA"
     ],
     [
         "name" => "Libyan Arab Jamahiriya",
         "dial_code" => "+218",
         "code" => "LY"
     ],
     [
         "name" => "Macao",
         "dial_code" => "+853",
         "code" => "MO"
     ],
     [
         "name" => "Macedonia, The Former Yugoslav Republic of",
         "dial_code" => "+389",
         "code" => "MK"
     ],
     [
         "name" => "Micronesia, Federated States of",
         "dial_code" => "+691",
         "code" => "FM"
     ],
     [
         "name" => "Moldova, Republic of",
         "dial_code" => "+373",
         "code" => "MD"
     ],
     [
         "name" => "Mozambique",
         "dial_code" => "+258",
         "code" => "MZ"
     ],
     [
         "name" => "Palestinian Territory, Occupied",
         "dial_code" => "+970",
         "code" => "PS"
     ],
     [
         "name" => "Pitcairn",
         "dial_code" => "+872",
         "code" => "PN"
     ],
     [
         "name" => "Réunion",
         "dial_code" => "+262",
         "code" => "RE"
     ],
     [
         "name" => "Russia",
         "dial_code" => "+7",
         "code" => "RU"
     ],
     [
         "name" => "Saint Barthélemy",
         "dial_code" => "+590",
         "code" => "BL"
     ],
     [
         "name" => "Saint Helena, Ascension and Tristan Da Cunha",
         "dial_code" => "+290",
         "code" => "SH"
     ],
     [
         "name" => "Saint Kitts and Nevis",
         "dial_code" => "+1 869",
         "code" => "KN"
     ],
     [
         "name" => "Saint Lucia",
         "dial_code" => "+1 758",
         "code" => "LC"
     ],
     [
         "name" => "Saint Martin",
         "dial_code" => "+590",
         "code" => "MF"
     ],
     [
         "name" => "Saint Pierre and Miquelon",
         "dial_code" => "+508",
         "code" => "PM"
     ],
     [
         "name" => "Saint Vincent and the Grenadines",
         "dial_code" => "+1 784",
         "code" => "VC"
     ],
     [
         "name" => "Sao Tome and Principe",
         "dial_code" => "+239",
         "code" => "ST"
     ],
     [
         "name" => "Somalia",
         "dial_code" => "+252",
         "code" => "SO"
     ],
     [
         "name" => "Svalbard and Jan Mayen",
         "dial_code" => "+47",
         "code" => "SJ"
     ],
     [
         "name" => "Syrian Arab Republic",
         "dial_code" => "+963",
         "code" => "SY"
     ],
     [
         "name" => "Taiwan, Province of China",
         "dial_code" => "+886",
         "code" => "TW"
     ],
     [
         "name" => "Tanzania, United Republic of",
         "dial_code" => "+255",
         "code" => "TZ"
     ],
     [
         "name" => "Timor-Leste",
         "dial_code" => "+670",
         "code" => "TL"
     ],
     [
         "name" => "Venezuela, Bolivarian Republic of",
         "dial_code" => "+58",
         "code" => "VE"
     ],
     [
         "name" => "Viet Nam",
         "dial_code" => "+84",
         "code" => "VN"
     ],
     [
         "name" => "Virgin Islands, British",
         "dial_code" => "+1 284",
         "code" => "VG"
     ],
     [
         "name" => "Virgin Islands, U.S.",
         "dial_code" => "+1 340",
         "code" => "VI"
     ]
 ];
 1,212  assets/JSON/phone.json
@@ -0,0 +1,1212 @@
[
  {
    "name": "Israel",
    "dial_code": "+972",
    "code": "IL"
  },
  {
    "name": "Afghanistan",
    "dial_code": "+93",
    "code": "AF"
  },
  {
    "name": "Albania",
    "dial_code": "+355",
    "code": "AL"
  },
  {
    "name": "Algeria",
    "dial_code": "+213",
    "code": "DZ"
  },
  {
    "name": "AmericanSamoa",
    "dial_code": "+1 684",
    "code": "AS"
  },
  {
    "name": "Andorra",
    "dial_code": "+376",
    "code": "AD"
  },
  {
    "name": "Angola",
    "dial_code": "+244",
    "code": "AO"
  },
  {
    "name": "Anguilla",
    "dial_code": "+1 264",
    "code": "AI"
  },
  {
    "name": "Antigua and Barbuda",
    "dial_code": "+1268",
    "code": "AG"
  },
  {
    "name": "Argentina",
    "dial_code": "+54",
    "code": "AR"
  },
  {
    "name": "Armenia",
    "dial_code": "+374",
    "code": "AM"
  },
  {
    "name": "Aruba",
    "dial_code": "+297",
    "code": "AW"
  },
  {
    "name": "Australia",
    "dial_code": "+61",
    "code": "AU"
  },
  {
    "name": "Austria",
    "dial_code": "+43",
    "code": "AT"
  },
  {
    "name": "Azerbaijan",
    "dial_code": "+994",
    "code": "AZ"
  },
  {
    "name": "Bahamas",
    "dial_code": "+1 242",
    "code": "BS"
  },
  {
    "name": "Bahrain",
    "dial_code": "+973",
    "code": "BH"
  },
  {
    "name": "Bangladesh",
    "dial_code": "+880",
    "code": "BD"
  },
  {
    "name": "Barbados",
    "dial_code": "+1 246",
    "code": "BB"
  },
  {
    "name": "Belarus",
    "dial_code": "+375",
    "code": "BY"
  },
  {
    "name": "Belgium",
    "dial_code": "+32",
    "code": "BE"
  },
  {
    "name": "Belize",
    "dial_code": "+501",
    "code": "BZ"
  },
  {
    "name": "Benin",
    "dial_code": "+229",
    "code": "BJ"
  },
  {
    "name": "Bermuda",
    "dial_code": "+1 441",
    "code": "BM"
  },
  {
    "name": "Bhutan",
    "dial_code": "+975",
    "code": "BT"
  },
  {
    "name": "Bosnia and Herzegovina",
    "dial_code": "+387",
    "code": "BA"
  },
  {
    "name": "Botswana",
    "dial_code": "+267",
    "code": "BW"
  },
  {
    "name": "Brazil",
    "dial_code": "+55",
    "code": "BR"
  },
  {
    "name": "British Indian Ocean Territory",
    "dial_code": "+246",
    "code": "IO"
  },
  {
    "name": "Bulgaria",
    "dial_code": "+359",
    "code": "BG"
  },
  {
    "name": "Burkina Faso",
    "dial_code": "+226",
    "code": "BF"
  },
  {
    "name": "Burundi",
    "dial_code": "+257",
    "code": "BI"
  },
  {
    "name": "Cambodia",
    "dial_code": "+855",
    "code": "KH"
  },
  {
    "name": "Cameroon",
    "dial_code": "+237",
    "code": "CM"
  },
  {
    "name": "Canada",
    "dial_code": "+1",
    "code": "CA"
  },
  {
    "name": "Cape Verde",
    "dial_code": "+238",
    "code": "CV"
  },
  {
    "name": "Cayman Islands",
    "dial_code": "+ 345",
    "code": "KY"
  },
  {
    "name": "Central African Republic",
    "dial_code": "+236",
    "code": "CF"
  },
  {
    "name": "Chad",
    "dial_code": "+235",
    "code": "TD"
  },
  {
    "name": "Chile",
    "dial_code": "+56",
    "code": "CL"
  },
  {
    "name": "China",
    "dial_code": "+86",
    "code": "CN"
  },
  {
    "name": "Christmas Island",
    "dial_code": "+61",
    "code": "CX"
  },
  {
    "name": "Colombia",
    "dial_code": "+57",
    "code": "CO"
  },
  {
    "name": "Comoros",
    "dial_code": "+269",
    "code": "KM"
  },
  {
    "name": "Congo",
    "dial_code": "+242",
    "code": "CG"
  },
  {
    "name": "Cook Islands",
    "dial_code": "+682",
    "code": "CK"
  },
  {
    "name": "Costa Rica",
    "dial_code": "+506",
    "code": "CR"
  },
  {
    "name": "Croatia",
    "dial_code": "+385",
    "code": "HR"
  },
  {
    "name": "Cuba",
    "dial_code": "+53",
    "code": "CU"
  },
  {
    "name": "Cyprus",
    "dial_code": "+537",
    "code": "CY"
  },
  {
    "name": "Czech Republic",
    "dial_code": "+420",
    "code": "CZ"
  },
  {
    "name": "Denmark",
    "dial_code": "+45",
    "code": "DK"
  },
  {
    "name": "Djibouti",
    "dial_code": "+253",
    "code": "DJ"
  },
  {
    "name": "Dominica",
    "dial_code": "+1 767",
    "code": "DM"
  },
  {
    "name": "Dominican Republic",
    "dial_code": "+1 849",
    "code": "DO"
  },
  {
    "name": "Ecuador",
    "dial_code": "+593",
    "code": "EC"
  },
  {
    "name": "Egypt",
    "dial_code": "+20",
    "code": "EG"
  },
  {
    "name": "El Salvador",
    "dial_code": "+503",
    "code": "SV"
  },
  {
    "name": "Equatorial Guinea",
    "dial_code": "+240",
    "code": "GQ"
  },
  {
    "name": "Eritrea",
    "dial_code": "+291",
    "code": "ER"
  },
  {
    "name": "Estonia",
    "dial_code": "+372",
    "code": "EE"
  },
  {
    "name": "Ethiopia",
    "dial_code": "+251",
    "code": "ET"
  },
  {
    "name": "Faroe Islands",
    "dial_code": "+298",
    "code": "FO"
  },
  {
    "name": "Fiji",
    "dial_code": "+679",
    "code": "FJ"
  },
  {
    "name": "Finland",
    "dial_code": "+358",
    "code": "FI"
  },
  {
    "name": "France",
    "dial_code": "+33",
    "code": "FR"
  },
  {
    "name": "French Guiana",
    "dial_code": "+594",
    "code": "GF"
  },
  {
    "name": "French Polynesia",
    "dial_code": "+689",
    "code": "PF"
  },
  {
    "name": "Gabon",
    "dial_code": "+241",
    "code": "GA"
  },
  {
    "name": "Gambia",
    "dial_code": "+220",
    "code": "GM"
  },
  {
    "name": "Georgia",
    "dial_code": "+995",
    "code": "GE"
  },
  {
    "name": "Germany",
    "dial_code": "+49",
    "code": "DE"
  },
  {
    "name": "Ghana",
    "dial_code": "+233",
    "code": "GH"
  },
  {
    "name": "Gibraltar",
    "dial_code": "+350",
    "code": "GI"
  },
  {
    "name": "Greece",
    "dial_code": "+30",
    "code": "GR"
  },
  {
    "name": "Greenland",
    "dial_code": "+299",
    "code": "GL"
  },
  {
    "name": "Grenada",
    "dial_code": "+1 473",
    "code": "GD"
  },
  {
    "name": "Guadeloupe",
    "dial_code": "+590",
    "code": "GP"
  },
  {
    "name": "Guam",
    "dial_code": "+1 671",
    "code": "GU"
  },
  {
    "name": "Guatemala",
    "dial_code": "+502",
    "code": "GT"
  },
  {
    "name": "Guinea",
    "dial_code": "+224",
    "code": "GN"
  },
  {
    "name": "Guinea-Bissau",
    "dial_code": "+245",
    "code": "GW"
  },
  {
    "name": "Guyana",
    "dial_code": "+595",
    "code": "GY"
  },
  {
    "name": "Haiti",
    "dial_code": "+509",
    "code": "HT"
  },
  {
    "name": "Honduras",
    "dial_code": "+504",
    "code": "HN"
  },
  {
    "name": "Hungary",
    "dial_code": "+36",
    "code": "HU"
  },
  {
    "name": "Iceland",
    "dial_code": "+354",
    "code": "IS"
  },
  {
    "name": "India",
    "dial_code": "+91",
    "code": "IN"
  },
  {
    "name": "Indonesia",
    "dial_code": "+62",
    "code": "ID"
  },
  {
    "name": "Iraq",
    "dial_code": "+964",
    "code": "IQ"
  },
  {
    "name": "Ireland",
    "dial_code": "+353",
    "code": "IE"
  },
  {
    "name": "Israel",
    "dial_code": "+972",
    "code": "IL"
  },
  {
    "name": "Italy",
    "dial_code": "+39",
    "code": "IT"
  },
  {
    "name": "Jamaica",
    "dial_code": "+1 876",
    "code": "JM"
  },
  {
    "name": "Japan",
    "dial_code": "+81",
    "code": "JP"
  },
  {
    "name": "Jordan",
    "dial_code": "+962",
    "code": "JO"
  },
  {
    "name": "Kazakhstan",
    "dial_code": "+7 7",
    "code": "KZ"
  },
  {
    "name": "Kenya",
    "dial_code": "+254",
    "code": "KE"
  },
  {
    "name": "Kiribati",
    "dial_code": "+686",
    "code": "KI"
  },
  {
    "name": "Kuwait",
    "dial_code": "+965",
    "code": "KW"
  },
  {
    "name": "Kyrgyzstan",
    "dial_code": "+996",
    "code": "KG"
  },
  {
    "name": "Latvia",
    "dial_code": "+371",
    "code": "LV"
  },
  {
    "name": "Lebanon",
    "dial_code": "+961",
    "code": "LB"
  },
  {
    "name": "Lesotho",
    "dial_code": "+266",
    "code": "LS"
  },
  {
    "name": "Liberia",
    "dial_code": "+231",
    "code": "LR"
  },
  {
    "name": "Liechtenstein",
    "dial_code": "+423",
    "code": "LI"
  },
  {
    "name": "Lithuania",
    "dial_code": "+370",
    "code": "LT"
  },
  {
    "name": "Luxembourg",
    "dial_code": "+352",
    "code": "LU"
  },
  {
    "name": "Madagascar",
    "dial_code": "+261",
    "code": "MG"
  },
  {
    "name": "Malawi",
    "dial_code": "+265",
    "code": "MW"
  },
  {
    "name": "Malaysia",
    "dial_code": "+60",
    "code": "MY"
  },
  {
    "name": "Maldives",
    "dial_code": "+960",
    "code": "MV"
  },
  {
    "name": "Mali",
    "dial_code": "+223",
    "code": "ML"
  },
  {
    "name": "Malta",
    "dial_code": "+356",
    "code": "MT"
  },
  {
    "name": "Marshall Islands",
    "dial_code": "+692",
    "code": "MH"
  },
  {
    "name": "Martinique",
    "dial_code": "+596",
    "code": "MQ"
  },
  {
    "name": "Mauritania",
    "dial_code": "+222",
    "code": "MR"
  },
  {
    "name": "Mauritius",
    "dial_code": "+230",
    "code": "MU"
  },
  {
    "name": "Mayotte",
    "dial_code": "+262",
    "code": "YT"
  },
  {
    "name": "Mexico",
    "dial_code": "+52",
    "code": "MX"
  },
  {
    "name": "Monaco",
    "dial_code": "+377",
    "code": "MC"
  },
  {
    "name": "Mongolia",
    "dial_code": "+976",
    "code": "MN"
  },
  {
    "name": "Montenegro",
    "dial_code": "+382",
    "code": "ME"
  },
  {
    "name": "Montserrat",
    "dial_code": "+1664",
    "code": "MS"
  },
  {
    "name": "Morocco",
    "dial_code": "+212",
    "code": "MA"
  },
  {
    "name": "Myanmar",
    "dial_code": "+95",
    "code": "MM"
  },
  {
    "name": "Namibia",
    "dial_code": "+264",
    "code": "NA"
  },
  {
    "name": "Nauru",
    "dial_code": "+674",
    "code": "NR"
  },
  {
    "name": "Nepal",
    "dial_code": "+977",
    "code": "NP"
  },
  {
    "name": "Netherlands",
    "dial_code": "+31",
    "code": "NL"
  },
  {
    "name": "Netherlands Antilles",
    "dial_code": "+599",
    "code": "AN"
  },
  {
    "name": "New Caledonia",
    "dial_code": "+687",
    "code": "NC"
  },
  {
    "name": "New Zealand",
    "dial_code": "+64",
    "code": "NZ"
  },
  {
    "name": "Nicaragua",
    "dial_code": "+505",
    "code": "NI"
  },
  {
    "name": "Niger",
    "dial_code": "+227",
    "code": "NE"
  },
  {
    "name": "Nigeria",
    "dial_code": "+234",
    "code": "NG"
  },
  {
    "name": "Niue",
    "dial_code": "+683",
    "code": "NU"
  },
  {
    "name": "Norfolk Island",
    "dial_code": "+672",
    "code": "NF"
  },
  {
    "name": "Northern Mariana Islands",
    "dial_code": "+1 670",
    "code": "MP"
  },
  {
    "name": "Norway",
    "dial_code": "+47",
    "code": "NO"
  },
  {
    "name": "Oman",
    "dial_code": "+968",
    "code": "OM"
  },
  {
    "name": "Pakistan",
    "dial_code": "+92",
    "code": "PK"
  },
  {
    "name": "Palau",
    "dial_code": "+680",
    "code": "PW"
  },
  {
    "name": "Panama",
    "dial_code": "+507",
    "code": "PA"
  },
  {
    "name": "Papua New Guinea",
    "dial_code": "+675",
    "code": "PG"
  },
  {
    "name": "Paraguay",
    "dial_code": "+595",
    "code": "PY"
  },
  {
    "name": "Peru",
    "dial_code": "+51",
    "code": "PE"
  },
  {
    "name": "Philippines",
    "dial_code": "+63",
    "code": "PH"
  },
  {
    "name": "Poland",
    "dial_code": "+48",
    "code": "PL"
  },
  {
    "name": "Portugal",
    "dial_code": "+351",
    "code": "PT"
  },
  {
    "name": "Puerto Rico",
    "dial_code": "+1 939",
    "code": "PR"
  },
  {
    "name": "Qatar",
    "dial_code": "+974",
    "code": "QA"
  },
  {
    "name": "Romania",
    "dial_code": "+40",
    "code": "RO"
  },
  {
    "name": "Rwanda",
    "dial_code": "+250",
    "code": "RW"
  },
  {
    "name": "Samoa",
    "dial_code": "+685",
    "code": "WS"
  },
  {
    "name": "San Marino",
    "dial_code": "+378",
    "code": "SM"
  },
  {
    "name": "Saudi Arabia",
    "dial_code": "+966",
    "code": "SA"
  },
  {
    "name": "Senegal",
    "dial_code": "+221",
    "code": "SN"
  },
  {
    "name": "Serbia",
    "dial_code": "+381",
    "code": "RS"
  },
  {
    "name": "Seychelles",
    "dial_code": "+248",
    "code": "SC"
  },
  {
    "name": "Sierra Leone",
    "dial_code": "+232",
    "code": "SL"
  },
  {
    "name": "Singapore",
    "dial_code": "+65",
    "code": "SG"
  },
  {
    "name": "Slovakia",
    "dial_code": "+421",
    "code": "SK"
  },
  {
    "name": "Slovenia",
    "dial_code": "+386",
    "code": "SI"
  },
  {
    "name": "Solomon Islands",
    "dial_code": "+677",
    "code": "SB"
  },
  {
    "name": "South Africa",
    "dial_code": "+27",
    "code": "ZA"
  },
  {
    "name": "South Georgia and the South Sandwich Islands",
    "dial_code": "+500",
    "code": "GS"
  },
  {
    "name": "Spain",
    "dial_code": "+34",
    "code": "ES"
  },
  {
    "name": "Sri Lanka",
    "dial_code": "+94",
    "code": "LK"
  },
  {
    "name": "Sudan",
    "dial_code": "+249",
    "code": "SD"
  },
  {
    "name": "Suriname",
    "dial_code": "+597",
    "code": "SR"
  },
  {
    "name": "Swaziland",
    "dial_code": "+268",
    "code": "SZ"
  },
  {
    "name": "Sweden",
    "dial_code": "+46",
    "code": "SE"
  },
  {
    "name": "Switzerland",
    "dial_code": "+41",
    "code": "CH"
  },
  {
    "name": "Tajikistan",
    "dial_code": "+992",
    "code": "TJ"
  },
  {
    "name": "Thailand",
    "dial_code": "+66",
    "code": "TH"
  },
  {
    "name": "Togo",
    "dial_code": "+228",
    "code": "TG"
  },
  {
    "name": "Tokelau",
    "dial_code": "+690",
    "code": "TK"
  },
  {
    "name": "Tonga",
    "dial_code": "+676",
    "code": "TO"
  },
  {
    "name": "Trinidad and Tobago",
    "dial_code": "+1 868",
    "code": "TT"
  },
  {
    "name": "Tunisia",
    "dial_code": "+216",
    "code": "TN"
  },
  {
    "name": "Turkey",
    "dial_code": "+90",
    "code": "TR"
  },
  {
    "name": "Turkmenistan",
    "dial_code": "+993",
    "code": "TM"
  },
  {
    "name": "Turks and Caicos Islands",
    "dial_code": "+1 649",
    "code": "TC"
  },
  {
    "name": "Tuvalu",
    "dial_code": "+688",
    "code": "TV"
  },
  {
    "name": "Uganda",
    "dial_code": "+256",
    "code": "UG"
  },
  {
    "name": "Ukraine",
    "dial_code": "+380",
    "code": "UA"
  },
  {
    "name": "United Arab Emirates",
    "dial_code": "+971",
    "code": "AE"
  },
  {
    "name": "United Kingdom",
    "dial_code": "+44",
    "code": "GB"
  },
  {
    "name": "United States",
    "dial_code": "+1",
    "code": "US"
  },
  {
    "name": "Uruguay",
    "dial_code": "+598",
    "code": "UY"
  },
  {
    "name": "Uzbekistan",
    "dial_code": "+998",
    "code": "UZ"
  },
  {
    "name": "Vanuatu",
    "dial_code": "+678",
    "code": "VU"
  },
  {
    "name": "Wallis and Futuna",
    "dial_code": "+681",
    "code": "WF"
  },
  {
    "name": "Yemen",
    "dial_code": "+967",
    "code": "YE"
  },
  {
    "name": "Zambia",
    "dial_code": "+260",
    "code": "ZM"
  },
  {
    "name": "Zimbabwe",
    "dial_code": "+263",
    "code": "ZW"
  },
  {
    "name": "land Islands",
    "dial_code": "",
    "code": "AX"
  },
  {
    "name": "Antarctica",
    "dial_code": null,
    "code": "AQ"
  },
  {
    "name": "Bolivia, Plurinational State of",
    "dial_code": "+591",
    "code": "BO"
  },
  {
    "name": "Brunei Darussalam",
    "dial_code": "+673",
    "code": "BN"
  },
  {
    "name": "Cocos (Keeling) Islands",
    "dial_code": "+61",
    "code": "CC"
  },
  {
    "name": "Congo, The Democratic Republic of the",
    "dial_code": "+243",
    "code": "CD"
  },
  {
    "name": "Cote d'Ivoire",
    "dial_code": "+225",
    "code": "CI"
  },
  {
    "name": "Falkland Islands (Malvinas)",
    "dial_code": "+500",
    "code": "FK"
  },
  {
    "name": "Guernsey",
    "dial_code": "+44",
    "code": "GG"
  },
  {
    "name": "Holy See (Vatican City State)",
    "dial_code": "+379",
    "code": "VA"
  },
  {
    "name": "Hong Kong",
    "dial_code": "+852",
    "code": "HK"
  },
  {
    "name": "Iran, Islamic Republic of",
    "dial_code": "+98",
    "code": "IR"
  },
  {
    "name": "Isle of Man",
    "dial_code": "+44",
    "code": "IM"
  },
  {
    "name": "Jersey",
    "dial_code": "+44",
    "code": "JE"
  },
  {
    "name": "Korea, Democratic People's Republic of",
    "dial_code": "+850",
    "code": "KP"
  },
  {
    "name": "Korea, Republic of",
    "dial_code": "+82",
    "code": "KR"
  },
  {
    "name": "Lao People's Democratic Republic",
    "dial_code": "+856",
    "code": "LA"
  },
  {
    "name": "Libyan Arab Jamahiriya",
    "dial_code": "+218",
    "code": "LY"
  },
  {
    "name": "Macao",
    "dial_code": "+853",
    "code": "MO"
  },
  {
    "name": "Macedonia, The Former Yugoslav Republic of",
    "dial_code": "+389",
    "code": "MK"
  },
  {
    "name": "Micronesia, Federated States of",
    "dial_code": "+691",
    "code": "FM"
  },
  {
    "name": "Moldova, Republic of",
    "dial_code": "+373",
    "code": "MD"
  },
  {
    "name": "Mozambique",
    "dial_code": "+258",
    "code": "MZ"
  },
  {
    "name": "Palestinian Territory, Occupied",
    "dial_code": "+970",
    "code": "PS"
  },
  {
    "name": "Pitcairn",
    "dial_code": "+872",
    "code": "PN"
  },
  {
    "name": "Réunion",
    "dial_code": "+262",
    "code": "RE"
  },
  {
    "name": "Russia",
    "dial_code": "+7",
    "code": "RU"
  },
  {
    "name": "Saint Barthélemy",
    "dial_code": "+590",
    "code": "BL"
  },
  {
    "name": "Saint Helena, Ascension and Tristan Da Cunha",
    "dial_code": "+290",
    "code": "SH"
  },
  {
    "name": "Saint Kitts and Nevis",
    "dial_code": "+1 869",
    "code": "KN"
  },
  {
    "name": "Saint Lucia",
    "dial_code": "+1 758",
    "code": "LC"
  },
  {
    "name": "Saint Martin",
    "dial_code": "+590",
    "code": "MF"
  },
  {
    "name": "Saint Pierre and Miquelon",
    "dial_code": "+508",
    "code": "PM"
  },
  {
    "name": "Saint Vincent and the Grenadines",
    "dial_code": "+1 784",
    "code": "VC"
  },
  {
    "name": "Sao Tome and Principe",
    "dial_code": "+239",
    "code": "ST"
  },
  {
    "name": "Somalia",
    "dial_code": "+252",
    "code": "SO"
  },
  {
    "name": "Svalbard and Jan Mayen",
    "dial_code": "+47",
    "code": "SJ"
  },
  {
    "name": "Syrian Arab Republic",
    "dial_code": "+963",
    "code": "SY"
  },
  {
    "name": "Taiwan, Province of China",
    "dial_code": "+886",
    "code": "TW"
  },
  {
    "name": "Tanzania, United Republic of",
    "dial_code": "+255",
    "code": "TZ"
  },
  {
    "name": "Timor-Leste",
    "dial_code": "+670",
    "code": "TL"
  },
  {
    "name": "Venezuela, Bolivarian Republic of",
    "dial_code": "+58",
    "code": "VE"
  },
  {
    "name": "Viet Nam",
    "dial_code": "+84",
    "code": "VN"
  },
  {
    "name": "Virgin Islands, British",
    "dial_code": "+1 284",
    "code": "VG"
  },
  {
    "name": "Virgin Islands, U.S.",
    "dial_code": "+1 340",
    "code": "VI"
  }
]
?>
