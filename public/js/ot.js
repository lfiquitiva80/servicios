
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

    $( "#ciudad_destino3" ).autocomplete({
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
var usuario = button.data('usuario')
var telefono = button.data('telefono')
var activo = button.data('activo')
var email = button.data('email')
var notas = button.data('notas')
var nit = button.data('nit')
var costo = button.data('costo')
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
modal.find('.modal-body #usuario').val(usuario);
modal.find('.modal-body #id_centrodecostos').val(costo);
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




$('#editarcontrolhorario').on('show.bs.modal', function (event) {
  
var button = $(event.relatedTarget)
//alert(button.data('Hora_de_inicio_Servicio_cliente'));
var id = button.data('id')
var fecha_registro = button.data('fecha_registro')
var hora_inicio_en_ot = button.data('hora_inicio_en_ot')
var hora_final_en_ot = button.data('hora_final_en_ot')
var hora_total_en_ot = button.data('horas_total_ot')
var escolta_id = button.data('escolta_id')
var EscRelevo_id = button.data('escrelevo_id')
var ordenesdeservicio_id = button.data('ordenesdeservicio_id')
var observacion = button.data('observacion')
var estadocontrol = button.data('estadocontrol')
var hora_de_inicio_servicio_cliente = button.data('hora_de_inicio_servicio_cliente')
var hora_final_del_servicio_cliente = button.data('hora_final_del_servicio_cliente')
var total_horas_del_servicio = button.data('total_horas_del_servicio')
var wo_id = button.data('wo_id')
var serviciofijo = button.data('serviciofijo')
var id_usuario = button.data('id_usuario')

//alert(hora_inicio_en_ot);



// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #escolta_id').val(escolta_id);
modal.find('.modal-body #Hora_inicio_en_OTa').val(hora_inicio_en_ot);
modal.find('.modal-body #Hora_Final_en_OTa').val(hora_final_en_ot);
modal.find('.modal-body #Horas_Total_OTa').val(hora_total_en_ot);
modal.find('.modal-body #escolta_id').val(escolta_id);
modal.find('.modal-body #EscRelevo_id').val(EscRelevo_id);
modal.find('.modal-body #Fecha_Registro2').val(fecha_registro);
modal.find('.modal-body #Observacion').val(observacion);
modal.find('.modal-body #estadocontrol').val(estadocontrol);
modal.find('.modal-body #Hora_de_inicio_Servicio_clientea').val(hora_de_inicio_servicio_cliente);
modal.find('.modal-body #Hora_Final_del_Servicio_Clientea').val(hora_final_del_servicio_cliente);
modal.find('.modal-body #Total_Horas_del_Servicioa').val(total_horas_del_servicio);
modal.find('.modal-body #wo').val(wo_id);
modal.find('.modal-body #ordenesdeservicio_id').val(ordenesdeservicio_id);
modal.find('.modal-body #serviciofijo').val(serviciofijo);
modal.find('.modal-body #id_usuario').val(id_usuario);

})

$(document).ready(function() {
  $('#editar_proveedor').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var nit = button.data('nit')
  var nombre = button.data('nombre') 
  
  var modal = $(this)
  
  modal.find('.modal-body #id').val(id);
  modal.find('.modal-body #nit').val(nit);
  modal.find('.modal-body #nombre').val(nombre);
  })
  });
  
  $(document).ready(function() {
      $('#editar_puc').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var cuenta = button.data('cuenta')
      var descripcion = button.data('descripcion') 
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #cuenta').val(cuenta);
      modal.find('.modal-body #descripcion').val(descripcion);
      })
      });
  
   $(document).ready(function() {
          $('#editar_c_costos').on('show.bs.modal', function (event) {
          
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var id_cliente = button.data('id_cliente')
          var centro_de_costos = button.data('centro_de_costos') 
          var nombre = button.data('nombre') 
          
          var modal = $(this)
          
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #id_cliente').val(id_cliente);
          modal.find('.modal-body #centro_de_costos').val(centro_de_costos);
          modal.find('.modal-body #nombre').val(nombre);
          })
          });
    $(document).ready(function() {
      $('#editar_puc').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var cuenta = button.data('cuenta')
      var descripcion = button.data('descripcion') 
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #cuenta').val(cuenta);
      modal.find('.modal-body #descripcion').val(descripcion);
      })
      });


      $(document).ready(function() {
            $('#editar_ot').on('show.bs.modal', function (event) {
            
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nombre = button.data('nombre')
            var cc = button.data('cc') 
            
            var modal = $(this)
            
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #cc').val(cc);
            modal.find('.modal-body #nombre').val(nombre);
            })
            });




