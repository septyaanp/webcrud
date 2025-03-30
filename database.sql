tuser (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nama VARCHAR(255),
  jenis_kelamin ENUM('L', 'P'),
  tempat_lahir VARCHAR(255),
  tanggal_lahir DATE,
  nim VARCHAR(255),
  ipk DECIMAL(3, 2),
  jurusan VARCHAR(255),
  universitas VARCHAR(255),
  tahun_masuk INT,
  no_rekening VARCHAR(255),
  no_hp VARCHAR(255),
  keterangan TEXT
);
