
{include file='header.tpl' title='بوابة التدريب لتطوير مهارات أعضاء هيئة التدريس بجامعة ام القرى'}

<script type="text/javascript" src="js/fileupload.js"></script>

    <center>
    
    <br>
  
     <form action="fileupload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="fileToUpload" id="fileToUpload"  accept='application/pdf , application/vnd.wordperfect , application/msword' >     <br> <br>
    
    <input type="submit" value="upload"  name = "upload" id='upload' class='btn'/> 
    </form>
    <br>
      <br>
   
        </center>
</div>
    <br>
    {include file='footer.tpl'}



