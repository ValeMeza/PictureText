DROP TABLE IF EXISTS picture;
CREATE TABLE picture(
  pictureText INT UNSIGNED AUTO_INCREMENT NOT NULL,
  pictureUpload VARCHAR (65535),
  INDEX(pictureUpload),
  PRIMARY KEY(pictureText)
);
