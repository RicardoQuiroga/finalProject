DROP DATABASE IF EXISTS `bread`;
CREATE DATABASE IF NOT EXISTS `bread`;
USE `bread`;

DROP TABLE IF EXISTS `CatalogClassic`;

CREATE TABLE `CatalogClassic` (
  `BreadID` INTEGER NOT NULL,
  `Name` VARCHAR(50),
  `Additional` VARCHAR(50),
  `Path` VARCHAR(50),
  `Description` LONGTEXT,
  PRIMARY KEY (`BreadID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (1, "Whole Wheat", "N/A", "wholeWheat.jpg", "Also referred to as 'wholemeal bread' outside the US. This type is made from flour that is milled (partially or entirely) from whole wheat grains. Depending on where you buy your whole wheat bread from, actual wheat germ content may vary. Most wheat bread you see in stores is actually white bread that has added caramel coloring.");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (2, "White", "N/A", "white.jpg", "This bread is made from wheat flour that has had it's germ layers removed during milling. Since these germ layers prohibit longer shelf lives, white bread is able to last much longer. Fun fact! After the introduction of certain mandates made by the government made in the mid 1900's, white bread has contributed to a major decline in nutrition deficiencies in the US due to added acid fortifications to make it more nutritious.");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (3, "Italian", "Ciabatta, Focaccia, Filoncino, Rosetta, Grissini, Piadina, Freselle, Schiaccia, Taralli", "italian.jpg", "Italian bread is known for its thin crust and moist interior. While wheat flour is an essential ingredient, different compositions of yeast, lard, salt, and oils make for an assormtent of different kinds. Served alongside other foods, the absorbancy of italian bread can be used to soak up oils and sauces.");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (4, "French", "Baguette, Ficelle, Brioche, Fougasse, Tartine, Pain Rond, Croissant", "french.jpg", "Typically viewed as a long, thin stick, french bread has created it's own distinction amongst its flower based friends. French bread is traditionally served as a starter, before main dishes are served. While non-traditional french bread made in other parts of the world (including here) contains other additives, French law prohibits the use of any added oils or fats in their bread making");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (5, "Raisin", "N/A", "raisin.jpg", "Raisin bread is one of the sweeter inclusions that is commonly consumed in the US. It's fairly easy to find the defining factor that makes this type unique...Raisin! Due to the aesthetic of a sliced piece of raisin bread, many have used it to describe an assortment of scientific phenomena, ranging from the expansion of the universe to the appearance of an atom.");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (6, "Sourdough", "N/A", "sourdough.jpg", "Sourdough distinguishes itself from others due to it's sour taste that is not commonly found in other breads. This sourness, to put it most simply comes from letting the dough ferment.<br>");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (7, "Cinnamon", "N/A", "cinnamon.jpg", "More of a confectionary than something you'd want to use for your sandwich, cinnamon bread is widely made of the same basic ingredients of other common breads, but with a whole bunch of cinnamon, making for a tasty treat.");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (8, "Multigrain", "N/A", "oat.jpg", "Multigrain bread is as simple as it sounds; It is a type of bread consisting of multiple grain types. Be it oat, barley, wheat, they can be combined every which way. Adding some seeds into the mix can add even more variety to an already varying bunch of breads.");
INSERT INTO `CatalogClassic` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (9, "Rye", "N/A", "rye.jpg", "Rye bread ignores the ever-present popularity of wheat grain for <em>rye grain</em> flour. This switch makes rye much more dense and dark than other breads. It also makes for a much healthier bread, as it contains more fiber and less calories than its competitors.");

DROP TABLE IF EXISTS `CatalogSpecial`;

CREATE TABLE `CatalogSpecial` (
  `BreadID` INTEGER NOT NULL,
  `Name` VARCHAR(50),
  `Additional` VARCHAR(50),
  `Path` VARCHAR(50),
  `Description` LONGTEXT,
  PRIMARY KEY (`BreadID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

INSERT INTO `CatalogSpecial` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (1, "Flatbread", "Tortilla, Pita, Naan, Frybread", "flatbread.jpg", "Flatbread is one of the most simple to make on this list. Requiring minimal ingredients, flatbreads can be prepared in a multitude of different fashions, be it baked, fried, or anything in between. Dating back to ancient humans, some form of flatbread has been a staple of most cultures around the world.");
INSERT INTO `CatalogSpecial` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (2, "Bagel", "N/A", "bagel.jpg", "Needing no introduction, the bagel's distinctive shape leaves no room for mistake. Formed into a circle with a hole in the middle, bagels undergo a relatively specific baking process. To ensure it's soft inside and crisp outer crust, the dough is first boiled (or steamed in mass production), and then baked after the boiling.");
INSERT INTO `CatalogSpecial` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (3, "Pretzel", "N/A", "pretzel.jpg", "Pretzel bread comes in a variety of shapes and sizes. Whether it be in the signature twisted knot or loaf form, small or large, soft or hard, the pretzel is very recognizable. Pretzel bread undergoes a specific treatment using washing soda or lye to give it its unique skin.");
INSERT INTO `CatalogSpecial` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (4, "Pasta", "Fusilli, Spaghetti, Fettuccine, Linguine, Penne, Cannelloni, Tagliatelle, Tortellini, Rigatoni", "pasta.jpg", 'While it may not be immediately apparent, pasta does qualify as a bread! Coming in an array of shapes and sizes, most pasta we come across is of the "dried" variety. However, "fresh" pasta can be made witha few ingredients, and the process can be expedited with machines to help mix/shape.');
INSERT INTO `CatalogSpecial` (`BreadID`, `Name`, `Additional`, `Path`, `Description`) VALUES (5, "Cornbread", "N/A", "cornbread.jpg", "Cornbread is made using cornmeal, and can be fried, cooked, or steamed, though each method will provide a slightly different texture. It became commonplace in areas where wheat flour was more expensive. Southern US cornbread often contains little to no sugar, while the further north you go, cornbread becomes a much sweeter addition to a meal.");
