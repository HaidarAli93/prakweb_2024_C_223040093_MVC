<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3>Daftar Mahasiswa<h3>
			<ul>
				<?php foreach ($data['mhs'] as $mhs ) { ?>
					<ul class="mt-3">
						<li><?= $mhs['nama'] ?></li>
						<li><?= $mhs['nrp'] ?></li>
						<li><?= $mhs['email'] ?></li>
						<li><?= $mhs['jurusan'] ?></li>
					</ul>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
