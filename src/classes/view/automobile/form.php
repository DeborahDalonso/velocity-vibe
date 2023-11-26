<div class="row">
    <div class="col-md-6">
        <div id="container-img" class="mb-3 mt-1">
            <?php if (isset($automobile)) : ?>
                <img src="<?php echo $automobile->img ?>" class="card-img-top" alt="<?php echo $automobile->model; ?>">
            <?php else : ?>
                <div class="card">
                    <i id='i' class="bi bi-image fs-1 position-absolute top-50 start-50 translate-middle"></i>
                </div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Link Imagem</label>
                </span>
                <input type="text" class="form-control" id="img" placeholder="https://img.jpg" name="img" value="<?php echo isset($automobile) ? $automobile->img : '' ?>" required>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Marca</label>
                </span>
                <input type="text" class="form-control" id="brand" placeholder="Toyota" name="brand" value="<?php echo isset($automobile) ? $automobile->brand : '' ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Modelo</label>
                </span>
                <input type="text" class="form-control" id="model" placeholder="Corolla" name="model" value="<?php echo isset($automobile) ? $automobile->model : '' ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Cor</label>
                </span>
                <input type="text" class="form-control" id="color" placeholder="Branco" name="color" value="<?php echo isset($automobile) ? $automobile->color : '' ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Placa</label>
                </span>
                <input type="text" class="form-control" id="plate" placeholder="MZF-3503" name="plate" value="<?php echo isset($automobile) ? $automobile->plate : '' ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Ano</label>
                </span>
                <input class="form-control datepicker" data-date-format="yyyy" placeholder="Selecione..." id="year" name="year" value="<?php echo isset($automobile) ? $automobile->year : '' ?>" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <label for="brand">Km</label>
                </span>
                <input type="number" class="form-control" id="km" placeholder="5" name="km" value="<?php echo isset($automobile) ? $automobile->km : '' ?>" required>
            </div>
        </div>
    </div>
</div>
