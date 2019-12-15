<h3 class="mb-5">Edição página.</h3>

<form action="" method="POST">
    <div class="form-group">
        <!-- Emmet command = label+input.form-control -->
        <label for="pagesTitle">Título</label>
        <input id="pagesTitle" class="form-control" name="title" type="text" placeholder="Aqui vai título da página..." required value="Página inicial">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input id="pagesUrl" class="form-control" name="url" type="text" placeholder="URL amigável, deixe em branco para informar página inicial...">
        </div>
    </div>

    <div class="form-group">
        <!-- Usado biblioteca Trix. Emmet command = trix-editor -->
        <input id="pagesBody" name="body" type="hidden" required value="<h3>Página inicial</h3><p>Esta é a página inicial do site.</p>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>
    <!-- Emmet command = button:submit.btn.btn-primary -->
    <button type="submit" class="btn btn-primary">Salvar</button><hr>
</form>

<a class="btn btn-secondary" href="/admin/pages/1">Voltar</a>