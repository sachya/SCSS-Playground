<html><head>
  <style media="screen">
    html,pre,div{
      margin:0;
      padding:2rem;
      font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
      background: #E4F1FE;
      transition:all 1s ease-in;
    }

h1,em{
  color:#34495E;
}
mark{
  background: #34495E;
  color:#E4F1FE;
  padding:0 1rem;
}
    form{
      display: flex;

      height:70vh;
    }
    textarea{
      padding-left:1rem;
      background:#34495E;
      width:100%;
      overflow:auto;
      line-height: 2rem;
      font-size: 1rem;
      color: #dedede;
      border:0;
      font-family:"Courier New", Courier, monospace;
      border-radius: 4px;
    }
    textarea:focus{
      border:0;
      outline: none !important;
    }
textarea::-webkit-input-placeholder{
  color:    #f9f9f9;
}
    #outputSpace {
      padding-left:1rem;
      background:rgba(255,255,255,0.3);
      width:100%;
      line-height: 2rem;
      font-size: 1.4rem;
      color: #34495E;
      transition:all 1s ease-in;
    }
    button{
      border: none;
      width:0;
      height:0;
      display:none;
    }
  </style>
</head>

    <body class="body">
      <h1>SCSS to CSS</h1><em>Use <mark>SHIFT + ENTER</mark> &nbsp;to get SCSS Output</em>
<hr />
<form name="sass" class="sass" action="" method="post">
  <textarea id='codes' name="codingSpace" placeholder="Your SCSS here" autofocus="true" tabindex="1" ><?php if(isset($_POST['codingSpace'])){echo $_POST['codingSpace'];} ?></textarea>
  <button type="submit" name="submit" value="Draw CSS!" tabindex="2"></button>
  <?php
use Leafo\ScssPhp\Compiler;
  if(isset($_POST['codingSpace']))
{
	$cS = $_POST['codingSpace'];
  require "compiler/scssphp/scss.inc.php";
 $compressing = "Leafo\ScssPhp\Formatter\Expanded";

 $scss = new Compiler();
 ini_set('display_errors','0');
 $scss->setFormatter($compressing);


try {
  $outputH = $scss->compile($cS);
  echo "<pre id='outputSpace' name='outputSpace'>".$outputH."</pre>";
} catch(Exception $e) {
  echo "<div id='outputSpace' name='outputSpace'>".$e->getMessage()."</div>";
}


}
  ?>


</form>
<hr />
Made with help from everyone :). Author: Sachin Kanungo | Fork or post issues: <a href="https://github.com/sachya/SCSS-Playground">Github-SCSS Playground</a>
<script type="text/javascript" src="scripts/behave.js"></script>
<script type="text/javascript" src="scripts/keyboard.js"></script>
<script type="text/javascript">
var editor = new Behave({
  textarea: document.getElementById('codes')
});

shortcut.add("Shift+Enter",function() {
document.getElementsByTagName('button')[0].click();
})
</script>
</body>
</html>
