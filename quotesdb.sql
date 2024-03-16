CREATE TABLE `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
  
);


CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)

);


CREATE TABLE `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` varchar(255) NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  /*CONSTRAINT quotes_fk1*/ FOREIGN KEY (category_id) REFERENCES categories(id),
 /*CONSTRAINT quotes_fk2*/ FOREIGN KEY (author_id) REFERENCES authors(id)
  );

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Inspirational'),
(2, 'Music'),
(3, 'Life'),
(4, 'Funny'),
(5, 'Love');

INSERT INTO `authors` (`id`, `author`) VALUES
(1, 'Muhammad Ali'),
(2, 'Bob Marley'),
(3, 'Plato'),
(4, 'Hans Christian Andersen'),
(5, 'Groucho Marx'),
(6, 'Isaac Asimov');

INSERT INTO `quotes` (`id`, `quote`, `category_id`, `author_id`) VALUES
(1, "I hated every minute of training, but I said, 'Don't quit. Suffer now and live the rest of your life as a champion.' ", 1, 1),
(2, "It isn't the mountains ahead to climb that wear you out; it's the pebble in your shoe",  1, 1), 
(3, "He who is not courageous enough to take risks will accomplish nothing in life", 1, 1),
(4,"Float like a butterfly, sting like a bee", 1, 1 ),
(5, "The man who has no imagination has no wings", 1, 1),
(6, "One good thing about music, when it hits you, you feel no pain", 2, 2),
(7, "Music is a moral law. It gives soul to the universe, wings to the mind, flight to the imagination, and charm and gaiety to life and to everything", 2, 3),
(8, "Where words fail, music speaks", 2, 4),
(9, "Open your eyes, look within. Are you satisfied with the life you're living?", 1, 2),
(10,"Those are my principles, and if you don't like them... well, I have others", 4, 5 ),
(11, "Love is a serious mental disease", 5, 3),
(12, "Life itself is the most wonderful fairy tale", 3, 4),
(13, "My life is a lovely story, happy and full of incident", 3, 4 ),
(14, "Most of the people who will walk after me will be children, so make the beat keep time with short steps.", 4, 4),
(15, "Behind every successful man is a woman, behind her is his wife", 4, 5),
(16, "I refuse to join any club that would have me as a member", 4, 5),
(17, "People who think they know everything are a great annoyance to those of us who do", 4, 6),
(18, "Life is pleasant. Death is peaceful. It's the transition that's troublesome", 3, 6),
(19, "The saddest aspect of life right now is that science gathers knowledge faster than society gathers wisdom", 3, 6),
(20, "Getting older is no problem. You just have to live long enough", 3, 4),
(21, "The secret of life is honesty and fair dealing. If you can fake that, you've got it made", 3, 4),
(22, "One morning I shot an elephant in my pajamas. How he got into my pajamas I'll never know", 4, 5),
(23, "Self-education is, I firmly believe, the only kind of education there is", 1, 6),
(24, "I don't expect to live forever, but I do intend to hang on as long as possible", 3, 6),
(25, "It pays to be obvious, especially if you have a reputation for subtlety", 3, 6);