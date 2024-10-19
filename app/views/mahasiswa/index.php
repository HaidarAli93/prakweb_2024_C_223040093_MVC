<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3>Daftar Mahasiswa<h3>
			<ul>
				<?php foreach ($data['mhs'] as $mhs ) { ?>
					<ul class="list-group mt-3">
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<?= $mhs['nama'] ?>
							<a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary">detail</a>
						</li>
						<li class="list-group-item"><?= $mhs['nrp'] ?></li>
						<li class="list-group-item"><?= $mhs['email'] ?></li>
						<li class="list-group-item"><?= $mhs['jurusan'] ?></li>
					</ul>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
