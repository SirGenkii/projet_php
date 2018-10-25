CREATE TABLE sneakers (
	id INTEGER PRIMARY KEY,
  marque TEXT,
	modele TEXT,
	couleur TEXT,
	prix REAL,
  gamme TEXT CHECK (VALUE IN ('H', 'F')),
  image TEXT

);
