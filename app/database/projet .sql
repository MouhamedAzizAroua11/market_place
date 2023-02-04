CREATE TABLE admins (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(55) NOT NULL,
  full_name VARCHAR(55) NOT NULL,
  is_super_admin int,
  photo text,
  created_at DATETIME,
  updated_at DATETIME
);


CREATE TABLE marks (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(55),
  description VARCHAR(55) NOT NULL,
  image text,
  created_at DATETIME,
  updated_at DATETIME
);
CREATE TABLE categories (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(55) NOT NULL,
  description VARCHAR(55),
  created_at DATETIME ,
  updated_at DATETIME
);

CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(55) NOT NULL,
  description VARCHAR(55) ,
  image text,
  created_at DATETIME,
  updated_at DATETIME,
  mark_id INT,
  category_id INT,
  FOREIGN KEY (mark_id) REFERENCES marks(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);

Alter table products add admin_id int;

Alter table products add constraint fk1 FOREIGN Key(admin_id) REFERENCES admins(id) ;

Alter table Admins add password text;