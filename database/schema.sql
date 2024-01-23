create database dbMoosClocks;
use dbMoosClocks;

create table tbBrand (
	Id int auto_increment primary key,
    Brand varchar(50) not null
);
create table tbCategory (
	Id int auto_increment primary key,
    Category varchar(50) not null
);
create table tbClock (
	Id int auto_increment primary key,
    ClockName varchar(50) not null,
    ClockPrice decimal(9, 2) not null,
    ClockDescription varchar(500) not null,
    ClockImage varchar(300) not null,
    ClockQuantity int,
    ClockRelease enum('Y', 'N') default 'N',
    ClockBestSelling enum('Y', 'N') default 'N',
    IdCategory int, 
    IdBrand int,
    foreign key (IdCategory) references tbCategory(IdCategory),
    foreign key (IdBrand) references tbBrand(IdBrand)
);
create table tbUser (
	Id int auto_increment primary key,
    UserName varchar(80) not null,
    UserEmail varchar(200) not null,
    UserPassword varchar(16) not null,
	UserStatus tinyint(1) default 1,
    UserAddress varchar(200),
    UserCity varchar(80),
    UserCep varchar(9)
);

delimiter $
CREATE PROCEDURE spInsertClock(vClockName varchar(50), vClockPrice decimal(9, 2), vClockDescription varchar(500), vClockQuantity int, vClockRelease enum("Y", "N"), vClockBestSelling enum("Y", "N"), vClockImage varchar(1000), vCategory varchar(50), vBrand varchar(50))
begin
        if not exists (select ClockName from tbClock where ClockName = vClockName) then
			if not exists (select Category from tbCategory where Category = vCategory) then
				insert into tbCategory (Category) values (vCategory);
			end if;
            if not exists (select Brand from tbBrand where Brand = vBrand) then
				insert into tbBrand (Brand) values (vBrand);
			end if;
			set @idBrand = (select Id from tbBrand where Brand = vBrand);
			set @idCategory = (select Id from tbCategory where Category = vCategory);
            
            insert into tbClock (ClockName, ClockPrice, ClockDescription, ClockQuantity, ClockRelease, ClockBestSelling, ClockImage, IdCategory, IdBrand) values (vClockName, vClockPrice, vClockDescription, vClockQuantity, vClockRelease, vClockBestSelling, vClockImage, @idCategory, @idBrand);
			
            select * from tbClock where ClockName = vClockName;
        else 
			select "This clock already exists!";
        end if;
end
$

delimiter $
CREATE VIEW dbMoosClocks.vwClock AS
    SELECT 
        tbClock.ClockName AS ClockName,
        tbClock.ClockPrice AS ClockPrice,
        tbClock.ClockDescription AS ClockDescription,
        tbClock.ClockImage AS ClockImage,
        tbClock.ClockQuantity AS ClockQuantity,
        tbClock.ClockRelease AS ClockRelease,
        tbClock.ClockBestSelling AS ClockBestSelling,
        tbCategory.Category AS Category,
        tbBrand.Brand AS Brand
    FROM
        tbClock
        JOIN tbCategory ON (tbClock.IdCategory = tbCategory.Id)
        JOIN tbBrand ON (tbClock.IdBrand = tbBrand.Id)
$