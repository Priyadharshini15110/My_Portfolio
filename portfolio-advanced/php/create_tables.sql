-- Create database and users table
CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

-- Default login (admin / admin123)
INSERT INTO users (username, password)
VALUES ('admin', MD5('admin123'))
ON DUPLICATE KEY UPDATE username = username;
