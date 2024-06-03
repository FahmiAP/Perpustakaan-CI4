<?= $this->extend('layout/t_buku')?>
<?= $this->section('daftar')?>


<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Sampul</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><img src="/image/atomic.jpg" alt="" class="sampul"></td>
                <td>Atomic Habits</td>
                <td>
                    <a href="crud.php?op=edit"> <button type="button" class="btn btn-danger">Edit</button></a>
                    <a href=""onclick="return confirm('yakin ingin delete?')"><button type="button" class="btn btn-warning">Delete</button></a>
                </td>
                </tr>
            </tbody>
            </table>
            <div class="col-12">
                 <input type="submit" name="simpan" value="Tambah data" class="btn btn-primary">
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>