CREATE USER 'new_root'@'localhost' IDENTIFIED BY '1111';
CREATE USER 'new_user'@'localhost' IDENTIFIED BY '1111';

GRANT ALL PRIVILEGES ON *.* TO 'new_root'@'localhost';
GRANT SELECT, INSERT ON beetroot.* TO 'new_user'@'localhost';
