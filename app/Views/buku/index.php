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
                    <a href="" class="btn btn-success">Detail</a>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>