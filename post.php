<style>

.post
{
    background-color: #FFF;
    overflow: hidden;
    box-shadow: 0 0 1px #CCC;
}

.post .content
{
    padding: 15px;
}
.post .author
{
    font-size: 11px;
    color: #737373;
    padding: 25px 30px 20px;
}
.post .post-img-content
{
    
    position: relative;
}
.post .post-img-content img
{
    position: absolute;
}
.post .post-title
{
    display: table-cell;
    vertical-align: bottom;
    z-index: 2;
    position: relative;
}
.post .post-title b
{
    background-color: rgba(51, 51, 51, 0.58);
    display: inline-block;
    margin-bottom: 5px;
    color: #FFF;
    padding: 10px 15px;
    margin-top: 5px;
}

</style>
<div class="container">
    <div class="row">
<?php
	$sql=mysql_query("select*from tbl_artikel order by id_artikel desc limit 3");
	while($data=mysql_fetch_array($sql))
	{
?>
        <div class="col-sm-4 col-md-4">
            <div class="post">
                <div class="post-img-content">
                    <img src="galeri/<?php echo $data['cover'];?>" class="img-responsive" />
                    <span class="post-title"><b><?php echo $data['judul_artikel'];?></b><br />
                        <b><?php echo $data['kategori_artikel'];?></b></span>
                </div>
                <div class="content">
                    <div class="author">
                        By <b><?php echo $data['pengirim'];?></b> |
                        <time datetime="2014-01-20"><?php echo $data['tanggal'];?></time>
                    </div>
                    <div>
                    <?php 
					$artikel = $data['isi_artikel'];
					$potong_artikel = substr($artikel,0,200); //substr()
					echo $potong_artikel;
					?>
                    </div>
                    <div>
                        <a href="http://www.jquery2dotnet.com/2014/01/jquery-highlight-table-row-and-column.html" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
        </div>
<?php
	}
?>        
        
    </div>
</div>
