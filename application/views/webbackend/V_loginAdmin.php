<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kiko Good Garage</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg" />
</head>

<body>
  <div class="container-scroller">
    <div  id="notifications"><?php echo $this->session->flashdata('pesan2'); ?></div>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100 mx-auto">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="<?php echo base_url().'webbackend/C_dataOperator/prosesLoginAdmin'?>" method="POST" name="formLogin">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="username" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  
                  <input type="submit" name="submit" class="form-control btn btn-primary submit-btn btn-block" value="L O G I N"/>
                </div>
                
              </form>
            </div>
          <br>
          <br>

            <p class="footer-text text-center">copyright. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url() ?>admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url() ?>admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url() ?>admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url() ?>admin/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url() ?>admin/js/misc.js"></script>
  <script src="<?php echo base_url() ?>admin/js/settings.js"></script>
  <script src="<?php echo base_url() ?>admin/js/todolist.js"></script>
  <!-- endinject -->
<!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bd9%2f1qnbRUEVDX%2bMVScklxx6d7QVeD0PqMTb3zUYm2AMgPZomSZLALv41hsxChVKrz5KLCnYriHG01VmrzKILEQrbWEDIGnY8Vf27kLDq8CMWFIvKDM61a1VG20KnOk%2bzdVOCa9%2faN%2bSNAPoOEIL3zyl8E3Cai0YhUuScs6ia%2biYDoHxXfMk3cXRbJ8AamOsz5DNF%2bL1tXZhgXb2Y4gqnQmaD16KKOU6W8g8W46TUlZ23zuilEV%2f50wILP9FmlXp56yNl68%2f5mhMWdz%2bbq%2fH5U2vIFHQa3Y1ta5gdvTOpR8s1ujLdMTsCPxfYqngoOKRqqahNeCqeNBNmiCV69OVVUQcfwqoIUrGF%2fuN4JF0V6fYxVBW5vtqi8iVJvzwa54yuXoVKYTxDsAYglEtEowSQNWNGP3%2f8OqJ%2bw%2fd5uhl2JSN2NCx1xfqXFdw7mTaoJ6Xdi3sAwFtO8r0InbIB7hY2BBQUByNin%2fFNyHWCNllR4y6dBUJHZNW92UA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script> -->
</body>

</html>