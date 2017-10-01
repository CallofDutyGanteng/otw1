<h3>Wellcome</h3>
<?php
if ($this->session->has('username')) {
            // Retrieve its value
            $name = $this->session->get("username");
            $hak_akses = $this->session->get("hak_akses");
            echo $name;
            if ($hak_akses == 'administrator') {?>
            	<br/>ini adalah halaman administrator
            <?php
            }
            elseif ($hak_akses == 'mahasiswa') {
            	?>
            	<br/>ini adalah halaman mahasiswa
            	<?php
            }
            echo "<br/><a class='btn btn-danger' href='logout'>log out</a>";
        }
else{
	echo "anda belum login";
	echo "<br/><a href='login'>login disini</a>";
}