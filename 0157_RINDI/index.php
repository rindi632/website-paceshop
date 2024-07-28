<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Toko Jersey | Pace</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="header">
    <p>Toko Jersey  | PACE</p>
  </div>
  <nav>
    <ul> <?php include("page/navbar.php") ?> </ul>
  </nav>

  <?php include("content.php") ?>

  <?php include("page/user/keranjang.php") ?>
  <div class="footer">
    <p>copyright by | RINDI RAMADHANI |<a href="" target="_blank">TOKO JERSEY ID</a></p>
  </div>

</body>

</html>
<style>
.header {
  border: 3px solid #22bb6d;
  border-radius: 10px 10px 0px 0px;
  width: 70%;
  min-height: 100px;
  margin: auto;
}
.header p {
  font-family: sans-serif;
  font-size: 50px;
  text-align: center;
  background: #22bb6d;
  padding: 5px;
  color: #f3f5f4;
}
.link {
  color: #22bb6d;
  text-decoration: none;
}
.link:hover {
  background: #22bb6d;
  border-radius: 4px;
  color: #FFF;
  padding: 2px;
}
nav {
  margin: auto;
  text-align: center;
  width: 70%;
  font-family: sans-serif;

}
nav ul {
  background: #22bb6d;
  padding: 0px;
  list-style: none;
  position: relative;
  display: inline-table;
  width: 100%;
}
nav ul li {
  float: left;
}
nav ul li.login {
  float: right;
  padding: 0px;
  background: #2C97DF;
  border-left:4px solid #2A80B9;
}
nav ul li.login:hover {
  background: #2A80B9;
}
nav ul li.logout {
  float: right;
  padding: 0px;
  background: #e41f49;
  border-left:4px solid #d0163d;
}
nav ul li.logout:hover {
  background: #d0163d;
}
nav ul li:hover {
  background: #15a95e;
}
nav ul li a {
  display: block;
  padding: 15px;
  color: #FFF;
  text-decoration: none;
}
.box-title{
  background: #22bb6d;
  width: 70%;
  height: 30px;
  margin: auto;
  border: 3px solid #22bb6d;
}
.box-title p {
  color: #f3f5f4;
  margin: 5px 5px;
  font-family: sans-serif;
}
#box {
  border-bottom: 0px;
  border-left: 3px solid #22bb6d;
  border-right: 3px solid #22bb6d;
  width: 70%;
  margin: auto;
  min-height: 200px;
  overflow: hidden;
}

table.news {
  border-collapse: collapse;
  width: 100%;
}
.news td {
  padding: 15px;
  border: 1px solid black;
}
.news th {
  background-color: #22bb6d;
  color: white;
  height: 50px;
}
.news tr:hover {
background-color: #d8d8d8;
}
table.article {
  border-collapse: collapse;
  border: 0px;
  width: 100%;
}
.article td {
  border: 0px;
  padding: 10px;
}
.article tr:hover {
  background-color: #e1e1e1;
}

.paging {
  text-align: center;
  margin: 20px;
}
.paging span {
  padding: 5px 20px;
  margin-right: 5px;
  background: #eee;
  border-radius: 10px;
}
#box p,h1,h2,table,tr,td,img {
  font-family: sans-serif;
  padding: 20px;
  text-align: justify;
}
table tr td.list :hover{
  background:#22bb6d;
  border-radius: 5px;
}

.keranjang-title{
  background: #FF7416;
  width: 70%;
  height: 30px;
  margin: auto;
  border: 3px solid #FF7416;
}
.keranjang-title p {
  color: #f3f5f4;
  margin: 5px 5px;
  font-family: sans-serif;
  text-align: center;
}
#keranjang {
  border-bottom: 3px solid #FF7416;
  border-left: 3px solid #FF7416;
  border-right: 3px solid #FF7416;
  width: 70%;
  margin: auto;
  min-height: 100px;
  overflow: hidden;
}
#keranjang p {
  font-family: sans-serif;
  padding: 20px;
  text-align: justify;
}
.footer {
  background: #22bb6d;
  border-radius: 0px 0px 10px 10px;
  border:3px solid #22bb6d;
  width: 70%;
  margin: 10px auto;
}
.footer p {
  font-family: sans-serif;
  color: #f3f5f4;
  margin: auto;
  padding: 5px;
  text-align: center;
}

.tombol-hijau{
  background:#2C97DF;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid #2A80B9;
  border-radius: 5px;
  padding:5px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin:10px;
}
.tombol-hijau:hover {
  background:#
  color:white;
  border-radius: 5px;
  padding:5px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
}
.tombol-merah{
  background:#ef4162;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid #da2648;
  border-radius: 5px;
  padding:5px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
}
.tombol-biru:hover {
  background:#da2648;
  color:white;
  border-radius: 5px;
  padding:5px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
}
.jersey {
  background: #000;
  width: 200px;
}
.pesan {
  background: #ef4162;
  margin: 10px;
  border-radius: 5px;
}
.pesan p {
  color: #FFF;
}
