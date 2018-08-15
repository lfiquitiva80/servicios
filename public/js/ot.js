
//Coloca todas los titulos con jquery IU
 $( function() {
    $( document ).tooltip();
  } );



function loadJSON(callback) {

    var xobj = new XMLHttpRequest();
        xobj.overrideMimeType("application/json");
        xobj.open('GET', 'colombia.json', true); // Reemplaza colombia-json.json con el nombre que le hayas puesto
        xobj.onreadystatechange = function () {
          if (xobj.readyState == 4 && xobj.status == "200") {
            callback(xobj.responseText);
          }
    };
    xobj.send(null);
}

function init() {
 loadJSON(function(response) {
  // Parse JSON string into object
    var JSONFinal = JSON.parse(response);
 });
}


$( function() {
    var availableTags = [
     "MEDELLIN",
"ABEJORRAL",
"ABRIAQUI",
"ALEJANDRIA",
"AMAGA",
"AMALFI",
"ANDES",
"ANGELOPOLIS",
"ANGOSTURA",
"ANORI",
"SANTAFE DE ANTIOQUIA",
"ANZA",
"APARTADO",
"ARBOLETES",
"ARGELIA",
"ARMENIA",
"BARBOSA",
"BELMIRA",
"BELLO",
"BETANIA",
"BETULIA",
"CIUDAD BOLIVAR",
"BRICEÑO",
"BURITICA",
"CACERES",
"CAICEDO",
"CALDAS",
"CAMPAMENTO",
"CAÑASGORDAS",
"CARACOLI",
"CARAMANTA",
"CAREPA",
"EL CARMEN DE VIBORAL",
"CAROLINA",
"CAUCASIA",
"CHIGORODO",
"CISNEROS",
"COCORNA",
"CONCEPCION",
"CONCORDIA",
"COPACABANA",
"DABEIBA",
"DON MATIAS",
"EBEJICO",
"EL BAGRE",
"ENTRERRIOS",
"ENVIGADO",
"FREDONIA",
"FRONTINO",
"GIRALDO",
"GIRARDOTA",
"GOMEZ PLATA",
"GRANADA",
"GUADALUPE",
"GUARNE",
"GUATAPE",
"HELICONIA",
"HISPANIA",
"ITAGUI",
"ITUANGO",
"JARDIN",
"JERICO",
"LA CEJA",
"LA ESTRELLA",
"LA PINTADA",
"LA UNION",
"LIBORINA",
"MACEO",
"MARINILLA",
"MONTEBELLO",
"MURINDO",
"MUTATA",
"NARIÑO",
"NECOCLI",
"NECHI",
"OLAYA",
"PEÐOL",
"PEQUE",
"PUEBLORRICO",
"PUERTO BERRIO",
"PUERTO NARE",
"PUERTO TRIUNFO",
"REMEDIOS",
"RETIRO",
"RIONEGRO",
"SABANALARGA",
"SABANETA",
"SALGAR",
"SAN ANDRES DE CUERQUIA",
"SAN CARLOS",
"SAN FRANCISCO",
"SAN JERONIMO",
"SAN JOSE DE LA MONTAÑA",
"SAN JUAN DE URABA",
"SAN LUIS",
"SAN PEDRO",
"SAN PEDRO DE URABA",
"SAN RAFAEL",
"SAN ROQUE",
"SAN VICENTE",
"SANTA BARBARA",
"SANTA ROSA DE OSOS",
"SANTO DOMINGO",
"EL SANTUARIO",
"SEGOVIA",
"SONSON",
"SOPETRAN",
"TAMESIS",
"TARAZA",
"TARSO",
"TITIRIBI",
"TOLEDO",
"TURBO",
"URAMITA",
"URRAO",
"VALDIVIA",
"VALPARAISO",
"VEGACHI",
"VENECIA",
"VIGIA DEL FUERTE",
"YALI",
"YARUMAL",
"YOLOMBO",
"YONDO",
"ZARAGOZA",
"BARRANQUILLA",
"BARANOA",
"CAMPO DE LA CRUZ",
"CANDELARIA",
"GALAPA",
"JUAN DE ACOSTA",
"LURUACO",
"MALAMBO",
"MANATI",
"PALMAR DE VARELA",
"PIOJO",
"POLONUEVO",
"PONEDERA",
"PUERTO COLOMBIA",
"REPELON",
"SABANAGRANDE",
"SABANALARGA",
"SANTA LUCIA",
"SANTO TOMAS",
"SOLEDAD",
"SUAN",
"TUBARA",
"USIACURI",
"BOGOTA, D.C.",
"CARTAGENA",
"ACHI",
"ALTOS DEL ROSARIO",
"ARENAL",
"ARJONA",
"ARROYOHONDO",
"BARRANCO DE LOBA",
"CALAMAR",
"CANTAGALLO",
"CICUCO",
"CORDOBA",
"CLEMENCIA",
"EL CARMEN DE BOLIVAR",
"EL GUAMO",
"EL PEÑON",
"HATILLO DE LOBA",
"MAGANGUE",
"MAHATES",
"MARGARITA",
"MARIA LA BAJA",
"MONTECRISTO",
"MOMPOS",
"NOROSI",
"MORALES",
"PINILLOS",
"REGIDOR",
"RIO VIEJO",
"SAN CRISTOBAL",
"SAN ESTANISLAO",
"SAN FERNANDO",
"SAN JACINTO",
"SAN JACINTO DEL CAUCA",
"SAN JUAN NEPOMUCENO",
"SAN MARTIN DE LOBA",
"SAN PABLO",
"SANTA CATALINA",
"SANTA ROSA",
"SANTA ROSA DEL SUR",
"SIMITI",
"SOPLAVIENTO",
"TALAIGUA NUEVO",
"TIQUISIO",
"TURBACO",
"TURBANA",
"VILLANUEVA",
"ZAMBRANO",
"TUNJA",
"ALMEIDA",
"AQUITANIA",
"ARCABUCO",
"BELEN",
"BERBEO",
"BETEITIVA",
"BOAVITA",
"BOYACA",
"BRICEÑO",
"BUENAVISTA",
"BUSBANZA",
"CALDAS",
"CAMPOHERMOSO",
"CERINZA",
"CHINAVITA",
"CHIQUINQUIRA",
"CHISCAS",
"CHITA",
"CHITARAQUE",
"CHIVATA",
"CIENEGA",
"COMBITA",
"COPER",
"CORRALES",
"COVARACHIA",
"CUBARA",
"CUCAITA",
"CUITIVA",
"CHIQUIZA",
"CHIVOR",
"DUITAMA",
"EL COCUY",
"EL ESPINO",
"FIRAVITOBA",
"FLORESTA",
"GACHANTIVA",
"GAMEZA",
"GARAGOA",
"GUACAMAYAS",
"GUATEQUE",
"GUAYATA",
"GsICAN",
"IZA",
"JENESANO",
"JERICO",
"LABRANZAGRANDE",
"LA CAPILLA",
"LA VICTORIA",
"LA UVITA",
"VILLA DE LEYVA",
"MACANAL",
"MARIPI",
"MIRAFLORES",
"MONGUA",
"MONGUI",
"MONIQUIRA",
"MOTAVITA",
"MUZO",
"NOBSA",
"NUEVO COLON",
"OICATA",
"OTANCHE",
"PACHAVITA",
"PAEZ",
"PAIPA",
"PAJARITO",
"PANQUEBA",
"PAUNA",
"PAYA",
"PAZ DE RIO",
"PESCA",
"PISBA",
"PUERTO BOYACA",
"QUIPAMA",
"RAMIRIQUI",
"RAQUIRA",
"RONDON",
"SABOYA",
"SACHICA",
"SAMACA",
"SAN EDUARDO",
"SAN JOSE DE PARE",
"SAN LUIS DE GACENO",
"SAN MATEO",
"SAN MIGUEL DE SEMA",
"SAN PABLO DE BORBUR",
"SANTANA",
"SANTA MARIA",
"SANTA ROSA DE VITERBO",
"SANTA SOFIA",
"SATIVANORTE",
"SATIVASUR",
"SIACHOQUE",
"SOATA",
"SOCOTA",
"SOCHA",
"SOGAMOSO",
"SOMONDOCO",
"SORA",
"SOTAQUIRA",
"SORACA",
"SUSACON",
"SUTAMARCHAN",
"SUTATENZA",
"TASCO",
"TENZA",
"TIBANA",
"TIBASOSA",
"TINJACA",
"TIPACOQUE",
"TOCA",
"TOGsI",
"TOPAGA",
"TOTA",
"TUNUNGUA",
"TURMEQUE",
"TUTA",
"TUTAZA",
"UMBITA",
"VENTAQUEMADA",
"VIRACACHA",
"ZETAQUIRA",
"MANIZALES",
"AGUADAS",
"ANSERMA",
"ARANZAZU",
"BELALCAZAR",
"CHINCHINA",
"FILADELFIA",
"LA DORADA",
"LA MERCED",
"MANZANARES",
"MARMATO",
"MARQUETALIA",
"MARULANDA",
"NEIRA",
"NORCASIA",
"PACORA",
"PALESTINA",
"PENSILVANIA",
"RIOSUCIO",
"RISARALDA",
"SALAMINA",
"SAMANA",
"SAN JOSE",
"SUPIA",
"VICTORIA",
"VILLAMARIA",
"VITERBO",
"FLORENCIA",
"ALBANIA",
"BELEN DE LOS ANDAQUIES",
"CARTAGENA DEL CHAIRA",
"CURILLO",
"EL DONCELLO",
"EL PAUJIL",
"LA MONTAÑITA",
"MILAN",
"MORELIA",
"PUERTO RICO",
"SAN JOSE DEL FRAGUA",
"SAN VICENTE DEL CAGUAN",
"SOLANO",
"SOLITA",
"VALPARAISO",
"POPAYAN",
"ALMAGUER",
"ARGELIA",
"BALBOA",
"BOLIVAR",
"BUENOS AIRES",
"CAJIBIO",
"CALDONO",
"CALOTO",
"CORINTO",
"EL TAMBO",
"FLORENCIA",
"GUACHENE",
"GUAPI",
"INZA",
"JAMBALO",
"LA SIERRA",
"LA VEGA",
"LOPEZ",
"MERCADERES",
"MIRANDA",
"MORALES",
"PADILLA",
"PAEZ",
"PATIA",
"PIAMONTE",
"PIENDAMO",
"PUERTO TEJADA",
"PURACE",
"ROSAS",
"SAN SEBASTIAN",
"SANTANDER DE QUILICHAO",
"SANTA ROSA",
"SILVIA",
"SOTARA",
"SUAREZ",
"SUCRE",
"TIMBIO",
"TIMBIQUI",
"TORIBIO",
"TOTORO",
"VILLA RICA",
"VALLEDUPAR",
"AGUACHICA",
"AGUSTIN CODAZZI",
"ASTREA",
"BECERRIL",
"BOSCONIA",
"CHIMICHAGUA",
"CHIRIGUANA",
"CURUMANI",
"EL COPEY",
"EL PASO",
"GAMARRA",
"GONZALEZ",
"LA GLORIA",
"LA JAGUA DE IBIRICO",
"MANAURE",
"PAILITAS",
"PELAYA",
"PUEBLO BELLO",
"RIO DE ORO",
"LA PAZ",
"SAN ALBERTO",
"SAN DIEGO",
"SAN MARTIN",
"TAMALAMEQUE",
"MONTERIA",
"AYAPEL",
"BUENAVISTA",
"CANALETE",
"CERETE",
"CHIMA",
"CHINU",
"CIENAGA DE ORO",
"COTORRA",
"LA APARTADA",
"LORICA",
"LOS CORDOBAS",
"MOMIL",
"MONTELIBANO",
"MOÑITOS",
"PLANETA RICA",
"PUEBLO NUEVO",
"PUERTO ESCONDIDO",
"PUERTO LIBERTADOR",
"PURISIMA",
"SAHAGUN",
"SAN ANDRES SOTAVENTO",
"SAN ANTERO",
"SAN BERNARDO DEL VIENTO",
"SAN CARLOS",
"SAN PELAYO",
"TIERRALTA",
"VALENCIA",
"AGUA DE DIOS",
"ALBAN",
"ANAPOIMA",
"ANOLAIMA",
"ARBELAEZ",
"BELTRAN",
"BITUIMA",
"BOJACA",
"CABRERA",
"CACHIPAY",
"CAJICA",
"CAPARRAPI",
"CAQUEZA",
"CARMEN DE CARUPA",
"CHAGUANI",
"CHIA",
"CHIPAQUE",
"CHOACHI",
"CHOCONTA",
"COGUA",
"COTA",
"CUCUNUBA",
"EL COLEGIO",
"EL PEÑON",
"EL ROSAL",
"FACATATIVA",
"FOMEQUE",
"FOSCA",
"FUNZA",
"FUQUENE",
"FUSAGASUGA",
"GACHALA",
"GACHANCIPA",
"GACHETA",
"GAMA",
"GIRARDOT",
"GRANADA",
"GUACHETA",
"GUADUAS",
"GUASCA",
"GUATAQUI",
"GUATAVITA",
"GUAYABAL DE SIQUIMA",
"GUAYABETAL",
"GUTIERREZ",
"JERUSALEN",
"JUNIN",
"LA CALERA",
"LA MESA",
"LA PALMA",
"LA PEÑA",
"LA VEGA",
"LENGUAZAQUE",
"MACHETA",
"MADRID",
"MANTA",
"MEDINA",
"MOSQUERA",
"NARIÑO",
"NEMOCON",
"NILO",
"NIMAIMA",
"NOCAIMA",
"VENECIA",
"PACHO",
"PAIME",
"PANDI",
"PARATEBUENO",
"PASCA",
"PUERTO SALGAR",
"PULI",
"QUEBRADANEGRA",
"QUETAME",
"QUIPILE",
"APULO",
"RICAURTE",
"SAN ANTONIO DEL TEQUENDAMA",
"SAN BERNARDO",
"SAN CAYETANO",
"SAN FRANCISCO",
"SAN JUAN DE RIO SECO",
"SASAIMA",
"SESQUILE",
"SIBATE",
"SILVANIA",
"SIMIJACA",
"SOACHA",
"SOPO",
"SUBACHOQUE",
"SUESCA",
"SUPATA",
"SUSA",
"SUTATAUSA",
"TABIO",
"TAUSA",
"TENA",
"TENJO",
"TIBACUY",
"TIBIRITA",
"TOCAIMA",
"TOCANCIPA",
"TOPAIPI",
"UBALA",
"UBAQUE",
"VILLA DE SAN DIEGO DE UBATE",
"UNE",
"UTICA",
"VERGARA",
"VIANI",
"VILLAGOMEZ",
"VILLAPINZON",
"VILLETA",
"VIOTA",
"YACOPI",
"ZIPACON",
"ZIPAQUIRA",
"QUIBDO",
"ACANDI",
"ALTO BAUDO",
"ATRATO",
"BAGADO",
"BAHIA SOLANO",
"BAJO BAUDO",
"BOJAYA",
"EL CANTON DEL SAN PABLO",
"CARMEN DEL DARIEN",
"CERTEGUI",
"CONDOTO",
"EL CARMEN DE ATRATO",
"EL LITORAL DEL SAN JUAN",
"ISTMINA",
"JURADO",
"LLORO",
"MEDIO ATRATO",
"MEDIO BAUDO",
"MEDIO SAN JUAN",
"NOVITA",
"NUQUI",
"RIO IRO",
"RIO QUITO",
"RIOSUCIO",
"SAN JOSE DEL PALMAR",
"SIPI",
"TADO",
"UNGUIA",
"UNION PANAMERICANA",
"NEIVA",
"ACEVEDO",
"AGRADO",
"AIPE",
"ALGECIRAS",
"ALTAMIRA",
"BARAYA",
"CAMPOALEGRE",
"COLOMBIA",
"ELIAS",
"GARZON",
"GIGANTE",
"GUADALUPE",
"HOBO",
"IQUIRA",
"ISNOS",
"LA ARGENTINA",
"LA PLATA",
"NATAGA",
"OPORAPA",
"PAICOL",
"PALERMO",
"PALESTINA",
"PITAL",
"PITALITO",
"RIVERA",
"SALADOBLANCO",
"SAN AGUSTIN",
"SANTA MARIA",
"SUAZA",
"TARQUI",
"TESALIA",
"TELLO",
"TERUEL",
"TIMANA",
"VILLAVIEJA",
"YAGUARA",
"RIOHACHA",
"ALBANIA",
"BARRANCAS",
"DIBULLA",
"DISTRACCION",
"EL MOLINO",
"FONSECA",
"HATONUEVO",
"LA JAGUA DEL PILAR",
"MAICAO",
"MANAURE",
"SAN JUAN DEL CESAR",
"URIBIA",
"URUMITA",
"VILLANUEVA",
"SANTA MARTA",
"ALGARROBO",
"ARACATACA",
"ARIGUANI",
"CERRO SAN ANTONIO",
"CHIBOLO",
"CIENAGA",
"CONCORDIA",
"EL BANCO",
"EL PIÑON",
"EL RETEN",
"FUNDACION",
"GUAMAL",
"NUEVA GRANADA",
"PEDRAZA",
"PIJIÑO DEL CARMEN",
"PIVIJAY",
"PLATO",
"PUEBLOVIEJO",
"REMOLINO",
"SABANAS DE SAN ANGEL",
"SALAMINA",
"SAN SEBASTIAN DE BUENAVISTA",
"SAN ZENON",
"SANTA ANA",
"SANTA BARBARA DE PINTO",
"SITIONUEVO",
"TENERIFE",
"ZAPAYAN",
"ZONA BANANERA",
"VILLAVICENCIO",
"ACACIAS",
"BARRANCA DE UPIA",
"CABUYARO",
"CASTILLA LA NUEVA",
"CUBARRAL",
"CUMARAL",
"EL CALVARIO",
"EL CASTILLO",
"EL DORADO",
"FUENTE DE ORO",
"GRANADA",
"GUAMAL",
"MAPIRIPAN",
"MESETAS",
"LA MACARENA",
"URIBE",
"LEJANIAS",
"PUERTO CONCORDIA",
"PUERTO GAITAN",
"PUERTO LOPEZ",
"PUERTO LLERAS",
"PUERTO RICO",
"RESTREPO",
"SAN CARLOS DE GUAROA",
"SAN JUAN DE ARAMA",
"SAN JUANITO",
"SAN MARTIN",
"VISTAHERMOSA",
"PASTO",
"ALBAN",
"ALDANA",
"ANCUYA",
"ARBOLEDA",
"BARBACOAS",
"BELEN",
"BUESACO",
"COLON",
"CONSACA",
"CONTADERO",
"CORDOBA",
"CUASPUD",
"CUMBAL",
"CUMBITARA",
"CHACHAGsI",
"EL CHARCO",
"EL PEÑOL",
"EL ROSARIO",
"EL TABLON DE GOMEZ",
"EL TAMBO",
"FUNES",
"GUACHUCAL",
"GUAITARILLA",
"GUALMATAN",
"ILES",
"IMUES",
"IPIALES",
"LA CRUZ",
"LA FLORIDA",
"LA LLANADA",
"LA TOLA",
"LA UNION",
"LEIVA",
"LINARES",
"LOS ANDES",
"MAGsI",
"MALLAMA",
"MOSQUERA",
"NARIÑO",
"OLAYA HERRERA",
"OSPINA",
"FRANCISCO PIZARRO",
"POLICARPA",
"POTOSI",
"PROVIDENCIA",
"PUERRES",
"PUPIALES",
"RICAURTE",
"ROBERTO PAYAN",
"SAMANIEGO",
"SANDONA",
"SAN BERNARDO",
"SAN LORENZO",
"SAN PABLO",
"SAN PEDRO DE CARTAGO",
"SANTA BARBARA",
"SANTACRUZ",
"SAPUYES",
"TAMINANGO",
"TANGUA",
"SAN ANDRES DE TUMACO",
"TUQUERRES",
"YACUANQUER",
"CUCUTA",
"ABREGO",
"ARBOLEDAS",
"BOCHALEMA",
"BUCARASICA",
"CACOTA",
"CACHIRA",
"CHINACOTA",
"CHITAGA",
"CONVENCION",
"CUCUTILLA",
"DURANIA",
"EL CARMEN",
"EL TARRA",
"EL ZULIA",
"GRAMALOTE",
"HACARI",
"HERRAN",
"LABATECA",
"LA ESPERANZA",
"LA PLAYA",
"LOS PATIOS",
"LOURDES",
"MUTISCUA",
"OCAÑA",
"PAMPLONA",
"PAMPLONITA",
"PUERTO SANTANDER",
"RAGONVALIA",
"SALAZAR",
"SAN CALIXTO",
"SAN CAYETANO",
"SANTIAGO",
"SARDINATA",
"SILOS",
"TEORAMA",
"TIBU",
"TOLEDO",
"VILLA CARO",
"VILLA DEL ROSARIO",
"ARMENIA",
"BUENAVISTA",
"CALARCA",
"CIRCASIA",
"CORDOBA",
"FILANDIA",
"GENOVA",
"LA TEBAIDA",
"MONTENEGRO",
"PIJAO",
"QUIMBAYA",
"SALENTO",
"PEREIRA",
"APIA",
"BALBOA",
"BELEN DE UMBRIA",
"DOSQUEBRADAS",
"GUATICA",
"LA CELIA",
"LA VIRGINIA",
"MARSELLA",
"MISTRATO",
"PUEBLO RICO",
"QUINCHIA",
"SANTA ROSA DE CABAL",
"SANTUARIO",
"BUCARAMANGA",
"AGUADA",
"ALBANIA",
"ARATOCA",
"BARBOSA",
"BARICHARA",
"BARRANCABERMEJA",
"BETULIA",
"BOLIVAR",
"CABRERA",
"CALIFORNIA",
"CAPITANEJO",
"CARCASI",
"CEPITA",
"CERRITO",
"CHARALA",
"CHARTA",
"CHIMA",
"CHIPATA",
"CIMITARRA",
"CONCEPCION",
"CONFINES",
"CONTRATACION",
"COROMORO",
"CURITI",
"EL CARMEN DE CHUCURI",
"EL GUACAMAYO",
"EL PEÑON",
"EL PLAYON",
"ENCINO",
"ENCISO",
"FLORIAN",
"FLORIDABLANCA",
"GALAN",
"GAMBITA",
"GIRON",
"GUACA",
"GUADALUPE",
"GUAPOTA",
"GUAVATA",
"GsEPSA",
"HATO",
"JESUS MARIA",
"JORDAN",
"LA BELLEZA",
"LANDAZURI",
"LA PAZ",
"LEBRIJA",
"LOS SANTOS",
"MACARAVITA",
"MALAGA",
"MATANZA",
"MOGOTES",
"MOLAGAVITA",
"OCAMONTE",
"OIBA",
"ONZAGA",
"PALMAR",
"PALMAS DEL SOCORRO",
"PARAMO",
"PIEDECUESTA",
"PINCHOTE",
"PUENTE NACIONAL",
"PUERTO PARRA",
"PUERTO WILCHES",
"RIONEGRO",
"SABANA DE TORRES",
"SAN ANDRES",
"SAN BENITO",
"SAN GIL",
"SAN JOAQUIN",
"SAN JOSE DE MIRANDA",
"SAN MIGUEL",
"SAN VICENTE DE CHUCURI",
"SANTA BARBARA",
"SANTA HELENA DEL OPON",
"SIMACOTA",
"SOCORRO",
"SUAITA",
"SUCRE",
"SURATA",
"TONA",
"VALLE DE SAN JOSE",
"VELEZ",
"VETAS",
"VILLANUEVA",
"ZAPATOCA",
"SINCELEJO",
"BUENAVISTA",
"CAIMITO",
"COLOSO",
"COROZAL",
"COVEÑAS",
"CHALAN",
"EL ROBLE",
"GALERAS",
"GUARANDA",
"LA UNION",
"LOS PALMITOS",
"MAJAGUAL",
"MORROA",
"OVEJAS",
"PALMITO",
"SAMPUES",
"SAN BENITO ABAD",
"SAN JUAN DE BETULIA",
"SAN MARCOS",
"SAN ONOFRE",
"SAN PEDRO",
"SAN LUIS DE SINCE",
"SUCRE",
"SANTIAGO DE TOLU",
"TOLU VIEJO",
"IBAGUE",
"ALPUJARRA",
"ALVARADO",
"AMBALEMA",
"ANZOATEGUI",
"ARMERO",
"ATACO",
"CAJAMARCA",
"CARMEN DE APICALA",
"CASABIANCA",
"CHAPARRAL",
"COELLO",
"COYAIMA",
"CUNDAY",
"DOLORES",
"ESPINAL",
"FALAN",
"FLANDES",
"FRESNO",
"GUAMO",
"HERVEO",
"HONDA",
"ICONONZO",
"LERIDA",
"LIBANO",
"MARIQUITA",
"MELGAR",
"MURILLO",
"NATAGAIMA",
"ORTEGA",
"PALOCABILDO",
"PIEDRAS",
"PLANADAS",
"PRADO",
"PURIFICACION",
"RIOBLANCO",
"RONCESVALLES",
"ROVIRA",
"SALDAÑA",
"SAN ANTONIO",
"SAN LUIS",
"SANTA ISABEL",
"SUAREZ",
"VALLE DE SAN JUAN",
"VENADILLO",
"VILLAHERMOSA",
"VILLARRICA",
"CALI",
"ALCALA",
"ANDALUCIA",
"ANSERMANUEVO",
"ARGELIA",
"BOLIVAR",
"BUENAVENTURA",
"GUADALAJARA DE BUGA",
"BUGALAGRANDE",
"CAICEDONIA",
"CALIMA",
"CANDELARIA",
"CARTAGO",
"DAGUA",
"EL AGUILA",
"EL CAIRO",
"EL CERRITO",
"EL DOVIO",
"FLORIDA",
"GINEBRA",
"GUACARI",
"JAMUNDI",
"LA CUMBRE",
"LA UNION",
"LA VICTORIA",
"OBANDO",
"PALMIRA",
"PRADERA",
"RESTREPO",
"RIOFRIO",
"ROLDANILLO",
"SAN PEDRO",
"SEVILLA",
"TORO",
"TRUJILLO",
"TULUA",
"ULLOA",
"VERSALLES",
"VIJES",
"YOTOCO",
"YUMBO",
"ZARZAL",
"ARAUCA",
"ARAUQUITA",
"CRAVO NORTE",
"FORTUL",
"PUERTO RONDON",
"SARAVENA",
"TAME",
"YOPAL",
"AGUAZUL",
"CHAMEZA",
"HATO COROZAL",
"LA SALINA",
"MANI",
"MONTERREY",
"NUNCHIA",
"OROCUE",
"PAZ DE ARIPORO",
"PORE",
"RECETOR",
"SABANALARGA",
"SACAMA",
"SAN LUIS DE PALENQUE",
"TAMARA",
"TAURAMENA",
"TRINIDAD",
"VILLANUEVA",
"MOCOA",
"COLON",
"ORITO",
"PUERTO ASIS",
"PUERTO CAICEDO",
"PUERTO GUZMAN",
"LEGUIZAMO",
"SIBUNDOY",
"SAN FRANCISCO",
"SAN MIGUEL",
"SANTIAGO",
"VALLE DEL GUAMUEZ",
"VILLAGARZON",
"SAN ANDRES",
"PROVIDENCIA",
"LETICIA",
"EL ENCANTO",
"LA CHORRERA",
"LA PEDRERA",
"LA VICTORIA",
"MIRITI - PARANA",
"PUERTO ALEGRIA",
"PUERTO ARICA",
"PUERTO NARIÑO",
"PUERTO SANTANDER",
"TARAPACA",
"INIRIDA",
"BARRANCO MINAS",
"MAPIRIPANA",
"SAN FELIPE",
"PUERTO COLOMBIA",
"LA GUADALUPE",
"CACAHUAL",
"PANA PANA",
"MORICHAL",
"SAN JOSE DEL GUAVIARE",
"CALAMAR",
"EL RETORNO",
"MIRAFLORES",
"MITU",
"CARURU",
"PACOA",
"TARAIRA",
"PAPUNAUA",
"YAVARATE",
"PUERTO CARREÑO",
"LA PRIMAVERA",
"SANTA ROSALIA",
"CUMARIBO"

    ];
    $( "#ciudad_destino" ).autocomplete({
      source: availableTags
    });

    $( "#ciudad_destino2" ).autocomplete({
      source: availableTags
    });

     $( "#ciudad_origen" ).autocomplete({
      source: availableTags
    });
  } );

  $('#editar_cliente').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var nit = button.data('nit')
