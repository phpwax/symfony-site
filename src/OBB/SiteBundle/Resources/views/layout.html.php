<!DOCTYPE html>
<html lang="en"><head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">  
  <title>Welcome to OBB Default Site</title>
  <style type="text/css">
    html * { padding:0; margin:0; } body * { padding:10px 20px; } body * * { padding:0; }
    body { font:small sans-serif; } body>div { border-bottom:1px solid #ddd; } h1 { font-weight:normal; }
    h2 { margin-bottom:.8em; } h2 span { font-size:80%; color:#666; font-weight:normal; }
    h3 { margin:1em 0 .5em 0; } h4 { margin:0 0 .5em 0; font-weight: normal; } ul { margin-left: 2em; margin-top: 1em; }
    #summary { background: #000000; color:white; } #summary h2, #environment h2 { font-weight: normal; color: #e1e1e1; }
    #instructions { background:#f6f6f6; } #environment { background:#f6f6f6; } #environment h2 {color:#111111;} 
    #info {display:none;}
  </style>
</head>

<body>
  <?$view['slots']->output('_content') ?>
  <script src="http://www.google.com/jsapi"></script>
  <script>google.load("jquery", "1");</script>
</body>
</html>