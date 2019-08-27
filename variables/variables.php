<?php

$nombre_inmobiliaria = "Inmobiliaria Prosegura";

//logo empresa
$logo_empresa = [
	"src" => "img/Logo.png",
	"alt" => "Logo Inmobiliaria Prosegura"
]; 

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"instagram" => [
		"link" => "https://www.instagram.com/",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
	"twitter" => [
		"link" => "https://www.twitter.com/",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	],
];

//datos de contacto 
$datos_contacto = [
	"direccion" => [
		"direccion" => "Calle 57 # 18-22 oficina 604, Bogotá",
		"icono" => "fas fa-map-marker-alt",
	],
	"telefono_fijo" => [
		"link"=> "+570312324319",
		"imprimir" => "PBX +57(1) 232 4319",
		"icono" => "fas fa-phone-alt",
	],
	"celular" => [
		"link"=> "+573167408894",
		"imprimir" => "316 740 8894",
		"icono" => "fas fa-mobile-alt",
	],
	"celular2" => [
		"link"=> "+573103302992",
		"imprimir" => "310 330 2992",
		"icono" => "fas fa-mobile-alt",
	],
	"whatsapp" => [
		"link"=> "https://api.whatsapp.com/send?phone=573103302992&text=&source=&data=",
		"imprimir" => "310 330 2992",
		"icono" => "fab fa-whatsapp",
	],
	"correo" => [
		"correo" => "prosegurasas@gmail.com",
		"icono" => "far fa-envelope",
	],
	"horario" => [
		"horario" => "",
		"icono" => "fas fa-calendar-alt",
	],	
];

//logos aliados
$logos_aliados = [
	0 => "images/LOGO CIEN CUADRAS.png",
	1 => "images/LOGO FINCA RAIZ.png",
	2 => "images/LOGO DATA CREDITO.png",
	3 => "images/LOGO DAVIVIENDA.png",
	4 => "images/LOGO EL LIBERTADOR.png",
	5 => "images/LOGO SEGUROS MUNDIAL.png",
	6 => "images/LOGO SIMI.png",
];


//formularios aseguradoras
$formularios_aseguradoras = [
	0 => [
		'nombre' => 'Libertador Persona Jurídica',
		'ruta' => '/'
	],
	1 => [
		'nombre' => 'Libertador Persona Natural',
		'ruta' => '/'
	],
	2 => [
		'nombre' => 'Seguros Mundial Persona Jurídica',
		'ruta' => '/'
	],
	3 => [
		'nombre' => 'Seguros Mundial Persona Natural',
		'ruta' => '/'
	],
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'img/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'img/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'img/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Quiénes Somos",
		"parrafo" => "",
	],
	"mision" => [
		"titulo" => "Misión",
		"parrafo" => "Ofrecer servicios integrales en materia habitacional y comercial, logrando satisfacer las necesidades de servicios inmobiliarios para nuestros clientes, enfocados hacia la protección y optimización de la rentabilidad patrimonial de los propietarios, dentro de un marco profesional, ético y jurídico, con un equipo de trabajo idóneo y competente.",
		"imagen" => "images/mision_vision.jpg"
	],
	"vision" => [
		"titulo" => "Visión",
		"parrafo" => "Fortalecer y consolidar la empresa, ampliando la cobertura en el mercado y el portafolio de nuestros servicios. Implementar los adecuados procesos tecnológicos y administrativos. Ser reconocidos por nuestros clientes, por la transparencia, cumplimiento, seriedad y efectividad de nuestro servicio.",
	],
	"objetivos" => [
		"imagen" => "images/objetivos.jpg",
		"titulo" => "Objetivos",
		"parrafo" => "Con el entusiasmo de un equipo de trabajo consciente, capacitado, preparado y dispuesto a ofrecer un buen servicio, marcando una diferencia con el propósito de lograr un incremento constante de nuestra cartera, manteniendo los actuales, basados en el cumplimiento de los acuerdos contractuales, logrando con ello la satisfacción calificada de nuestros clientes internos y externos.",
	],	
];

//textos y banner contador de estadisticas seccion quienes somos
$texto_contador_estadisticas = [
	"parrafos" => [
		0 => "Experiencia",
		1 => "Total Inmuebles",
		2 => "Inmuebles en Arriendo",
		3 => "Inmuebles en Venta",
		4 => "Inmuebles en Arriendo/Venta",
		],
		"imagen" => "images/"
];

// las imaganes no han sido proporcionadas por el cliente
$imagenes = [
	"banner_quienes_somos_home" => [
		'imagen' => 'images/quienes_somos.jpg',
		'alt' => 'Imagen'
	],
	"banner_servicios_home" => [
		'imagen' => 'images/servicios.jpg',
		'alt' => 'Imagen'
	],
	"banner_clientes_home" => [
		"propietarios" => [
			'imagen' => 'images/propietarios.jpg',
			'alt' => 'Imagen'
		
		],
		"arrendatarios" =>[
			'imagen' => 'images/arrendatarios.jpg',
			'alt' => 'Imagen'
		],
		"pagos_pse" => [
			'imagen' => 'images/PAGO-PSE.png',
			'alt' => 'Imagen'
		],
	],
	"banner_noticas_home" => [
		'imagen' => 'images/banner_noticias.jpg',
		'alt' => 'Imagen'
	],
	"banner_quienes_somos_frase" => [
		'imagen' => 'images/banner_frase.png',
		'alt' => 'Imagen quienes somos'
	],	
];

//textos servicios
$texto_servicios = [
	"parrafos" => [
		0 => "Su inmueble será publicado en los portales especializados en propiedad raíz con fotos y video, se le instalaran avisos de ventana de diferentes tamaños o pendones según cada caso, se cruzará la información de su inmueble con nuestra base de datos de requerimientos diarios, de manera que podamos encontrar coincidencias entre la oferta y la demanda.",
		1 => "Garantizamos el pago de su canon de arrendamiento el décimo día de cada periodo mensual, independientemente de que el arrendatario haya pagado o no el mes correspondiente o incluso lleve un tiempo en mora con nosotros. Los honorarios de abogados y demás costos corren por cuenta nuestra.",
		2 => "Mientras su inmueble este en promoción lo mostraremos de lunes a domingo.",
		3 => "Mientras su inmueble este en promoción con nosotros, enviaremos de manera semanal y automática a su correo electrónico un detallado informe de gestión donde le indicaremos el número de llamadas recibidas, el número de citas agendadas y la percepción que cada interesado tuvo de su inmueble.",
		4 => "Enviamos de manera mensual y automática su estado de cuenta y factura a su correo electrónico, así usted estará oportunamente informado de los abonos y descuentos efectuados.",
		5 => "Nuestra compañía se responsabiliza por el pago directo de las cuotas ordinarias de administración a las copropiedades, con el fin de tener un control más efectivo sobre este rubro, evitando retrasos injustificados que puedan afectar al cliente, propietario o arrendatario.",
		],	
];
?>