var name = button.data('name')
var solicitante = button.data('solicitante')
var coordinador = button.data('coordinador')
var telefono = button.data('telefono')
var activo = button.data('activo')
var email = button.data('email')
var notas = button.data('notas')
var nit = button.data('nit')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #nit').val(nit);
modal.find('.modal-body #nombre').val(name);
modal.find('.modal-body #solicitante').val(solicitante);
modal.find('.modal-body #coordinador').val(coordinador);
modal.find('.modal-body #telefono').val(telefono);
modal.find('.modal-body #activo').val(activo);
modal.find('.modal-body #email').val(email);
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #notas').val(notas);
modal.find('.modal-body #nit').val(nit);
})

$('#editar_rentadora').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var nombre = button.data('nombre')
var contacto = button.data('contacto')
var telefono = button.data('telefono')
var activo = button.data('activo')
var email = button.data('email')
var notas = button.data('notas')
var email_2 = button.data('email_2')
var email_3 = button.data('email_3')
var telefono_2 = button.data('telefono_2')
var telefono_3 = button.data('telefono_3')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #nombre').val(nombre);
modal.find('.modal-body #contacto').val(contacto);
modal.find('.modal-body #telefono').val(telefono);
modal.find('.modal-body #email').val(email);
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #email_2').val(email_2);
modal.find('.modal-body #email_3').val(email_3);
modal.find('.modal-body #telefono_2').val(telefono_2);
modal.find('.modal-body #telefono_3').val(telefono_3);

})

