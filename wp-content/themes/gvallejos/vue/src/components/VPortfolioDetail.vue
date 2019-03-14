<template>
    <section class="portfolio-detail-content">        
        <div class="container">
            <div class="title-proyecto">
                <img v-if="data.acf.img_logotipo_transparente" :src=data.acf.img_logotipo_transparente alt="Logotipo"  />
                <h2 v-else>{{ data.title.rendered }}</h2>
            </div>
            <div class="datos-proyecto">
                <div class="descripcion-layout">                    
                    <p class="descripcion-proyect-detail" v-html=data.content.rendered ></p>                
                </div>
                <div class="tecnologias-layout">
                    <VProyectoCuadrado :data = data.acf />
                </div>
            </div>
            <div class="imagenes-proyecto" v-if="data.acf.repeater_imgs_proyecto.length > 0 ">
                <div class="item-imagen-proyecto" v-for="item in data.acf.repeater_imgs_proyecto" :key=item.img_proyecto >
                    <img :src=item.img_proyecto alt="Portfolio" />
                </div>
            </div>
            <VRelatedProjects :data = related  title = "OTROS PROYECTOS"  />
        </div>
    </section>
</template>

<script>

import VProyectoCuadrado from './VProyectoCuadrado.vue'
import VRelatedProjects from './VRelatedProjects.vue'

export default {
    props: [
        'data',
        'related'
    ],
    components: {
        VProyectoCuadrado,
        VRelatedProjects
    }
}
</script>

<style lang="stylus">

    .portfolio-detail-content
        position: relative
        display: flex
        flex-shrink: 1
        flex-wrap: wrap
        justify-content: center
        align-items: center
        padding: 70px 0px
        .datos-proyecto
            display: flex
            margin-bottom: 20px
        .descripcion-layout
            width: 50%
        .tecnologias-layout
            width: 50%
        .tecnologias-datos
            width: 50%
        .tecnologias-imgs
            width: 50%
        .descripcion-layout
            margin: 20px
        .tecnologias-layout
            margin: 20px
            display: flex
            align-items: center
            .tecnologias-cuadrado
                display: flex
                background: #dfe8f0
                padding: 42px 40px
                width: 100%
        .tecnologias-imgs 
            .item-img
                max-height: 62px
                overflow: hidden
                margin: 15px 0px
                img
                    width: initial
                    max-height: 100%
                    height: initial
                    object-fit: cover            
        .imagenes-proyecto 
            .item-imagen-proyecto
                padding: 20px
                text-align: center
                img
                    max-width: 100%
                    width: initial
                    height: auto
                    object-fit: cover
        .related-proyecto
            display: grid
            grid-template-columns: repeat(4, 1fr)
            grid-template-rows: auto 1fr
            grid-column-gap: 30px
            padding: 40px 20px
            box-sizing: border-box
            .title
                grid-column-start: 1
                grid-column-end: 5
            .related-pr-item
                position: relative
                display: flex
                justify-content: center
                align-items: center
                overflow: hidden
            a 
                .related-pr-item 
                    .logotipo-container
                        position: absolute
                        z-index: 2
                        opacity: 0
                        transition: .8s all ease
                    .overlay
                        position: absolute
                        opacity: 0
                        width: 100%
                        height: 100%
                        background: rgba(0, 0, 0, .4)
                        top: 0
                        left: 0
                        transition: .8s all ease
                &:hover 
                    .related-pr-item 
                        .logotipo-container
                            opacity: 1
                        .overlay
                            opacity: 1
                    .logotipo-bg-img 
                        img
                            transform: scale(1.3)
                .logotipo-bg-img 
                    img
                        transition: .6s all ease
    p
        &.descripcion-proyect-detail
            margin: 0px
            padding: 0px

    .title-proyecto
        text-align: center
        padding: 20px 0px
        text-transform: uppercase

    @media ( max-width: 1200px )
        .portfolio-detail-content 
            .datos-proyecto
                display: initial 
            .descripcion-layout
                width: initial
            .tecnologias-layout
                width: initial
                padding-top: 25px
            .related-proyecto 
                a 
                    .related-pr-item 
                        .logotipo-container
                            img
                                height: 55px
</style>
