INSERT INTO user (fullName, email, pwd) VALUES
("Iker Catalan", "icatalan@gmail.com", "$2y$10$1.6ysGxnMW49aE70a37r8u.GPcWImphiHb7ASf7bLz/Oewp5Jpi0S"), /* asdASD123 */
("Eric Molina", "emolina@gmail.com", "$2y$10$1.6ysGxnMW49aE70a37r8u.GPcWImphiHb7ASf7bLz/Oewp5Jpi0S"), /* asdASD123 */
("Daniel Font", "dfont@gmail.com", "$2y$10$1.6ysGxnMW49aE70a37r8u.GPcWImphiHb7ASf7bLz/Oewp5Jpi0S"); /* asdASD123 */

INSERT INTO room (name) VALUES
("Terraza 1"), ("Terraza 2"), ("Terraza 3"),
("Comedor 1"), ("Comedor 2"),
("Sala privada 1"), ("Sala privada 2"), ("Sala privada 3"), ("Sala privada 4");

INSERT INTO `table` (capacity, available, room_id) VALUES
(3, true, 1), (3, true, 1), (3, true, 1), /* 3 mesas en Terraza 1 */
(3, true, 2), (3, true, 2), (3, true, 2), /* 3 mesas en Terraza 2 */
(3, true, 3), (3, true, 3), (3, true, 3), /* 3 mesas en Terraza 3 */

(4, true, 4), (4, true, 4), (4, true, 4), (6, true, 4), (6, true, 4), /* 5 mesas en Comedor 1, 3 de 4personas y 2 de 6personas */
(4, true, 5), (4, true, 5), (4, true, 5), (6, true, 5), (6, true, 5), /* 5 mesas en Comedor 2, 3 de 4personas y 2 de 6personas */

(8, true, 6), /* Mesa de 8personas en Sala privada 1 */
(8, true, 7), /* Mesa de 8personas en Sala privada 2 */
(8, true, 8), /* Mesa de 8personas en Sala privada 3 */
(8, true, 9); /* Mesa de 8personas en Sala privada 4 */