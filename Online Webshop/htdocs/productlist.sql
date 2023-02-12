CREATE DATABASE `productlist`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `productlist`;

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'I9 - 10900K / RTX 3080 GAMER PC', 'PC', 'assets/img/termek1.jpg', 749990),
(2, 'I7 - 9770K / RTX 3070 Gamer PC', 'PC1', 'assets/img/termek2.jpg', 660000),
(3, 'R5 - 3600X / GTX 1660 Ti Gamer PC', 'PC2', 'assets/img/termek3.jpg', 545990),
(4, 'I5 - 10400F / RTX 3060 Gamer PC', 'PC3', 'assets/img/termek4.jpg', 432000),
(5, 'Arozzi Verona V2 Gamer szék', 'Chair', 'assets/img/termek5.jpg', 75000),
(6, 'NATEC Genesis Nitro 550 Gamer szék', 'Chair1', 'assets/img/termek6.jpg', 45600),
(7, 'Nitro Concepts S300 Gamer szék', 'Chair2', 'assets/img/termek7.jpg', 34800),
(8, 'Samsung UE43TU7022', 'TV', 'assets/img/termek8.jpg', 1256060),
(9, 'LG OLED55C11LB', 'TV2', 'assets/img/termek9.jpg', 890000),
(10, 'Xiaomi Mi TV P1 32', 'TV3', 'assets/img/termek10.jpg', 956990),
(11, 'Philips 55OLED706/12', 'TV4', 'assets/img/termek11.jpg', 689750),
(12, 'Sony Bravia KD-43X85J', 'TV5', 'assets/img/termek12.jpg', 740000);


ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);


ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;