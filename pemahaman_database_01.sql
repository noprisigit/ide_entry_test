CREATE TABLE school (
	id INT AUTO_INCREMENT,
	school_code VARCHAR(20) UNIQUE NOT NULL,
	school_name VARCHAR(100) NOT NULL,
	inaugurated_date DATE,
	PRIMARY KEY(id)
);