$('#editar_usuario').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var name = button.data('name')
var type = button.data('type')
var password = button.data('password')
var activo = button.data('activo')
var email = button.data('email')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #name').val(name);
modal.find('.modal-body #type').val(type);
modal.find('.modal-body #password').val(password);
modal.find('.modal-body #email').val(email);
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #activo').val(activo);
})
$(document).ready(function() {
       $('#reg_form').bootstrapValidator({
           message: 'Este valor no es válido',
           // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           feedbackIcons: {
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               nombre: {
                 validators: {
                   notEmpty: {
                       message: 'el nombre del escolta es necesario'
                   },
                   stringLength: {
                       min:2,
                       message: 'El nombre del escolta debe tener más de 2 caracteres '
                   },

                 }
               },
                cc: {
                  validators: {
                    notEmpty: {
                        message: 'Este valor no es válido'
                    }
                  }
               },

               telefono: {
                   validators: {
                       integer: {
                         min: 7,
                            max: 20,

                          },
                             notEmpty: {
                           message: 'ingrese  número de teléfono'
                              }
                       },
                       telefono: {
                           country: 'CO',
                            notEmpty: {
                           message: 'Please supply a vaild phone number with area code'
                       }
                         }

               },
               cargo: {
                 validators: {
                 notEmpty: {
                     message: 'El cargo es necesario'
                 },
                 stringLength: {
                     min:2,
                     message: 'El cargo  debe tener más de 2 caracteres '
                 },
               }
               },
               activo: {
                 validators: {
                       notEmpty: {
                           message: 'Seleccione '
                       }
                   }
               },
               ciudad: {
                 validators: {
                 notEmpty: {
                     message: 'La cuidad es necesaria'
                 },
                 stringLength: {
                     min:2,
                     message: 'La cuidad  del escolta debe tener más de 2 caracteres '
                 },
                 }
               },
               bilingue: {
                   validators: {
                       notEmpty: {
                           message: 'Seleccione'
                       }
                     }
               },
           escolta_externo: {
             validators: {
                   notEmpty: {
                       message: 'Seleccione'
                   }
               }
         },
         foto:{
         validators: {
           file: {
                             extension: 'png,jpeg,jpg',
                             message: 'El archivo seleccionado no es una imagen'
                         }
               }
           },


               }
           })


           .on('success.form.bv', function(e) {
               $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                   $('#reg_form').data('bootstrapValidator').resetForm();

               // Prevent form submission
               e.preventDefault();

               // Get the form instance
               var $form = $(e.target);

               // Get the BootstrapValidator instance
               var bv = $form.data('bootstrapValidator');

               // Use Ajax to submit form data
               $.post($form.attr('action'), $form.serialize(), function(result) {
                   console.log(result);
               }, 'json');
           });
   });
   //
   $(document).ready(function() {
          $('#reg_form2').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  nit: {
                      validators: {
                              numeric: {
                              min: 4,
                          },
                              notEmpty: {
                              message: 'ingrese el nit del cliente'
                          }
                      }
                  },
                  telefono: {
                      validators: {
                          integer: {
                            min: 3,
                               max: 20,
                               Empty:{
                              message: 'ingrese número de teléfono'
                            }
                          },
                          telefono: {
                              country: 'CO',
                              message: 'Please supply a vaild phone number with area code'
                          }
                      }
                  },
                  email: {
                    validators: {
                                emailAddress: {
                              message: 'ingrese una dirección de correo electrónico válida'
                            },
                                Empty: {
                              message: 'ingrese  una dirección de correo electrónico'
                            }
                        }
            },
                  activo: {
                    validators: {
                          notEmpty: {
                              message: 'Seleccione'
                          }
                      }
                  },
                  notas: {
                      validators: {
                            stringLength: {
                               min: 2,
                           },
                          Empty: {
                              message: 'Ingrese notas '
                          }
                      }
                  },
                  coordinador: {
                    validators: {
                                stringLength: {
                                min: 2,
                            },
                                Empty: {
                                message: 'ingrese coordinador'
                            }
                        }
                    },
                    nombre: {
                      validators: {
                                  stringLength: {
                                  min: 2,
                                   message: 'El nombre del cliente debe tener más de 2 caracteres '
                              },
                                  notEmpty: {
                                message: 'el nombre del cliente es necesario'
                              }
                          }
                      },
                      solicitante: {
                        validators: {
                                    stringLength: {
                                    min: 2,
                                       message: 'El nombre del escolta debe tener más de 2 caracteres '
                                },
                                    Empty: {
                                      message: 'ingrese solicitante'

                                }
                            }
                        },
              }
              })


              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#reg_form2').data('bootstrapValidator').resetForm();

                  // Prevent form submission
                  e.preventDefault();

                  // Get the form instance
                  var $form = $(e.target);

                  // Get the BootstrapValidator instance
                  var bv = $form.data('bootstrapValidator');

                  // Use Ajax to submit form data
                  $.post($form.attr('action'), $form.serialize(), function(result) {
                      console.log(result);
                  }, 'json');
              });
      });
      //
      $(document).ready(function() {
             $('#reg_form3').bootstrapValidator({
                message: 'Este valor no es válido',
                 // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                 feedbackIcons: {
                     valid: 'glyphicon glyphicon-ok',
                     invalid: 'glyphicon glyphicon-remove',
                     validating: 'glyphicon glyphicon-refresh'
                 },
                 fields: {
                     nit: {
                         validators: {
                                 numeric: {
                                 min: 4,
                             },
                                 notEmpty: {
                                 message: 'ingrese el nit del cliente'
                             }
                         }
                     },
                     telefono: {
                         validators: {
                             integer: {
                               min: 3,
                                  max: 20,
                                  Empty:{
                                 message: 'ingrese número de teléfono'
                               }
                             },
                             telefono: {
                                 country: 'CO',
                                 message: 'Please supply a vaild phone number with area code'
                             }
                         }
                     },
                     email: {
                       validators: {
                                   emailAddress: {
                                    message: 'ingrese una dirección de correo electrónico válida'
                               },
                                   Empty: {
                                 message: 'ingrese  una dirección de correo electrónico'
                               }
                           }
               },
                     activo: {
                       validators: {
                             notEmpty: {
                                 message: 'Seleccione'
                             }
                         }
                     },
                     notas: {
                         validators: {
                               stringLength: {
                                  min: 2,
                              },
                             Empty: {
                                 message: 'Ingrese notas '
                             }
                         }
                     },
                     coordinador: {
                       validators: {
                                   stringLength: {
                                   min: 2,
                               },
                                   Empty: {
                                   message: 'ingrese coordinador'
                               }
                           }
                       },
                       nombre: {
                         validators: {
                                     stringLength: {
                                     min: 2,
                                      message: 'El nombre del cliente debe tener más de 2 caracteres '
                                 },
                                     notEmpty: {
                                   message: 'el nombre del cliente es necesario'
                                 }
                             }
                         },
                         solicitante: {
                           validators: {
                                       stringLength: {
                                       min: 2,
                                          message: 'Este campo  debe tener más de 2 caracteres '
                                   },
                                       Empty: {
                                         message: 'ingrese solicitante'

                                   }
                               }
                           },
                 }
                 })


                 .on('success.form.bv', function(e) {
                     $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                         $('#reg_form3').data('bootstrapValidator').resetForm();

                     // Prevent form submission
                     e.preventDefault();

                     // Get the form instance
                     var $form = $(e.target);

                     // Get the BootstrapValidator instance
                     var bv = $form.data('bootstrapValidator');

                     // Use Ajax to submit form data
                     $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');
                 });
         });
      //
      $(document).ready(function() {
             $('#reg_form4').bootstrapValidator({
               message: 'Este valor no es válido',
                 // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                 feedbackIcons: {
                     valid: 'glyphicon glyphicon-ok',
                     invalid: 'glyphicon glyphicon-remove',
                     validating: 'glyphicon glyphicon-refresh'
                 },
                 fields: {
                     telefono: {
                         validators: {
                             integer: {
                               min: 7,
                                  max: 20,
                                },
                                  notEmpty:{
                                 message: 'ingrese número de teléfono'
                               }
                             }
                        },
                        telefono_2: {
                            validators: {
                                integer: {
                                  min: 7,
                                     max: 20,
                                   },
                                     Empty:{
                                    message: 'ingrese número de teléfono'
                                  }
                                }
                           },
                           telefono_1: {
                               validators: {
                                   integer: {
                                     min: 7,
                                        max: 20,
                                      },
                                        Empty:{
                                       message: 'ingrese número de teléfono'
                                     }
                                   }
                              },
                             email: {
                               validators: {
                                           emailAddress: {
                                            message: 'ingrese una dirección de correo electrónico válida'
                                       },
                                           notEmpty: {
                                         message: 'ingrese  una dirección de correo electrónico'
                                       }
                                   }
                     },
                     email_1: {
                       validators: {
                                   emailAddress: {
                                    message: 'ingrese una dirección de correo electrónico válida'
                               },
                                   tEmpty: {
                                 message: 'ingrese  una dirección de correo electrónico'
                               }
                           }
             },
             email_2: {
               validators: {
                           emailAddress: {
                            message: 'ingrese una dirección de correo electrónico válida'
                       },
                           Empty: {
                         message: 'ingrese  una dirección de correo electrónico'
                       }
                   }
     },
                     contacto: {
                         validators: {
                               stringLength: {
                                  min: 2,
                              },
                             notEmpty: {
                                 message: 'ingrese el contacto'
                             }
                         }


                     },
                       nombre: {
                         validators: {
                                     stringLength: {
                                     min: 2,
                                     message: 'El nombre la rentadora debe tener más de 2 caracteres '
                                 },
                                     notEmpty: {
                                     message: 'ingrese el nombre de la rentadora'
                                 }

                         }
                       }
                     }
                 })


                 .on('success.form.bv', function(e) {
                     $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                         $('#reg_form4').data('bootstrapValidator').resetForm();

                     // Prevent form submission
                     e.preventDefault();

                     // Get the form instance
                     var $form = $(e.target);

                     // Get the BootstrapValidator instance
                     var bv = $form.data('bootstrapValidator');

                     // Use Ajax to submit form data
                     $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');
                 });
         });
         //
         $(document).ready(function() {
                $('#reg_form5').bootstrapValidator({
                  message: 'Este valor no es válido',
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        telefono: {
                            validators: {
                                integer: {
                                  min: 7,
                                     max: 20,
                                   },
                                     notEmpty:{
                                    message: 'ingrese número de teléfono'
                                  }
                                }
                           },
                           telefono_2: {
                               validators: {
                                   integer: {
                                     min: 7,
                                        max: 20,
                                      },
                                        Empty:{
                                       message: 'ingrese número de teléfono'
                                     }
                                   }
                              },
                              telefono_3: {
                                  validators: {
                                      integer: {
                                        min: 7,
                                           max: 20,
                                         },
                                           Empty:{
                                          message: 'ingrese número de teléfono'
                                        }
                                      }
                                 },
                                email: {
                                  validators: {
                                              emailAddress: {
                                               message: 'ingrese una dirección de correo electrónico válida'
                                          },
                                              notEmpty: {
                                            message: 'ingrese  una dirección de correo electrónico'
                                          }
                                      }
                        },
                        email_2: {
                          validators: {
                                      emailAddress: {
                                       message: 'ingrese una dirección de correo electrónico válida'
                                  },
                                      Empty: {
                                    message: 'ingrese  una dirección de correo electrónico'
                                  }
                              }
                },
                email_3: {
                  validators: {
                              emailAddress: {
                               message: 'ingrese una dirección de correo electrónico válida'
                          },
                              Empty: {
                            message: 'ingrese  una dirección de correo electrónico'
                          }
                      }
        },
                        contacto: {
                            validators: {
                                  stringLength: {
                                     min: 2,
                                 },
                                notEmpty: {
                                    message: 'ingrese el contacto'
                                }
                            }


                        },
                          nombre: {
                            validators: {
                                        stringLength: {
                                        min: 2,
                                        message: 'El nombre la rentadora debe tener más de 2 caracteres '
                                    },
                                        notEmpty: {
                                        message: 'ingrese el nombre de la rentadora'
                                    }

                            }
                          }
                        }
                    })


                    .on('success.form.bv', function(e) {
                        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                            $('#reg_form5').data('bootstrapValidator').resetForm();

                        // Prevent form submission
                        e.preventDefault();

                        // Get the form instance
                        var $form = $(e.target);

                        // Get the BootstrapValidator instance
                        var bv = $form.data('bootstrapValidator');

                        // Use Ajax to submit form data
                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            console.log(result);
                        }, 'json');
                    });
            });
            //
            $(document).ready(function() {
                   $('#reg_form6').bootstrapValidator({
                       message: 'Este valor no es válido',
                       // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                       feedbackIcons: {
                           valid: 'glyphicon glyphicon-ok',
                           invalid: 'glyphicon glyphicon-remove',
                           validating: 'glyphicon glyphicon-refresh'
                       },
                       fields: {
                           placa: {
                             validators: {
                               notEmpty: {
                                   message: 'la placa del vehiculo es necesaria'
                               },
                               stringLength: {
                                   min:6,
                                   max:7,
                                   message: 'la placa debe tener más de 6 y menos de 7 caracteres '
                               },

                             }
                           },
                           rentadora: {
                             validators: {
                               notEmpty: {
                                   message: 'la rentadora es necesaria'
                               },
                               stringLength: {
                                   min:2,
                                   message: 'la rentadora debe tener más de 2  caracteres '
                               },

                             }
                           },

                          tipo_de_renta: {
                             validators: {
                             notEmpty: {
                                 message: 'El tipo de renta es necesario'
                             },
                             stringLength: {
                                 min:2,
                                 message: 'El tipo de renta  debe tener más de 2 caracteres '
                             },
                           }
                           },
                           activo: {
                             validators: {
                                   notEmpty: {
                                       message: 'Seleccione '
                                   }
                               }
                           },

                     foto:{
                     validators: {
                       file: {
                                         extension: 'png,jpeg,jpg',
                                         message: 'El archivo seleccionado no es una imagen'
                                     }
                           }
                       },


                           }
                       })


                       .on('success.form.bv', function(e) {
                           $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                               $('#reg_form6').data('bootstrapValidator').resetForm();

                           // Prevent form submission
                           e.preventDefault();

                           // Get the form instance
                           var $form = $(e.target);

                           // Get the BootstrapValidator instance
                           var bv = $form.data('bootstrapValidator');

                           // Use Ajax to submit form data
                           $.post($form.attr('action'), $form.serialize(), function(result) {
                               console.log(result);
                           }, 'json');
                       });
               });

