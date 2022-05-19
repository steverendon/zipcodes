CREATE DATABASE IF NOT EXISTS zipcode_info;

USE zipcode_info;

CREATE TABLE IF NOT EXISTS zipcodes (
	d_codigo INTEGER,
	d_asenta VARCHAR(255),
	d_tipo_asenta VARCHAR(255),
	D_mnpio VARCHAR(255),
	d_estado VARCHAR(255),
	d_ciudad VARCHAR(255),
	d_CP VARCHAR(255),
	c_estado INTEGER,
	c_oficina  INTEGER,
	c_CP INTEGER,
	c_tipo_asenta INTEGER,
	c_mnpio INTEGER,
	id_asenta_cpcons INTEGER,
	d_zona VARCHAR(255),
	c_cve_ciudad INTEGER
);
