CREATE DATABASE `shirts4mike` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `shirts4mike`;

CREATE TABLE IF NOT EXISTS `products` (
  `sku` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `paypal` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(101, 'Logo Shirt, Red', 'img/shirts/shirt-101.jpg', 18.00, '9P7DLECFD4LKE');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(102, 'Mike the Frog Shirt, Black', 'img/shirts/shirt-102.jpg', 20.00, 'SXKPTHN2EES3J');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(103, 'Mike the Frog Shirt, Blue', 'img/shirts/shirt-103.jpg', 20.00, '7T8LK5WXT5Q9J');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(104, 'Logo Shirt, Green', 'img/shirts/shirt-104.jpg', 18.00, 'YKVL5F87E8PCS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(105, 'Mike the Frog Shirt, Yellow', 'img/shirts/shirt-105.jpg', 25.00, '4CLP2SCVYM288');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(106, 'Logo Shirt, Gray', 'img/shirts/shirt-106.jpg', 20.00, 'TNAZ2RGYYJ396');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(107, 'Logo Shirt, Teal', 'img/shirts/shirt-107.jpg', 20.00, 'S5FMPJN6Y2C32');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(108, 'Mike the Frog Shirt, Orange', 'img/shirts/shirt-108.jpg', 25.00, 'JMFK7P7VEHS44');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(109, 'Get Coding Shirt, Gray', 'img/shirts/shirt-109.jpg', 20.00, 'B5DAJHWHDA4RC');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(110, 'HTML5 Shirt, Orange', 'img/shirts/shirt-110.jpg', 22.00, '6T2LVA8EDZR8L');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(111, 'CSS3 Shirt, Gray', 'img/shirts/shirt-111.jpg', 22.00, 'MA2WQGE2KCWDS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(112, 'HTML5 Shirt, Blue', 'img/shirts/shirt-112.jpg', 22.00, 'FWR955VF5PALA');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(113, 'CSS3 Shirt, Black', 'img/shirts/shirt-113.jpg', 22.00, '4ELH2M2FW7272');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(114, 'PHP Shirt, Yellow', 'img/shirts/shirt-114.jpg', 24.00, 'AT3XQ3ZVP2DZG');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(115, 'PHP Shirt, Purple', 'img/shirts/shirt-115.jpg', 24.00, 'LYESEKV9JWE3A');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(116, 'PHP Shirt, Green', 'img/shirts/shirt-116.jpg', 24.00, 'KT7MRRJUXZR34');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(117, 'Get Coding Shirt, Red', 'img/shirts/shirt-117.jpg', 20.00, '5UXJG8PXRXFKE');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(118, 'Mike the Frog Shirt, Purple', 'img/shirts/shirt-118.jpg', 25.00, 'KHP8PYPDZZFTA');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(119, 'CSS3 Shirt, Purple', 'img/shirts/shirt-119.jpg', 22.00, 'BFJRFE24L93NW');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(120, 'HTML5 Shirt, Red', 'img/shirts/shirt-120.jpg', 22.00, 'RUVJSBR9FXXWQ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(121, 'Get Coding Shirt, Blue', 'img/shirts/shirt-121.jpg', 20.00, 'PGN6ULGFZTXL4');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(122, 'PHP Shirt, Gray', 'img/shirts/shirt-122.jpg', 24.00, 'PYR4QH97W2TSJ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(123, 'Mike the Frog Shirt, Green', 'img/shirts/shirt-123.jpg', 25.00, 'STDAUJJTSPT54');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(124, 'Logo Shirt, Yellow', 'img/shirts/shirt-124.jpg', 20.00, '2R2U74KWU5RXG');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(125, 'CSS3 Shirt, Blue', 'img/shirts/shirt-125.jpg', 22.00, 'GJG7F8EW3XFAS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(126, 'Doctype Shirt, Green', 'img/shirts/shirt-126.jpg', 25.00, 'QW2LFRYGU7L4Q');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(127, 'Logo Shirt, Purple', 'img/shirts/shirt-127.jpg', 20.00, 'GFV6QVRMJU7F8');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(128, 'Doctype Shirt, Purple', 'img/shirts/shirt-128.jpg', 25.00, 'BARQMHMB565PN');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(129, 'Get Coding Shirt, Green', 'img/shirts/shirt-129.jpg', 20.00, 'DH9GXABU3P8GS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(130, 'HTML5 Shirt, Teal', 'img/shirts/shirt-130.jpg', 22.00, '4LZ3EUVCBENE4');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(131, 'Logo Shirt, Orange', 'img/shirts/shirt-131.jpg', 20.00, '7BNDYJBKWD364');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(132, 'Mike the Frog Shirt, Red', 'img/shirts/shirt-132.jpg', 25.00, 'Y6EQRE445MYYW');
