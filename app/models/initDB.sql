
/**
 * Author:  Haidar Ali
 * Created: Oct 19, 2024
 */

-- Assume that database named 'phpmvc' was exists
use phpmvc;

drop table if exists Mahasiswa;
create table if not exists Mahasiswa (
	id int AUTO_INCREMENT,
	nama varchar(100),
	nrp varchar(100),
	email varchar(100),
	jurusan varchar(100),
	primary key (id)
);

insert into phpmvc.Mahasiswa (nama, nrp, email, jurusan) values ('Haidar Ali', '223040093', 'haidar.223040093@mail.unpas.ac.id', 'Teknik Informatika');
insert into phpmvc.Mahasiswa (nama, nrp, email, jurusan) values ('Ila Radiah', '390040322', 'radiah.390040322@mail.unpas.ac.id', 'Teknik Informatika');
