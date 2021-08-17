<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slider.css">
   <script src="https://kit.fontawesome.com/275ccdb773.js" crossorigin="anonymous"></script>
  <title></title>
</head>
<body>
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#Service">Services</a></li>
            <li><a href="#Result">Result</a></li>
            <li><a href="#Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>


  <header class="showcase">
    <div class="container showcase-inner">
    </div>
  </header>

<div class="tabs">
  <div class="tab-header">
    <div class="active">
      <i class="fa fa-pencil-square"></i> Health 
    </div>
    <div>
      <i class="fa fa-pencil-square"></i> Stretegic Making
    </div>
    <div>
      <i class="fa fa-bar-chart"></i>New Product Launch
    </div>
    <div>
      <i class="fa fa-envelope"></i>Distribution
    </div>
  </div>
  <div class="tab-indicator"></div>
  <div class="tab-content">
    
    <div class="active">
      
      <h2>This is code section</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
    </div>
    
    <div>
      
      <h2>This is about section</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
    </div>
    
    <div>
      
      <h2>This is services section</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
    </div>
    
    <div>
      
      <h2>This is contact section</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
    </div>
    
  </div>
</div>
<script type="text/javascript">
  function _class(name){
  return document.getElementsByClassName(name);
}
 
let tabPanes = _class("tab-header")[0].getElementsByTagName("div");
 
for(let i=0;i<tabPanes.length;i++){
  tabPanes[i].addEventListener("click",function(){
    _class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabPanes[i].classList.add("active");
    
    _class("tab-indicator")[0].style.top = `calc(80px + ${i*50}px)`;
    
    _class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    _class("tab-content")[0].getElementsByTagName("div")[i].classList.add("active");
    
  });
}
</script>

</body>
</html>