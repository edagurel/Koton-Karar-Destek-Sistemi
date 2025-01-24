<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard Main</title>
<meta charset="utf-8">
<link href="subestyle.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
   <script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-base.min.js" type="text/javascript"></script>
 <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>

<style>
body{
	font-family:'Graphik',Helvetica;
	height:1400px;
	display:flex;
	background:#d2d6de;
	margin:0;
}
.sidebar{
	width:500px;
	height:1400px;
	background-color:#1c223f;
	display:flex;
	flex-direction:column;
}
.sidebar .sidebarTop{
	width:200px;
	height:60px;
	background-color:#1c223f;
	color:fff;
	display:flex;
	align-items:center;
	justify-content:center;
	font-size:24px;
	color:white;
}
.sidebar .info #avatar{
	width:40px;
	height:40px;
	border-radius:20px;
	margin:10px;
} 
.sidebar .info{
	display:flex;
	width:100%;
} 
.sidebar .info .infoName{
	padding-top:20px;
	color:#fff;
}
.sidebar .search{
	display:flex;
}
.sidebar .search .arama{
	width:80%;
	margin-left:10px;
	background-color:#343a40;
	color:#fff;
}
.sidebar .search span{
	color: white;
	margin-left:2px;
}
.sidebar .mainNav{
  width:100%;
  height:50px;
  color:#dfd9d3;
  font-size:15px;
  display:flex;
  align-items:center;
  padding-left:28px;
}
a:link{ color: #dfd9d3;
             text-decoration:none; } 

a:visited{ color: #dfd9d3; 
             text-decoration:none; }  
a:hover{ color: black; 
             text-decoration:none; } 
			 
.sidebar .dash, .sube, .kategori, .urun, .musteri,.satis{
  background:#232b4e;
  width:100%;
  height:60px;
  padding:10px;
  box-sizing:border-box;
  display:flex;
  align-items:center;
  justify-content:space-between;
  font-size:15px;
  border-style: solid; 
  border-width: 1px;
  border-color: #dfd9d3;
}
.sidebar .dash span, .sube span, .kategori span, .urun span, .musteri span, .satis span{ 
  position:absolute;
  padding:20px;
  justify-content:space-between;
  color: #dfd9d3;
}
		 
.content{
	flex:1;
    flex-direction:column;
	background-color:#f1f1f1;
}
.content .header{
  width:1150px;
  height:60px;
  background:#99a2af;
  display:flex;
  align-items:center;
  padding-left:20px;
  box-sizing:border-box;
  color:#fff;
  justify-content:space-between;
}
.content .header img{
  width:40px;
  height:40px;
  border-radius:25px;
}
.content .header .not{
  margin-left:auto!important;
  width:100px;
  margin:800px;
  display:flex;
  justify-content:space-between;
}
.content .header .headerInfo{
  padding:25px;
  width:110px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  font-size:14px;
}
.content .header .fa-cogs{
  margin-right:20px;
}
.content .main{
  width:1150px;
  height:60px;
  background:#f1f1f1; 
}
.content .main .nav{
  display:flex;
  width:100%;
  align-items:center;
  justify-content:space-between;
  padding:15px;
  box-sizing:border-box;
}
.content .main .nav .dash{
  font-size:22px;
}
.content .main .nav .navigation{
  font-size:12px;}
.content .container{
	display:flex;
	justify-content:space-between;
}
.content .grafikler .grafikler1{
	width:100%;
	
}
.content .grafikler .grafikler2{
	width:100%;
	display:flex;
	padding-top:70px;
	
}
.content .grafikler .grafikler3{
	width:100%;
	display:flex;
	padding-top:70px;
	
}
.content .grafikler .grafikler4{
	width:100%;
	display:flex;
	padding-top:70px;
	
}
.content .grafikler .grafikler2 .grafik1{
	width:400px;
	height:200px;
	padding-left:100px;
}
.content .grafikler .grafikler2 .grafik2{
	width:400px;
	height:200px;
	padding-left:120px;
}
.content .grafikler .grafikler3 .grafik3{
	width:400px;
	height:200px;
	padding-left:100px;
}
.content .grafikler .grafikler3 .grafik4{
	width:400px;
	height:200px;
	padding-left:120px;
}
.content .grafikler .grafikler4 .grafik5{
	width:400px;
	height:200px;
	padding-left:100px;
}
.content .grafikler .grafikler4 .grafik6{
	width:400px;
	height:200px;
	padding-left:120px;
}

