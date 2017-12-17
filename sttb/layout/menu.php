 <nav class="navbar navbar-default" role="navigation" style="min-height:52px;">
	 <div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
			 <span class="sr-only">Toggle navigation</span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="#">Tokoku.com</a>
	 </div>
	 <div class="collapse navbar-collapse" id="example-navbar-collapse">
		 <ul class="nav navbar-nav">
			 <li><a href="?mod=beranda">Beranda</a></li>
			 <li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Master<b class="caret"></b>
				 </a>
				 <ul class="dropdown-menu">
                     <li><a href="?mod=kas">Data Kasir</a></li>
			        <li><a href="?mod=kat">Data Kategori</a></li>
			        <li><a href="?mod=merk">Data Merk</a></li>
			        <li><a href="?mod=sat">Data Satuan</a></li>
				    <li><a href="?mod=brg">Data Barang</a></li>
				 </ul>
			 </li>
			  <li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi<b class="caret"></b>
				 </a>
				 <ul class="dropdown-menu">
			        <li><a href="?mod=pj">Penjualan</a></li>
				 </ul>
			 </li>
			 <li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan<b class="caret"></b>
				 </a>
				 <ul class="dropdown-menu">
			        <li><a href="?mod=lap_brg">Laporan Barang</a></li>
				    <li><a href="?mod=lap_pj">Laporan Penjualan</a></li>
			        <li><a href="?mod=rin_pj">Rincian Penjualan</a></li>
				 </ul>
			 </li>
			 <li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utility<b class="caret"></b>
				 </a>
				 <ul class="dropdown-menu">
			        <ul>
				        <li><a href="?mod=tok">Profil Toko</a></li>
						<li><a href="?mod=pass">Ubah Password</a></li>
					    <li><a href="?mod=bar">Cetak Barcode</a></li>
					</ul>
				 </ul>
			 </li>
			 <li><a href="?mod=logout">Logout</a></li>
		 </ul>
		     <div style="float:right; width:350px;">
		      <form class="navbar-form navbar-left" role="search">
		         <div class="form-group">
		            <input type="text" class="form-control" placeholder="Search">
		         </div>
		            <button type="submit" class="btn btn-default">Submit</button>
		     </form>
		    </div>
	 </div>
</nav>
