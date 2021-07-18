<template>
    <div class="container">
        <h1>Ajustes</h1>

        <form action="#">
            <div class="form-group">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="header-pic" class="form-label">Imagen de cabecera</label>
                    <input type="file" name="header-pic" id="header-pic" class="form-control-file">
                </div>

                <div class="form-group col-6">
                    <label for="background-pic" class="form-label">Fondo</label>
                    <input type="file" name="background-pic" id="background-pic" class="form-control-file">
                </div>
            </div>

            <div class="form-group">
            <label for="tipography" class="form-label">Tipografía</label>
            <select name="tipography" id="tipography" class="form-control">
                <option value="arial">Arial</option>
                <option value="helvetica">Helvetica</option>
            </select>
            </div>
        </form>
    </div>
</template>

<script>

export default {

}
</script>

<style>

</style>