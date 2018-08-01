
CREATE TABLE news (
  id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '新着情報ID',
  view_date date NOT NULL COMMENT '日付',
  title varchar(150) NOT NULL COMMENT 'タイトル',
  body text COMMENT '本文',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
