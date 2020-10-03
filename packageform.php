
<style >
.feature{
  margin-left: 2%;
  
  color: black;

}
.feature input[type=text] {
  margin: 10px 0;
  border: 1px solid #CCC;
  color:#005dbb;
  font-family: Arial;
  font-size: 16px;
  width: 70%;
height: 7%;


}

</style> 

        <form action="pcheckoutprocess.php?action=checkout" method="post">
           <? date_default_timezone_set('Asia/Rangoon');?><br>
      <div class="feature">
     

         Order Date:<br><input type="text" name="cdate"   value="<? echo $date = date('Y-m-d H:i:s A');?>"> <br>
        
        Name:<br><input type="text" name="cname"  class="form-control" required="required"><br>

        Address:<br><input type="text" name="caddress"  class="form-control"class="form-control" required="required"><br>

        Phone:<br><input type="text" name="cphone"  17px; padding: 7px;"class="form-control" required="required"><br>
        
       
             
        <input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 2%;"  value="Check Out" name="btncheckout" class="form-control">
        
       </div>

        </form>
       
  <a href="indexp.php"><input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 0%;margin-left: 2%;"  value="Back to Main"  class="form-control"></a>
</div>