$(document).ready(function() {
       $('#reg_form7').bootstrapValidator({
           message: 'Este valor no es válido',
           // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           feedbackIcons: {
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               password: {
                 validators: {
                   notEmpty: {
                       message: 'la contraseña  es necesaria'
                   },
                   stringLength: {
                       min:6,
                       message: 'la contraseña debe tener más de 6  caracteres '
                   },

                 }
               },
               password_confirmation: {
                 validators: {
                   notEmpty: {
                       message: 'Confirmar Contraseña'
                   },
                   stringLength: {
                       min:6,
                       message: 'la contraseña debe tener más de 6  caracteres  '
                   },
                   identical: {
                          field: 'password',
                          message: 'la contraseña no coincide'
                      },
                 }
               },

               name: {
                  validators: {
                  notEmpty: {
                      message: 'el nombre e es necesario'
                  },
                  stringLength: {
                      min:2,
                      message: 'El tipo de renta  debe tener más de 2 caracteres '
                  },
                }
                },


            email: {
              validators: {
                          emailAddress: {
                           message: 'ingrese una dirección de correo electrónico válida'
                      },
                          notEmpty: {
                        message: 'ingrese  una dirección de correo electrónico'
                      }
                  }
                },


                    }
                })


                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                        $('#reg_form7').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        console.log(result);
                    }, 'json');
                });
                });
