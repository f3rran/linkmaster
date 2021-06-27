<template>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-3">
            <div class="inner">
            <h3 class="masthead-brand">Administrar</h3>
            <nav class="nav nav-masthead justify-content-center row">
                <router-link class="col-2 ml-2" :to="{ name: 'home' }">Inicio</router-link>
                <router-link class="col-2" :to="{ name: 'hello' }">Ajustes</router-link>
                <router-link class="col-2" :to="{ name: 'hello' }">Perfil</router-link>
                <router-link class="col-4" :to="{ name: 'hello' }">Cerrar sesión</router-link>
            </nav>
            <hr>
            </div>
        </header>
<br>
        <main role="main" class="container">
            <router-view></router-view>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
            <p class="text-center">Proyecto desarrollado por <a href="https://f3rran.github.io">f3rran</a>.</p>
            </div>
        </footer>
    </div>
</template>
<script>
    import Menubar from 'primevue/menubar';
    export default {
        components: {
            Menubar
        },
        data() {
        return {
            items: [
                {
                   label:'File',
                   icon:'pi pi-fw pi-file',
                   items:[
                      {
                         label:'New',
                         icon:'pi pi-fw pi-plus',
                         items:[
                            {
                               label:'Bookmark',
                               icon:'pi pi-fw pi-bookmark'
                            },
                            {
                               label:'Video',
                               icon:'pi pi-fw pi-video'
                            },

                         ]
                      },
                      {
                         label:'Delete',
                         icon:'pi pi-fw pi-trash'
                      },
                      {
                         separator:true
                      },
                      {
                         label:'Export',
                         icon:'pi pi-fw pi-external-link'
                      }
                   ]
                },
                {
                   label:'Edit',
                   icon:'pi pi-fw pi-pencil',
                   items:[
                      {
                         label:'Left',
                         icon:'pi pi-fw pi-align-left'
                      },
                      {
                         label:'Right',
                         icon:'pi pi-fw pi-align-right'
                      },
                      {
                         label:'Center',
                         icon:'pi pi-fw pi-align-center'
                      },
                      {
                         label:'Justify',
                         icon:'pi pi-fw pi-align-justify'
                      },

                   ]
                },
                {
                   label:'Users',
                   icon:'pi pi-fw pi-user',
                   items:[
                      {
                         label:'New',
                         icon:'pi pi-fw pi-user-plus',

                      },
                      {
                         label:'Delete',
                         icon:'pi pi-fw pi-user-minus',

                      },
                      {
                         label:'Search',
                         icon:'pi pi-fw pi-users',
                         items:[
                            {
                               label:'Filter',
                               icon:'pi pi-fw pi-filter',
                               items:[
                                  {
                                     label:'Print',
                                     icon:'pi pi-fw pi-print'
                                  }
                               ]
                            },
                            {
                               icon:'pi pi-fw pi-bars',
                               label:'List'
                            }
                         ]
                      }
                   ]
                },
                {
                   label:'Events',
                   icon:'pi pi-fw pi-calendar',
                   items:[
                      {
                         label:'Edit',
                         icon:'pi pi-fw pi-pencil',
                         items:[
                            {
                               label:'Save',
                               icon:'pi pi-fw pi-calendar-plus'
                            },
                            {
                               label:'Delete',
                               icon:'pi pi-fw pi-calendar-minus'
                            },

                         ]
                      },
                      {
                         label:'Archieve',
                         icon:'pi pi-fw pi-calendar-times',
                         items:[
                            {
                               label:'Remove',
                               icon:'pi pi-fw pi-calendar-minus'
                            }
                         ]
                      }
                   ]
                },
                {
                   label:'Quit',
                   icon:'pi pi-fw pi-power-off'
                }
             ]
        }
    }
    }
</script>

<style scoped>
    @import 'primevue/resources/themes/saga-green/theme.css';
    @import 'primevue/resources/primevue.min.css';
    @import 'primeicons/primeicons.css';
</style>