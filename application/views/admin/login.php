<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    /*CSS Reset*/
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, font, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    form, fieldset, input, textarea {
        margin: 0;
        padding: 0;
        outline: 0;
        border: 0;
        background: transparent;
        vertical-align: baseline;
        font-size: 100%;
    }
    body {line-height: 1;}
    h1, h2, h3, h4, h5, h6 {font-weight: normal;}
    ol, ul {list-style: none;}
    blockquote, q {quotes: none;}
    blockquote:before, blockquote:after,
    q:before, q:after {content: '';content: none;}
    /* remember to define focus styles! */
    :focus {outline: 0;}
    /* remember to highlight inserts somehow! */
    ins {text-decoration: none;}
    del {text-decoration: line-through;}
    /* tables still need 'cellspacing="0"' in the markup */
    table {border-spacing: 0;border-collapse: collapse;}
    address, caption, cite, code, dfn, em, strong, var { font-weight: normal; font-style: normal;}
    caption, th { text-align: left; font-weight: normal; font-style: normal;}
    html{background-color: #3a3a3a;}
    body{
        min-height: 100%;
        height: 100%;
        background:url(http://subtlepatterns.subtlepatterns.netdna-cdn.com/patterns/navy_blue.png) repeat;
        font-weight: lighter;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        -webkit-font-smoothing: subpixel-antialiased;
    }
    a{color: #b1c;text-decoration: none;}
    p{display: block;width: 300px;margin-left: -180px;margin-top: -5px;}
    p a{color: #a4a4a4;font-size: 10px;text-decoration: none;}
    p a:hover{color: #be1dcc;border-bottom: 1px solid gray}
    #warp{
        position: relative;
        margin: 50px auto 0;
        width: 400px;
        text-align:center;
        color:white;
    }
    form{
        display: block;
        width: 400px;
        height: 300px;}
    h1, p{
        color: #b6b6b6;
        font-weight: bolder;
        font-size: 30px;
    }
    .admin{
        height: 250px;
        float: left;
        width: 200px;
        border-right: 1px solid #333333;
        text-align: left;
        left:0;
        top:0;
        transition: all 200ms ease-in 100ms;
    }
    .cms{
        height: 250px;
        top: 70px;
        left: -62px;
        float: right;
        width: 150px;
        text-align: right;
        transition: all 200ms ease-in 100ms;
    }
    .admin,.cms{
        position: relative;
        display: block;
        overflow: hidden;
        transform: rotate(30deg);
    }

    .p {
        font-size: 12px;
    }

    .cms h1{
        margin-left: -10px;
        color:#838385;
    }
    .roti,.rota{
        position: relative;
        display: block;
        transform: rotate(-30deg);
    }
    .admin:hover h1,
    .cms:hover h1{color: #be1dcc;}
    .rota{margin-top: 80px;margin-left: 35px;}
    .roti{margin-top: 80px;margin-right: 55px;}
    input
    {
        margin: 4px;
        padding: 8px 6px;
        width: 350px;
        background: white;
        color:black;
        font-size: 10px;
        transition: all 1s ease-out;
    }

    input:hover{box-shadow: inset 0 0 5px rgba(190,29,204,0.6) }
    input:focus{background: gray;color: white}
    .up{
        top:100px;
        left:-60px;
    }
    .down{
        top:-100px;
        left:60px;
    }
</style>

<div id="warp">

        <?php if($this->session->flashdata('err')){ ?>
            <div class="alert alert-danger">
               <?php echo $this->session->flashdata('err') ?>
            </div>
        <?php } ?>


        <form method="post" action="<?php echo base_url('checkUser') ?>" id="" enctype="multipart/form-data">
        <div class="admin">
            <div class="rota">
                <h1>CHECK STOCK</h1>
                <input id="username" type="text" name="userName" placeholder="Username"/><br />
                <input id="password" type="password" name="password" placeholder="Password"/>
            </div>
            <button type="submit">login</button>
        </div>
    </form>
</div>




</body>
</html>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $("#valid").click(function() {
        $(".admin").addClass("up").delay( 100 ).fadeOut( 100 );
        $(".cms").addClass("down").delay( 150 ).fadeOut( 100 );
    });
</script>