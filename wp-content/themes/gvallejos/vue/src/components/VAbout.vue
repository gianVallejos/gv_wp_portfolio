<template>
    <section class="about-content">
        <div class="about-data">
            <section class="about-section">
                <h2>SOBRE MI</h2>
                <p v-html=data.content.rendered ></p>    
            </section>
            
            <VCliente :datos=data.acf.repeater_clientes />
            
            <VTestimonio :datos=data.acf.repeater_testimonios :quoteImg = quoteImg :imgUserUrl = imgUserUrl />
            
        </div>
        <div class="about-imagen">
            <div class="about-imagen-container">
                <img :src=data.acf.img_imagen_principal alt="About Us">
            </div>
        </div>
    </section>
</template>

<script>

import VCliente from './VCliente.vue'
import VTestimonio from './VTestimonio.vue'

export default {
    props: [
        'data',
        'quoteImg',
        'imgUserUrl'
    ],
    components: {
        VCliente,
        VTestimonio
    }
}
</script>

<style lang="stylus">

    .about-content
        display: flex
        
    .about-data
        display: flex
        width: 65%
        justify-content: center
        align-items: center
        flex-direction: column
        padding: 75px 25px
        section
            width: 100%
            max-width: 642px
        .about-section
            padding-bottom: 20px

    .about-imagen
        display: flex
        width: 35%
        min-height: 100%
        justify-content: center

    .about-imagen-container
        width: 100%
        img
            height: 100%
            object-fit: cover

    @media (max-width: 1199px )
        .about-data
            width: 100%
        .about-imagen
            display: none
</style>