//   //
  $(document).ready(function() {
         $('#reg_form8').bootstrapValidator({
             message: 'Este valor no es válido',
             // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
             feedbackIcons: {
                 valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
             },
             fields: {
                 password: {
                   validators: {
                     Empty: {
                         message: 'la contraseña  es necesaria'
                     },
                     stringLength: {
                         min:6,
                         message: 'la contraseña debe tener más de 6  caracteres '
                     },

                   }
                 },

                 name: {
                    validators: {
                    notEmpty: {
                        message: 'el nombre e es necesario'
                    },
                    stringLength: {
                        min:2,
                        message: 'El tipo de renta  debe tener más de 2 caracteres '
                    },
                  }
                  },


              email: {
                validators: {
                            emailAddress: {
                             message: 'ingrese una dirección de correo electrónico válida'
                        },
                            notEmpty: {
                          message: 'ingrese  una dirección de correo electrónico'
                        }
                    }
                  },
                  activo: {
                    validators: {
                          notEmpty: {
                              message: 'Seleccione '
                          }
                      }
                  },
                  type: {
                    validators: {
                          notEmpty: {
                              message: 'Seleccione '
                          }
                      }
                  },



                 }
             })


           .on('success.form.bv', function(e) {
               $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                   $('#reg_form8').data('bootstrapValidator').resetForm();

               // Prevent form submission
               e.preventDefault();

               // Get the form instance
               var $form = $(e.target);

               // Get the BootstrapValidator instance
               var bv = $form.data('bootstrapValidator');

               // Use Ajax to submit form data
               $.post($form.attr('action'), $form.serialize(), function(result) {
                   console.log(result);
               }, 'json');
           });
   });

   $(document).ready(function(){
   $('.email').on('click',function(){
      $('.email_1').toggle('slow');
   });
});
$(document).ready(function(){
$('.telefono').on('click',function(){
   $('.telefon_1').toggle('slow');
});
});
$(document).ready(function(){
$('#showhide2').on('click',function(){
   $('.hora').toggle('slow');
});
});

//  $(function () {
// $('.date').datepicker({
// $.fn.datepicker.defaults.format = 'dd/mm/yyyy';
//    autoclose: true
//
// });
// });
$(document).ready(function(){
   $.fn.datepicker.defaults.format = 'yyyy/mm/dd';
$('.datepicker-me').datepicker({
   language: 'es',
       format: "yyyy/mm/dd",
    autoclose: true
    });
    });

    $(document).ready(function(){
       // $.fn.datepicker.defaults.format = 'dd/mm/yyyy';
    $('.buscador').datepicker({
       language: 'es',
           format: "yyyy-mm-dd",
        autoclose: true
        });
        });
