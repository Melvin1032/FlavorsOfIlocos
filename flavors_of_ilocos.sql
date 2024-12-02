-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 04:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flavors_of_ilocos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `tbl_category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`tbl_category_id`, `category_name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Appetizer'),
(5, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipe`
--

CREATE TABLE `tbl_recipe` (
  `tbl_recipe_id` int(255) NOT NULL,
  `tbl_category_id` varchar(255) NOT NULL,
  `recipe_image` varchar(255) NOT NULL,
  `recipe_name` varchar(255) NOT NULL,
  `recipe_ingredients` varchar(2000) NOT NULL,
  `recipe_procedure` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_recipe`
--

INSERT INTO `tbl_recipe` (`tbl_recipe_id`, `tbl_category_id`, `recipe_image`, `recipe_name`, `recipe_ingredients`, `recipe_procedure`) VALUES
(1, '2', 'c20ecbee8a13d761dfb1348eb1721fee.jpg', 'Dinakdakan', 'Pork parts: Face, ears, liver, tongue, stomach, and intestines (Mascara)\r\nPig’s brain (Utak): A crucial ingredient that adds creaminess and flavor to the dish\r\nGinger: Used to add flavor and aroma\r\nOnion: Sauteed with garlic and chilies to create a flavorful base\r\nChilies: Added to give the dish a spicy kick\r\nGarlic: Sauteed with onion and chilies to create a flavorful base\r\nCalamansi (Philippine lime) or vinegar: Used to add a sour and tangy flavor\r\nSalt and pepper: Used to season the dish\r\nBay leaves: Used to add flavor during boiling\r\nPeppercorn: Used to add flavor during boiling\r\nOptional ingredients:\r\nMayonnaise: Can be used as a substitute for pig’s brain or to add a creamy texture\r\nFresh herbs: Such as parsley or cilantro, can be used as a garnish.', 'Dinakdakan\r\n- Dinakdakan or warek-warek is an Ilocano delicacy made with grilled pork parts such as the face, ears, liver, and tongue. It\'s traditionally served as a bar chow or pulutan to go with ice-cold beer but has evolved over the years into a hearty main dish enjoyed with piping-hot steamed rice.\r\n\r\n1.In a pot over medium heat, combine pork face, salt, peppercorns, bay leaves, and enough water to cover. Bring to a boil, skimming scum that accumulates on top.\r\n2. Lower heat, cover, and simmer for about 45 minutes to 1 hour or until meat is tender but not falling apart. With a slotted spoon, remove meat and drain well.\r\n3. Add liver to the pot and cook for about 3 to 5 minutes or until half-done. Remove from pan and drain well.\r\n4. Add pig brain to pot and cook for about 8 to 10 minutes. With a slotted spoon, remove brain and transfer into a bowl. With a fork, mash until smooth. Set aside.\r\n5. Over hot coals, grill pork for about 4 to 6 minutes on each side or until crisp and slightly charred. 6. Allow to cool to touch and slice thinly\r\n7. Grill liver for about 3 to 5 minutes until nicely charred and fully cooked.\r\n8. In a large bowl, combine pork meat, onions, ginger, and chili peppers.\r\n9. Add calamansi juice and toss to combine.\r\n10. Add mashed pig brain and stir until well-distributed. Season with salt and pepper to taste.'),
(2, '2', '522129b58f67398e84e8e6be4f76643e.jpg', 'Igado', '500g pork belly, diced (small)\r\n300g pork liver, diced (small)\r\n1 pc pork heart, diced (small)\r\n1 large red capsicum, diced\r\n1/2 cup green peas\r\n1 1/2 cup cane vinegar\r\n3 tbsp soy sauce\r\n3 bay leaves\r\n1 tbsp cracked peppercorns\r\nfish sauce\r\n5 cloves garlic, minced\r\n1 small red onion, chopped\r\n1 thumb sized ginger, finely chopped\r\noil', 'Igado is a Filipino pork recipe prepared with pork liver, pork meat and other offal cooked with green peas, red capsicum, ginger, onion and garlic in vinegar.\r\n\r\n\r\n1. Marinate pork liver in 1/2 cup cane vinegar for an hour, mixing every 15 minutes.\r\n2.In a pot heat oil and sauté garlic, ginger and onions. Cook until onions are soft.\r\n3. Add and brown the pork belly and heart in high heat.\r\n4. Pour vinegar and soy sauce, add the peppercorns and bay leaves bring to a boil and simmer for 25 minutes in medium heat uncovered, let the liquid reduce and thicken.\r\n5. Drain the liquid from the liver. Set aside.\r\n6. Add red capsicum, green peas and liver, simmer for additional 5 minutes.\r\n7. Adjust flavour with water, if necessary, flavour with fish sauce. 8.Serve with freshly cracked peppercorns.'),
(3, '2', 'e71b128ff62b0bcef4cdeed9af39ed26.jpg', 'Dinengdeng', '1 whole milk fish sliced and grilled\r\n2 to 3 cups malunggay moringa leaves, cleaned\r\n2 cups squash flower\r\n12 to 15 pieces small to medium sized okra\r\n1 bundle string beans sliced into 3 inch pieces\r\n2 pieces medium ampalaya bitter gourd, cored and sliced\r\n2 to 3 tablespoons bagoong isda unprocessed fish sauce\r\n1 knob ginger sliced\r\n2 medium tomato chopped\r\n1 medium onion chopped\r\n3 cups water', 'Dinengdeng or inabraw is a Filipino vegetable dish that originated from the Ilocos region in the Philippines. It is composed of different vegetables that are usually grown in one’s backyard. This dish has a similarity with bulanglang and laswa; the obvious difference of Dinengdeng is the use of fried or grilled fish. Another notable difference is the addition of “bagoong isda”.\r\n\r\n\r\n1. Bring water to a boil in a large cooking pot.\r\n2. Add the ginger, onion, and tomato. Cook covered for 5 minutes.\r\n3. Pour-in the bagoong isda. Stir.\r\n4. Add okra and string beans. Stir and add the ampalaya. Cook in medium heat for 7 to 10 minutes.\r\n5. Put-in the squash flower and malunggay leaves. Cook for 3 to 5 minutes.\r\n6. Add the grilled milk fish. Let it stay for 3 to 5 minutes to add flavor to the dish.\r\n7. Serve. Share and enjoy!'),
(4, '2', '25badaa88041f5b7d628aa97c479bcfd.jpg', 'Papaitan', '1/2 lb ox tripe\r\n1/2 lb cow’s small intestine\r\n1/2 lb beef thinly sliced and chopped\r\n1/2 lb cow’s heart\r\n2 tbsp bile\r\n2 thumbs ginger julienned\r\n1 piece onion diced\r\n6 cloves garlic crushed and chopped\r\n8 cups water\r\n4 to 6 pieces finger chilies\r\n2 1/2 tablespoons salt\r\n1/2 tablespoon ground black pepper\r\n1 to 2 pieces lemon or 5 to 8 pieces calamansi\r\n2 tablespoons cooking oil', 'Papaitan is a famous Ilocano soup dish mostly composed of cow or goat innards. The name of this dish was derived from the Filipino word “Pait”, which means “bitter”. The bitter taste of this soup comes from the bile. This is a bitter juice extracted by the liver and stored in the gallbladder to aid digestion.\r\n\r\n1. Heat a cooking pot and pour-in 4 cups of water and put-in 1 tablespoon salt. Bring to a boil.\r\n2. Put-in the ox tripe and small intestines and simmer until tender. This should take approximately 35 to 50 minutes.\r\n3. Turn off heat. Remove the tender ox tripe and small intestines then slice. Set aside. Discard the water.\r\n4. Heat a clean cooking pot and pour-in cooking oil.\r\n5. When the oil is hot enough, sauté garlic, onion, and ginger.\r\n6. Add the beef, heart, sliced intestines, and tripe then cook for about 3 to 4 minutes.\r\n7. Add 1 1/2 tablespoon salt and ground black pepper then stir for a minute.\r\n8. Pour-in remaining 4 cups of water and bring to a boil. Simmer for 40 minutes (you may add more water if needed).\r\n9. Add bile then simmer for 5 minutes.\r\n10. Add the finger chilies and squeeze-in the lemon juice then simmer for 3 minutes.\r\n11. Turn off the heat and transfer to a serving bowl.\r\n12. Serve hot. Share and enjoy!'),
(5, '2', '976b99ba944ba4d4fafc3c99ca9bdc40.jpg', 'Dinardaraan', 'Pork (shoulder/pork belly)\r\nPork blood\r\nBeef broth (or water)\r\nVinegar\r\nGarlic\r\nRed onion\r\nBay leaves\r\nGinger\r\nGreen finger chili\r\nMagic Sarap (a Filipino seasoning blend)\r\nPeppercorn\r\nVegetable oil (for sautéing)\r\nSome recipes may also include additional ingredients, such as:\r\n Pork intestines (chopped and fried)\r\n Chicken blood (in a variation of the dish)\r\n Chicken giblets (liver, heart, lungs, intestines)\r\n Chicken testicles (ukel-ukel)\r\n Glutinous rice (for coagulating the blood)', 'Dinardaraan: A savory blood stew, a culinary adventure for those with an adventurous palate.\r\n\r\n* Heat oil in a cooking pot.\r\n* Sauté the garlic and onion until soft\r\n* Add the pork and ground black pepper. Sauté until it turns medium brown.\r\n* Pour the broth or water. Let boil. Adjust the heat to low. Cook for 25 to 30 minutes. You may add more water if it starts to dry out while you simmer.\r\n* Pour the vinegar in the pot. Let boil. Stir. Add the green peppers and pork blood. Continue to cook for 15 to 20 minutes or until the sauce thickens.\r\n* Sprinkle some salt to taste.\r\n* Transfer to a serving plate. Serve.\r\n* Share and enjoy!'),
(6, '2', 'eef77919ee28bc8f62bdf0686550744f.jpg', 'Kilawing Kambing', '1 lb. goatskin\r\n6 pieces spicy Thai chili  \r\n1 ½ tablespoons minced fresh ginger  \r\n1 medium red onion minced  \r\n6 to 10 tablespoons coconut vinegar or white vinegar  \r\n4 cups water  \r\n4 pieces dried bay leaves  \r\nSalt and ground black pepper to taste\r\n', 'Kilawing Kambing or Chopped Goatskin Kilawin is a Filipino appetizer dish wherein boiled and chopped goatskin is marinated in a mixture of vinegar, onion, ginger, spicy chili, and other spices. This dish is served along with the marinade, which eventually turns-out as the sauce of this dish.\r\n\r\n\r\n* Pour water in a cooking pot. Bring to a boil.\r\n* Add the bay leaves and goatskin. Cover and boil in low heat for 60 minutes or until the skin gets tender.\r\n* Remove the tender skin from the cooking pot and discard the water. Let it cool down and then chop into small pieces. Set aside.\r\n* In a large glass or plastic bowl, combine chili, ginger, onion, and vinegar. Mix well.\r\n* Add the chopped goat. Toss to mix all the ingredients.\r\n* Add salt and pepper according to your taste preference. Toss one more time to ensure that the salt and pepper blends well.\r\n* Cover the bowl with a clear plastic wrap, or simply with a wide plate. Refrigerate for 3 hours.\r\n* Transfer to a serving platter. Serve.\r\n* Share and enjoy!'),
(7, '2', 'cf0421cec0d8bd956d97ce421e16fc8f.jpg', 'Bagnet', '3 lbs. pork belly\r\n2 tablespoons white vinegar\r\n2 tablespoons salt\r\n2 bunches lemongrass\r\n1 tablespoon whole peppercorn\r\n1 onion\r\n8 cups water\r\n6 cloves garlic\r\n3 laurel leaves\r\n6 cups cooking oil', 'Bagnet: Crispy deep-fried pork belly, a culinary icon that perfectly embodies Ilocano indulgence.\r\n\r\n* Preheat oven to 175F.\r\n* Pour water into a pressure cooker. Add lemongrass, salt, whole peppercorn, and onion. Let boil.\r\n* Add pork belly. Boil for 3 minutes. Cover the pressure cooker. Cook for 15 minutes.\r\n* Let the pressure out completely Put the pork belly on a clean plate and let it cool-down for 10 minutes. Season the meat part with salt and ground black pepper. Turn it upside down and season the skin part with salt.\r\n* Wrap the sides of the pork with an aluminum foil and then rub vinegar on the skin part.\r\n* Bake it for 2 ½ hours to dehydrate the skin.\r\n* Remove the pork from the oven. Set aside.\r\n* Heat oil in a wide wok. Once the oil gets hot, add garlic and laurel leaves. Cook until the garlic floats. Remove the garlic and leaves afterwards using a strainer.\r\n* Arrange a slab of pork belly over a skimmer. Pour hot oil over it using a ladle. Do this step until a crackling texture is formed on the skin. Perform the same steps until all the pork are done.\r\n* Arrange on a serving plate. Serve with your favorite dipping sauce. Share and enjoy!'),
(8, '1', 'Sinanglaw2.png', 'Sinanglaw', '500 g beef brisket or any cheap cut, cubed\r\n300 g beef tendons, cut into squares\r\n300 g pre-cooked beef tripe, cubed\r\n1/4 cup diluted beef bile or 2-3 pcs bitter gourd, roughly chopped\r\n500 g kamias or tamarind\r\n1 whole garlic, minced\r\n1 thumb size ginger, thinly sliced\r\n2 large onion, quartered\r\n6 pcs finger chillies, thinly sliced\r\nfish sauce or sea salt\r\nspinach leaves, optional\r\noil', 'Sinanglaw is a Filipino soup dish prepared with beef and beef offal flavoured with kamias and bile, nearly similar to pinapaitan.\r\n\r\n\r\n* 		In a deep pot, put oil then sauté garlic, onions and ginger.\r\n* 		Add beef and brown all sides. Once brown, add the beef tendons.\r\n* 		Add water to the pot enough to cover the meat pieces. Bring it to a boil then simmer soup for 45 minutes in low heat.\r\n* 		Turn off the heat then drain the soup using a fine sieve to have a clear broth. Set aside the meat pieces. Place clear broth on another pot together with the tendons and set aside the beef. Bring it to a boil and simmer until tendons are soft (this might take 90 to 120 minutes more) add water if needed.\r\n* 		Add the beef, tripe, finger chillies and bile (if using). At this stage if you are using bitter gourd place it in a muslin cloth together with tamarind or kamias, wrap it well then place into the pot. Simmer for 30 minutes.\r\n* 		Press the muslin cloth over the soup to extract the juices then season with salt or fish sauce. If you want to add some leafy greens, I suggest spinach. Serve hot.'),
(9, '2', '14cf9e2a5c5ee534fc390d06c4f995d6.jpg', 'buridibod', '350g prawns, skin on\r\n2 large sweet potatoes, sliced\r\n1 long bitter gourd, sliced\r\n1 large bunch pea shoots\r\n1 dozen moringa fruit (drumsticks), skinned and sliced\r\n2 pcs Asian eggplants, sliced\r\n cups chicken stock\r\n3 tbsp bagoong monamon\r\n1 onion, sliced\r\n4 cloves garlic, minced\r\n1 tsp minced ginger\r\nsalt\r\nfreshly ground black pepper\r\noil', 'Buridibud is a vegetable soup dish similar to dinengdeng, the main difference is that this dish uses sweet potatoes as its main ingredient where it is cooked to the point that it’s so soft it breaks down with the soup giving it a thicker texture.\r\n\r\n* 		In a pot heat oil then sauté garlic, ginger and onion.\r\n* 		Add the chicken stock and half of the sweet potatoes, bring to a boil and simmer until sweet potatoes are really soft.\r\n* 		Add bitter gourd, sweet potatoes, moringa fruit and eggplants simmer for 7 minutes.\r\n* 		Add the bagoong monamon, prawns and pea shoots, cook for 3 more minutes.\r\n* 		Season with salt and freshly ground black pepper. Turn heat off then serve.'),
(10, '2', 'hq720.jpg', 'Imbaliktad', '500 g beef rump steak, cut into thin very strips\r\n6 cloves garlic, minced\r\n1 red onion, chopped\r\n1 thumb sized ginger, cut into thin matchsticks\r\n1/3 cup cane vinegar\r\n2 stalks spring onion, chopped\r\n2 pcs red chillies, sliced\r\nsalt\r\nfreshly ground black pepper\r\noil', 'Imbaliktad is an Ilocano dish made with medium rare stir fried beef on garlic, onion, ginger and vinegar\r\n\r\n* 		Heat wok in very high heat, add oil and once it starts smoking quickly stir fry together beef, garlic, onion, ginger, chillies and spring onions. Continuously stir fry for 2 minutes.\r\n* 		Still on high heat add the vinegar and let it boil\r\n* 		Season with salt and freshly ground black pepper then serve.'),
(11, '1', 'cf0b55435f0e21221df40e9cead9c959.jpg', 'Vigan Longganisa', '1 kg minced pork (30% fat)\r\n1/3 cup Filipino soy sauce\r\n3 stalks parsley, finely chopped\r\n1 tbsp sweet paprika\r\n1 tbsp salt\r\n3 tbsp cane vinegar\r\n2 whole garlic, minced\r\n2 tbsp onion powder\r\n2 tsp black pepper powder\r\nsausage casing\r\n', 'Vigan Longganisa is a Filipino sausage from the Ilocos region made with pork mince, spices and tons of garlic.\r\n\r\n* 		In a large bowl mix together soy sauce and vinegar\r\n* 		Add in all the remaining ingredients apart from the sausage casing then mix.\r\n* 		Place mixture in a sausage stuffer, place casing on the other end then tie a tight knot on the end. Fill the sausage casing with the meat mixture, every 2½-inch twist to seal section, gently pack each section until you are finished with all the meat.\r\n* 		Once in the casing hang dry over direct sunlight for 6 hours so excess liquid drips and evaporates. Place in the refrigerator in a tight covered container to let it cure for 3 to 5 days.\r\n* 		To cook, place sausages in a pan, add a bit of water then cook in low heat while covered. Once water dries out add a bit of oil then slowly pan fry until cooked.'),
(12, '1', 'Kamatis-Bagoong-at-Lasona.jpg', 'Kamatis Bagoong at Lasona', '2 medium red tomatoes, diced\r\n1 small shallot, chopped\r\n2 stalks of spring onion, sliced\r\n1/4 cup bagoong isda (fermented fish sauce)\r\njuice from 1 lemon\r\nfreshly ground black pepper', 'Fresh tomatoes, savory shrimp paste, and a touch of onion – our classic Filipino side dish will add some bold flavour to your meal! Experience the bold flavour of Kamatis Bagoong at Lasona, a classic Filipino side dish made with fresh tomatoes, shrimp paste, and onions. Delicious!\r\n\r\n\r\n* 		Combine diced tomatoes, chopped shallot, and bagoong in a bowl, and mix well.\r\n* 		Add lemon juice and freshly ground black pepper to the mixture and continue to mix until well blended.\r\n* 		Top the dish with sliced spring onions.\r\n* 		Serve as a flavourful side dish that pairs well with grilled or fried meats.'),
(13, '4', 'emp.png', 'Ilocos Empanada', 'Dough\r\n* 		 2 cups rice flour\r\n* 		 1/2 cup water\r\n* 		 1/2 tsp salt\r\n* 		 1/4 cup annatto oil (see notes below)\r\nFilling\r\n* 		 1 green unripe papaya, grated\r\n* 		 6 pcs Vigan style longaniza, removed from the casing\r\n* 		 2 stalks spring onion, chopped\r\n* 		 6 fresh eggs\r\n* 		 salt\r\n* 		 freshly ground black pepper\r\nOthers\r\n* 		 oil, for deep frying\r\n* 		 wax / baking paper\r\n', 'Deep-fried turnover filled with longganisa, vegetables, and egg, a tasty street food classic.\r\n\r\n* 		Combine rice flour, water, salt, and annatto oil in a bowl. Knead till smooth, then divide into balls.\r\n* 		Grab one ball of the dough, using two large square wax paper, place the dough in the middle then flatten it to a circle shape until it is thin.\r\n* 		Place an equivalent amount of one Vigan longaniza and papaya mixture in the middle, crack a piece of fresh egg in the middle then add some chopped spring onions on top.\r\n* 		Season with a bit of salt then fold and seal edges then deep fry immediately in a 160C preheated oil in a flat wide pan. Cook until crisp, this would take around 4 minutes per side then place in a paper towel lined plate. Serve.\r\n\r\n\r\n\r\nNote: To make annatto oil, combine 2 tablespoons of annatto seeds and 1/4 cup neutral flavoured oil in a saucepan then apply medium heat.  Once oil starts bubbling, turn heat off then leave the seeds to soak in oil for a couple of minutes.'),
(14, '1', '3507b9daf3bc4845fbbe6c857a4330bc.jpg', 'Poqui Poqui', '4 Asian eggplants\r\n2 large tomatoes, chopped\r\n1 red onion, finely chopped\r\n4 cloves garlic\r\n4 eggs, lightly beaten\r\nsalt\r\nfreshly ground black pepper\r\noil', 'Poqui Poqui dish looks funny and even sounds funny (for Filipino’s it even sounds funnier) but don’t be deceived by its looks as this is one amazing recipe\r\n\r\n\r\n* 		Cook Asian eggplants over a charcoal grill or just on stove tops until skin is charred. Let it cool then peel off the skin, roughly chop then set aside.\r\n* 		In a pan add oil then sauté garlic and onions.\r\n* 		Add tomatoes and cook until soft.\r\n* 		Add eggplants then cook for 3-4 minutes while occasionally stirring.\r\n* 		Season with salt and pepper then pour the beaten eggs, cook for 2 minutes or until eggs are set and still moist.\r\n* 		Serve while hot, BTW I love this with sukang Ilocos (Vinegar)'),
(15, '1', 'Screenshot 2024-12-02 225810.jpg', 'Lomo Lomo', '500 g pork belly, sliced into small cubes\r\n150 g pork liver, sliced into small cubes\r\n1/2 pig’s brain or 1 cup pig spinal cord\r\n3 cups pork stock or water\r\n1/2 bunch chives, chopped\r\n6 cloves garlic, minced\r\n3 small shallots, finely chopped\r\npork lard\r\nfish sauce\r\nfreshly ground black pepper', 'A traditional Ilocano dish of pork belly, liver, and pig’s brain or spinal cord, boiled with chives and seasoned with fish sauce.\r\n\r\nIn a pot, boil the pig’s brain or spinal cord in 1 cup of water. Drain and let it cool. Then slice into small cubes. Set aside.\r\nIn a pot, heat the pork lard and add the garlic until golden brown.\r\nAdd the shallots and continue to sauté.\r\nAdd the pork belly and cook until light brown on all sides.\r\nAdd the pork liver and cook for 2 minutes.\r\nAdd 3 cups of water or pork stock, cover the pot, and bring to a boil, lower the heat then simmer for 20 minutes or until the pork is tender.\r\nAdd the chives and pig’s brain or spinal cord.\r\nCook covered for another minute.\r\nSeason with fish sauce and freshly ground black pepper.'),
(16, '2', 'b369daf461fff31d52c1d214792d499b.jpg', 'Pinakbet', '1 pound pork belly sliced in cubes\r\n▢1 medium yellow onion sliced thin\r\n▢1 inch ginger peeled and sliced thin\r\n▢1 large sweet potato sliced\r\n▢2 cups tomatoes sliced\r\n▢1 large eggplant sliced\r\n▢10 pieces okra trimmed and sliced 2-inches\r\n▢2 large Serrano pepper optional\r\n▢⅓ cup fermented fish sauce (bagoong)\r\n\r\n', 'Pinakbet Ilocano is a Filipino version of cooking vegetables, fermented fish sauce (bagoong), and fried pork. As the name implies, it is originally from the Northern Luzon region in the Philippines called Ilocos Region. As an Ilocano, I will share this delicious, nutritious, and authentic Pakbet Ilokano recipe with you.\r\n\r\n\r\n\r\nPan-fry the pork on all sides until nice and golden brown. Take them out, including most of the fats they rendered.\r\nIn the same pan, start adding the aromatics and vegetables. First, add the ginger and onion. Followed by tomatoes and sliced sweet potatoes.\r\nAdd and arrange the okra, eggplant, bittermelon, and jalapeno pepper.\r\nDilute the fermented fish sauce (bagoong) in a cup of water, then pour it into the pot or skillet.\r\nLastly, add the fried pork on top. Cover and cook in high heat for about 7-10 minutes or until it starts boiling. Gently stir with a spatula for even cooking. Continue cooking on medium heat until you achieve the desired doneness, soft but not soggy.');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `username`, `email`, `full_name`, `password`, `contact`, `user_type`) VALUES
(1, 'Melvin', 'melvin@gmail.com', 'John Melvin R. Macabeo', '21232f297a57a5a743894a0e4a801fc3', '09876543', 'admin'),
(2, 'Bruno', 'bruno@gmail.com', 'Bruno Boy', '81dc9bdb52d04dc20036dbd8313ed055', '09876543', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`tbl_category_id`);

--
-- Indexes for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  ADD PRIMARY KEY (`tbl_recipe_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `tbl_category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  MODIFY `tbl_recipe_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
