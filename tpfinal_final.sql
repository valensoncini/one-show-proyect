-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2024 a las 07:23:06
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_completo`, `identificacion`, `email`, `telefono`, `estado`) VALUES
(9, 'Valentino Gonzales', 44594363, 'valen_soncini@hotmail.com', 1122228888, 'inactivo'),
(10, 'Carlos Gardel', 40587236, 'carlos_gardel@hotmail.com', 1123567845, 'activo'),
(11, 'Valentino Marco Soncini', 44594363, 'valen.soncini@hotmail.com', 1131492806, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(100) NOT NULL,
  `email_contacto` varchar(50) NOT NULL,
  `telefono_contacto` int(11) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre_contacto`, `email_contacto`, `telefono_contacto`, `consulta`) VALUES
(1, 'Valentino Marco Soncini', 'valen_soncini@hotmail.com', 1131492806, 'Ayuda con la compra de casados con hijos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `disponibilidad` int(11) NOT NULL,
  `estado` enum('activo','agotado') NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `nombre`, `precio`, `descripcion`, `fecha`, `disponibilidad`, `estado`, `lugar`, `imagen`) VALUES
(2, 'El Último Acto', 10000, 'Un drama emocionante que explora el misterio detrás de una famosa obra incompleta.', '05/12/2024 21:00', 1200, 'activo', 'luna park', 'ultimo-acto.jpeg'),
(5, 'Heathers: El Musical', 9850, 'Sigue la historia de Veronica Sawyer, una estudiante inteligente pero impopular en la Westerburg High School. Un día, Veronica consigue integrarse en el grupo de chicas más populares de la escuela, conocido como las Heathers, tres chicas dominantes que comparten el mismo nombre. Aunque al principio disfruta de la popularidad, pronto se cansa de su crueldad y abuso hacia otros estudiantes. Las cosas cambian cuando Veronica conoce a J.D., un chico rebelde y misterioso, y se enamora de él. Sin embargo, su relación toma un giro oscuro cuando J.D. empieza a llevar sus acciones a extremos violentos, y Veronica se ve atrapada en un peligroso juego que amenaza con destruir a todos a su alrededor. Con una mezcla de humor negro, drama y canciones pegajosas, el musical explora temas como el acoso escolar, la presión social y la lucha por la identidad en un entorno juvenil lleno de caos y conflictos.', '14/01/2025 14:30', 132, 'activo', 'paseo la plaza', 'heathers.jpeg'),
(9, 'Mamma Mia!', 18000, 'En una encantadora isla griega, Sophie está a punto de casarse y sueña con que su padre la lleve al altar. El problema es que no sabe quién es. Tras leer el diario de su madre Donna, descubre que tiene tres posibles padres y decide invitarlos a la boda a escondidas. Cuando llegan, Donna revive emociones del pasado al ritmo de los grandes éxitos de ABBA, mientras Sophie intenta descubrir su identidad en medio de una divertida y conmovedora historia de amor, amistad y familia.', '09/11/2024 15:00hs', 125, 'activo', 'Paseo La Plaza', 'mamma-mia.jpeg'),
(10, 'Airbag', 22000, 'La reconocida banda de rock argentina Airbag se presenta en el estadio de Vélez Sarsfield en un espectáculo sin precedentes. Este show marca un momento especial en la carrera de los hermanos Sardelli, quienes llevan el rock en la sangre y buscan hacer vibrar a miles de fanáticos en uno de los estadios más icónicos de Buenos Aires. Con una puesta en escena impactante, luces deslumbrantes y un repertorio lleno de sus mayores éxitos como “Cae el sol”, “Vivamos el momento” y “Por mil noches”, Airbag promete un show inolvidable para los amantes del rock argentino. La energía y el carisma de Patricio, Guido y Gastón crean una experiencia única que resalta su gran trayectoria y pasión en el escenario.', '22/12/2024 20:00hs', 1994, 'activo', 'Estadio Jose Amalfitani', 'airbag.jpeg'),
(11, '.mp3 tour', 40000, 'Emilia Mernes, la joven estrella pop que ha conquistado Latinoamérica, llega con su esperado .MP3 Tour. Este espectáculo combina ritmos de reguetón, pop y cumbia, reflejando el estilo único de Emilia. Con una producción visual espectacular y coreografías enérgicas, la cantante promete hacer bailar y cantar a sus fans al ritmo de temas como “Como si no importara”, “Cuatro veinte” y “Rápido lento”. Cada presentación del tour está llena de sorpresas, efectos especiales y un toque de frescura que Emilia aporta a la escena musical. La pasión y el carisma de esta artista hacen que su tour sea uno de los eventos más esperados por los jóvenes amantes del pop urbano.', '15/03/2025 15:00hs', 1200, 'activo', 'Estadio Jose Amalfitani', 'emilia.jpeg'),
(12, 'The Lion King', 15000, 'The Lion King (El Rey León) es una de las producciones de Broadway más queridas y exitosas del mundo, que transporta a los espectadores a la sabana africana en una increíble adaptación teatral del clásico de Disney. Con un diseño escénico y vestuario magistrales, junto con los emblemáticos temas musicales como “Circle of Life” (El ciclo sin fin) y “Can You Feel the Love Tonight” (Esta noche es para amar), esta obra es un festín visual y auditivo. Las complejas marionetas y el vestuario de animales, combinados con coreografías inspiradas en la cultura africana, convierten cada escena en una experiencia mágica. The Lion King es más que una obra musical: es una celebración de la vida, el amor, y los valores familiares, ideal tanto para grandes como para chicos.', '30/11/2024 20:00hs', 500, 'activo', 'Teatro Gran Rex', 'the-lion-king.jpeg'),
(13, 'Casados con Hijos', 23000, 'Casados con Hijos, la exitosa adaptación argentina de la popular sitcom, regresa al teatro para deleitar a sus fanáticos. La historia sigue a los Argento, una familia disfuncional y sumamente cómica que ha dejado una huella imborrable en la cultura argentina. Con el regreso de los queridos personajes como Pepe Argento, Moni Argento, Paola, Coqui, Dardo y María Elena, el público podrá revivir los chistes, las situaciones absurdas y los momentos inolvidables que hicieron famosa a esta serie. Adaptada para el escenario, la obra mantiene el humor irreverente y las clásicas dinámicas familiares que la convirtieron en un fenómeno. Este espectáculo promete risas de principio a fin, para fanáticos de todas las edades.', '15/12/2024 23:00hs', 3000, 'activo', 'Paseo La Plaza', 'casados-con-hijos.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `rol` enum('admin','cliente') NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `contraseña`, `rol`, `estado`) VALUES
(2, 'admin@hotmail.com', '$2y$10$eNo71uDswFdmNwRqolwArOrhiJda6vxDMbQS9Y/eEdbN12sVt2FG2', 'admin', 'activo'),
(7, 'valen_soncini@hotmail.com', '$2y$10$2MZVGnfnEuLdKP3dfZTtCudJx5emPF2R04GDMeAjFQ.R58L6YbOQO', 'cliente', 'inactivo'),
(8, 'carlos_gardel@hotmail.com', '$2y$10$ctc2gHHtBu2rjyX2Hasvru07TGadfKMvMsVv4mXanIUOjBjOBOVd6', 'cliente', 'activo'),
(10, 'valen.soncini@hotmail.com', '$2y$10$2UGykmWSQpxpVgMp00mwNOnNXs4Beh6CziFXvpoUs0J0lBcfXwW0q', 'cliente', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `fk_id_evento` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cant_tickets` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` enum('activa','inactiva') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fk_id_cliente`, `fk_id_evento`, `fecha`, `cant_tickets`, `total`, `estado`) VALUES
(26, 9, 5, '2024-11-01 15:43:20', 2, '19700.00', 'activa'),
(27, 9, 9, '2024-11-04 03:58:59', 2, '36000.00', 'activa'),
(28, 10, 10, '2024-11-04 04:25:05', 5, '110000.00', 'activa'),
(29, 11, 10, '2024-11-08 06:11:38', 1, '22000.00', 'activa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_id_cliente` (`fk_id_cliente`),
  ADD KEY `fk_id_evento` (`fk_id_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`fk_id_evento`) REFERENCES `evento` (`idEvento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
