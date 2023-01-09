-- table dnah muc
create table tblDanhmuc(
	IdDanhmuc int PRIMARY KEY AUTO_INCREMENT,
    TenDM varchar(100)
);

-- table thể loại
create table tblTheloai(
	IdTheloai int primary key AUTO_INCREMENT,
    Tentheloai varchar(100) not null,
    IdDM int ,
    foreign key(IdDM) REFERENCES tblDanhmuc(IdDanhmuc)
);

-- table bài đăng
create table tblBaidang(
	IdBaidang int primary key AUTO_INCREMENT,
    TenBD varchar(255) not null,
    IdTL int,
    foreign key(IdTL) REFERENCES tblTheloai(IdTheloai)
);


-- table chitiet bài đăng
create table chitietbaidang(
	Idchitiet int primary key AUTO_INCREMENT,
    IdBaidang int,
    Noidung varchar(1000) not null,
    thoigiandang date default CURRENT_DATE(),
    trangthai int default 0,
    foreign key(IdBaidang) REFERENCES tblBaidang(IdBaidang)
);

-- table đánh giá
create table tblDanhgia(
	IdDanhgia int primary key AUTO_INCREMENT,
    noidung varchar(255) not null,
    thoigiandanhgia datetime default CURRENT_TIME(),
    IdBaidang int,
    foreign key(IdBaidang) REFERENCES tblBaidang(IdBaidang)
);

-- table user
create table tblUser(
	IdUser int primary key AUTO_INCREMENT,
    username varchar(50) unique not null,
    pw varchar(50) not null,
    Firstname varchar(50),
    Lastname varchar(50),
    email varchar(255) unique
    	check ( email LIKE '[a-zA-Z]%@gmail.com' ),
    SDT varchar(11) UNIQUE
    	check ( SDT LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]' or SDT LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]' ),
    ngaysinh date
	check ( ngaysinh <= CURRENT_DATE() ),
    trangthai int default 0,
    quyen int default 0
);

-- table Thông báo
create table tblThongbao(
	IdThongbao int primary key AUTO_INCREMENT,
    noidung varchar(255),
    thoigiangui time default CURRENT_TIME(),
    IDusers varchar(1000)
);