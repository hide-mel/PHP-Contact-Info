-- Create the table
CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  mobile VARCHAR(20),
  email VARCHAR(100),
  postcode VARCHAR(10)
);

-- Insert data into the table
INSERT INTO contacts (first_name, last_name, mobile, email, postcode)
VALUES
  ('Peter', 'Rabbit', '0400505123', 'peter@therabbit.com', '3121'),
  ('Darth', 'Vader', '0409123123', 'darth@theforce.com', NULL),
  ('Charlie', 'Brown', '0408998112', 'living@thedream.com.au', '3020'),
  ('Mickey', 'Mouse', '0411211211', 'mouse@bestplace.com', NULL),
  ('Donald', 'Duck', '0421121211', NULL, NULL),
  ('Julius', 'Caesar', '0417878123', NULL, '4050'),
  ('Mike', 'Tyson', '0400500800', 'mike@ipunch.com.au', NULL),
  ('Clint', 'Eastwood', '0419345345', 'clint@thebigdog.com', NULL),
  ('Daffy', 'Duck', '0421121212', 'daffy@alltheducks.com.au', NULL),
  ('Michael', 'Jordan', '0418765543', 'mike@idunk.com.au', '5050'),
  ('Julia', 'Roberts', '0409678332', NULL, '5052'),
  ('Cyndi', 'Lauper', '0408123123', 'cyndi@musicrocks.com.au', NULL);
