<?php

	$info = [
		"me" => [
			"name" => "Héctor Martín Solís",
			"email" => "hecmartinsol@gmail.com",
			"phone" => 620518570,
			"cv" => "./resources/cv_hector_martin_solis.pdf",
			"linkedin" => "https://www.linkedin.com/in/h%C3%A9ctor-mart%C3%ADn-sol%C3%ADs-64543b119/",
			"github" => "https://github.com/HecMartinSol",
			"description" => ""
		],
		"studies" => [
			[
				"from_date" => "2012",
				"to_date" => "2017",
				"studies" => "Grado en Ingeniería del Software",
				"location" => "Universidad Complutense de Madrid",
				"location_url" => "https://www.ucm.es/",
				"info" => " Estudié durante 5 años la carrera de ingeniería del Software en la Universidad Complutense de Madrid, en la Facultad de Informática del Campus Universitario de Moncloa.\n
							Curso por año, a excepción del último, en el que dejé el proyecto fin de carrera para poder trabajar mientras lo terminaba.",
			],
		],
		"jobs" => [
			[
				"from_date" => "2019-04",
				"to_date" => NULL,
				"company" => "Internet República",
				"company_link" => "https://internetrepublica.com/",
				"title" =>	"Desarrollador Web Full Stack",
				"info" => " Migración de la plataforma https://socialpubli.com/ a un sistema de microservicios con Symfony\n
							Extracción de información de Redes Sociales utilizando scrapping con NodeJS\n
							Implantación de un sistema de colas con RabbitMQ para gestión de procesos backend\n
							",
				"tech" => ["PHP 7", "Vagrant", "Symfony", "NodeJS", "HTML5", "CSS3", "JavaScript", "JQuery", "MySQL", "Git con Bitbucket", "RabbitMQ"],
				"more_info" => ""
			],
			[
				"from_date" => "2018-11",
				"to_date" => "2019-04",
				"company" => "Aubay",
				"company_link" => "http://www.aubay.es/",
				"title" =>	"Analista Desarrollador Web Full Stack en BBVA",
				"info" => "Mantenimiento de las aplicaciones de la intranet de la empresa\n
							",
				"tech" => ["PHP 7", "HTML5", "CSS3", "JavaScript", "JQuery", "MySQL", "SQLServer", "Subversion"],
				"more_info" => ""
			],
			[
				"from_date" => "2015-09",
				"to_date" => "2018-11",
				"company" => "Kiosko y Más",
				"company_link" => "https://www.kioskoymas.com",
				"title" =>	"Desarrollador Web Full Stack",
				"info" => "	Encargado del desarrollo de nuevas funcionalidades para la web de la empresa, así como el mantenimiento.\n
							Participación activa en todas las fases del desarrollo: captura de requisitos, especificación, análisis y planificación de tareas siguiendo metodología SCRUM\n
							",
				"tech" => ["PHP 7", "CodeIgniter", "HTML5", "CSS3", "JavaScript", "JQuery", "MySQL", "MongoDB", "Sistemas Linux (CentOS)", "Git con Bitbucket"],
				"more_info" => "Coodinación de las tareas de un pequeño equipo\n
								Encargado de la revisión, integración continuas y despliegues utilizando Git\n
								Administración y gestión de los servidores de la empresa\n
								Diseño, administración y mantenimiento de la Base de Datos de la empresa\n
								Desarrollo del sistema de suscripciones/transacciones de la empresa, pasarela de pagos, y APIs REST\n
								Diseño y desarrollo de la plataforma de PressClipping de Cedro\n
								"
			],
			[
				"from_date" => "2015-09",
				"to_date" => "2016-03",
				"company" => "Codeeta",
				"company_link" => "http://codeeta.com/",
				"title" =>	"Desarrollador Web Full Stack",
				"info" => "	Desarrollador full stack externo para Kiosko y Más.\n
							Mismas funciones",
				"tech" => [],
				"more_info" => ""
			],
			[
				"from_date" => "2014-09",
				"to_date" => "2015-06",
				"company" => "Robert Bosch España",
				"company_link" => "https://www.grupo-bosch.es/",
				"title" =>	"Becario en departamento de sistemas",
				"info" => "	Formación práctica de la Universidad compaginando con los estudios.\n
							Apoyo al equipo informático en desarrollo de scripts para automatización de tareas en sistemas Windows.\n
							Generación de etiquetas mediante su programación ZPL para impresoras Zebra.\n",
				"tech" => [],
				"more_info" => ""
			],
			[
				"from_date" => "2013-07",
				"to_date" => "2014-01",
				"company" => "Facultad de Comercio y Turismo UCM",
				"company_link" => "#",
				"title" =>	"Beca de colaboración",
				"info" => "Beca de formación práctica en la Secretaría de la facultad de Comercio y Turismo mientras compaginaba los estudios en la Facultad de Informática.\n",
				"tech" => [],
				"more_info" => ""
			],

		],
		"certifications" => [
			[
				"date" => "2012",
				"url" => "https://www.cambridgeinstitute.net/",
				"title" => "First Certificate in English (B2)",
				"info" => " Obtención del certificado en el nivel B2 de Inglés en el Instituto Cambridge\n.
							Licencia 0034615102",
			],
		],
	];


	$info = json_encode($info, JSON_PRETTY_PRINT);
	$info = str_replace("\t", "", $info);
	$info = str_replace("\r\t", "", $info);

	header("Content-type: text/plain");
	echo $info;

?>