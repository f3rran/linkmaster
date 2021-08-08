<template>
    <div class="container">
        <h1>Ajustes</h1>

        <form action="#">
            <div class="form-group">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" v-model="form.title">
            </div>

            <div class="form-group">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" id="description" cols="30" rows="4" class="form-control" v-model="form.description"></textarea>
            </div>

            <div class="row mt-2">
                <div class="form-group col-6 mb-3">
                    <label for="header-pic" class="form-label">Imagen de cabecera</label>
                    <input type="file" name="header-pic" id="header-pic" class="form-control">
                </div>

                <div class="form-group col-6 mb-3">
                    <label for="background-pic" class="form-label">Fondo</label>
                    <input type="file" name="background-pic" id="background-pic" class="form-control">
                </div>
            </div>

            <div class="form-group">
            <label for="tipography" class="form-label">Tipografía</label>
            <select name="tipography" id="tipography" class="form-control" v-model="form.tipography">
                <option value="arial">Arial</option>
                <option value="helvetica">Helvetica</option>
            </select>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block mt-2" @click.prevent="storeForm()">Guardar</button>
        </form>
        <Toast position="top-right" />
    </div>
</template>

<script>
import Toast from 'primevue/toast';

import axios from 'axios'
export default {
    data() {
        return {
            form: Object,
        }
    },
    components: {
        Toast
    },
    mounted() {
        this.getForm();
    },
    methods: {
        storeForm(){
            const that = this;
            axios.post('/api/settings/store', {
                data: {
                form: this.form
                }
            })
            .then(function(response){
                console.log("Ajustes guardados");
                that.$toast.add({severity:'success', summary: 'Ajustes actualizados correctamente', detail:'', life: 3000});

            })
            .catch(function (error) {
                // handle error
                console.log(error);
                that.$toast.add({severity:'error', summary: 'Error al actualizar ajustes', detail:'Contacte con soporte', life: 3000});
            });
        },
        getForm(){
            const that = this;
            axios.get('/api/settings/show')
            .then(function(response){
                that.form = response.data;
            })
        }
    }
}
</script>

<style>

</style>