create database scandiwhouseappp;

use scandiwhouseappp;

Create TABLE 'productlist' (
    'id' int(255) NOT NULL auto_increment,
    'sku' varchar(30) NOT NULL,
    'name1' text(50) NOT NULL,
    'price' varchar(25) NOT NULL,
    'size' varchar(50),
    'weight' varchar(50),
    'category' varchar(50),
    CONSTRAINT productlistPK PRIMARY KEY ('id')
);