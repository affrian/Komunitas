<section class="col-lg-12 connectedSortable">  
<div class="col-md-7">
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">FORM PENDAFTARAN OPERATOR &nbsp; <i class="fa fa-user-md"></i></h3>
</div><!-- /.box-header -->
<!-- form start -->
<form action="operator_simpan.php" method="post" role="pos" name="postform" enctype="multipart/form-data">
<div class="box-body">
<div class="form-group">
	<label for="inputnamadepan" class="col-sm-2 control-label">Nama</label>
    	<div class="col-md-10">
        	<input type="text" class="form-control" id="nama" name="nama" required>
        </div>
</div>
<br><br>
<div class="form-group">
	<label for="inputnamadepan" class="col-sm-2 control-label">Username</label>
    	<div class="col-md-10">
        	<input type="text" class="form-control" id="username" name="username" required>
        </div>
</div>
<br><br>
<div class="form-group">
	<label for="inputnamadepan" class="col-sm-2 control-label">Password</label>
    	<div class="col-md-10">
        	<input type="text" class="form-control" id="password" name="password" required>
        </div>
</div>
<br><br>
<div class="form-group">
	<label for="inputnamadepan" class="col-sm-2 control-label">Jabatan</label>
    	<div class="col-md-10">
        	<input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>
</div>
<br><br>
<div class="form-group">
	<label for="inputnamadepan" class="col-sm-2 control-label">Tanggal Lahir</label>
    	<div class="col-md-5">
            <input type="date" class="form-control" id="tanggal" name="tanggal" required readonly>
        </div>
        <div class="col-md-2">
        <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="../calender/calender.jpeg" width="34" height="29" border="0" alt=""></a>	
        
        </div>
</div>
<br><br>
<div class="form-group">
<div class="col-md-5">
<input type="submit" value="Simpan" name="simpan">
</div>
</div>
<br><br>

</div>
</form>
</div><!-- /.box-body -->  
</div><!-- /.row (main row) -->                        

<div class="col-md-5">
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title"><i class="fa fa-info"></i> &nbsp; INFORMASI  </h3>
</div><!-- /.box-header -->
<div class="box-body">
    <div class="text-info">
        <p>Untuk Pendaftaran Operator:
        <p>1. Pastikan Operator merupakan orang kepercayaan organisasi
        <p>2. Harus mempunyai jabatan inti dalam struktur organisasi<p>3. Untuk pengisian password isikan dengan "password" (tanpa tanda petik)
        <p>4. Operator dapat mengubah password sesuai keinginan pada halaman edit profil
    </div>
    
</div><!-- /.box-body -->                          
</div><!-- /.row (main row) -->
</div>
</section>






<script src="calender/plugins.js" type="text/javascript"></script>
<script src="calender/normal.js" type="text/javascript"></script>
	<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
<iframe width=174 height=189 name="gToday:normal:.calender/agenda.js" id="gToday:normal:.calender/agenda.js" 
src="../calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>