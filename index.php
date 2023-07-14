
<style>
   
    .navbar{
        background: rgba(1,1,1,0.5);
        background-repeat: repeat-y;
    }
    .navbar-nav{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    a.nav-link{
        font-size : 12pt;
        /* color : white; */
        letter-spacing:1pt;
    }
    body{

      background: url("Background.png");
      background-size: cover;
      
      /* background-repeat: no-repeat; */
        transition : all 0.35s ease;
    }
    @font-face{
        font-family : "BaseNeue";
        font-weight : bold;
        src: url("assets/fonts/BaseNeueTrial-Bold.ttf");
    }

  
    .content{
      padding-left:  200pt;
      padding-right: 200pt;
      padding-top: 50pt;
      
    }

    .welcome h1{
      font-size : 40pt;
      padding-top: 150pt;
      
    }

    .cat{
      padding-top: 120pt;
      /* text-alignment: left; */
    }

 

</style>
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
include "connect.php";?>
<div class="container">
  <div class="row">

 

<nav class="navbar fixed-top navbar-expand-lg" style="padding: 5 100 5 100pt; background-color:#ffffff;">
  <div class="container-fluid">
    <ul class="me-lg-auto ms-sm-3 ms-lg-2 navbar-nav">
        <li>
            <a class="navbar-brand" href="index.php">BPS</a>
        </li>
    </ul>
    
    <div class="collapse navbar-collapse" id="navbarProduct"  method="POST">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="product">
        <?php 
          $qbarang =  "SELECT * FROM barang";
          $stmt = $pdo -> query($qbarang);
          foreach($stmt->fetchAll() as $row)
          {                                
          ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal" formmethod="POST" name="produk" id="nproduk" value="<?php echo $row['id']; ?>">
             <?php echo $row['nama_barang']; ?>
            </button>
          </a>
        </li> 
        <?php } ?>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
          <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Polo Shirt
            </button>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
          <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tumbler
            </button>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
          <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Totebag
            </button>
          </a>
        </li> -->
      </ul>
    </div>
    <button class="navbar-toggler me-4 button-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="width:auto">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse me-3" id="navbarNav">
        <ul class="navbar-nav me-auto"></ul>
      <ul class="navbar-nav ms-sm-3 ms-lg-0">
        <?php if((!isset($_SESSION['id'])) or ($_SESSION['id'] == "")){ ?>
            <li class="nav-item" >
                <a class="nav-link" href ="login.php">LOGIN</a>
                
            </li>
            <li class="nav-item" >
            <a class="nav-link" href ="signup.php">SIGNUP</a>
           
            </li>
        <?php }else{ ?>
            <?php
                $stmt = $pdo->prepare("SELECT * FROM lomba_pendaftaran where id_member =? and status = 1");
                $stmt->execute([$_SESSION['id']]);
                if($stmt->rowCount() > 0):
            ?>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href ="logout.php">LOGOUT</a>
            </li>
        <?php } ?>
      </ul>

      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->
    </div>
    
  </div>
</nav>
</div>

<div class="row">
<div class="bg">
<div class="content text-center">
  <div class="row welcome">
      <div><h1>BEM Petra Store</h1>
        <label for=""><a href="">How to Order?</a></label>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Delectus quam magni veniam? Modi ducimus sunt a nemo. Adipisci, deleniti temporibus rem voluptates architecto dolore rerum. 
           Inventore nulla expedita voluptates vel.
        </p>
      </div>
        
  </div>

  

<!-- <div class="row cat">
  <div class="card mb-3" style="width: 740pt;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  </div> -->
    <!-- <div class="col">
    <img src="shirt.png"  alt="...">
    <div>Tshirt</div>
    </div>
    <div class="col">
    <img src="shirt.png"  alt="...">
    <div>Tshirt</div>
    </div>
    <div class="col">
    <img src="shirt.png"  alt="...">
    <div>Tshirt</div>
    </div>
    <div class="col">
    <img src="shirt.png"  alt="...">
    <div>Tshirt</div>
    </div>
    <div class="col">
    <img src="shirt.png"  alt="...">
    <div>Tshirt</div>
    </div> -->
  <!-- </div> -->

  

</div>
</div>
  
</div>
<!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
 
        function loadContent(){
            var xhr = new XMLHttpRequest();
            var url = "https://bem.petra.ac.id/proyekOpenrec2023/API/getAllProduct.php";
            xhr.onloadstart = function () {
                document.getElementById("produk").innerHTML = "Loading...";
            }

            xhr.onerror = function () {
                alert("Gagal mengambil data");
            };

            xhr.onloadend = function () {
                if (this.responseText !== "") {
                    var data = JSON.parse(this.responseText);

                    document.getElementById("modalLabel").innerHTML = data.namaBarang;
                    
                    // var img = document.createElement("img");
                    // img.src = data.avatar_url;
                    // var name = document.createElement("h3");
                    // name.innerHTML = data.name;

                    document.getElementById("hasil").append(img, name);
                    document.getElementById("button").innerHTML = "Done";

                    setTimeout(function () {
                        document.getElementById("button").innerHTML = "Load Lagi";
                    }, 3000);
                }
            };

            xhr.open("GET", url, true);
            xhr.send();
        }
   
</script>