$(document).ready(function() {
  $('#editar_lnegocio').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var prefijo = button.data('prefijo')
  var descripcion = button.data('descripcion') 
  
  var modal = $(this)
  
  modal.find('.modal-body #id').val(id);
  modal.find('.modal-body #prefijo').val(prefijo);
  modal.find('.modal-body #descripcion').val(descripcion);
  })
  });

  $(document).ready(function() {
    $('#AnticipoUpdate').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var ordenes = button.data('ordenes')
    var anticipovalor = button.data('anticipovalor') 
    
    var modal = $(this)
    
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #id_ordendeservicio').val(ordenes);
    modal.find('.modal-body #valor').val(anticipovalor);
    })
    });
 $(document).ready(function() {
      $('#JornadaUpdate').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var escolta = button.data('escolta')
      var horainicio = button.data('horainicila') 
      var horafin = button.data('horafin') 
      var fecha = button.data('fecha') 
      
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #id_escolta').val(escolta);
      modal.find('.modal-body #hora_inicial').val(horainicio);
      modal.find('.modal-body #hora_final').val(horafin);
      modal.find('.modal-body #fecha').val(fecha);


      })
      });

   $(document).ready(function() {
        $('#update_barranca').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var itme = button.data('item')
        var descripion = button.data('descripion') 
        var valor = button.data('valor') 
        
        
        var modal = $(this)
        
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #item').val(itme);
        modal.find('.modal-body #descripcion').val(descripion);
        modal.find('.modal-body #valor_mes_con_aiu').val(valor);
  
  
        })
    }); 

  $(document).ready(function() {
      $('#update_bogota').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var itme = button.data('item')
      var descripion = button.data('descripion') 
      var valor = button.data('valor') 
      var unidad = button.data('unidad') 
      
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #item').val(itme);
      modal.find('.modal-body #descripcion').val(descripion);
      modal.find('.modal-body #valor_con_aui').val(valor);
      modal.find('.modal-body #unidad').val(unidad);

      })
  });  
      $(document).ready(function() {  
        $('#editar_prefacturaoxy').on('show.bs.modal', function (event) {

    
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var idcliente = button.data('idcliente')
          var item = button.data('item')
          var orden = button.data('no') 
          var periodo = button.data('periodo') 
          var linea = button.data('linea') 
          var ciudad = button.data('ciudad') 
          var detalle = button.data('detalle') 
          var propuesta = button.data('propuesta') 
          var valoruni = button.data('valoruni') 
          var numerofactura = button.data('numerofactura') 
          var fechaprefactura = button.data('fechaprefactura') 
          var horainicio = button.data('hora_inicio')
          var horafinal = button.data('hora_final')
          var cantidad = button.data('cantidad')  
          var fechaservicio = button.data('fechaservicio') 
          var valortotal = button.data('valortotal') 
          var centro = button.data('centro') 
          var estado= button.data('estado') 
          var obprefactuta = button.data('obprefactura') 
          
          
          var modal = $(this)
          
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #id_cliente').val(idcliente);    
          modal.find('.modal-body #item_de_contrato').val(item);
          modal.find('.modal-body #periodo').val(periodo);
          modal.find('.modal-body #linea_de_negocio').val(linea);
          modal.find('.modal-body #ordendeservicio').val(orden);
          modal.find('.modal-body #ciudad').val(ciudad);
          modal.find('.modal-body #detalle').val(detalle);
          modal.find('.modal-body #propuesta').val(propuesta);
          modal.find('.modal-body #numero_factura').val(numerofactura);
          modal.find('.modal-body #fecha_prefactura').val(fechaprefactura);
          modal.find('.modal-body #editiniciohoraoxy').val(horainicio);
          modal.find('.modal-body #editfinalhoraoxy').val(horafinal);
          modal.find('.modal-body #cantidad').val(cantidad);
          modal.find('.modal-body #fecha_servicio').val(fechaservicio);
          modal.find('.modal-body #valor_unitario').val(valoruni);
          modal.find('.modal-body #valor_total').val(valortotal);
          modal.find('.modal-body #centrodecostos').val(centro);
          modal.find('.modal-body #id_estado_facturacion').val(estado);
          modal.find('.modal-body #observacion_prefactura').val(obprefactuta);

          })
      });
      $(document).ready(function() {  
        $('#revision_prefacturaoxy').on('show.bs.modal', function (event) {

    
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var idcliente = button.data('nit')
          var item = button.data('item')
          var orden = button.data('orden') 
          var periodo = button.data('periodo') 
          var linea = button.data('linea') 
          var ciudad = button.data('ciudad') 
          var detalle = button.data('detalle') 
          var propuesta = button.data('propuesta') 
          var valoruni = button.data('valoruni') 
          var numerofactura = button.data('numerofactura') 
          var fechaprefactura = button.data('fechaprefactura') 
          var horainicio = button.data('hora_inicio')
          var horafinal = button.data('hora_final')
          var cantidad = button.data('cantidad')  
          var fechaservicio = button.data('fechaservicio') 
          var valortotal = button.data('valortotal') 
          var centro = button.data('centro') 
          var estado= button.data('estado') 
          var valorfacturado= button.data('valorfacturado') 
          var observaciones = button.data('observaciones') 
          var facturaproveedor = button.data('facturaproveedor') 
          var fechafactura = button.data('fechafactura')
          var user  =  button.data('user') 
          var obprefactuta = button.data('obprefactura') 

          var modal = $(this)
          
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #id_cliente').val(idcliente);    
          modal.find('.modal-body #item_de_contrato').val(item);
          modal.find('.modal-body #periodo').val(periodo);
          modal.find('.modal-body #linea_de_negocio').val(linea);
          modal.find('.modal-body #id_ordendeservicio').val(orden);
          modal.find('.modal-body #ciudad').val(ciudad);
          modal.find('.modal-body #detalle').val(detalle);
          modal.find('.modal-body #propuesta').val(propuesta);
          modal.find('.modal-body #numero_factura').val(numerofactura);
          modal.find('.modal-body #fecha_prefactura').val(fechaprefactura);
          modal.find('.modal-body #horainicio').val(horainicio);
          modal.find('.modal-body #horafinal').val(horafinal);
          modal.find('.modal-body #cantidad').val(cantidad);
          modal.find('.modal-body #fecha_servicio').val(fechaservicio);
          modal.find('.modal-body #valor_unitario').val(valoruni);
          modal.find('.modal-body #valor_total').val(valortotal);
          modal.find('.modal-body #centrodecostos').val(centro);
          modal.find('.modal-body #id_estado_facturacion').val(estado);
          modal.find('.modal-body #fecha_factura').val(fechafactura);
          modal.find('.modal-body #valor_facturado').val(valorfacturado);
          modal.find('.modal-body #observaciones').val(observaciones);
          modal.find('.modal-body #factura_proveedor').val(facturaproveedor);
          modal.find('.modal-body #responsable').val(user);
          modal.find('.modal-body #observacion_prefactura').val(obprefactuta);

          })
      });

      $(document).ready(function() {
        $('#edit_horaadicional').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var propuesta_economica = button.data('propuesta_economica')
        var tipodetarifa = button.data('tipo_de_tarifa')
        var descripcionhoraadicional = button.data('descripcion_hora_adicional') 
        var valor = button.data('valor') 
        var year = button.data('year') 
        
        var modal = $(this)
        
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #id_propuesta_economica').val(propuesta_economica);
        modal.find('.modal-body #id_tipodetarifa').val(tipodetarifa);
        modal.find('.modal-body #id_descripcionhoraadicional').val(descripcionhoraadicional);
        modal.find('.modal-body #añoedithora').val(year);
        modal.find('.modal-body #valor').val(valor);

  
        })
    });

      $(document).ready(function() {
        $('#editar_tarifasestandar').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var propuesta_economica = button.data('propuesta_economica')
        var tipo = button.data('tipo')
        var descripion = button.data('descripion') 
        // var ciudad = button.data('cuidad') 
        var year = button.data('year') 
        var valorciudad = button.data('valorc')
        var item_oxy = button.data('item_oxy') 
      
        
        var modal = $(this)
        
         modal.find('.modal-body #id').val(id);
         modal.find('.modal-body #id_propuesta_economica').val(propuesta_economica);
         modal.find('.modal-body #tipo_de_tarifa').val(tipo);
         modal.find('.modal-body #descripcion').val(descripion);
        //  modal.find('.modal-body #ciudad').val(ciudad);
         modal.find('.modal-body #año').val(year);
         modal.find('.modal-body #valor_ciudad').val(valorciudad);
         modal.find('.modal-body #item_oxy').val(item_oxy);


  
        })
    });

    $(document).ready(function() {
      $('#edit_tiposdetarifa').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var descripcion = button.data('descripcion') 
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #nombre').val(descripcion);
      })
      });

    $(document).ready(function() {
        $('#editar_propuesta').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var numero_propuesta = button.data('numero_propuesta')
        var cliente = button.data('cliente')
        var antencion = button.data('antencion') 
        var email = button.data('email') 
        var conctacto  =  button.data('contacto_ot')
        var cargo  =  button.data('cargo')
        var fecha  =  button.data('fecha')
        // var dia  =  button.data('dias')
        // var puesto  =  button.data('puesto')
        var descripcion  =  button.data('descripcion')
         var ciudad  =  button.data('ciudad')
        // var condicion_salarial  =  button.data('condicion_salarial')
        // var dotacion  =  button.data('dotacion')
        // var und  =  button.data('und')
        // var vrunitario  =  button.data('valoruni')
        // var vrtotal  =  button.data('valortotal')



        
        
        var modal = $(this)
        
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #id_cliente').val(cliente);
        modal.find('.modal-body #numero_propuesta').val(numero_propuesta);
        modal.find('.modal-body #antencion').val(antencion);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #contacto_ot').val(conctacto);
        modal.find('.modal-body #cargo').val(cargo);
        modal.find('.modal-body #fecha').val(fecha);
        // modal.find('.modal-body #numero_dias').val(dia);
        // modal.find('.modal-body #numero_puesto').val(puesto);
        modal.find('.modal-body #descripcion').val(descripcion);
         modal.find('.modal-body #ciudad').val(ciudad);
        // modal.find('.modal-body #condicion_salarial').val(condicion_salarial);
        // modal.find('.modal-body #dotacion').val(dotacion);
        // modal.find('.modal-body #und').val(und);
        // modal.find('.modal-body #valor_unitario').val(vrunitario);
        // modal.find('.modal-body #valor_total').val(vrtotal);
  
        })
    });


        $(document).ready(function() {
      $('#edit_escaner').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var wo  = button.data('woid')   
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #wo').val(wo);

      })
      });
  


    $(document).ready(function() {
      $('#edit_fs').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var descripcion = button.data('descripcion') 
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #descripcion').val(descripcion);
      })
      });


      $(document).ready(function() {
        $('#edit_codigociudad').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var codigo = button.data('codigo') 
        var ciudad = button.data('ciudad') 
        var departamento = button.data('departamento') 
        var modal = $(this)
        
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #codigo').val(codigo);
        modal.find('.modal-body #ciudad').val(ciudad);
        modal.find('.modal-body #departamento').val(departamento);
        
        })
    });

    $(document).ready(function() {
      $('#editar_prefacturacliente').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var cliente = button.data('cliente')
      var nit = button.data('nit')
      var fs = button.data('fs') 
      var ciudad =  button.data('ciudad') 
      var detalle = button.data('detalle') 
      var escolta =button.data('escolta') 
      var cc = button.data('cc') 
      var propuesta_economica = button.data('propuesta_economica') 
      // var tarifaestandar = button.data('tarifaestandar') 
      // var horaadicional = button.data('horaadicional') 
      var numero  =  button.data('numero')
      var fecha_prefactura  =  button.data('fecha_prefactura')
      var horainicio  =  button.data('horainicio')
      var hora_final  =  button.data('hora_final')
      var fecha_de_servicio  =  button.data('fecha_de_servicio')
      var cantidad  =  button.data('cantidad')
      var valor_unitario  =  button.data('valor_unitario')
      var valor_total  =  button.data('valor_total')
      var ordendeservicio  =  button.data('ordendeservicio')
      var fecha_factura  =  button.data('fecha_factura')
      var factura  =  button.data('factura')
      var estado  =  button.data('estado')
      var valor  =  button.data('valor')
      var responsable  =  button.data('responsable')
      var observacion  =  button.data('observacion')
      var descripcion_factura  =  button.data('descripcion_factura')
      var proveedor  =  button.data('proveedor')




      
      
      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #nombre').val(cliente);
      modal.find('.modal-body #nit').val(nit);
      modal.find('.modal-body #id_fs').val(fs);
      modal.find('.modal-body #id_codigociudad').val(ciudad);
      modal.find('.modal-body #detalle').val(detalle);
      modal.find('.modal-body #datoescolata').val(escolta+' cc:'+cc);
      modal.find('.modal-body .id_propuesta_economica').val(propuesta_economica);
      // modal.find('.modal-body .id_tarifa_estandar').val(tarifaestandar);
      // modal.find('.modal-body .hora_adicional').val(horaadicional);
      modal.find('.modal-body #numero_prefactura').val(numero);
      modal.find('.modal-body #edit_fecha_prefactura').val(fecha_prefactura);
      modal.find('.modal-body #edithora_inicio').val(horainicio);
      modal.find('.modal-body #edithora_final').val(hora_final);
      modal.find('.modal-body #editfecha_de_servicio').val(fecha_de_servicio);
      modal.find('.modal-body #cantidad').val(cantidad);
      modal.find('.modal-body #valor_unitario').val(valor_unitario);
      modal.find('.modal-body #valor_total').val(valor_total);
      modal.find('.modal-body #ordendeservicio').val(ordendeservicio);
      modal.find('.modal-body #edit_fecha_factura').val(fecha_factura);
      modal.find('.modal-body #factura').val(factura);
      modal.find('.modal-body #id_estado_facturacion').val(estado);
      modal.find('.modal-body #valor').val(valor);
      modal.find('.modal-body #responsable').val(responsable);
      modal.find('.modal-body #observacion').val(observacion);
      modal.find('.modal-body #descripcion_factura').val(descripcion_factura);
      modal.find('.modal-body #proveedor').val(proveedor);


      })
  });  


  


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
                        id_centrodecostos: {
                          validators: {
                                notEmpty: {
                                    message: 'Seleccione'
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
                           id_centrodecostos: {
                            validators: {
                                  notEmpty: {
                                      message: 'Seleccione'
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

                         },
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
                           descripcion: {
                             validators: {
                               notEmpty: {
                                   message: 'la descripcion del vehiculo es necesaria'
                               },
                               stringLength: {
                                   min:2,
                                   message: 'la  descripcion  del vehiculo debe  tener más de 2 caracteres '
                               },

                             }
                           },
                           armadura: {
                             validators: {
                               notEmpty: {
                                   message: 'la armadura del vehiculo es necesaria'
                               },
                               stringLength: {
                                   min:2,
                                   message: 'la  armadura del vehiculo tener más de 2 caracteres '
                               },

                             }
                           },
                           color: {
                             validators: {
                               notEmpty: {
                                   message: 'el color del vehiculo es necesario'
                               },
                               stringLength: {
                                   min:2,
                                   message: 'el color  del vehiculo tener más de 2 caracteres '
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
                           id_proveedor: {
                            validators: {
                                  notEmpty: {
                                      message: 'Seleccione '
                                  }
                              }
                          },
                           documento_soat:{
                            validators: {
                              file: {
                                                extension: 'xlsx,xls,pdf',
                                                message: 'El archivo seleccionado no es un excel'
                                            }
                                  }
                              },
                              documento_licencia:{
                                validators: {
                                  file: {
                                                    extension: 'xlsx,xls,pdf',
                                                    message: 'El archivo seleccionado no es un excel'
                                                }
                                      }
                                  },
                                  documento_poliza:{
                                    validators: {
                                      file: {
                                                        extension: 'xlsx,xls,pdf',
                                                        message: 'El archivo seleccionado no es un excel'
                                                    }
                                          }
                                      },
                                      documento_tecnomecanica:{
                                        validators: {
                                          file: {
                                                            extension: 'xlsx,xls,pdf',
                                                            message: 'El archivo seleccionado no es un excel'
                                                        }
                                              }
                                          },
                                          documento_blindaje:{
                                            validators: {
                                              file: {
                                                                extension: 'xlsx,xls,pdf',
                                                                message: 'El archivo seleccionado no es un excel'
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

//

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

//
$(document).ready(function() {
       $('#reg_form9').bootstrapValidator({
           message: 'Este valor no es válido',
           // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           feedbackIcons: {
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               solicitante_interno2: {
                 validators: {
                   notEmpty: {
                       message: 'el solicitante  es necesario'
                   },
                   stringLength: {
                       min:2,
                       message: 'el solicitante debe tener más de 2  caracteres '
                   },

                 }
               },

               ciudad_destino: {
                  validators: {
                  notEmpty: {
                      message: 'la cuidad de destino  es necesaria'
                  },
                  stringLength: {
                      min:2,
                      message: 'la cuidad de detino  debe tener más de 2 caracteres '
                  },
                }
                },


            fecha_solicitud: {
              validators: {
                notEmpty: {
		   message: 'la fecha de solicitud es necesaria'
		 },

           date:{
                format: 'DD/MM/YYYY',
                 message: 'la fecha de solicitud debe ser formato fecha'
               }

                }
                },


            fecha_inicio_servicio: {
                  validators: {
                    notEmpty: {
              message: 'la fecha de  inico del servicio es necesaria'
              },
               date:{
                        format: 'DD/MM/YYYY',
                     message: 'la fecha  de inico del servicio debe ser formato fecha'
                   }

                    }
                    },

                cliente: {
                  validators: {
                        notEmpty: {
                            message: 'Seleccione '
                        }
                    }
                },
                detalle_del_servicio: {
                   validators: {
                   notEmpty: {
                       message: 'el detalle del  servicio  es necesario'
                   },
                   stringLength: {
                       min:2,
                       message: 'el detalle del servicio  debe tener más de 2 caracteres '
                   },
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

$(document).ready(function() {
       $('#reg_form9').bootstrapValidator({
           message: 'Este valor no es válido',
           // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           feedbackIcons: {
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               solicitante_interno2: {
                 validators: {
                   notEmpty: {
                       message: 'el solicitante  es necesario'
                   },
                   stringLength: {
                       min:2,
                       message: 'el solicitante debe tener más de 2  caracteres '
                   },

                 }
               },

               ciudad_destino: {
                  validators: {
                  notEmpty: {
                      message: 'la cuidad de destino  es necesaria'
                  },
                  stringLength: {
                      min:2,
                      message: 'la cuidad de detino  debe tener más de 2 caracteres '
                  },
                }
                },


            fecha_solicitud: {
              validators: {
                notEmpty: {
		   message: 'la fecha de solicitud es necesaria'
		 },

           date:{
                format: 'DD/MM/YYYY',
                 message: 'la fecha de solicitud debe ser formato fecha'
               }

                }
                },


            fecha_inicio_servicio: {
                  validators: {
                    notEmpty: {
              message: 'la fecha de  inico del servicio es necesaria'
              },
               date:{
                        format: 'DD/MM/YYYY',
                     message: 'la fecha  de inico del servicio debe ser formato fecha'
                   }

                    }
                    },

                cliente: {
                  validators: {
                        notEmpty: {
                            message: 'Seleccione '
                        }
                    }
                },
                detalle_del_servicio: {
                   validators: {
                   notEmpty: {
                       message: 'el detalle del  servicio  es necesario'
                   },
                   stringLength: {
                       min:2,
                       message: 'el detalle del servicio  debe tener más de 2 caracteres '
                   },
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

 //   //
   $(document).ready(function() {
          $('#reg_form10').bootstrapValidator({
              message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                fecha1: {
                      validators: {
                        notEmpty: {
                  message: 'la fecha de  inico es necesaria'
                  },
                   date:{
                            format: 'YYYY/MM/DD',
                         message: 'la fecha de inicio debe ser formato fecha'
                       }

                        }
                        },
                        fecha2: {
                              validators: {
                                notEmpty: {
                          message: 'la fecha de  finalizacion es necesaria'
                          },
                           date:{
                                      format: 'YYYY/MM/DD',
                                 message: 'la fecha finalizacion debe ser formato fecha'
                               }

                                }
                                },



                  }
              })


            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                    $('#reg_form10').data('bootstrapValidator').resetForm();

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

$(function () {
  $('#fecha1').datetimepicker({
    locale: 'es',
    format: 'YYYY-MM-DD'

  });
});
$(function () {
  $('#fecha2').datetimepicker({
    locale: 'es',
    format: 'YYYY-MM-DD'

  });
});

$(function () {
                $('#datepicker-me').datetimepicker({
                  locale: 'es',
                   format: 'YYYY/MM/DD HH:mm'
                });
            });
  $(function () {
                            $('#datepicker-me2').datetimepicker({
                              locale: 'es',
                              format: 'YYYY/MM/DD HH:mm'

                            });
                        });
  $(function () {
                        $('#datepicker-me3').datetimepicker({
                          locale: 'es',
                          format: 'YYYY/MM/DD'

                        });
                    });
                    $(function () {
                      $('#datepicker-me4').datetimepicker({
                        locale: 'es',
                        format: 'YYYY/MM/DD'

                      });
                  });
                  $(function () {
                    $('#datepicker-me6').datetimepicker({
                      locale: 'es',
                      format: 'YYYY/MM/DD'

                    });
                });
                $(function () {
                  $('#datepicker-me7').datetimepicker({
                    locale: 'es',
                    format: 'YYYY/MM/DD'

                  });
              });
              $(function () {
                $('#datepicker-me8').datetimepicker({
                  locale: 'es',
                  format: 'YYYY/MM/DD'

                });
            });
            $(function () {
              $('#datepicker-me9').datetimepicker({
                locale: 'es',
                format: 'YYYY/MM/DD'

              });
          });
          $(function () {
            $('#datepicker-me10').datetimepicker({
              locale: 'es',
              format: 'YYYY/MM/DD'

            });
        });
        $(function () {
          $('#mes').datetimepicker({
            locale: 'es',
            viewMode: 'years',
             format: 'YYYY/MM'
    
          });
      }); 
      

        $(function () {
          $('.mes').datetimepicker({
            locale: 'es',
            viewMode: 'years',
             format: 'YYYY/MM'
    
          });
      }); 
      
      $(function () {
        $('.buscarmes').datetimepicker({
          locale: 'es',
          viewMode: 'years',
           format: 'YYYY/MM'
  
        });
    });

       
    
       $(function () {
        $('.fecha').datetimepicker({
          locale: 'es',
          format: 'YYYY-MM-DD'

        });
    });
    $(function () {
      $('.fechapropuesta').datetimepicker({
        locale: 'es',
        format: 'YYYY-MM-DD'

      });
  });
   

    

    $(function () {
      $('#fecha').datetimepicker({
        locale: 'es',
        format: 'YYYY-MM-DD'

      });
  });  
  $(function () {
    $('.fecha_prefactura').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'

    });
});   
$(function () {
  $('.fecha_servicio').datetimepicker({
    locale: 'es',
    format: 'YYYY-MM-DD'

  });
});       
     $(function () {
      $('.edit_fechaprefactura').datetimepicker({
        locale: 'es',
        format: 'YYYY-MM-DD'
  
      });
  });   

  $(function () {
    $('#edit_fecha_factura').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'

    });
});

  $(function () {
    $('.edit_fechaservicio').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'
  
    });
  });   

  $(function () {
    $('#createiniciohoraoxy').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });

  $(function () {
    $('#createfinalhoraoxy').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });

  $(function () {
    $('#editiniciohoraoxy').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });

  $(function () {
    $('#editfinalhoraoxy').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });

  $(function () {
    $('.buscador').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'
  
    });
  }); 

  $(function () {
    $('#año').datetimepicker({
      locale: 'es',
      format: 'YYYY'
  
    });
  }); 
  $(function () {
    $('#añocreate').datetimepicker({
      locale: 'es',
      format: 'YYYY'
  
    });
  });

  $(function () {
    $('#añohora').datetimepicker({
      locale: 'es',
      format: 'YYYY'
  
    });
  });
  $(function () {
    $('#añoedithora').datetimepicker({
      locale: 'es',
      format: 'YYYY'
  
    });
  });

  $(function () {
    $('#create_fecha_prefactura').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'
  
    });
  });
  $(function () {
    $('#createfecha_de_servicio').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'
  
    });
  });
  $(function () {
    $('#createhora_inicio').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });

  $(function () {
    $('#createhora_final').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });
  
  $(function () {
    $('#edit_fecha_prefactura').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'
  
    });
  });
  $(function () {
    $('#editfecha_de_servicio').datetimepicker({
      locale: 'es',
      format: 'YYYY-MM-DD'
  
    });
  });
  $(function () {
    $('#edithora_inicio').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });

  $(function () {
    $('#edithora_final').datetimepicker({
      locale: 'es',
      format: 'HH:mm'
    });
  });
   

    


$(document).ready(function() {
    $('#FormCreateControl').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            escolta_id: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El escolta es un campo requerido!'
                    }
                }
            },
            Fecha_Registro: {
                validators: {
                    notEmpty: {
                        message: 'La fecha es un campo requerido!"'
                    }
                }
            }
        }
    });
});



          $(document).ready(function() {
            $('#form_proveedor').bootstrapValidator({
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
              }})
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                        $('#form_proveedor').data('bootstrapValidator').resetForm();
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
          $('#form_proveedor1').bootstrapValidator({
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
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_proveedor1').data('bootstrapValidator').resetForm();
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
          $('#form_proveedor').bootstrapValidator({
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
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_proveedor').data('bootstrapValidator').resetForm();
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
        $('#form_puc').bootstrapValidator({
           message: 'Este valor no es válido',
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
          fields: {
              cuenta: {
                      validators: {
                            numeric: {
                            min: 2,
                            },
                            notEmpty: {
                            message: 'ingrese el número del cuenta'
                           }
                      }
                  }, 
                  descripcion : {
                       validators: {
                                stringLength: {
                                  min: 2,
                                  message: 'la descripción  del la cuenta debe tener más de 2 caracteres '
                                  },
                              notEmpty: {
                                message: 'la descripción  del la cuenta  es necesaria'
                              }
                          }
                      },  
          }})
            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                    $('#form_puc').data('bootstrapValidator').resetForm();
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
          $('#form_puc1').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
            fields: {
                cuenta: {
                        validators: {
                              numeric: {
                              min: 2,
                              },
                              notEmpty: {
                              message: 'ingrese el número del cuenta'
                             }
                        }
                    }, 
                    descripcion : {
                         validators: {
                                  stringLength: {
                                    min: 2,
                                    message: 'la descripción  del la cuenta debe tener más de 2 caracteres '
                                    },
                                notEmpty: {
                                  message: 'la descripción  del la cuenta  es necesaria'
                                }
                            }
                        },  
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_puc1').data('bootstrapValidator').resetForm();
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
          $('#costos').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
            fields: {
              id_cliente: {
                        validators: {
                              
                              notEmpty: {
                              message: 'ingrese el número del cuenta'
                             }
                        }
                    }, 
                    centro_de_costos: {
                         validators: {
                                numeric: {
                                min: 2,
                                 },
                                notEmpty: {
                                  message: 'el centro de cosoto equivalente es necesario'
                                }
                            }
                        },  
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_centro_de_costos').data('bootstrapValidator').resetForm();
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
          $('#ctoseditar').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
            fields: {
              id_cliente: {
                        validators: {
                              
                              notEmpty: {
                              message: 'ingrese el número del cuenta'
                             }
                        }
                    }, 
                    centro_de_costos: {
                         validators: {
                                numeric: {
                                min: 2,
                                 },
                                notEmpty: {
                                  message: 'el centro de cosoto equivalente es necesario'
                                }
                            }
                        },  
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#ctoseditar').data('bootstrapValidator').resetForm();
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
          $('#otCreate').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
            fields: {
                cc: {
                        validators: {
                              numeric: {
                              min: 2,
                              },
                              notEmpty: {
                              message: 'ingrese el número del la  cc'
                             }
                        }
                    }, 
                    nombre : {
                         validators: {
                                  stringLength: {
                                    min: 2,
                                    message: 'el nombre debe  tener más de 2 caracteres '
                                    },
                                notEmpty: {
                                  message: 'el nombre  es necesario'
                                }
                            }
                        },  
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_puc').data('bootstrapValidator').resetForm();
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
          $('#ot_update').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
            fields: {
                cc: {
                        validators: {
                              numeric: {
                              min: 2,
                              },
                              notEmpty: {
                              message: 'ingrese el número del la  cc'
                             }
                        }
                    }, 
                    nombre : {
                         validators: {
                                  stringLength: {
                                    min: 2,
                                    message: 'el nombre debe  tener más de 2 caracteres '
                                    },
                                notEmpty: {
                                  message: 'el nombre  es necesario'
                                }
                            }
                        },  
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_puc').data('bootstrapValidator').resetForm();
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
        $('#lnegocioCreate').bootstrapValidator({
           message: 'Este valor no es válido',
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
          fields: {
              prefijo: {
                      validators: {
                               stringLength: {
                                min: 2,
                                max:4,
                                message: 'el prefijo debe tener minimo  2 y maximo 4 caracteres'
                               },
                            notEmpty: {
                            message: 'ingrese el prefijo'
                           }
                      }
                  }, 
                  descripcion : {
                       validators: {
                                stringLength: {
                                  min: 2,
                                  message: 'la descripción la linea de negocio debe tener más de 2 caracteres '
                                  },
                              notEmpty: {
                                message: 'la descripción la linea de negocio es necesaria'
                              }
                          }
                      },  
          }})
            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                    $('#lnegocioCreate').data('bootstrapValidator').resetForm();
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
          $('#update_lnegocio').bootstrapValidator({
             message: 'Este valor no es válido',
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
            fields: {
                prefijo: {
                        validators: {
                                 stringLength: {
                                  min: 2,
                                  max:4,
                                  message: 'el prefijo debe tener minimo  2 y maximo 4 caracteres'
                                 },
                              notEmpty: {
                              message: 'ingrese el prefijo'
                             }
                        }
                    }, 
                    descripcion : {
                         validators: {
                                  stringLength: {
                                    min: 2,
                                    message: 'la descripción la linea de negocio debe tener más de 2 caracteres '
                                    },
                                notEmpty: {
                                  message: 'la descripción la linea de negocio es necesaria'
                                }
                            }
                        },  
            }})
              .on('success.form.bv', function(e) {
                  $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                      $('#form_puc1').data('bootstrapValidator').resetForm();
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
         $('#AnticipoCreate').bootstrapValidator({
           message: 'Este valor no es válido',
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
          fields: {
            id_ordendeservicio: {
                    validators: {
                          notEmpty: {
                              message: 'Seleccione una Orden De Servicio'
                          }
                      }
                  },
                  valor: {
                    validators: {
                            numeric: {
                            min: 4,
                        },
                            notEmpty: {
                            message: 'ingrese el valor del anticipo'
                        }
                    }
                }, 
          }})
            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                    $('#AnticipoCreate').data('bootstrapValidator').resetForm();
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
          $('#AnticipoUpdate').bootstrapValidator({
            message: 'Este valor no es válido',
             // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
             feedbackIcons: {
                 valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
             },
           fields: {
             id_ordendeservicio: {
                     validators: {
                           notEmpty: {
                               message: 'Seleccione una Orden De Servicio'
                           }
                       }
                   },
                   valor: {
                     validators: {
                             numeric: {
                             min: 4,
                         },
                             notEmpty: {
                             message: 'ingrese el valor del anticipo'
                         }
                     }
                 }, 
           }})
             .on('success.form.bv', function(e) {
                 $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                     $('#AnticipoUpdate').data('bootstrapValidator').resetForm();
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
    $('#tarifasbarrancaCreate').bootstrapValidator({
      message: 'Este valor no es válido',
       // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       feedbackIcons: {
           valid: 'glyphicon glyphicon-ok',
           invalid: 'glyphicon glyphicon-remove',
           validating: 'glyphicon glyphicon-refresh'
       },
     fields: {
      item: {
        validators: {
                
              notEmpty: {
              message: 'ingrese el Item'
             },
        
        // regexp: {
        //     regexp: /^[1-9]\d{0,2}(\,\d{3})*(,\d+)?$/i,
        //     message: 'EL item debe tener una ,'
        //      }
          }
      }, 
      descripcion: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la Descripcion '
             }
        }
      }, 
      
      valor_con_aui: {
             validators: {
                numeric: {
                min: 2
                
                },
                   notEmpty: {
                   message: 'el valor mes con aiu es necesario'
                  }
        //       //     regexp: {
        //       //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
        //       //     message: 'EL valor digitado no es valiado'
                // }
               }
             },
                   
        }})     
       .on('success.form.bv', function(e) {
           $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
               $('#tarifasbarrancaCreate').data('bootstrapValidator').resetForm();
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
    $('#tarifasbarrancaUpdate').bootstrapValidator({
      message: 'Este valor no es válido',
       // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       feedbackIcons: {
           valid: 'glyphicon glyphicon-ok',
           invalid: 'glyphicon glyphicon-remove',
           validating: 'glyphicon glyphicon-refresh'
       },
     fields: {
      item: {
        validators: {
                
              notEmpty: {
              message: 'ingrese el Item'
             },
          //    regexp: {
          //     regexp: /^[1-9]\d{0,2}(\,\d{3})*(,\d+)?$/i,
          //     message: 'EL item debe tener una ,'
          //  }
        }
      }, 
      descripcion: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la Descripcion '
             }
        }
      }, 
      
      valor_con_aui: {
            validators: {
              numeric: {
                min: 2
               
                },
                  notEmpty: {
                  message: 'el valor mes con aiu es necesario'
                 } 
              //     regexp: {
              //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
              //     message: 'EL valor digitado no es valiado'
              //  }
              }
            },
                   
        }})     
       .on('success.form.bv', function(e) {
           $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
               $('#tarifasbarrancaUpdate').data('bootstrapValidator').resetForm();
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
      $('#periodobarranca').bootstrapValidator({
        message: 'Este valor no es válido',
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
       fields: {
        item: {
              validators: {
               notEmpty: {
                message: 'Seleccione Item '
               }
            }
          },
          valor_con_aui: {
              validators: {
                numeric: {
                  min: 2
                  },
                    notEmpty: {
                    message: 'el valor mes con aiu es necesario'
                   } 
                //     regexp: {
                //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
                //     message: 'EL valor digitado no es valiado'
                //  }
                }
              },
                     
          }})     
         .on('success.form.bv', function(e) {
             $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                 $('#periodobarranca').data('bootstrapValidator').resetForm();
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
      $('#tarifasbogotaCreate').bootstrapValidator({
        message: 'Este valor no es válido',
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
       fields: {
        item: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese el Item'
               },
              //   regexp: {
              //    regexp: /^[a-z]\d{0,1}(\,\d{2})*(,\d+)?$/i,
              //    message: 'EL item debe tener una ,'
              // }
          }
        }, 
        descripcion: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese la Descripcion '
               }
          }
        }, 
        unidad: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese la unidad '
               }
          }
        }, 
        
         valor_con_aui: {
              validators: {
                numeric: {
                  min: 2
                  },
                    notEmpty: {
                    message: 'el valor mes con aiu es necesario'
                   } 
                //     regexp: {
                //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
                //     message: 'EL valor digitado no es valiado'
                //  }
                }
              },
                     
          }})     
         .on('success.form.bv', function(e) {
             $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                 $('#tarifasbogotaCreate').data('bootstrapValidator').resetForm();
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
    $('#tarifasbogotaUpdate').bootstrapValidator({
      message: 'Este valor no es válido',
       // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       feedbackIcons: {
           valid: 'glyphicon glyphicon-ok',
           invalid: 'glyphicon glyphicon-remove',
           validating: 'glyphicon glyphicon-refresh'
       },
     fields: {
      item: {
        validators: {
                
              notEmpty: {
              message: 'ingrese el Item'
             },
          //    regexp: {
          //     regexp: /^[1-9]\d{0,1}(\,\d{3})*(,\d+)?$/i,
          //     message: 'EL item debe tener una ,'
          //  }
        }
      }, 
      descripcion: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la Descripcion '
             }
        }
      }, 
      unidad: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la unidad '
             }
        }
      }, 
      
       valor_con_aui: {
            validators: {
              numeric: {
                min: 2
                },
                  notEmpty: {
                  message: 'el valor mes con aiu es necesario'
                 }
              //     regexp: {
              //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
              //     message: 'EL valor digitado no es valiado'
              //  }
              }
            },
                   
        }})     
       .on('success.form.bv', function(e) {
           $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
               $('#tarifasbogotaCreate').data('bootstrapValidator').resetForm();
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
      $('#periodobogota').bootstrapValidator({
        message: 'Este valor no es válido',
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
       fields: {
        item: {
              validators: {
               notEmpty: {
                message: 'Seleccione Item '
               }
            }
          },
          valor_con_aui: {
              validators: {
                numeric: {
                  min: 2
                  },
                    notEmpty: {
                    message: 'el valor mes con aiu es necesario'
                   }
                //     regexp: {
                //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
                //     message: 'EL valor digitado no es valiado'
                //  }

                }
              },
                     
          }})     
         .on('success.form.bv', function(e) {
             $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                 $('#periodobogota').data('bootstrapValidator').resetForm();
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
    $('#prefacturaoxyCreate').bootstrapValidator({
      message: 'Este valor no es válido',
       // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       feedbackIcons: {
           valid: 'glyphicon glyphicon-ok',
           invalid: 'glyphicon glyphicon-remove',
           validating: 'glyphicon glyphicon-refresh'
       },
     fields: {
      id_cliente: {
            validators: {
             notEmpty: {
              message: 'Seleccione el cliente '
             }
          }
        },
      periodo: {
          validators: {
           notEmpty: {
            message: 'Seleccione el periodo '
           }
        }
      },
      item_de_contrato: {
          validators: {
           notEmpty: {
            message: 'Seleccione el item del el contrato '
           }
        }
      },
      linea_de_negocio: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la linea de negocio '
             }
        }
      }, 
      id_ordendeservicio: {
          validators: {
           notEmpty: {
            message: 'Seleccione la orden de servcio '
           }
        }
      },
      cuidad: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la cuidad'
             }
        }
      },
      ciudad: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la ciudad'
             }
        }
      },

      propuesta: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la propuesta'
             }
        }
      },
      numero_factura: {
        validators: {
                
              notEmpty: {
              message: 'ingrese la propuesta'
             }
        }
      },
      fecha_prefactura:{
         validators: {
            notEmpty: {
              message: 'la fecha prefactura'
             },
          date:{
             format: 'YYYY/MM/DD',
               message: 'el formato de la fecha prefactura es incorrecta'
               }
          }  
      },  
      hora_inicio: {
        validators: {
              notEmpty: {
              message: 'ingrese la hora de inicio'
             }
        }
      },
      hora_final: {
        validators: {
              notEmpty: {
              message: 'ingrese la hora de finalización'
             }
        }
      },
      cantidad: {
        validators: {
          numeric: {
            min: 1,
          },
          notEmpty: {
           message: 'ingrese un número'
              }
          }
      },  
      fecha_servicio:{
        validators: {
           notEmpty: {
             message: 'la fecha del  servicio'
            },
         date:{
            format: 'YYYY/MM/DD',
              message: 'el formato de la fecha de servicio es incorrecta'
              }
         }  
     }, 
     centrodecostos: {
      validators: {
            notEmpty: {
            message: 'ingrese el centro de costos'
           }
      }
    },
    id_estado_facturacion: {
          validators: {
           notEmpty: {
            message: 'Seleccione'
           }
        }
        
      },  
      observacion_prefactura: {
        validators: {
          stringLength: {
            min: 2,
               message: 'la observacion debe tener más de 2 caracteres '
              },
            Empty: {
              message: 'ingrese observacion'
             }

        }
      },  
         
        }})     
       .on('success.form.bv', function(e) {
           $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
               $('#prefacturaoxyCreate').data('bootstrapValidator').resetForm();
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
      $('#prefacturaoxyEdit').bootstrapValidator({
        message: 'Este valor no es válido',
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
       fields: {
        id_cliente: {
              validators: {
               notEmpty: {
                message: 'Seleccione el cliente '
               }
            }
          },
        periodo: {
            validators: {
             notEmpty: {
              message: 'Seleccione el periodo '
             }
          }
        },
        item_de_contrato: {
            validators: {
             notEmpty: {
              message: 'Seleccione el item del el contrato '
             }
          }
        },
        linea_de_negocio: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese la linea de negocio '
               }
          }
        }, 
        id_ordendeservicio: {
            validators: {
             notEmpty: {
              message: 'Seleccione la orden de servcio '
             }
          }
        },
        ciudad: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese la ciudad'
               }
          }
        },
        propuesta: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese la propuesta'
               }
          }
        },
        numero_factura: {
          validators: {
                  
                notEmpty: {
                message: 'ingrese la propuesta'
               }
          }
        },
        fecha_prefactura:{
           validators: {
              notEmpty: {
                message: 'la fecha prefactura'
               },
            date:{
               format: 'YYYY/MM/DD',
                 message: 'el formato de la fecha prefactura es incorrecta'
                 }
            }  
        },  
        hora_inicio: {
          validators: {
                notEmpty: {
                message: 'ingrese la hora de inicio'
               }
          }
        },
        hora_final: {
          validators: {
                notEmpty: {
                message: 'ingrese la hora de finalización'
               }
          }
        },
        cantidad: {
          validators: {
            numeric: {
              min: 1,
            },
            notEmpty: {
             message: 'ingrese un número'
                }
            }
        },  
        fecha_servicio:{
          validators: {
             notEmpty: {
               message: 'la fecha del  servicio'
              },
           date:{
              format: 'YYYY/MM/DD',
                message: 'el formato de la fecha de servicio es incorrecta'
                }
           }  
       }, 
       centrodecostos: {
        validators: {
              notEmpty: {
              message: 'ingrese el centro de costos'
             }
        }
      },
      id_estado_facturacion: {
            validators: {
             notEmpty: {
              message: 'Seleccione '
             }
          }
        },   
        observacion_prefactura: {
        validators: {
          stringLength: {
            min: 2,
               message: 'la observacion debe tener más de 2 caracteres '
              },
            Empty: {
              message: 'ingrese observacion'
             }

        }
      },  
        
          }})     
         .on('success.form.bv', function(e) {
             $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                 $('#prefacturaoxyEdit').data('bootstrapValidator').resetForm();
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
      $('#prefacturaoxyrevision').bootstrapValidator({
        message: 'Este valor no es válido',
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
       fields: {
        fecha_factura:{
          validators: {
             notEmpty: {
               message: 'la fecha de factura es necesaria'
              },
           date:{
              format: 'YYYY/MM/DD',
                message: 'el formato de la fecha de servicio es incorrecta'
                }
           }  
       },
        id_estado_facturacion: {
            validators: {
             notEmpty: {
              message: 'Seleccione '
             }
          }
        },

        valor_facturado: {
              validators: {
                numeric: {
                  min: 2,
                },
                    notEmpty: {
                    message: 'el valor facturado es necesario'
                   }
                //     regexp: {
                //      regexp: /^[1-9]\d{0,2}(\.\d{3})*(,\d+)?$/i,
                //     message: 'EL valor digitado no es valiado'
                //  }
                }
              },
        observaciones: {
                validators: {
                      notEmpty: {
                      message: 'ingrese la observacion'
                     }
                }
              }, 
      
              factura_proveedor: {
                validators: {
                      notEmpty: {
                      message: 'ingrese la factura proveedor'
                     }
                }
              }, 
                     
          }})     
         .on('success.form.bv', function(e) {
             $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                 $('#prefacturaoxyrevision').data('bootstrapValidator').resetForm();
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
    $('#correcciones').bootstrapValidator({
      message: 'Este valor no es válido',
       // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       feedbackIcons: {
           valid: 'glyphicon glyphicon-ok',
           invalid: 'glyphicon glyphicon-remove',
           validating: 'glyphicon glyphicon-refresh'
       },
     fields: {
      asunto: {
        validators: {
              notEmpty: {
              message: 'ingrese el titulo'
             }
        }
      },
      descripcion: {
        validators: {
              notEmpty: {
              message: 'ingrese la descripcion '
             }
        }
      },

                   
        }})     
       .on('success.form.bv', function(e) {
           $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
               $('#correcciones').data('bootstrapValidator').resetForm();
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
  $('#horaadicionalCreate').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_propuesta_economica: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },
    id_tipodetarifa: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    id_descripcionhoraadicional: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    year:{
      validators: {
         notEmpty: {
           message: 'el año es necesario'
          }
        }
   },
    
   valor: {
          validators: {
            numeric: {
              min: 2,
            },
                notEmpty: {
                message: 'el valor ciudad necesario'
               }
            }
          }
          
    

                 
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#horaadicionalCreate').data('bootstrapValidator').resetForm();
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
  $('#horaadicionalUpdate').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_propuesta_economica: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },
    id_tipodetarifa: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    id_descripcionhoraadicional: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    year:{
      validators: {
         notEmpty: {
           message: 'el año es necesario'
          }
        }
   },
    
   valor: {
          validators: {
            numeric: {
              min: 2,
            },
                notEmpty: {
                message: 'el valor ciudad necesario'
               }
            }
          }
          
    

                 
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#horaadicionalUpdate').data('bootstrapValidator').resetForm();
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
  $('#tarifasestandarCreate').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_propuesta_economica: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },
    id_tipodetarifa: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    id_descripciontarifa: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },
    year:{
      validators: {
         notEmpty: {
           message: 'el año es necesario'
          }
        }
   },
    
    valor_ciudad: {
          validators: {
            numeric: {
              min: 2,
            },
                notEmpty: {
                message: 'el valor ciudad necesario'
               }
            }
          }
          
    

                 
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#tarifasestandarCreate').data('bootstrapValidator').resetForm();
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
  $('#tarifasestandarUpdate').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_propuesta_economica: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    id_tipodetarifa: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },

    id_descripciontarifa: {
      validators: {
       notEmpty: {
        message: 'Seleccione '
       }
     }
    },
   
    

    year:{
      validators: {
         notEmpty: {
           message: 'el año es necesario'
          }
        }
   },
    valor_ciudad: {
          validators: {
            numeric: {
              min: 2,
            },
                notEmpty: {
                message: 'el valor ciudad necesario'
               }
            }
          }

                 
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#tarifasestandarUpdate').data('bootstrapValidator').resetForm();
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
  $('#tipodetarifaCreate').bootstrapValidator({
     message: 'Este valor no es válido',
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
    fields: {
      nombre : {
                 validators: {
                          stringLength: {
                            min: 2,
                            message: 'la descripción debe tener más de 2 caracteres '
                            },
                        notEmpty: {
                          message: 'la descripción es necesaria'
                        }
                    }
                },  
    }})
      .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
              $('#tipodetarifaCreate').data('bootstrapValidator').resetForm();
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
  $('#tipodetarifaUpdate').bootstrapValidator({
     message: 'Este valor no es válido',
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
    fields: {
      nombre : {
                 validators: {
                          stringLength: {
                            min: 2,
                            message: 'la descripción debe tener más de 2 caracteres '
                            },
                        notEmpty: {
                          message: 'la descripción es necesaria'
                        }
                    }
                },  
    }})
      .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
              $('#tipodetarifaUpdate').data('bootstrapValidator').resetForm();
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
  $('#propuestaeconomicaCreate').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    numero_propuesta: {
      validators: {
           notEmpty: {
            message: 'ingrese el numero de la propuesta economica'
          }
       }
    },
    id_cliente: {
       validators: {
          notEmpty: {
            message: 'Seleccione '
         }
      }
    },
    antencion: {
      validators: {
           notEmpty: {
            message: 'ingrese la antencion'
          }
       }
    },
    email: {
      validators: {
           notEmpty: {
            message: 'ingrese el email'
          },
          regexp: {
            regexp:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
            message: 'EL email no es correcto,'
         }
       }
    },
    contacto_ot: {
      validators: {
           notEmpty: {
            message: 'ingrese el conctacto'
          }
       }
    },
    cargo: {
      validators: {
           notEmpty: {
            message: 'ingrese el cargo'
          }
       }
    },
    
    fecha:{
      validators: {
         notEmpty: {
           message: 'la fecha de factura es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha de servicio es incorrecta'
            }
       }  
   },
 

    //  numero_dia: {
    //       validators: {
    //         numeric: {
    //           min: 1,
    //         },
    //         notEmpty: {
    //             message: 'el numero  de dias  es necesario'
    //          }
    //     }
    // },

  
    //  numero_puesto: {
    //      validators: {
    //        numeric: {
    //         min: 1,
    //       },
    //     notEmpty: {
    //         message: 'el numero de puestos es necesario'
    //      }
    //    }
    // },
    descripcion: {
      validators: {
        notEmpty: {
          message: 'ingrese la descripcion del servicio'
        }
      }
   }, 
   id_ciudad: {
       validators: {
         notEmpty: {
          message: 'ingrese la ciudad'
         }
       }
     }
    //  condicion_salarial: {
    //   validators: {
    //     notEmpty: {
    //      message: 'ingrese la condicion salarial'
    //     }
    //   }
    // }, 
    // dotacion: {
    //   validators: {
    //        notEmpty: {
    //         message: 'ingrese el la dotacion'
    //       }
    //    }
    // }, 
    // und: {
    //   validators: {
    //        notEmpty: {
    //         message: 'ingrese la und'
    //       }
    //    }
    // },         
    // valor_unitario: {
    //   validators: {
    //     numeric: {
    //      min: 1
    //    },
    //    notEmpty: {
    //      message: 'el valor unitario es necesario'
    //    }
    //   }
    // }       
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#propuestaeconomicaCreate').data('bootstrapValidator').resetForm();
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
  $('#propuestaeconomicaUpdate').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {
     
    numero_propuesta: {
      validators: {
           notEmpty: {
            message: 'ingrese el numero de la propuesta economica'
          }
       }
    },
    id_cliente: {
       validators: {
          notEmpty: {
            message: 'Seleccione '
         }
      }
    },
    antencion: {
      validators: {
           notEmpty: {
            message: 'ingrese la antencion'
          }
       }
    },
    email: {
      validators: {
           notEmpty: {
            message: 'ingrese el email'
          },
          regexp: {
            regexp:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
            message: 'EL email no es correcto,'
         }
       }
    },
    contacto_ot: {
      validators: {
           notEmpty: {
            message: 'ingrese el conctacto'
          }
       }
    },
    cargo: {
      validators: {
           notEmpty: {
            message: 'ingrese el cargo'
          }
       }
    },
    
    fecha:{
      validators: {
         notEmpty: {
           message: 'la fecha de factura es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha de servicio es incorrecta'
            }
       }  
   },
 

    //  numero_dia: {
    //       validators: {
    //         numeric: {
    //           min: 1,
    //         },
    //         notEmpty: {
    //             message: 'el numero  de dias  es necesario'
    //          }
    //     }
    // },

    // numero_puesto: {
    //   validators: {
    //     numeric: {
    //       min: 1,
    //     },
    //     notEmpty: {
    //         message: 'el numero de puestos es necesario'
    //      }
    //    }
    // },
  
    //  numero_puesto: {
    //      validators: {
    //        numeric: {
    //         min: 1,
    //       },
    //     notEmpty: {
    //         message: 'el numero de puestos es necesario'
    //      }
    //    }
    // },
    descripcion: {
      validators: {
        notEmpty: {
          message: 'ingrese la descripcion del servicio'
        }
      }
   }, 
   id_ciudad: {
       validators: {
         notEmpty: {
          message: 'ingrese la ciudad'
         }
       }
     }
    //  condicion_salarial: {
    //   validators: {
    //     notEmpty: {
    //      message: 'ingrese la condicion salarial'
    //     }
    //   }
    // }, 
    // dotacion: {
    //   validators: {
    //        notEmpty: {
    //         message: 'ingrese el la dotacion'
    //       }
    //    }
    // }, 
    // und: {
    //   validators: {
    //        notEmpty: {
    //         message: 'ingrese la und'
    //       }
    //    }
    // },         
    // valor_unitario: {
    //   validators: {
    //     numeric: {
    //      min: 1
    //    },
    //    notEmpty: {
    //      message: 'el valor unitario es necesario'
    //    }
    //   }
    // }
    
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#propuestaeconomicaUpdate').data('bootstrapValidator').resetForm();
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
  $('#fsCreate').bootstrapValidator({
     message: 'Este valor no es válido',
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
    fields: {
            descripcion : {
                 validators: {
                          stringLength: {
                            min: 2,
                            message: 'la descripción debe tener más de 2 caracteres '
                            },
                        notEmpty: {
                          message: 'la descripción es necesaria'
                        }
                    }
                },  
    }})
      .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
              $('#fsCreate').data('bootstrapValidator').resetForm();
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
  $('#fsUpdate').bootstrapValidator({
     message: 'Este valor no es válido',
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
    fields: {
            descripcion : {
                 validators: {
                          stringLength: {
                            min: 2,
                            message: 'la descripción debe tener más de 2 caracteres '
                            },
                        notEmpty: {
                          message: 'la descripción es necesaria'
                        }
                    }
                },  
    }})
      .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
              $('#fsUpdate').data('bootstrapValidator').resetForm();
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
  $('#codigociudaCreate').bootstrapValidator({
     message: 'Este valor no es válido',
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
    fields: {
      codigo: {
        validators: {
            numeric: {
             min: 1,
              },
            notEmpty: {
             message: 'el codigo de la cuidad es necesario '
            }
        }
      },

      ciudad : {
        validators: {
                 stringLength: {
                   min: 2,
                   message: 'la ciudad debe tener más de 2 caracteres '
                   },
               notEmpty: {
                 message: 'la ciudad es necesaria'
               }
           }
       },
       departamento : {
        validators: {
                 stringLength: {
                   min: 2,
                   message: 'el departamento debe tener más de 2 caracteres '
                   },
               notEmpty: {
                 message: 'el departamento es necesaria'
               }
           }
       }
      
      
    }})
      .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
              $('#codigociudaCreate').data('bootstrapValidator').resetForm();
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
  $('#codigociudaUpdate').bootstrapValidator({
     message: 'Este valor no es válido',
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
      },
    fields: {
      codigo: {
        validators: {
            numeric: {
             min: 1,
              },
            notEmpty: {
             message: 'el codigo de la cuidad es necesario '
            }
        }
      },

      ciudad : {
        validators: {
                 stringLength: {
                   min: 2,
                   message: 'la ciudad debe tener más de 2 caracteres '
                   },
               notEmpty: {
                 message: 'la ciudad es necesaria'
               }
           }
       },
       departamento : {
        validators: {
                 stringLength: {
                   min: 2,
                   message: 'el departamento debe tener más de 2 caracteres '
                   },
               notEmpty: {
                 message: 'el departamento es necesaria'
               }
           }
       }
      
    }})
      .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
              $('#codigociudaUpdate').data('bootstrapValidator').resetForm();
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
  $('#CreatePrefacturaCliente').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_fs: {
       validators: {
          notEmpty: {
            message: 'Seleccione '
         }
      }
    },
    id_ciudad: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },
   detalle: {
      validators: {
           notEmpty: {
            message: 'ingrese la antencion'
          }
       }
    },
    id_propuesta_economica: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },
   id_tarifa_estandar: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },

   id_hora_adicional : {
    validators: {
             stringLength: {
               min: 1
               },
           Empty: {
             message: 'Seleccione'
           }
       }
   },
    numero_prefactura: {
      validators: {
        notEmpty: {
         message: 'ingrese el numero de prefactura '
       }
    }
    },
    fecha_prefactura:{
      validators: {
         notEmpty: {
           message: 'la fecha de prefactura es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha prefactura es incorrecta'
            }
       }  
   },
   hora_inicio:{
      validators: {
         notEmpty: {
           message: 'la hora de incio es necesaria'
          }
       }  
   },
   hora_final:{
      validators: {
         notEmpty: {
           message: 'la hora final es necesaria'
          }
       }  
   },
   fecha_de_servicio:{
      validators: {
         notEmpty: {
           message: 'la fecha de servicio es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha de servicio es incorrecta'
            }
       }  
   },
   cantidad: {
          validators: {
            numeric: {
              min: 1
            },
            notEmpty: {
                message: 'la cantidad  es necesario'
             }
        }
    },

    valor_unitario: {
      validators: {
        numeric: {
          min: 1
        },
        notEmpty: {
            message: 'el valor unitario es necesario'
         }
       }
    },
    
    id_estado_facturacion: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   }      
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#CreatePrefacturaCliente').data('bootstrapValidator').resetForm();
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
  $('#EditPrefacturaCliente').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_fs: {
       validators: {
          notEmpty: {
            message: 'Seleccione '
         }
      }
    },
    id_codigociudad: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },
   detalle: {
      validators: {
           notEmpty: {
            message: 'ingrese el detalle'
          }
       }
    },
    numero_prefactura: {
      validators: {
        notEmpty: {
         message: 'ingrese el numero de prefactura '
       }
    }
    },
    fecha_prefactura:{
      validators: {
         notEmpty: {
           message: 'la fecha de prefactura es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha prefactura es incorrecta'
            }
       }  
   },
   hora_inicio:{
      validators: {
         notEmpty: {
           message: 'la hora de incio es necesaria'
          }
       }  
   },
   hora_final:{
      validators: {
         notEmpty: {
           message: 'la hora final es necesaria'
          }
       }  
   },
   fecha_de_servicio:{
      validators: {
         notEmpty: {
           message: 'la fecha de servicio es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha de servicio es incorrecta'
            }
       }  
   },
   cantidad: {
          validators: {
            numeric: {
              min: 1
            },
            notEmpty: {
                message: 'la cantidad  es necesario'
             }
        }
    },

    valor_unitario: {
      validators: {
        numeric: {
          min: 1
        },
        notEmpty: {
            message: 'el valor unitario es necesario'
         }
       }
    },

    id_estado_facturacion: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },        
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#EditPrefacturaCliente').data('bootstrapValidator').resetForm();
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
  $('#CreatePrefacturaCliente').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    id_fs: {
       validators: {
          notEmpty: {
            message: 'Seleccione '
         }
      }
    },
    id_codigociudad: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },
   detalle: {
      validators: {
           notEmpty: {
            message: 'ingrese el detalle'
          }
       }
    },
    numero_prefactura: {
          validators: {
            numeric: {
              min: 1
            },
            notEmpty: {
                message: 'el numero de prefactura es necesario'
             }
        }
    },
    fecha_prefactura:{
      validators: {
         notEmpty: {
           message: 'la fecha de prefactura es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha prefactura es incorrecta'
            }
       }  
   },
   hora_inicio:{
      validators: {
         notEmpty: {
           message: 'la hora de incio es necesaria'
          }
       }  
   },
   hora_final:{
      validators: {
         notEmpty: {
           message: 'la hora final es necesaria'
          }
       }  
   },
   fecha_de_servicio:{
      validators: {
         notEmpty: {
           message: 'la fecha de servicio es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha de servicio es incorrecta'
            }
       }  
   },
   cantidad: {
          validators: {
            numeric: {
              min: 1
            },
            notEmpty: {
                message: 'la cantidad  es necesario'
             }
        }
    },

    valor_unitario: {
      validators: {
        numeric: {
          min: 1
        },
        notEmpty: {
            message: 'el valor unitario es necesario'
         }
       }
    },
    
    id_estado_facturacion: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   }      
      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#CreatePrefacturaCliente').data('bootstrapValidator').resetForm();
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
  $('#RevisionPrefacturaCliente').bootstrapValidator({
    message: 'Este valor no es válido',
     // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
   fields: {

    fecha_factura:{
      validators: {
         notEmpty: {
           message: 'la fecha factura es necesaria'
          },
          date:{
          format: 'YYYY/MM/DD',
            message: 'el formato de la fecha factura es incorrecta'
            }
       }  
   },

   factura: {
    validators: {
         notEmpty: {
          message: 'ingrese la factura '
        }
     }
  },

    id_estado_facturacion: {
      validators: {
         notEmpty: {
           message: 'Seleccione '
        }
     }
   },   
   
   valor: {
    validators: {
      numeric: {
        min: 1
      },
      notEmpty: {
          message: 'el valor es necesario'
       }
     }
  },
  
  observacion: {
    validators: {
      stringLength: {
        min: 2,
           message: 'la observacion debe tener más de 2 caracteres '
          },
         Empty: {
          message: 'ingrese la observacion'
        }
     }
  },

  descripcion_factura: {
    validators: {
         notEmpty: {
          message: 'ingrese la descripcion factura'
        }
     }
  },

  proveedor: {
    validators: {
      stringLength: {
        min: 2,
           message: 'el proveedor debe tener más de 2 caracteres '
          },
        Empty: {
          message: 'ingrese el proveedor'
         }

    }
  }



      }})     
     .on('success.form.bv', function(e) {
         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
             $('#EditPrefacturaCliente').data('bootstrapValidator').resetForm();
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