<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="//use.fontawesome.com/84c9ca0cf8.js"></script>
    <title></title>

    <style type="text/css">
        @import url('//fonts.googleapis.com/css?family=Roboto');
        body {
            background: #42e5f4;
            color: #ffffff;
            font: 16px/1.3 "Roboto", sans-serif;
        }
        header {
            width: 100%;
            margin:0px auto;
        }
        h1 {
            text-align: center;
            color:#ffffff;
            font: 100px/1 "Roboto";
            text-transform: uppercase;
            margin: 5% auto 5%;
            margin-bottom: 35px;
        }

        article { display: block; text-align: center; width: 650px; margin: 10px auto; }

        @media screen and (max-width: 720px) {
            article { display: block; text-align: center; width: 450px; margin: 0 auto; }
            h1 { font: 70px/1 "Roboto";}
            .wrap {margin-top: 50px;}
        }

        @media screen and (max-width: 480px) {
            article { display: block; text-align: center; width: 300px !important; margin: 0 auto; }
            h1 { font: 50px/1 "Roboto";}
            .wrap {margin-top: 50px;}

        }
    </style>

    <!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
<div class="wrap">
  <article>
    <header>
      <h1 id="fittext1">Insufficient permissions<i class="fa fa-exclamation-triangle fa-fw"></i></h1>
    </header>
    <p id="fittext2"></p>
  </article>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.js"></script>
<script type="text/javascript">
    $("#fittext1").fitText(1.1);
    $("#fittext2").fitText(1.5);
</script>
</body>
</html>