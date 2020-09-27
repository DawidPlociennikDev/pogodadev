    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Statystyki</h2>
                                        <p>Witaj w panelu <span class="bread-ntd">PWSZ Legnica</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($_SESSION['flashdata'])): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?php echo $_SESSION['flashdata']; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Wybierz przedział czasowy</h2>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
				                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
				                    <label>Data początkowa</label>
				                    <div class="input-group date nk-int-st">
				                        <span class="input-group-addon"></span>
				                        <input type="text" class="form-control" id="start_date" value="<?= date('d.m.Y'); ?>">
				                    </div>
				                </div>	
                        	</div>
                        	<div class="col-md-6">
		                		<div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
				                    <label>Data końcowa</label>
				                    <div class="input-group date nk-int-st">
				                        <span class="input-group-addon"></span>
				                        <input type="text" class="form-control" id="end_date" value="<?= date('d.m.Y'); ?>">
				                    </div>
				                </div>
                        	</div>
                        	<div class="col-md-12" style="margin-top: 30px;">
		                        <div class="summernote-clickable text-right" style="margin-bottom: 0;">
		                            <button class="btn btn-success btn-block hec-save" onclick="renderOrders()">Zapisz</button>
		                        </div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Data Table area Start-->
<div id="renderStatistics" class="data-table-area">

</div>
<!-- Data Table area End-->

<script type="text/javascript">
function renderOrders() {
	var start = document.getElementById('start_date').value;
	var end = document.getElementById('end_date').value;
  	$("#renderStatistics").load('<?= base_url('statistics/renderOwntime'); ?>?start='+start+'&end='+end); 
  	setTimeout(function(){ loadChart(); }, 1000);
}
</script>