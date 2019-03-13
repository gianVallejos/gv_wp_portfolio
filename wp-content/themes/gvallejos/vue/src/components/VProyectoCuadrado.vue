<template>
    <div class="tecnologias-cuadrado">
        <div class="tecnologias-datos">
            <div class="item">Cliente:</div><div class="item-content">{{ data.txt_cliente }}</div>
            <div class="item">Fecha:</div><div class="item-content">{{ data.dt_fecha }}</div>
            <div class="item" v-if="data.repeater_disenadores.length != 0" >Diseño:</div><div class="item-content">
                <div v-for="(disenador, key) in data.repeater_disenadores" :key=key >
                    {{ disenador.text_disenador }}
                </div>
            </div>
            <div class="item" v-if="data.repeater_programadores.length != 0">Programación:</div><div class="item-content">
                 <div v-for="(programador, key) in data.repeater_programadores" :key=key >
                    {{ programador.text_programador }}
                </div>
            </div>
        </div>
        <div class="tecnologias-imgs">
            <div class="item" v-if="data.repeater_tecnologias.length != 0">Tecnologías Utilizadas: </div>
            <div class="item-img" v-for="(item, key) in data.repeater_tecnologias" :key=key >
                <img :src=item.img_tecnologia alt="Technology Imagen">
            </div>                            
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'data'
    ]
}
</script>

<style lang="stylus">
    .tecnologias-cuadrado 
        .item
            font-weight: 600
            padding: 5px 0px
            color: #546972
            font-size: .95rem
        .item-content
            margin: 5px 0px
</style>
