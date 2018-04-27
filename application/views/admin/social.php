<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('admin_header.php');?>
<?php include('admin_sidebar.php');?>
        <style>
            table{}
            table tr{}
            table tr td{}
          

        </style>
<div class="grid_10">
    <div class="box round first grid">
        <h2   >Update Social Media</h2>
        <div class="block">               
         <form>
            <table class="form">					
                <tr>
                    <td>
                        <label>Facebook</label>
                    </td>
                    <td>
                        <input type="text" name="facebook" placeholder="Facebook link.." class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Twitter</label>
                    </td>
                    <td>
                        <input type="text" name="twitter" placeholder="Twitter link.." class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>LinkedIn</label>
                    </td>
                    <td>
                        <input type="text" name="linkedin" placeholder="LinkedIn link.." class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>Google Plus</label>
                    </td>
                    <td>
                        <input type="text" name="googleplus" placeholder="Google Plus link.." class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td></td>

                    <td >
                        <input type="submit" style="width:90px;" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>


<?php include('admin_footer.php');?>