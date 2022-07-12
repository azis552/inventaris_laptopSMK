         
                <footer class="footer">
                    © 2022 WEBDEV SMK ALMA <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Pak Wo.</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
       
		</body>
        <!-- jQuery  -->
        <script src="<?=base_url('')?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url('')?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url('')?>assets/js/metisMenu.min.js"></script>
        <script src="<?=base_url('')?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url('')?>assets/js/waves.min.js"></script>

        <script src="<?=base_url('')?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
		 <!-- Required datatable js -->
		 <script src="<?=base_url('')?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Peity JS -->
        <script src="<?=base_url('')?>assets/plugins/peity/jquery.peity.min.js"></script>

        <script src="<?=base_url('')?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/raphael/raphael-min.js"></script>
		<script src="<?=base_url('')?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?=base_url('')?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
		 
        <script src="<?=base_url('')?>assets/plugins/select2/js/select2.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="<?=base_url('')?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
		<script src="<?=base_url('')?>assets/plugins/select2/js/select2.min.js"></script>
        <script src="<?=base_url('')?>assets/pages/dashboard.js"></script>
		  <!-- init js -->
		  <script src="<?=base_url('')?>assets/pages/datatables.init.js"></script>
		  <script src="<?=base_url('')?>assets/pages/form-advanced.js"></script>
        <!-- App js -->
        <script src="<?=base_url('')?>assets/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    </body>
 <!-- END wrapper -->
 		<?php if(@$_SESSION['sukses']){ ?>
			<script>
				swal("Berhasil !", "<?php echo $_SESSION['sukses']; ?>", "success");
			</script>
			<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
		<?php unset($_SESSION['sukses']); } ?>
		<?php if(@$_SESSION['gagal']){ ?>
			<script>
				swal("Gagal !", "<?php echo $_SESSION['gagal']; ?>", "error");
			</script>
		<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
		<?php unset($_SESSION['gagal']); } ?>
</html>

<script>
	$(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name[]' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail[]' type='text' placeholder='Mail'  class='form-control input-md'></td><td><input  name='mobile[]' type='text' placeholder='Mobile'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
function calc(elem)
                {
                    //let td = ($(elem).parent().attr("id"))

                    let valFix  = ($(elem).closest('tr').find('td').eq(1).find('input').val());
                    let valCal  = ($(elem).val());
                    var calcVal = (valFix * valCal).toFixed(2);

                    ($(elem).closest('tr').find('td').eq(3).find('input').val(calcVal))

                }
</script>
