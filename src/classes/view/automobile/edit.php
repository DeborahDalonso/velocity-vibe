<div class="container mt-3">
    <h2>Editar</h2>
    <hr>
    <form action="/automobile/update" method="post">
        <?php include "form.php"; ?>
        <hr>
        <div class="mb-3 position-relative">
            <a onclick="history.back();" class="btn btn-outline-danger position-absolute start-0 w-25">Cancelar</a>
            <button type="submit" class="btn btn-outline-primary position-absolute end-0 w-25">Editar</button>
        </div>
    </form>
</div>