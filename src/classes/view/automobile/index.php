<?php if ($status) : ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast show align-items-center <?php if ($status['code'] == 201 ? 'text-bg-success ' : 'text-bg-danger '); ?>border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-check-circle-fill"></i> <?php echo $status['message'];  ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="row my-3">
    <?php foreach ($automobiles as $index => $automobile) : ?>
        <?php if ($index % 3 === 0 && $index !== 0) : ?>
</div>
<div class="row my-3">
<?php endif; ?>
<div class="col-sm-4">
    <div class="card">
        <img src="<?php echo $automobile->img ?>" class="card-img-top" alt="<?php echo $automobile->model; ?>">
        <div class="overlay dropdown" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></div>
        <h1 class="bottom-0 start-0"><b><?php echo $automobile->model ?></b></h1>
        <i class="bi bi-three-dots-vertical three-dots fs-3" data-plate="<?php echo $automobile->plate; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
        <div class="card-body dropdown-menu" aria-labelledby="dropdownMenuLink">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <table>
                        <tr>
                            <th>Marca</th>
                            <td><?php echo $automobile->brand ?></td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <th>Cor</th>
                            <td><?php echo $automobile->color ?></td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <th>Placa</th>
                            <td><?php echo $automobile->plate ?></td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <th>Ano</th>
                            <td><?php echo $automobile->year ?></td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <th>Km</th>
                            <td><?php echo $automobile->km ?></td>
                        </tr>
                    </table>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php if (array_key_last($automobiles) === $index) : ?>
    <?php if ((array_key_last($automobiles) - 2) % 3 === 0) : ?>
</div>
<div class="row my-3">
<?php endif; ?>
<div class="col-sm-4">
    <a href="automobile/create">
        <div id="default" class="card">
            <i style="color: white;" class="bi bi-plus-lg fs-3 position-absolute top-50 start-50 translate-middle"></i>
        </div>
    </a>
</div>
<?php endif; ?>
<?php endforeach; ?>
</div>


<?php if (empty($automobiles)) : ?>
    <div class="row my-3">
        <div class="col-sm-4">
            <a href="automobile/create">
                <div id="default" class="card">
                    <i style="color: white;" class="bi bi-plus-lg fs-3 position-absolute top-50 start-50 translate-middle"></i>
                </div>
            </a>
        </div>
    </div>
<?php endif; ?>

<div class="modal fade" id="exampleModal" aria-hidden="true" aria-labelledby="exampleModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" id='edit' class="btn btn-outline-primary mb-2 w-100">Editar</a>
                <a href="#" id='delete' class="btn btn-outline-danger mb-2 w-100">Excluir</a>
            </div>
        </div>
    </div>
</div>