</style>


</head>
<body>
<div class="sidebar">
<div class="sidebarTop">Koton YöneticiPaneli</div>
<div class="info">
    <img id="avatar" src="<?php echo $_SESSION['resim'] ?>">
	     <span class="infoName"><?php echo $_SESSION['ad']," ",
		 $_SESSION['soyad'] ?></span>
</div>
<div class="search">
<input class="arama" type="text">
<span>
<i class="fas fa-search"></i>
</span> 
</div>
<div class="mainNav">Menü</div>
    <div class="dash">
      <span><i class="fas fa-tachometer-alt"></i>
      <a href="main.php">Ana Sayfa</a></span>
    </div>
<div class="sube">
      <span><i class="far fa-building"></i>
       <a href="subeler.php">Şubeler</a></span>
    </div>
<div class="kategori">
      <span><i class="fas fa-grip-horizontal"></i>
       <a href="kategori.php">Kategoriler</a></span>
    </div>
<div class="urun">
       <span><i class="fas fa-tags"></i>
       <a href="urun.php">Ürünler</a></span>
    </div>	
<div class="musteri">
      <span><i class="fas fa-users"></i>
       <a href="musteri.php">Müşteriler</a></span>
    </div>	
<div class="satis">
      <span><i class="fas fa-power-off"></i>
       <a href="index.php">Çıkış</a></span>
    </div>
	
</div>
<div class="content">
<div class="header">
<i class="fas fa-align-justify"></i>

      <div class="not">
      <i class="far fa-envelope"></i>
      <i class="far fa-bell"></i>
      <i class="far fa-flag"></i>
      </div>
      <div class="headerInfo">
       <img src="https://e7.pngegg.com/pngimages/605/775/png-clipart-businessperson-management-woman-female-entrepreneurs-businesswoman-company-people.png">
      <span>Eda Gürel</span>
      </div>
      <i class="fas fa-cogs"></i>
</div>
 <div class="main">
      <div class="nav">
        <div>
        <span class="dash">Dashboard</span>
        <span>Şubeler</span>
        </div>
        <div class="navigation">
        <i class="fas fa-tachometer-alt"></i>
        <span>Şubeler</span>
        <span>></span>
        <span>Dashboard</span>
        </div>
    </div>
	</div>
<div class="grafikler">
<div class="grafikler1">
  <div id="Pastachart_div" style="padding-left:100px; padding-top:30px; float: left;">
    
    </div>
	    <div id="Pastachart2_div" style=" margin-right:100px; padding-top:30px; float: right;">
    
    </div>
	</div>

<div class="grafikler2">	
<div class="grafik1">	
<canvas id="myChart"></canvas>
</div>
<div class="grafik2">	
<canvas id="myChart1"></canvas>
</div>
</div>
<div class="grafikler3">	
<div class="grafik3">	
<canvas id="myChart2"></canvas>
</div>
<div class="grafik4">	
<canvas id="myChart3"></canvas>
</div>
</div>
<div class="grafikler4">	
<div class="grafik5">	
<canvas id="myChart4"></canvas>
</div>
<div class="grafik6">	
<canvas id="myChart5"></canvas>
</div>
</div>
</div>
</div>
	</body>
	   <?php
 $baglanti=mysqli_connect("localhost","root","root","kotonkds");
 mysqli_set_charset($baglanti, "UTF8");
 $query = $baglanti->query("SELECT subeler.sube_adi, round((sum(satilan.adet)/(SELECT sum(satilan.adet) 
 FROM magaza,subeler,satilan WHERE magaza.magaza_id=subeler.magaza_id AND subeler.sube_id=satilan.sube_id)*100),2) as yuzdeOlarakSatis
