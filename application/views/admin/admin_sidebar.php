<div class="container">
  <div class="row">
   <style>
.menuitem{margin-left: 10px; font-size: 20px}
.fab fa-medrt{font-size: 20px; color:#593196;}
.col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    margin-left: -140px;
   
}
   </style>
<div class="col-lg-3">
    <div class="box sidemenu" style="background: #CECECE !important;color:black; padding-bottom:30px;">

        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><span class="fab fa-medrt"><a class="menuitem" style="margin-right:10px;">Site Option</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Admin_dashboard/title') ?>">Title</a></li>
                        <li><a href="<?= base_url('Admin_dashboard/social') ?>">Social Media</a></li>
                        
                    </ul>
                </li>
            
               <li><span class="fab fa-medrt"><a class="menuitem" style="margin-right:10px;">Wbsite Information</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Admin_dashboard/about_us') ?>">About Us</a></li>
                        <li><a href="<?= base_url('Admin_dashboard/contact_us') ?>">Contact Us</a></li>
                        
                    </ul>
                </li>
                
                <li><span class="fab fa-medrt"><a class="menuitem" style="margin-left:10px;">Category Option</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Category/catadd') ?>">Add Category</a> </li>
                        <li><a href="<?= base_url('Category/catlist') ?>">Category List</a> </li>
                    </ul>
                </li>
                <li><span class="fab fa-medrt"><a class="menuitem" style="margin-right:10px;">Brand Option</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Brand/brandadd') ?>">Add Brand</a> </li>
                        <li><a href="<?= base_url('Brand/brandlist') ?>">Brand List</a> </li>
                    </ul>
                </li>

                  <li><span class="fab fa-medrt"><a class="menuitem" style="margin-right:10px;">Product Options</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Product/add') ?>">Add Product</a> </li>
                        <li><a href="<?= base_url('Product/productlist') ?>">Product List</a> </li>
                    </ul>
                </li>
                <li><span class="fab fa-medrt"><a class="menuitem" style="margin-right:10px;">Product Option</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Admin_login/productadd') ?>">Add Product</a> </li>
                        <li><a href="<?= base_url('Admin_login/catlist') ?>">Product List</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>






    <div class="col-lg-10" style="margin-top:25px;margin-left:25px;"><span class="pull-right"></span>