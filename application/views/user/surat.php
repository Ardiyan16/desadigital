<!DOCTYPE html>
<html>

<html>

<head>
    <title> Cara Membikin Surat </title>
</head>

<body bgcolor="white">
    <font face="Arial" color="black">
        <p align="center"> PEMERINTAHAN KABUPATEN BANYUWANGI </p>
    </font>
    <font face="Arial" color="black">
        <p align="center"> KECAMATAN GENTENG</p>
    </font>
    <font face="Arial" color="black">
        <p align="center"> DESA GENTENG KIDUL </p>
    </font>
    <font face="Arial" color="black" size="3">
        <p align="center"> JL. Perjuangan By Pass Sunyaragi Telp.(0231) 123456 Cirebon 45141 </p>
    </font>
    <hr>

    <font face="Arial" color="black" size="5">
        <p align="center"> <u> <b> SURAT KETERANGAN DOMISILI </b></u>
    </font><br>
    <font face="Arial" color="black" size="4"> Nomer: /SMKN1/2019 </p>
    </font>

    <br />

    <font face="Arial" color="black" size="4">
        <p>
            Yang bertanda tangan di bawah ini, Ketua Lingkungan RT.01/ RW.05, Kepala Desa Genteng Kulon, Kecamatan Genteng, Kabupaten Banyuwangi, menerangkan bahwa :
        </p>
    </font>
    <font face="Arial" color="black" size="4">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Bawik Ardiyan, S.Tr.Kom <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kepala Desa / Lurah Genteng Kulon <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: RT 12 RW 21, Pereng, Genteng Kulon, Genteng, Banyuwangi
        </p>
    </font>
    <font face="Arial" color="black" size="4">
        <p>
            Menerangkan bahwa :
        </p>
    </font>
    <font face="Arial" color="black" size="4">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->nama ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Tempat, Tanggal Lahir &nbsp;&nbsp;: <?php echo $surat->ttl ?>><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->jk ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->pekerjaan ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Agama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->agama ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Status Perkawinan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->status ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->nik ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $surat->alamat ?><br>
            </br>
    </font>
    <font face="Arial" color="black" size="4">
        <p>
            Dengan ini menyatakan bahwa orang yang bersangkutan <?php echo $surat->text ?>
        </p>
    </font>

    <font face="Arial" color="black" size="4">
        <p>
            Demikian surat keterangan domisili ini kami buat sebagimana perlunya semoga dapat
            digunakan sebagaimana mestinya. Dan kepada yang berkepentingan agar menjadi maklum.
        </p>
    </font>

    <font face="Arial" color="black" size="4">
        <p>
            Lendah, <?php echo date('d F Y') ?>;<br>
            Kepala Desa / Lurah Bumirejo
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            Bawik Ardiyan, S.Tr.Kom.
        </p>
    </font>
    <script>
        window.print();
    </script>

</body>

</html>