FROM satilan, urunler, subeler
WHERE satilan.urun_id=urunler.urun_id AND subeler.sube_id=satilan.sube_id
GROUP BY subeler.sube_id
ORDER BY yuzdeOlarakSatis");

    ?>
    <div align="left" style="margin-left:0px;" float="left">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawPastaChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawPastaChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["sube_adi"]."',".$row["yuzdeOlarakSatis"]."],";
            
            }
            
            
            ?>
            
            
        ]);

        // Set chart options
        var options = {'title':'Şube Satış Miktarları Oranı',
                       'width':420,
                       'height':260,
					   'backgroundColor':'transparent'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Pastachart_div'));
        chart.draw(data, options);
      }
    </script>

    <!--Div that will hold the pie chart-->
  

  </div>
  
  	   <?php
 $baglanti=mysqli_connect("localhost","root","root","kotonkds");
 mysqli_set_charset($baglanti, "UTF8");
 $query = $baglanti->query("SELECT subeler.sube_adi, round((sum(urunler.fiyat*satilan.adet)/(SELECT sum(urunler.fiyat*satilan.adet)  
FROM magaza,subeler,satilan,urunler WHERE magaza.magaza_id=subeler.magaza_id AND subeler.sube_id=satilan.sube_id AND urunler.urun_id=satilan.urun_id)*100),2) as yuzdeOlarakGelir
FROM satilan, urunler, subeler
WHERE satilan.urun_id=urunler.urun_id AND subeler.sube_id=satilan.sube_id
GROUP BY subeler.sube_id
ORDER BY yuzdeOlarakGelir");

    ?>
    <div align="right" style="margin-left:0px;" float="right">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawPastaChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawPastaChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["sube_adi"]."',".$row["yuzdeOlarakGelir"]."],";
            
            }
            
            
            ?>
            
            
        ]);

        // Set chart options
        var options = {'title':'Şube Gelir Oranları',
                       'width':420,
                       'height':260,
					   'backgroundColor':'transparent'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Pastachart2_div'));
        chart.draw(data, options);
      }
    </script>

    <!--Div that will hold the pie chart-->


  </div>
  <script>
  var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
        datasets: [{
            label: 'Karşıyaka Ş. Aylara Göre Satışlar',
            
            borderColor: '#48979e',
            data: [6, 4, 2, 0, 2, 3, 2, 5, 1, 13, 9, 7]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
    <script>
  var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
        datasets: [{
            label: 'Konak Ş. Aylara Göre Satışlar',
            
            borderColor: '#004365',
            data: [2, 4, 4, 0, 1, 4, 0, 3, 5, 7, 8, 7]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
     <script>
  var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
        datasets: [{
            label: 'Buca Ş. Aylara Göre Satışlar',
            
            borderColor: '#005a5b',
            data: [6, 0, 4, 0, 1, 5, 0, 1, 2, 9, 6, 5]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
      <script>
  var ctx = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
        datasets: [{
            label: 'Balçova Ş. Aylara Göre Satışlar',
            borderColor: '#749ec8',
            data: [6, 0, 0, 4, 1, 4, 0, 0, 1, 5, 6, 1]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
       <script>
  var ctx = document.getElementById('myChart4').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
        datasets: [{
            label: 'Bornova Ş. Aylara Göre Satışlar',
            
            borderColor: '#424370',
            data: [8, 0, 0, 4, 3, 1, 6, 0, 1, 4, 12, 3]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
        <script>
  var ctx = document.getElementById('myChart5').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
        datasets: [{
            label: 'Bayraklı Ş. Aylara Göre Satışlar',
          
            borderColor: '#6e98ba',
            data: [6, 2, 0, 2, 2, 0, 4, 0, 1, 2, 6, 1]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
  
 

	</html>